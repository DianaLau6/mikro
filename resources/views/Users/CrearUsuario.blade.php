<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario MikroTik</title>
    @vite('resources/css/app.css')

    <style>
        .fondo {
            background: linear-gradient(to bottom,  #394377, #9598af);
        }
        .gradient-bg {
            border-radius: 0.5rem;
            width: 1100px;
            padding: 1rem;
            color: white;
        }
        .form-section {
            background-color: #c0c0c0;
            padding: 1.5rem;
            border-radius: 2rem;
            margin-bottom: 1rem;
        }
        .form-section-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #7c2e62;
        }
        .input-field {
            width: 100%;
            padding: 0.3rem;
            border-radius: 0.5rem;
            border: solid 1px #2f3a8b;
            outline: none;
            color: purple;
        }
        .button {
            background-color: black;
            color: white;
            border-radius: 2rem;
            cursor: pointer;
            width: 150px;
            height: 40px;
            margin-top: 6px;
        }

    </style>
</head>
<body class="flex items-center justify-center fondo min-h-full flex-row">
    
<div class="gradient-bg  mt-0 ">
    <div class="form-section mx-auto h-10 items-center justify-center flex  w-80">
        <h2 class="text-center text-lg font-bold mb-4">MikroTik</h2>
    </div>
    
    <form action="" method="POST">
        @csrf

        <!-- Enabled and Comment -->
        <div class="form-section shadow-lg">
            <div class="flex items-center mb-4">
                <label class="mr-2 font-bold text-black">Enabled</label>
                <input type="checkbox" name="enabled" class="ml-10" checked>
            </div>
            <div>
                <label for="comment" class="font-bold text-black">Comment</label>
                <input type="text" name="comment" id="comment" class="input-field mt-1" placeholder="Comment">
            </div>
        </div>

        <!-- General Section -->
        <div class="form-section shadow-lg">
            <div class="form-section-title text-3xl">General →</div>
            <div class="grid grid-cols-2 space-x-3">

                <div class="mx-4">
                    <label for="name" class="font-bold text-black">Name</label>
                    <input type="text" name="name" id="name" class="input-field mt-1" placeholder="Name" required>
                </div>
                <div class="mx-4">
                    <label for="password" class="font-bold text-black">Password</label>
                    <input type="password" name="password" id="password" class="input-field mt-1" placeholder="Password" required>
                </div>
                <div class="mx-4">
                    <label for="otp_secret" class="font-bold text-black">OTP Secret</label>
                    <input type="text" name="otp_secret" id="otp_secret" class="input-field mt-1" placeholder="OTP Secret">
                </div>
                <div class="mx-4">
                    <label for="group" class="font-bold text-black">Group</label>
                    <input type="text" name="group" id="group" class="input-field mt-1" placeholder="Group">
                </div>
                <div class="mx-4">
                    <label for="caller_id" class="font-bold text-black">Caller ID</label>
                    <input type="text" name="caller_id" id="caller_id" class="input-field mt-1" placeholder="Caller ID">
                </div>
                <div class="mx-4">
                    <label for="shared_users" class="font-bold text-black">Shared Users</label>
                    <input type="number" name="shared_users" id="shared_users" class="input-field mt-1" placeholder="Shared Users">
                </div>
                <div class="mx-4">
                    <label for="attributes" class="font-bold text-black">Attributes</label>
                    <input type="text" name="attributes" id="attributes" class="input-field mt-1" placeholder="Attributes">
                </div>
                
                <div class="mx-4 space-x-4 mt-4">
                    <button type="submit" class="button font-bold">Apply</button>
                    <button type="reset" class="button font-bold">Cancel</button>
                 </div>

            </div>
            
        </div>
        <!-- Status Section -->
        <div class="form-section">
            <div class="form-section-title text-2xl">Status →</div>
            <div class="flex justify-between font-bold text-black">
                <div>Total Uptime</div>
                <div id="total-uptime">--</div>
            </div>
            <div class="flex justify-between mt-2 font-bold text-black">
                <div>Total Download</div>
                <div id="total-download">--</div>
            </div>
        </div>


        
    </form>
</div>

</body>
</html>
