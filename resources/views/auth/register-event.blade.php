<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Event - KINEMA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="relative flex items-center justify-center min-h-screen p-4">
  <!-- Background -->
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('image/medal-is.JPG') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
  </div>

  <div class="flex flex-col w-full max-w-5xl overflow-hidden shadow-2xl bg-white rounded-xl md:flex-row relative z-10">
    <!-- Bagian Kiri (Event Info) -->
    <div class="relative flex flex-col items-center justify-center px-8 pb-8 overflow-hidden text-white md:w-1/2">
      <!-- Background dengan gradient -->
      <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-700 to-slate-900"></div>

      <!-- Pola geometris -->
      <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500 transform rotate-45"></div>
        <div class="absolute top-20 right-16 w-16 h-16 bg-green-500 transform rotate-12"></div>
        <div class="absolute top-32 left-20 w-12 h-12 bg-yellow-500 transform -rotate-12"></div>
        <div class="absolute top-40 right-20 w-14 h-14 bg-orange-500 transform rotate-45"></div>
        <div class="absolute top-52 left-16 w-18 h-18 bg-red-500 transform -rotate-45"></div>
      </div>

      <!-- Event Logo -->
      <div class="relative z-10 text-center mt-20">
        <h1 class="text-4xl font-bold text-white mb-2">INFINITE VIRTUAL RUN</h1>
        <p class="text-sm text-gray-300 mb-8">VIRTUAL SPORTING EVENT 2024</p>
      </div>

      <!-- Event Details -->
      <div class="relative z-10 text-center mt-8 space-y-4">
        <div class="flex items-center justify-center space-x-2">
          <i class="fas fa-calendar-alt text-orange-400"></i>
          <span class="text-sm">December 15, 2024</span>
        </div>
        <div class="flex items-center justify-center space-x-2">
          <i class="fas fa-clock text-orange-400"></i>
          <span class="text-sm">08:00 AM - 06:00 PM</span>
        </div>
        <div class="flex items-center justify-center space-x-2">
          <i class="fas fa-map-marker-alt text-orange-400"></i>
          <span class="text-sm">Virtual Event</span>
        </div>
      </div>

      <div class="relative z-10 text-center mt-96">
        <p class="text-xl font-bold">Join the ultimate virtual running experience!</p>
        <p class="text-sm mt-2">Register now and be part of this amazing event!</p>
      </div>
    </div>

    <!-- Bagian Kanan (Form Register) -->
    <div class="relative flex flex-col justify-center p-8 bg-white md:w-1/2">
      <!-- Logo di atas card -->
      <div class="flex justify-center mb-2">
        <div class="w-[280px] h-[80px] bg-[url('/image/ek-is.png')] bg-contain bg-no-repeat bg-center"></div>
      </div>

      <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Register for Event</h2>
        <p class="mt-2 text-sm text-gray-600">Fill in your details to join this amazing event!</p>
      </div>

      <form class="space-y-4">
        <!-- Personal Information -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="first_name" class="block mb-1 text-sm font-medium text-gray-700">First Name</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-gray-400 fas fa-user"></i>
              </div>
              <input type="text" id="first_name" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="John">
            </div>
          </div>

          <div>
            <label for="last_name" class="block mb-1 text-sm font-medium text-gray-700">Last Name</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="text-gray-400 fas fa-user"></i>
              </div>
              <input type="text" id="last_name" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Doe">
            </div>
          </div>
        </div>

        <div>
          <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email Address</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="text-gray-400 fas fa-envelope"></i>
            </div>
            <input type="email" id="email" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="john.doe@email.com">
          </div>
        </div>

        <div>
          <label for="phone" class="block mb-1 text-sm font-medium text-gray-700">Phone Number</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="text-gray-400 fas fa-phone"></i>
            </div>
            <input type="tel" id="phone" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="+62 812-3456-7890">
          </div>
        </div>

        <!-- Event Category Selection -->
        <div>
          <label for="event_category" class="block mb-1 text-sm font-medium text-gray-700">Event Category</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="text-gray-400 fas fa-running"></i>
            </div>
            <select id="event_category" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
              <option value="">Select Event Category</option>
              <option value="5k">5K Run</option>
              <option value="10k">10K Run</option>
              <option value="21k">Half Marathon (21K)</option>
              <option value="42k">Full Marathon (42K)</option>
            </select>
          </div>
        </div>

        <!-- Emergency Contact -->
        <div>
          <label for="emergency_contact" class="block mb-1 text-sm font-medium text-gray-700">Emergency Contact</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="text-gray-400 fas fa-phone-alt"></i>
            </div>
            <input type="tel" id="emergency_contact" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="+62 812-3456-7890">
          </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-start">
          <input type="checkbox" id="terms" class="w-4 h-4 mt-1 border-gray-300 rounded accent-indigo-900 focus:ring-indigo-900">
          <label for="terms" class="block ml-2 text-sm text-gray-700">
            I agree to the <a href="#" class="text-indigo-900 hover:text-secondary underline">Terms and Conditions</a> and <a href="#" class="text-indigo-900 hover:text-secondary underline">Privacy Policy</a>
          </label>
        </div>

        <div class="flex items-start">
          <input type="checkbox" id="health" class="w-4 h-4 mt-1 border-gray-300 rounded accent-indigo-900 focus:ring-indigo-900">
          <label for="health" class="block ml-2 text-sm text-gray-700">
            I confirm that I am physically fit and healthy to participate in this event
          </label>
        </div>

        <div>
          <button type="submit" class="w-full px-4 py-3 font-medium text-white transition duration-300 bg-orange-500 rounded-lg hover:bg-orange-600">
            <i class="fas fa-user-plus mr-2"></i>
            Register for Event
          </button>
        </div>
      </form>

      <div class="mt-6 text-center">
        <p class="text-sm text-indigo-900">
          Already have an account?
          <a href="{{ route('login') }}" class="font-medium text-indigo-900 hover:text-secondary">Sign in here</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
