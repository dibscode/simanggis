<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900">

    <!--"bg-gray-100" menghapus bagian tersebut pada class untuk screen agar semua putih-->
        <div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 ">
            <div>
                <a href="/">
                    <!-- <x-application-logo class="w-20 h-20 text-gray-500 fill-current" /> <menghapus logo laravel di scrip ini> -->
                </a>
            </div>

            <div class="w-full p-8 px-6 py-4 mt-6 overflow-hidden bg-white sm:max-w-md shadow-2x1 sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
