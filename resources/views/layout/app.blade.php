<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ asset('assets/logo.png') }}">

  <title>Diabes-Sweet</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
</head>
<body class="w-[100wh] bg-slate-400">
    @yield('content')
</body>
</html>
