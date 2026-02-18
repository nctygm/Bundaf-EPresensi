<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

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
    <title>Document</title>
</head>
<body>
    {{-- header section --}}

    <header class="bg-purple-200 w-full justify-between flex p-4">
        <div class=" h-full justify-center items-center flex">
            <h1 class="text-purple-900 font-bold"> Presensi Bunda Fathia</h1>
        </div>
        <div>
            <i class="ph ph-dots-three-outline text-3xl"></i>
        </div>
    </header>
    {{-- end of header section  --}}

   {{-- main content --}}
    <section>
        <div class="w-full h-44 bg-purple-200 mt-0 rounded-b-3xl ">

            {{-- profile content --}}
            <div class="w-full flex p-5 gap-3">
                <div>
                    <img src="{{ asset('assets/images/default-men.png') }}" alt="Profile Picture" class="w-20 h-20 rounded-full object-cover border-3 border-purple-950">
                </div>

                <div class="h-full justify-center items mt-3">
                    <h1 class="font-bold">KARTONI SIMATUPANG</h1>
                    <span>IPSRS</span>
                </div>
            </div>

            {{-- menu content   --}}
            <div class="pr-5 pl-5 -mt-2">
                <div class="bg-purple-800 rounded-3xl h-32 p-6">
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

                <div class="flex w-full justify-between gap-2mt-2 gap-4 rounded-2xl h-12 items-center mt-6">
                    <div class="flex w-full">
                        <button class="h-16  bg-green-400 w-full rounded-full flex justify-center items-center gap-2 font-bold">
                            <i class="ph ph-camera text-3xl"></i>
                            <span>Masuk</span>
                        </button>
                    </div>

                    <div class="flex w-full">
                        <button class="h-16  bg-red-400 w-full rounded-full flex justify-center items-center gap-2 font-bold">
                            <i class="ph ph-camera text-3xl"></i>
                            <span>Pulang</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- diagram content --}}
            <div class="pl-6 pr-6 mt-4">
                halo
            </div>


            {{-- footer content --}}
        </div>
    </section>
    {{-- end of main content --}}
</body>
</html>
