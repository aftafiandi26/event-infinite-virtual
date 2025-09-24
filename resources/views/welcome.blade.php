<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Studios Event</title>
    <!-- Production: Use Vite Compiled CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @include('welcome.welcomStyle')
</head>
<body class="font-sans text-gray-800 bg-white">
    <!-- Navbar -->
    @include('welcome.navigation')

    <!-- Header -->
    @include('welcome.header')

    <!-- Gallery 3D Curve -->
    @include('welcome.galeryMedia')

    <!-- Latest Events -->
    @include('welcome.eventMedia')

    <!-- Contact -->
    @include('welcome.contactUs')

    <!-- Footer -->
    <footer class="py-6 text-sm text-center text-gray-500 bg-white border-t">
        © {{ date('Y') }} Infinite Studios. All rights reserved.
    </footer>

    @include('welcome.welcomeJS')
</body>
</html>
