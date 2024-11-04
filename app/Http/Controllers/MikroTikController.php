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
            'host' => env('MIKROTIK_HOST', '192.168.0.100'), // IP de MikroTik desde tu archivo .env
            'user' => env('MIKROTIK_USER', 'admin'), // Usuario desde tu archivo .env
            'pass' => env('MIKROTIK_PASS', 'rosas'), // Contraseña desde tu archivo .env
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
}
