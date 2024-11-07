<?php

namespace App\Http\Controllers;

use RouterOS\Client;
use RouterOS\Query;
use Illuminate\Http\Request;

class MikroTikController extends Controller
{
    private $client;

    public function __construct()
    {
        if (session('mikrotik_client')) {
            $this->client = unserialize(session('mikrotik_client'));
        } else {
            $this->client = new Client([
                'host' => env('MIKROTIK_HOST', '192.168.1.79'), 
                'user' => env('MIKROTIK_USER', 'admin'), 
                'pass' => env('MIKROTIK_PASS', 'rosas'),
                'timeout' => 10,
            ]);
        }
    }

    public function getRouterInfo()
    {
        try {
            $query = new Query('/system/resource/print');
            $response = $this->client->query($query)->read();
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo conectar a MikroTik: ' . $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'ip' => 'required|ip',
        ]);

        try {
            // Crea el cliente con los datos recibidos desde el formulario
            $client = new Client([
                'host' => $request->ip,
                'user' => $request->name,
                'pass' => $request->password,
                'timeout' => 10,
            ]);

            // Intenta obtener información del sistema para verificar la conexión
            $query = new Query('/system/resource/print');
            $response = $this->client->query($query)->read();

            // Sesión iniciada
            session(['mikrotik_client' => serialize($client)]);
            
            return redirect('/inicio');
        } catch (\RouterOS\Exceptions\ConnectException $e) { 
            return back()->withErrors(['error' => 'Error de conexión: ' . $e->getMessage()]); 
        } catch (\Exception $e) { 
            return back()->withErrors(['error' => 'No se pudo conectar a MikroTik: ' . $e->getMessage()]); 
        }
    }

    public function updateIp(Request $request)
    {
        $request->validate([
            'enabled' => 'nullable|boolean',
            'comment' => 'nullable|string',
            'address' => 'required|ip',
            'network' => 'required|ip',
            'interface' => 'required|string'
        ]);

        try {
            // Imprimir las direcciones existentes
            $queryPrint = (new Query('/ip/address/print'));
            $addresses = $this->client->query($queryPrint)->read();

            // Eliminar cualquier dirección existente en ether2
            foreach ($addresses as $address) {
                if ($address['interface'] === 'ether2') {
                    $removeQuery = (new Query('/ip/address/remove'))
                        ->equal('.id', $address['.id']);
                    $this->client->query($removeQuery)->read();
                }
            }

            // Crear una nueva configuración de dirección IP
            $queryAdd = (new Query('/ip/address/add'))
                ->equal('address', $request->address . '/24')
                ->equal('network', $request->network)
                ->equal('interface', $request->interface);

            if ($request->comment) {
                $queryAdd->equal('comment', $request->comment);
            }

            if ($request->enabled) {
                $queryAdd->equal('disabled', 'no');
            } else {
                $queryAdd->equal('disabled', 'yes');
            }

            $response = $this->client->query($queryAdd)->read();

            return redirect()->route('inicio')->with('success', 'IP actualizada correctamente.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'No se pudo actualizar la IP: ' . $e->getMessage()]);
        }
    }
}
