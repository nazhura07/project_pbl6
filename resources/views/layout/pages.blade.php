<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon"> --}}
</head>
<body>
    <main class="mx-auto scroll-smooth ">
        @yield('content')
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>