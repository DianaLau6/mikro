<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queues - MikroTik</title>
    @vite('resources/css/app.css')
    <style>
        .sidebar-bg {
            background-color: #6c63a6;
            color: white;
            width: 200px;
            padding: 1rem;
            
        }
        .header-bg {
            background-color: #333366;
            color: white;
            text-align: center;
            padding: 1rem;
            border-radius: 3rem;
            width: 85%;
            margin-top: 1rem;
        }
        .main-content {
            background-color: #b0b0b0;
            padding: 1rem;
        }
        .main{
            width: 95%;
            height: 90%;
        }
        .button {
            background-color: #555;
            color: white;
            padding: 0.3rem 0.5rem;
            margin-right: 0.2rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }
        .footer-info {
            background-color: #333366;
            color: white;
            padding: 0.5rem;
            text-align: center;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b items-center from-blue-900 to-gray-900 text-white">
    <header class="mx-auto header-bg flex justify-center items-center">

        <div class="px-4 py-1 bg-purple-600 rounded-l-full">Queues</div>
        <div class="px-4 py-1 bg-purple-400">User Manager</div>
        <div class="px-4 py-1 bg-purple-400 rounded-r-full">IP</div>

    </header>


    <main class="flex mt-20 main mx-auto">
        <!-- Sidebar -->
        <div class=" sidebar-bg py-4">
            <h2 class="mb-4 text-xl grid grid-cols-1 space-y-4 font-semibold">Queue List</h2>
            <ul>
                <li class="py-4"><a href="#" class="hover:underline">Simple Queues</a></li>
                <li class="py-4"><a href="#" class="hover:underline">Interface Queues</a></li>
                <li class="py-4"><a href="#" class="hover:underline">Queues Tree</a></li>
                <li class="py-4"><a href="#" class="hover:underline">Queues Types</a></li>
            </ul>
            <a href="#" class="mt-auto text-red-400 hover:underline">Exit</a>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
    
            <!-- Actions -->
            <div class="main-content">
                <div class="flex justify-end space-x-2 mb-2">
                    <button class="button">+</button>
                    <button class="button">☑️</button>
                    <button class="button">❌</button>
                    <button class="button">□</button>
                    <button class="button">Reset Counters</button>
                    <button class="button">Reset All Counters</button>
                </div>

                <!-- Queue Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white text-black rounded">
                        <thead>
                            <tr class="bg-gray-300 text-left">
                                <th class="px-4 py-2 border">#</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Target</th>
                                <th class="px-4 py-2 border">Upload Max Limit</th>
                                <th class="px-4 py-2 border">Download Max Limit</th>
                                <th class="px-4 py-2 border">Packet Marks</th>
                                <th class="px-4 py-2 border">Total Max Limit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplo de fila -->
                            <tr class="hover:bg-gray-200">
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">Queue1</td>
                                <td class="px-4 py-2 border">192.168.1.1</td>
                                <td class="px-4 py-2 border">5 Mbps</td>
                                <td class="px-4 py-2 border">10 Mbps</td>
                                <td class="px-4 py-2 border">None</td>
                                <td class="px-4 py-2 border">15 Mbps</td>
                            </tr>
                            <!-- Agrega más filas según sea necesario -->
                        </tbody>
                    </table>
                </div>
        </div>
    </main>

    <footer>
        <div class="footer-info flex justify-between">
            <div>1 Item</div>
            <div>3064 B queued</div>
            <div>6 Packet queued</div>
        </div>
    </footer>
        

</body>
</html>
