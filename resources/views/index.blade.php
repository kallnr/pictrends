<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="./css/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Hurricane&family=Poppins:wght@300;400;500;600;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300&family=Viga&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title> {{ config('app.name') }} | Index</title>
</head>

<body class="dark:bg-slate-800 dark:text-white">
    <!--Navbar-->
    <nav class="bg-white bg-opacity-50 fixed w-full top-0 z-20 dark:bg-slate-800">
        <div class="hidden lg:block">
            <div class="  flex items-center mx-auto py-7 max-w-screen-lg justify-between">
                <div>
                    <h2 class="text-[20px] font-poppins dark:text-white font-bold">pictrends</h2>
                </div>
                <div class="mt-2 flex items-center">
                    <button
                        class="text-white px-5 bg-primary rounded-md mr-4 py-1 transition duration-500 ease-in-out hover:scale-105">
                        <a href="login">Log in</a>
                    </button>
                    <button
                        class=" bg-secondary py-1 px-5 rounded-md transition duration-500 ease-in-out hover:scale-105"><a
                            href="register">Sign up</a></button>
                    <div class="flex ml-5">
                        <span class="mr-2 text-sm text-slate-500 dark:text-slate-200">Light</span>
                        <input type="checkbox" class="hidden" id="dark-toggle">
                        <label for="dark-toggle">
                            <div
                                class="flex  w-10 cursor-pointer items-center rounded-full bg-slate-500 p-1 dark:bg-white">
                                <div
                                    class="toggle-circle h-4 w-4 rounded-full bg-white dark:bg-blue-700 transition duration-300
                                ease-in-out">
                                </div>
                            </div>
                        </label>
                        <span class="ml-2 text-sm text-slate-500 dark:text-slate-200">Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between py-5 px-5 mx-auto lg:hidden">
            <div class="">
                <h2 class=" font-poppins text-[20px] font-medium">pictrends</h2>
            </div>
            <div class=" ">
                <button
                    class=" w-[70px] h-[30px] text-[14px] text-white px-2 bg-primary rounded-md mr-2 py-1  transition duration-500 ease-in-out hover:scale-105">
                    <a href="login">Login</a>
                </button>
                <button
                    class=" w-[85px] h-[30px] text-[14px]  bg-secondary py-1 px-2 rounded-md transition duration-500 ease-in-out hover:scale-105 ">
                    <a href="/register">Sign in</a>
                </button>

            </div>

        </div>

    </nav>
    <!--End Navbar-->

    <!--Hero Section-->
    <section class="mt-[150px]">
        <div class="flex max-w-screen-lg mx-auto flex-wrap">
            <div class="w-1/2 hidden lg:block">
                <div class="flex flex-col">
                    <div>
                        <div
                            class="w-[200px] h-[30px] mx-2 mt-[80px] mb-3 py-1 text-center rounded-full bg-white shadow-xl text-blue-700 hover:text-white text-[14px] transition duration-500 ease-in-out hover:scale-105  hover:bg-blue-700 group dark:bg-blue-700 dark:text-white">
                            <b>Explore The World </b>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-[44px] font-poppins font-bold  ">Explore the <span class="text-utama">World's
                            </span> <br>
                            Latest <span class="text-utama">Pictrends </span></h2>
                    </div>
                    <div>
                        <p class="font-poppins text-[14px] text-slate-700  mt-4 dark:text-white">Gambar yang luar biasa
                            layak<br>
                            mendapatkan presentasi yang luar biasa!</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 hidden lg:block">

                <div class="flex gap-4 justify-center">
                    <div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <img src="/asssets/Rectangle 2.png" alt=""
                                    class="transition duration-500 ease-in-out hover:scale-105" />
                            </div>
                            <div>
                                <img src="/asssets/Rectangle 1.png" alt=""
                                    class="transition duration-500 ease-in-out hover:scale-105" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="/asssets/Rectangle 3.png" alt=""
                            class="mt-[25px] transition duration-500 ease-in-out hover:scale-105" />
                    </div>
                </div>
            </div>
            <div class=" mx-auto px-5 lg:hidden">
                <div class="w-[300px]  ">

                    <div class="flex gap-2 justify-center px-5 pb-2">
                        <div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <img src="/asssets/Rectangle 2.png" alt=""
                                        class="transition duration-500 ease-in-out hover:scale-105" />
                                </div>
                                <div>
                                    <img src="/asssets/Rectangle 1.png" alt=""
                                        class="transition duration-500 ease-in-out hover:scale-105" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/asssets/Rectangle 3.png" alt=""
                                class="mt-[25px] transition duration-500 ease-in-out hover:scale-105" />
                        </div>
                    </div>
                </div>
                <div class="mt-[-280px] z-20 fixed ml-[70px] ">
                    <div
                        class="w-[115px] h-[20px] mx-2 mt-[80px] mb-3 py-1 text-center  bg-white shadow-xl rounded-full text-pink-600 text-[10px]">
                        <b>Explore The World ! </b>
                    </div>
                </div>
                <div class="flex flex-col mx-auto text-center mt-5">
                    <div>
                        <h2 class="text-[20px] font-poppins font-bold  ">Change your picture,<br>
                            change your story</h2>
                    </div>
                    <div>
                        <p class="font-poppins text-[10px] text-slate-700  mt-4">Gambar yang luar biasa layak<br>
                            mendapatkan presentasi yang luar biasa!</p>
                    </div>
                    <div class="mt-4">
                        <button class="bg-primary rounded-full w-[70px] h-[30px] text-[14px] py-1 text-white"><a
                                href="/post">Explore</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Hero Section-->
    <script src="/javascript/myjavascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
