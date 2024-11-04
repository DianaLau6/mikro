<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')

</head>
<body class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/373543/pexels-photo-373543.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=1860');">
    <div class="p-8 space-y-6 bg-transparent rounded-lg shadow-lg text-white items-center" style="
    width: 450px;
    height: 450px;
    ">
        <div class="text-center">
            <svg class="w-12 h-20 ml-10" > 
                @svg('letsicon-user')
            </svg>
            
            <h2 class="text-3xl font-bold">Login</h2>
            <p class="text-sm">Log in, if you don't have an account yet, <a href="#" class="font-semibold text-blue-300">Register here</a>.</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="user" id="user" required
                    class="w-full px-3 py-2 mt-1 text-black bg-transparent border-b border-white focus:outline-none focus:border-blue-300">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-3 py-2 mt-1 text-black bg-transparent border-b border-white focus:outline-none focus:border-blue-300">
            </div>

            <div>
                <label for="ip" class="block text-sm font-medium">IP</label>
                <input type="text" name="ip" id="ip" required
                    class="w-full px-3 py-2 mt-1 text-black bg-transparent border-b border-white focus:outline-none focus:border-blue-300">
            </div>

            <div class="text-right">
                <a href="#" class="text-sm text-blue-300 hover:underline">Forgot your password?</a>
            </div>

            <button type="submit"
                class="w-full py-2 mt-4 font-semibold text-black bg-white rounded-full hover:bg-gray-200 focus:outline-none">
                Login
            </button>
        </form>
    </div>
</body>
</html>
