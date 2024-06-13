<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C00700</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-orange-100 " style="background-color: #CECFAC; font-family: 'Times New Roman', serif;">
    <div class="min-h-screen flex flex-col">
    <header class="relative bg-green-600 text-black py-40 bg-cover bg-center" style="background-image: url('https://cdn.wallpaperdirect.com/asset/img/product/148441/full/borastapeter-blomslinga-green-wallpaper-0@lg.webp')">
        <div class="container mx-auto relative">
            <h1 class="text-3xl text-center font-bold z-10 relative">
                <span style="background-color: #ffffff; padding: 10px;">Modern Artist´s biographies</span>
            </h1>
        </div>
    </header>
        <main class="flex-grow container mx-auto py-8">
            @yield('content')
        </main>
        <footer class="bg-lime-800 text-white py-4">
            <div class="container mx-auto text-center">
                By Krisly Arias Hidalgo
            </div>
        </footer>
    </div>
</body>
</html>
