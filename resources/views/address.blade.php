<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cambiar IP de Ether2</title>
    @vite('resources/css/app.css')
    <style>
        .gradient-bg {
            background: linear-gradient(to bottom,  #394377, #9598af);
            border-radius: 2rem;
            width: 500px;
            padding: 1.5rem;
            color: white;
        }

        .input-field {
            width: 100%;
            border-radius: 0.5rem;
            border: solid 1px #2f3a8b;
            outline: none;
            color: purple;
            padding: 12px;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="gradient-bg shadow-lg">
    <h2 class="text-center text-lg font-bold mb-4">Addresses de interfaces</h2>

    <form action="" method="POST">

        <div class="mb-4">
            <label class="inline-flex items-center">
                <span class="ml-2 font-bold">Enabled</span>
                <input type="checkbox" name="enabled" class="form-checkbox  ml-4 size-6 bg-black" checked>
            </label>
        </div>

        <div class="">
            <label for="comment" class="block font-bold">Comment</label>
            <input type="text" name="comment" id="comment" class="input-field  focus:ring-indigo-500 focus:border-indigo-500" placeholder="Comment">
        </div>

        <div class="">
            <label for="address" class="block font-bold">Address</label>
            <input type="text" name="address" id="address"  class="input-field  focus:ring-indigo-500 focus:border-indigo-500"  placeholder="IP Address" required>
        </div>

        <div class="">
            <label for="network" class="block font-bold">Network</label>
            <input type="text" name="network" id="network"  class="input-field  focus:ring-indigo-500 focus:border-indigo-500"  placeholder="Network IP" required>
        </div>

        <div class="">
            <label for="interface" class="block font-bold">Interface</label>
            <select name="interface" id="interface"  class="input-field font-bold  focus:ring-indigo-500 focus:border-indigo-500" required>
                <option value="Ethernet2" class="font-bold">Ethernet2</option>
            </select>
        </div>

        <div class="flex justify-end space-x-4 mt-4">
            <button type="submit" class="px-4 w-80 bg-purple-500 hover:bg-purple-700 text-white rounded-md">OK</button>
            <button type="button" class="px-4 w-80 h-10 bg-gray-500 hover:bg-gray-700 text-white rounded-md">Cancel</button>
        </div>
    </form>
</div>

</body>
</html>
