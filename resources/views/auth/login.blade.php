<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KINEMA</title>
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
                    }
                }
            }
        }
    </script>
</head>
<body class="relative flex items-center justify-center min-h-screen p-4">
  <!-- Background -->
  <div class="absolute inset-0 bg-[url('/image/medal-is.jpg')] bg-contain bg-center brightness-50"></div>
    <div class="flex flex-col w-full max-w-4xl overflow-hidden shadow-2xl bg-white-100 rounded-xl md:flex-row">
        <!-- Bagian Kiri (Gambar) -->
        <div class="relative flex flex-col items-center justify-center px-8 pb-8 overflow-hidden text-white md:w-1/2">
            <!-- Background + brightness -->
            <div class="absolute inset-0 bg-gray-800 bg-center bg-cover brightness-50"></div>

            <!-- Logo besar (tidak terkena efek) -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[220px] 
                        bg-[url('/image/is-03.png')] bg-contain bg-no-repeat bg-top z-10"></div>

            <!-- Konten teks
            <div class="relative z-10 flex flex-col items-center text-center pt-44">
                <h3 class="mb-1 text-2xl font-semibold">EVENT</h3>
                <h4 class="mb-2 text-5xl font-bold text-accent">KINEMA</h4>
                <p class="mb-1 text-sm font-bold">PT KINEMA SYSTEMS MULTIMEDIA</p>
                <div class="w-full h-1 mx-auto mb-3 bg-accent"></div>
            </div> -->

            <div class="relative z-10 text-center mt-96">
                <p class="text-lg font-bold">Register now and secure your spot!</p>
                <p class="text-sm">Discover.Join.Experience.Choose your sport event and be part of the action!</p>
            </div>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="relative flex flex-col justify-center p-8 bg-white md:w-1/2">
    
            <!-- Logo di atas card -->
            <div class="flex justify-center mb-2">
                <div class="w-[280px] h-[80px] bg-[url('/image/ek-is.png')] bg-contain bg-no-repeat bg-center"></div>
            </div>

            <div class="mb-8 text-center">
                <h2 class="text-base font-bold text-gray-800">Login to your Account</h2>
                <p class="mt-2 text-sm text-gray-600">Welcome back! Please sign in to continue.</p>
            </div>
            
            <form class="space-y-3">
                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 fas fa-envelope"></i>
                        </div>
                        <input type="email" id="email" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="alamat@email.com">
                    </div>
                </div>
                
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 fas fa-lock"></i>
                        </div>
                        <input type="password" id="password" class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter password">
                    </div>
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="w-4 h-4 border-gray-300 rounded accent-indigo-900 focus:ring-indigo-900">
                        <label for="remember" class="block ml-2 text-sm text-gray-700">Remember Me</label>
                    </div>
                    
                    <a href="#" class="text-sm font-medium text-indigo-900 hover:text-secondary">Forgot Password?</a>
                </div>
                
                <div>
                    <button type="submit" class="w-full px-4 py-3 font-medium text-white transition duration-300 bg-orange-500 rounded-lg hover:bg-orange-600">
                        Sign in
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-indigo-900">
                    Not Registered Yet? 
                    <a href="{{ route('register') }}" class="font-medium text-indigo-900 hover:text-secondary">Create an account</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>