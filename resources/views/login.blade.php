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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ config('app.name') }} | Login</title>

</head>

<body class="">
    <div class="my-[150px]">
        <form action="/logined" method="POST">
            @csrf
            <section class="mt-70">
                <div class="max-w-[346px] max-h[444px] bg-white  mx-auto px-6 py-4 rounded-3xl ">

                    <div class="flex flex-col">
                        <br />
                        <h3 class=" mx-auto text-[20px] font-poppins">Snapdrow</h3>
                        @if ($message = Session::get('error'))
                            <div class="flex w-full items-center py-1 px-3  h-5 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="flex ">
                                    <span class="font-medium">Danger alert!</span>
                                </div>
                        @endif
                        <input type="email"
                            class="py-1 mt-[50px] px-3 rounded-md text-[16px]text-slate-700 mx-7 border border-gray-400"
                            placeholder="Email or username" name="email" required />
                        <input type="password"
                            class="py-1 mt-[20px] px-3 rounded-md text-[16px]text-slate-700 mx-7 border border-gray-400"
                            placeholder="Password" name="password" required />
                        <button class="py-1 mt-7 text-white rounded-md bg-blue-800 mx-7" type="submit">
                            Login
                        </button>
                        <hr class="mt-4 mx-8" />
                        <small class="mt-3 mx-5 mb-8 text-center">Don't have an acount?<a href="register"><span
                                    class="text-blue-700">
                                    Sign in!
                                </span></a></small>
                    </div>

                </div>
            </section>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
