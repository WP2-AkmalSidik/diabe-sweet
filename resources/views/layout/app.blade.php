<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ asset('assets/logo.png') }}">

  <title>Diabes-Sweet</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Hide scrollbar for Chrome, Safari, and Opera */
    .container-snap::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge, and Firefox */
    .container-snap {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
  @vite('resources/css/app.css')
</head>
<body class="w-[100wh] h-screen bg-slate-400 sm:w-full flex justify-center items-center">
    @yield('content')
</body>
</html>
