<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cambiar IP de Ether2</title>
    @vite('resources/css/app.css')
    <style>
        .gradient-bg {
            background: linear-gradient(to bottom, #4a69bd, #b2bec3);
            border-radius: 0.5rem;
            width: 300px;
            padding: 1.5rem;
            color: white;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="gradient-bg shadow-lg">
    <h2 class="text-center text-lg font-semibold mb-4">Addresses</h2>

    <form action="" method="POST">

        <div class="mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" name="enabled" class="form-checkbox text-indigo-600" checked>
                <span class="ml-2">Enabled</span>
            </label>
        </div>

        <div class="mb-4">
            <label for="comment" class="block text-sm">Comment</label>
            <input type="text" name="comment" id="comment" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500" placeholder="Comment">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm">Address</label>
            <input type="text" name="address" id="address" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500" placeholder="IP Address" required>
        </div>

        <div class="mb-4">
            <label for="network" class="block text-sm">Network</label>
            <input type="text" name="network" id="network" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500" placeholder="Network IP" required>
        </div>

        <div class="mb-4">
            <label for="interface" class="block text-sm">Interface</label>
            <select name="interface" id="interface" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                <option value="Ethernet2">Ethernet2</option>
            </select>
        </div>

        <div class="flex justify-end space-x-2">
            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md">OK</button>
            <button type="button" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md">Cancel</button>
        </div>
    </form>
</div>

</body>
</html>
