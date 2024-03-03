<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet" />
    <!-- End Fonts -->
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/build.css') }}">
    @vite('resources/css/app.css')

</head>

<body class="bg-slate-50">


    <!-- nav -->
    <nav class="fixed h-12 w-full bg-white border lg:hidden sm:hidden">
        <div class="p-1"></div>
        <span class="ml-5 text-3xl font-itali font-semibold">Gallery Foto</span>
    </nav>
    <!-- end nav -->



    <!-- sidebar -->
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-5 py-10 overflow-y-auto bg-white border">
            <span class="ml-4 font-itali self-center text-5xl font-medium whitespace-nowrap">Gallery Foto</span>
            </a>
            <div class="container h-8"></div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/beranda"
                        class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 dark:hover:bg-blue-700 group hover:text-white">
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        <span class="ms-3">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="/upload_foto"
                        class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 dark:hover:bg-blue-700 group  hover:text-white">
                        <ion-icon name="add-circle-outline" class="text-2xl"></ion-icon>
                        <span class="ms-3">Upload Foto</span>
                    </a>
                </li>
                <li>
                    <a href="/profile"
                        class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 dark:hover:bg-blue-700 group  hover:text-white">
                        <ion-icon name="person-outline" class="text-2xl"></ion-icon>
                        <span class="ms-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/logout"
                        class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 dark:hover:bg-blue-700 group  hover:text-white">
                        <ion-icon name="person-outline" class="text-2xl"></ion-icon>
                        <span class="ms-3">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end sidebar -->


    <!-- KONTEN SM MD -->
    <!-- konten -->
    @yield('content')
    <!-- end konten -->







    <!-- bottom nav -->
    {{-- @include('layout.menu_bottom') --}}
    <!-- end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="/../../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
