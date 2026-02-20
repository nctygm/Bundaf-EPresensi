<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>E-Presensi Login</title>
</head>

<body class="">

    <div class="w-full w-full h-screen">

        <form action ="/login" method="POST" class="flex flex-col w-full h-full p-6 justify-center items-center ">
            @csrf
            <!-- Top Content -->
            <div class="flex-grow">

                <div class="flex justify-center mb-6">
                    <img src="" class="w-32">
                </div>

                <h1 class="text-2xl font-bold text-center">E-Presensi</h1>
                <p class="text-gray-500 text-center mb-8">Silahkan Login</p>

                <div class="space-y-4">

                    <input 
                        type="text"
                        name= "nik"
                        id="nik"
                        placeholder="NIK"
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-400 outline-none"
                    >

                    <input 
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-400 outline-none"
                    >

                    <div class="text-sm text-gray-400">
                        <a href="#">Forgot Password?</a>
                    </div>

                </div>
            </div>

            <!-- Bottom Button (Still Inside Form) -->
            <button 
                type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 rounded-xl transition"
            >
                Log in
            </button>

        </form>

    </div>

</body>
</html>