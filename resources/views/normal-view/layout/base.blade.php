<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>MDC-GIS-SHS | @yield('title')</title>

</head>

<body class="antialiased bg-black"
    style="
            background-image: url('/images/bg1.png');
            background-repeat: no-repeat;
            background-size: 100%;
        ">
    <div class="wrapper py-8 px-4 lg:px-0">
        @yield('content')
    </div>

</body>

<footer class="bg-black text-white py-4">
    <div class="text-center">
        <h1 style="font-family: Old English Five;">Mater Dei College</h1>
        <h5>Cabulijan, Tubigon, Bohol</h5>
    </div>
    <div class="flex justify-between mx-20 mt-10">
        <div class="text-center">
            <a href="#" class="block bg-green-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fas fa-phone-alt text-black text-2xl mt-2"></i>
            </a>
            <p class="hidden md:block text-xs">0945-756-2827</p>
        </div>
        <div class="text-center">
            <a href="#" class="block bg-blue-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fab fa-facebook-f text-black text-2xl mt-2"></i>
            </a>
            <p class="hidden md:block text-xs">mdc2023@facebook.com</p>
        </div>
        <div class="text-center">
            <a href="#" class="block bg-green-500 rounded-full w-12 h-12 mx-auto mb-2">
                <i class="fas fa-envelope text-white text-2xl mt-2"></i>
            </a>
            <p class="hidden md:block text-xs">mdc2023@gmail.com</p>
        </div>
    </div>
</footer>

</html>

<style>
    @media (max-width: 640px) {
        body {
            background-size: 1000px auto !important;
        }
    }
</style>
