<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - KINEMA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        accent: '#f59e0b',
                        dark: '#1f2937',
                        kinema: {
                            blue: '#1e40af',
                            orange: '#f59e0b'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            border-radius: 12px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed top-0 left-0 z-50 w-full bg-white shadow-md">
        <div class="container px-4 py-4 mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="flex items-center mb-4 md:mb-0">
                    <div>
                        <h1 class="text-xl font-bold text-kinema-blue">EVENT <span class="text-kinema-orange">KINEMA</span></h1>
                        <p class="text-xs text-gray-500">PT. KINEMA SYSTRANS MULTIMEDIA</p>
                    </div>
                </div>
                
                <nav class="flex flex-wrap justify-center gap-2 mb-4 md:gap-6 md:mb-0">
                    <a href="#" class="font-semibold text-kinema-blue hover:text-kinema-orange">Home</a>
                    <a href="#" class="text-gray-600 hover:text-kinema-orange">Events Available</a>
                    <a href="#" class="text-gray-600 hover:text-kinema-orange">My Events</a>
                    <a href="#" class="text-gray-600 hover:text-kinema-orange">Certificate</a>
                    <a href="#" class="text-gray-600 hover:text-kinema-orange">Gallery</a>
                    <a href="#" class="text-gray-600 hover:text-kinema-orange">Event Contact</a>
                </nav>
                
                <div class="flex items-center space-x-3">
                    <!-- Foto Profil -->
                    <img src="https://via.placeholder.com/40" 
                        alt="Profile" 
                        class="w-10 h-10 border-2 rounded-full border-kinema-orange">

                    <!-- Teks Welcome -->
                    <span class="hidden text-sm text-gray-600 md:block">WELCOME ICE</span>

                    <!-- Tombol Logout -->
                    <button class="px-4 py-2 font-semibold text-white rounded-lg bg-kinema-orange hover:bg-amber-600">
                        Logout <i class="ml-1 fas fa-sign-out-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container px-4 py-8 pt-24 mx-auto">
        <!-- Welcome Section -->
        <section class="flex flex-col mb-12 md:flex-row md:items-center md:justify-between">
            <!-- Teks Welcome -->
            <div>
                <h2 class="mb-2 text-3xl font-bold text-gray-800">
                    HELLO, <span class="text-kinema-orange">[PARTICIPANT NAME]</span>
                </h2>
                <p class="text-gray-600">WELCOME TO THE KINEMA EVENT PARTICIPANT DASHBOARD!</p>
            </div>

            <!-- Search Bar -->
            <div class="relative w-full max-w-sm mt-6 md:mt-0">
                <input type="text" placeholder="Search anything..." 
                    class="w-full px-4 py-3 pl-12 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-kinema-blue">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="text-gray-400 fas fa-search"></i>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <span class="px-3 py-1 text-sm text-white rounded bg-kinema-blue">Q</span>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="grid grid-cols-1 gap-6 mb-12 md:grid-cols-3">
            <div class="flex items-center p-6 text-white stat-card card-hover">
                <div class="p-4 mr-4 bg-white rounded-full bg-opacity-20">
                    <i class="text-2xl fas fa-calendar-check"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">3</h3>
                    <p class="text-sm">EVENTS FOLLOWED</p>
                </div>
            </div>
            
            <div class="flex items-center p-6 text-white stat-card card-hover">
                <div class="p-4 mr-4 bg-white rounded-full bg-opacity-20">
                    <i class="text-2xl fas fa-certificate"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">1</h3>
                    <p class="text-sm">CERTIFICATE AVAILABLE</p>
                </div>
            </div>
            
            <div class="flex items-center p-6 text-white stat-card card-hover">
                <div class="p-4 mr-4 bg-white rounded-full bg-opacity-20">
                    <i class="text-2xl fas fa-trophy"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">2</h3>
                    <p class="text-sm">CHAMPION ACHIEVED</p>
                </div>
            </div>
        </section>

        <!-- Latest Events Section -->
        <section class="mt-8">
            <!-- Card Container -->
            <div class="overflow-hidden bg-white shadow-md rounded-xl">
                <!-- Header Latest Events -->
                <div class="px-6 py-3 bg-red-600">
                    <h2 class="text-lg font-bold text-white">LATEST EVENTS</h2>
                </div>

                <!-- Event Cards -->
                <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Event Card 1 -->
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow card-hover">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x200" alt="Running" class="object-cover w-full h-40">
                            <span class="absolute px-3 py-1 text-xs font-semibold text-white bg-green-600 rounded-full top-3 left-3">Running</span>
                        </div>
                        <div class="p-4">
                            <p class="flex items-center mb-1 text-sm text-gray-500">
                                <i class="mr-2 far fa-calendar-alt"></i> 20 Oct 2025
                            </p>
                            <h3 class="mb-2 text-lg font-bold">Stadion Kinema</h3>
                            <button class="w-full py-2 font-semibold text-white rounded-lg bg-kinema-blue hover:bg-kinema-orange">
                                Shop Now
                            </button>
                        </div>
                    </div>

                    <!-- Event Card 2 -->
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow card-hover">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x200" alt="Badminton" class="object-cover w-full h-40">
                            <span class="absolute px-3 py-1 text-xs font-semibold text-white bg-blue-600 rounded-full top-3 left-3">Badminton</span>
                        </div>
                        <div class="p-4">
                            <p class="flex items-center mb-1 text-sm text-gray-500">
                                <i class="mr-2 far fa-calendar-alt"></i> 25 Oct 2025
                            </p>
                            <h3 class="mb-2 text-lg font-bold">GOR Kinema</h3>
                            <button class="w-full py-2 font-semibold text-white rounded-lg bg-kinema-blue hover:bg-kinema-orange">
                                Shop Now
                            </button>
                        </div>
                    </div>

                    <!-- Event Card 3 -->
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow card-hover">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x200" alt="Futsal" class="object-cover w-full h-40">
                            <span class="absolute px-3 py-1 text-xs font-semibold text-white bg-red-600 rounded-full top-3 left-3">Futsal</span>
                        </div>
                        <div class="p-4">
                            <p class="flex items-center mb-1 text-sm text-gray-500">
                                <i class="mr-2 far fa-calendar-alt"></i> 30 Oct 2025
                            </p>
                            <h3 class="mb-2 text-lg font-bold">Lapangan Kinema</h3>
                            <button class="w-full py-2 font-semibold text-white rounded-lg bg-kinema-blue hover:bg-kinema-orange">
                                Shop Now
                            </button>
                        </div>
                    </div>

                    <!-- Event Card 4 -->
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg shadow card-hover">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x200" alt="Workshop" class="object-cover w-full h-40">
                            <span class="absolute px-3 py-1 text-xs font-semibold text-white bg-yellow-600 rounded-full top-3 left-3">Workshop</span>
                        </div>
                        <div class="p-4">
                            <p class="flex items-center mb-1 text-sm text-gray-500">
                                <i class="mr-2 far fa-calendar-alt"></i> 5 Nov 2025
                            </p>
                            <h3 class="mb-2 text-lg font-bold">Zumac Steel Computer Case</h3>
                            <button class="w-full py-2 font-semibold text-white rounded-lg bg-kinema-blue hover:bg-kinema-orange">
                                Shop Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-8 mt-16 text-white bg-gray-800">
        <div class="container px-4 mx-auto">
            <div class="text-center">
                <p class="text-sm">© 2025 Infinite Studios. All rights reserved.</p>
                <div class="flex justify-center mt-4 space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>