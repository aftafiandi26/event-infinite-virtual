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
<body class="flex items-center justify-center min-h-screen p-4 bg-gradient-to-br from-blue-900 to-indigo-900">
    <div class="flex flex-col w-full max-w-4xl overflow-hidden bg-white shadow-2xl rounded-xl md:flex-row">
        <!-- Bagian Kiri (Gambar) -->
        <div class="relative flex flex-col items-center justify-center px-8 pb-8 overflow-hidden text-white md:w-1/2 bg-gradient-to-b from-blue-800 to-indigo-900">
    
            <!-- Logo besar, nempel di atas -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[220px] 
                        bg-[url('/image/logo-new.png')] bg-contain bg-no-repeat bg-top"></div>

            <!-- Konten teks -->
            <div class="relative z-10 flex flex-col items-center text-center pt-44">
                <h3 class="mb-1 text-2xl font-semibold">EVENT</h3>
                <h4 class="mb-2 text-5xl font-bold text-accent">KINEMA</h4>
                <p class="mb-1 text-sm font-bold">PT KINEMA SYSTEMS MULTIMEDIA</p>
                <div class="w-full h-1 mx-auto mb-3 bg-accent"></div>
            </div>

            <div class="relative z-10 mt-20 text-center">
                <p class="mb-1 text-lg font-semibold">Register now and secure your spot!</p>
                <p class="text-sm">Discover.Join.Experience.Choose your sport event and be part of the action!</p>
            </div>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="relative flex flex-col justify-center p-8 md:w-1/2">
    
            <!-- Logo di atas card -->
            <div class="flex justify-center">
                <div class="w-[280px] h-[80px] bg-[url('/image/logo-infinite.png')] bg-contain bg-no-repeat bg-center"></div>
            </div>

            <div class="mb-8 text-center">
                <h2 class="text-xl font-bold text-gray-800">Login to your Account</h2>
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
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Kata Sandi</label>
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
                    <button type="submit" class="w-full px-4 py-3 font-medium text-white transition duration-300 bg-indigo-900 rounded-lg hover:bg-secondary">
                        Masuk
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