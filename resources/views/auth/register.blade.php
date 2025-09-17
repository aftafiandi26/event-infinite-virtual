<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KINEMA</title>
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
                <p class="mb-1 text-lg font-semibold">Create your account and be part of the game!</p>
                <p class="text-sm">Find events, join freely, and experience the energy of sports.</p>
            </div>
        </div>

        <!-- Bagian Kanan (Form Register) -->
        <div class="relative flex flex-col justify-center p-8 md:w-1/2">
    
            <!-- Logo di atas card -->
            <div class="flex justify-center">
                <div class="w-[280px] h-[80px] bg-[url('/image/logo-infinite.png')] bg-contain bg-no-repeat bg-center"></div>
            </div>

            <div class="mb-8 text-center">
                <h2 class="text-xl font-bold text-gray-800">Create Your Account</h2>
                <p class="mt-2 text-sm text-gray-600">Join us today and be part of the action!</p>
            </div>
            
            <!-- FORM REGISTER -->
            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                           class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                           class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Button -->
                <div>
                    <button type="submit" class="w-full px-4 py-3 font-medium text-white transition duration-300 bg-indigo-900 rounded-lg hover:bg-secondary">
                        Register
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-indigo-900">
                    Already registered? 
                    <a href="{{ route('welcome') }}" class="font-medium text-indigo-900 hover:text-secondary">Login here</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
