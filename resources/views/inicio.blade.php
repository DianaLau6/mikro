<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Encabezado -->
    <header class="flex items-center justify-between bg-blue-800 p-5 text-white">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                <!-- Icono de usuario -->
                <img width="48" height="48" src="https://img.icons8.com/fluency/48/user-male-circle--v1.png" alt="user-male-circle--v1"/>
            </div>
            <span>Name User</span>
        </div>
    </header>

    <!-- Contenedor principal -->
    <main class="flex flex-col items-center justify-center min-h-full space-y-6 px-4 mt-20">
        <!-- Opciones de navegación -->
        <div class="grid grid-cols-2 gap-6 max-w-md ">
            <div class="p-1 w-80 bg-gray-300 rounded-lg text-center shadow">
                <div >
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/228BE6/final-state.png" alt="final-state"/>
                </div>
                <p>TABLERO</p>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="80" viewBox="0 0 48 48">
                    <path fill="#90CAF9" d="M40 45L8 45 8 3 30 3 40 13z"></path><path fill="#E1F5FE" d="M38.5 14L29 14 29 4.5z"></path><path fill="#1976D2" d="M16 21H33V23H16zM16 25H29V27H16zM16 29H33V31H16zM16 33H29V35H16z"></path>
                </svg>
            </div>
            <div class=" p-1 h-40 bg-gray-300 rounded-lg text-center shadow">
                <div >
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/228BE6/final-state.png" alt="final-state"/>
                </div>
                <p>Configuración de Sesión</p>
                <img src="data:image/png;base64,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" width="80" height="80">
            </div>
            <div class="p-1 bg-gray-300 rounded-lg text-center shadow">
                <div >
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/228BE6/final-state.png" alt="final-state"/>
                </div>
                <p>Configuración</p>
                <img src="data:image/png;base64,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" width="80" height="80">
                
            </div>
            <div class=" h-40 bg-gray-300 rounded-lg text-center bg-transparent">
                <div class="m-1">
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/228BE6/final-state.png" alt="final-state"/>
                </div>
                <div>
                    <p >Añadir Router</p> 
                    <img width="80" height="80" src="https://img.icons8.com/ios/50/228BE6/plus-2-math.png" alt="plus-2-math"/>
                </div>
                
            </div>
        </div>

        <!-- Botones inferiores -->
        <div class="grid grid-cols-1 space-y-4 mt-3 ">
            <button class="px-4 my-1 py-2 w-40 font-semibold text-white bg-blue-800 rounded-lg hover:bg-blue-700">Aceptar</button>
            <button class="py-2 w-40 font-semibold text-blue-800 bg-white border border-blue-800 rounded-lg hover:bg-gray-100">Back</button>
        </div>
    </main>
</body>
</html>
