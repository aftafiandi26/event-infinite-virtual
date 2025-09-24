<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infinite Studios Event</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    .podium-1 { background-color: #facc15; } /* gold */
    .podium-2 { background-color: #9ca3af; } /* silver */
    .podium-3 { background-color: #ea580c; } /* bronze */
    
    /* Custom checkbox style */
    .custom-checkbox {
      position: relative;
      padding-left: 30px;
      cursor: pointer;
      display: inline-block;
    }
    
    .custom-checkbox input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }
    
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 20px;
      width: 20px;
      background-color: #eee;
      border-radius: 4px;
    }
    
    .custom-checkbox input:checked ~ .checkmark {
      background-color: #4f46e5;
    }
    
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    
    .custom-checkbox input:checked ~ .checkmark:after {
      display: block;
    }
    
    .custom-checkbox .checkmark:after {
      left: 7px;
      top: 3px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }
  </style>
</head>
<body class="font-sans text-gray-800 bg-white">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 w-full bg-[#EEF0F3] shadow-lg">
    <div class="flex items-center justify-between px-6 py-3 mx-auto max-w-7xl">
        <div class="flex items-center space-x-2">
        <img src="/image/new-is.png" alt="Logo" class="h-8 md:h-10">
        </div>
        <nav class="flex space-x-6 text-sm">
        <a href="/login" class="hover:text-indigo-600">Sign In</a>
        <a href="/register" class="hover:text-indigo-600">Sign Up</a>
        <a href="#contact" class="hover:text-indigo-600">Contact Us</a>
        </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="px-6 py-12 pt-2 pb-6 mx-auto max-w-7xl md:flex md:items-center md:gap-8">
    <div class="relative flex-1 bg-center bg-no-repeat bg-cover" 
     style="background-image: url('/image/bg-running.png');">
        <div class="absolute inset-0 bg-white/80"></div> <!-- overlay agar teks tetap jelas -->
        <div class="relative z-10 p-8">
            <h1 class="font-poppins text-[96px] font-Regular leading-none 
                bg-gradient-to-b from-[#262626] via-gray-400 to-[#B8C2CE] bg-clip-text text-transparent">
                INFINITE <br> STUDIOS <br> EVENT
            </h1>
            <h2 class="mt-4 font-poppins text-[28px] font-bold 
                    bg-gradient-to-b from-[#262626] to-[#B8C2CE] bg-clip-text text-transparent">
                LIMITLESS SPIRIT
            </h2>
            <p class="mt-4 text-gray-600 font-poppins text-[18px] max-w-3xl">
                The Kinema Event is an annual event at PT. Kinema Systrans Multimedia designed 
                to strengthen togetherness, foster creativity, and foster a spirit of collaboration 
                among all employees. Through a series of engaging activities, this event provides 
                a platform for interaction, competition, and celebration of shared achievements.
            </p>
        </div>
    </div>
    <div class="flex-1 mt-8 md:mt-0">
      <img src="/image/winner.png" alt="Hero Person" class="w-full">
    </div>
  </section>

  <!-- Gallery 3D Curve -->
  <section class="py-12 bg-gray-50">
    <div class="gallery-container relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <div class="relative flex items-center justify-center w-full h-full gallery-curve" id="gallery3d">
        <img src="/image/gallery1.jpg" class="gallery-item" style="--i:0">
        <img src="/image/gallery2.jpg" class="gallery-item" style="--i:1">
        <img src="/image/gallery3.jpg" class="gallery-item" style="--i:2">
        <img src="/image/gallery4.jpg" class="gallery-item" style="--i:3">
        <img src="/image/gallery5.jpg" class="gallery-item" style="--i:4">
        </div>
    </div>
  </section>

  <!-- Latest Events -->
  <section class="py-16 pt-6 bg-[#EBEEF3]">
    <div class="px-6 mx-auto max-w-7xl">
        <!-- Swiper Container -->
        <div class="swiper myEvents">
        <div class="swiper-wrapper">

            <!-- ================= SLIDE 2025 ================= -->
            <div class="swiper-slide">
            <h3 class="mb-6 text-2xl font-bold">Event <span class="text-gray-400">2025</span></h3>
            <!-- ========== Leaderboards ========== -->
            <div class="grid gap-8 md:grid-cols-2">

                <!-- Leaderboard Men -->
                <div class="p-6 bg-white shadow-md rounded-xl">
                <h3 class="mb-4 text-lg font-semibold">Leaderboard Men</h3>
                <div class="flex items-end justify-center gap-6 mb-6">
                    <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-2 overflow-hidden border-4 border-gray-400 rounded-full">
                        <img src="/image/camelia.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Camelia</p>
                    <p class="text-sm text-gray-500">6,500 pts</p>
                    <div class="px-4 py-6 font-bold text-white podium-2 rounded-t-md">2</div>
                    </div>
                    <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-2 overflow-hidden border-4 border-yellow-400 rounded-full">
                        <img src="/image/maxwell.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Maxwell</p>
                    <p class="text-sm text-gray-500">7,120 pts</p>
                    <div class="px-6 py-10 font-bold text-white podium-1 rounded-t-md">1</div>
                    </div>
                    <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-2 overflow-hidden border-4 border-orange-500 rounded-full">
                        <img src="/image/wilson.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Wilson</p>
                    <p class="text-sm text-gray-500">4,800 pts</p>
                    <div class="px-4 py-4 font-bold text-white podium-3 rounded-t-md">3</div>
                    </div>
                </div>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center justify-between p-2 border rounded">
                    <span class="flex items-center gap-2">
                        <span class="flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-gray-400 rounded-full">4</span>
                        Jessica Anderson
                    </span>
                    <span>992 pts</span>
                    </li>
                    <li class="flex items-center justify-between p-2 border rounded">
                    <span class="flex items-center gap-2">
                        <span class="flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-gray-400 rounded-full">5</span>
                        Sophia Anderson
                    </span>
                    <span>584 pts</span>
                    </li>
                </ul>
                </div>

                <!-- Leaderboard Women -->
                <div class="p-6 bg-white shadow-md rounded-xl">
                <h3 class="mb-4 text-lg font-semibold">Leaderboard Women</h3>
                <div class="flex items-end justify-center gap-6 mb-6">
                    <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-2 overflow-hidden border-4 border-gray-400 rounded-full">
                        <img src="/image/camelia.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Camelia</p>
                    <p class="text-sm text-gray-500">6,500 pts</p>
                    <div class="px-4 py-6 font-bold text-white podium-2 rounded-t-md">2</div>
                    </div>
                    <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-2 overflow-hidden border-4 border-yellow-400 rounded-full">
                        <img src="/image/maxwell.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Maxwell</p>
                    <p class="text-sm text-gray-500">7,120 pts</p>
                    <div class="px-6 py-10 font-bold text-white podium-1 rounded-t-md">1</div>
                    </div>
                    <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-2 overflow-hidden border-4 border-orange-500 rounded-full">
                        <img src="/image/wilson.jpg" class="object-cover w-full h-full">
                    </div>
                    <p class="font-semibold">Wilson</p>
                    <p class="text-sm text-gray-500">4,800 pts</p>
                    <div class="px-4 py-4 font-bold text-white podium-3 rounded-t-md">3</div>
                    </div>
                </div>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center justify-between p-2 border rounded">
                    <span class="flex items-center gap-2">
                        <span class="flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-gray-400 rounded-full">4</span>
                        Jessica Anderson
                    </span>
                    <span>992 pts</span>
                    </li>
                    <li class="flex items-center justify-between p-2 border rounded">
                    <span class="flex items-center gap-2">
                        <span class="flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-gray-400 rounded-full">5</span>
                        Sophia Anderson
                    </span>
                    <span>584 pts</span>
                    </li>
                </ul>
                </div>
            </div>

            <!-- Awards -->
            <div class="grid gap-8 mt-12 md:grid-cols-2">
                <div class="p-6 bg-white shadow-md rounded-xl">
                <h3 class="mb-4 text-lg font-semibold">CATEGORY MEN</h3>
                <div class="space-y-2">
                    <div class="flex justify-between p-2 border-b"><span>MEN #1</span><span>IDR 1,500,000</span></div>
                    <div class="flex justify-between p-2 border-b"><span>MEN #2</span><span>IDR 1,000,000</span></div>
                </div>
                </div>
                <div class="p-6 bg-white shadow-md rounded-xl">
                <h3 class="mb-4 text-lg font-semibold">CATEGORY WOMEN</h3>
                <div class="space-y-2">
                    <div class="flex justify-between p-2 border-b"><span>WOMEN #1</span><span>IDR 1,500,000</span></div>
                    <div class="flex justify-between p-2 border-b"><span>WOMEN #2</span><span>IDR 1,000,000</span></div>
                </div>
                </div>
            </div>

            <!-- Sponsor -->
            <div class="p-6 mt-8 bg-white shadow-md rounded-xl">
                <div class="flex items-center justify-between mb-6">
                <h3 class="font-semibold text-gray-500">SPONSOR</h3>
                <a href="#" class="text-sm text-indigo-600 hover:underline">View All</a>
                </div>
                <div class="grid items-center grid-cols-2 gap-6 md:grid-cols-6">
                <img src="/image/sponsor1.png" class="h-10 mx-auto">
                <img src="/image/sponsor2.png" class="h-10 mx-auto">
                <img src="/image/sponsor3.png" class="h-10 mx-auto">
                <img src="/image/sponsor4.png" class="h-10 mx-auto">
                <img src="/image/sponsor5.png" class="h-10 mx-auto">
                <img src="/image/sponsor6.png" class="h-10 mx-auto">
                </div>
            </div>
            </div>

            <!-- ================= SLIDE 2024 ================= -->
            <div class="swiper-slide">
            <h3 class="mb-6 text-2xl font-bold">Event <span class="text-gray-400">2024</span></h3>
            <!-- duplikasi struktur leaderboard + awards + sponsor, isi sesuai 2024 -->
            </div>

            <!-- ================= SLIDE 2023 ================= -->
            <div class="swiper-slide">
            <h3 class="mb-6 text-2xl font-bold">Event <span class="text-gray-400">2023</span></h3>
            <!-- duplikasi struktur leaderboard + awards + sponsor, isi sesuai 2023 -->
            </div>

        </div>

        <!-- Pagination Dots -->
        <div class="mt-6 swiper-pagination"></div>
        </div>
    </div>
    </section>

  <!-- Contact -->
  <section id="contact" class="py-16 bg-white">
    <div class="grid gap-10 px-6 mx-auto max-w-7xl md:grid-cols-2">
      <!-- Form -->
      <div>
        <h3 class="mb-6 text-2xl font-bold">CONTACT US</h3>
        <p class="mb-6 text-gray-600">Contact us for all your questions and opinions</p>
        <form class="space-y-4">
          <input type="text" placeholder="Name *" class="w-full p-3 border rounded-md" required>
          <input type="email" placeholder="Email Address *" class="w-full p-3 border rounded-md" required>
          <input type="text" placeholder="Phone Number (Optional)" class="w-full p-3 border rounded-md">
          <select class="w-full p-3 border rounded-md" required>
            <option value="" disabled selected>Country / Region *</option>
            <option>United States (US)</option>
            <option>Indonesia</option>
            <option>Singapore</option>
          </select>
          <textarea rows="4" placeholder="Note about your order, e.g. special note for delivery" class="w-full p-3 border rounded-md"></textarea>
          
          <div class="flex items-start space-x-2">
            <label class="custom-checkbox">
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            <span class="text-sm text-gray-600">I want to receive news and updates once in a while. By submitting, I'm agreed to the Terms & Conditions</span>
          </div>
          
          <button type="submit" class="w-full px-6 py-3 text-white bg-[#182945] rounded-md">SEND MESSAGE</button>
        </form>
      </div>

      <!-- Map and Info -->
      <div>
        <img src="/image/map.png" alt="Map" class="mb-6 rounded-md">
        <blockquote class="p-6 text-white bg-[#182945] rounded-md">
          "Infinite Studios Batam is just a 40-minute ferry ride from Singapore's Tanah Merah Ferry Terminal, making it easily accessible for international filmmakers, production crews, and visitors who are seeking world-class facilities within close proximity to Singapore."
        </blockquote>
        <div class="flex mt-4 space-x-4 text-xl text-[#182945]">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-pinterest"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-6 text-sm text-center text-gray-500 bg-white border-t">
    © 2025 Infinite Studios. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper(".myEvents", {
        loop: false,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });
    let angle = 0;
    const gallery = document.getElementById('gallery3d');

    setInterval(() => {
    angle += 25; // setiap 3 detik geser 25 derajat
    gallery.style.transform = `rotateY(${angle}deg)`;
    }, 3000);
    </script>

    <style>
    .swiper-pagination-bullet {
        background: #9ca3af; /* abu */
        opacity: 1;
    }
    .swiper-pagination-bullet-active {
        background: #182945; /* indigo */
    }
    .gallery-container {
    perspective: 1200px;
    }

    .gallery-curve {
    transform-style: preserve-3d;
    transform: rotateY(0deg);
    }

    .gallery-item {
    position: absolute;
    width: 200px;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    transform: rotateY(calc(var(--i) * 25deg)) translateZ(500px);
    transition: transform 0.8s ease;
    }
    </style>
</body>
</html>