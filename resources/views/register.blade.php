<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/output.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Poppins:wght@300;400;500;600;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,300&family=Viga&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<title>{{ config('app.name')}} | Sign in</title>
<body class="">
  <div class="my-[150px]">
    <section class="mt-70">
      <form action="/registered" method="POST">
        @csrf
        <div class="max-w-[346px] max-h[444px] bg-white mx-auto px-6 pt-4 pb-3 rounded-3xl border border-primary">
          <div class="flex flex-col">
            <br />
            <h3 class="mx-auto text-[20px] font-poppins">pictrends</h3>

            <input type="text" class="py-1 mt-[50px] px-3 rounded-md text-[16px]text-slate-700 mx-7 border border-gray-400" placeholder="Username" name="name" required />
            <input type="email" class="py-1 mt-[20px] px-3 rounded-md text-[16px]text-slate-700 mx-7 border border-gray-400" placeholder="Email" name="email" required />
            <input type="password" class="py-1 mt-[20px] px-3 rounded-md text-[16px]text-slate-700 mx-7 border border-gray-400" placeholder="Password" name="password" required />
            <button class="py-1 mt-7 text-white rounded-md bg-blue-800 mx-7" type="submit">
              Sign up
            </button>
            <hr class="mt-4 mx-8" />
            <small class="mt-3 mx-5 mb-9 text-center">have an acount?<a href="login"><span class="text-blue-700">
                  Login!
                </span></a></small>
          </div>
        </div>
      </form>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
