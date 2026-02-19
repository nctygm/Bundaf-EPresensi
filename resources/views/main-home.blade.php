<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
    />
</head>

<body class="pb-24">
    {{-- header section --}}
    <header class="bg-purple-200 w-full justify-between flex p-4">
        <div class="h-full justify-center items-center flex">
            <h1 class="text-purple-900 font-bold"> Presensi Bunda Fathia</h1>
        </div>
        <div>
            <i class="ph ph-dots-three-outline text-3xl"></i>
        </div>
    </header>
    {{-- end of header section  --}}

    {{-- main content --}}
    <section>
        <div class="w-full h-44 bg-purple-200 -mt-3 rounded-b-3xl ">

            {{-- profile content --}}
            <div class="w-full flex p-5 gap-3">
                <div>
                    <img src="{{ asset('assets/images/default-men.png') }}"
                        class="w-20 h-20 rounded-full object-cover border-3 border-purple-950">
                </div>

                <div class="h-full justify-center  mt-3">
                    <h1 class="font-bold">R</h1>
                    <span>admin</span>
                </div>
            </div>

            {{-- menu content --}}
            <div class="pr-5 pl-5 -mt-2">
                <div class="bg-purple-800 rounded-3xl h-32 p-6 drop-shadow-black">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="flex flex-col items-center h-full justify-center gap-2 text-white">
                            <i class="ph ph-user text-5xl font-bold"></i>
                            <span>Profil</span>
                        </div>

                        <div class="flex flex-col items-center h-full justify-center gap-2 text-white">
                            <i class="ph ph-calendar text-5xl font-bold"></i>
                            <span>Cuti</span>
                        </div>

                        <div class="flex flex-col items-center h-full justify-center gap-2 text-white">
                            <i class="ph ph-file-text text-5xl font-bold"></i>
                            <span>Riwayat</span>
                        </div>

                        <div class="flex flex-col items-center h-full justify-center gap-2 text-white">
                            <i class="ph ph-navigation-arrow text-5xl font-bold"></i>
                            <span>Lokasi</span>
                        </div>
                    </div>
                </div>

                <div class="flex w-full justify-between gap-4 rounded-2xl h-12 items-center mt-6">
                    <div class="flex w-full text-white">
                        <button class="h-16 shadow-sm bg-green-400 w-full rounded-full  flex justify-center items-center gap-2 font-bold">
                            <i class="ph ph-camera text-3xl"></i>
                            <span>Masuk</span>
                        </button>
                    </div>

                    <div class="flex w-full text-white">
                        <button class="h-16 shadow-sm bg-red-400 w-full rounded-full  flex justify-center items-center gap-2 font-bold">
                            <i class="ph ph-camera text-3xl"></i>
                            <span>Pulang</span>
                        </button>
                    </div>
                </div>
            </div>


            {{-- diagram content --}}
            <div class="px-5 mt-8  w-full">
                <div class=" w-full flex justify-center items-center">
                    <canvas id="presensiChart"></canvas>
                </div>
            </div>`

        </div>
    </section>
    {{-- end of main content --}}

    {{-- footer content (FIXED & STICKY) --}}
    <footer class="fixed bottom-0 left-0 w-full bg-white shadow-inner p-4">
        <div class="flex justify-around text-gray-600">
            <div class="flex flex-col items-center text-purple-700">
                <i class="ph ph-house text-2xl"></i>
                <span class="text-xs">Beranda</span>
            </div>

            <div class="flex flex-col items-center">
                <i class="ph ph-camera text-2xl"></i>
                <span class="text-xs">Kamera</span>
            </div>

            <div class="flex flex-col items-center">
                <i class="ph ph-user text-2xl"></i>
                <span class="text-xs">Akun</span>
            </div>
        </div>
    </footer>
</body>
</html>
