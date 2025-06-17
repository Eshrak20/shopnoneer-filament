<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopnoneer v2</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-2xl text-center">
        <!-- Banner -->
        <div class="bg-teal-600 text-white py-6 rounded-2xl shadow-lg mb-8">
            <h1 class="text-3xl font-bold">🚀 Shopnoneer Version 2</h1>
            <p class="text-sm mt-2">Fast, Simple & Secure</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center gap-4">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-teal-500 hover:bg-teal-600 text-white rounded-lg font-medium transition">Login</a>
            <a href="{{ route('register') }}" class="px-6 py-2 bg-teal-500 hover:bg-teal-600 text-white rounded-lg font-medium transition">Register</a>
        </div>
    </div>

</body>
</html>
