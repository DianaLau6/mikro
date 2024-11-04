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
        // Crea el cliente con las credenciales de MikroTik
        $this->client = new Client([
            'host' => env('MIKROTIK_HOST', '192.168.116.125'), 
            'user' => env('MIKROTIK_USER', 'admin'), 
            'pass' => env('MIKROTIK_PASS', 'rosas'),
        ]);
    }

    public function getRouterInfo()
    {
        try {
            // Define la consulta para obtener la información del sistema
            $query = new Query('/system/resource/print');
            // Ejecuta la consulta
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
            ]);

            // Intenta obtener información del sistema para verificar la conexión
            $query = new Query('/system/resource/print');
            $response = $client->query($query)->read();

            // Redirige al usuario a la URL de Webfig
            return redirect()->away('http://192.168.116.125/webfig/#Quick_Set');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo conectar a MikroTik: ' . $e->getMessage(),
            ], 500);
        }
    }


}
