<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modul Pertemuan 1</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="bg-black text-white min-h-screen flex items-center justify-center font-sans antialiased p-4">

        <div class="w-full max-w-3xl bg-[#111111] border border-gray-800 rounded-lg p-10 shadow-lg">
            
            <h1 class="text-white text-lg font-medium mb-1">
                Dian Fitri Pradini
            </h1>
            
            <p class="text-gray-500 mb-6">
                20230140177
            </p>

            <div class="inline-block bg-gray-200 text-black px-4 py-2 rounded text-sm font-medium hover:bg-white transition cursor-pointer">
                Modul Pertemuan 1
            </div>

        </div>

    </body>
</html>