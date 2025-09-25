<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Event Infinite Virtual</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes slide-in-right {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slide-in-right {
            animation: slide-in-right 0.5s ease-out;
        }

        .toast-notification {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="relative flex items-center justify-center min-h-screen p-4">
    <!-- Background -->
    <div class="absolute inset-0 bg-[url('/image/medal-is.jpg')] bg-contain bg-center brightness-50"></div>

    <div class="flex flex-col w-full max-w-4xl overflow-hidden shadow-2xl bg-white-100 rounded-xl md:flex-row">
        <!-- Bagian Kiri (Gambar) -->
        <div class="relative flex flex-col items-center justify-center px-8 pb-8 overflow-hidden text-white md:w-1/2">
            <!-- Background + brightness -->
            <div class="absolute inset-0 bg-slate-600 bg-center bg-cover brightness-50"></div>

            <!-- Logo besar (tidak terkena efek) -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[220px]
                        bg-[url('/image/is-03.png')] bg-contain bg-no-repeat bg-top z-10"></div>

            <!-- Modern Toast Notifications - Mobile Optimized -->
            @if(session('success'))
                <div class="fixed top-2 right-2 left-2 sm:top-4 sm:right-4 sm:left-auto z-50 max-w-sm sm:max-w-md animate-slide-in-right">
                    <div class="bg-white rounded-xl shadow-2xl border-l-4 border-green-500 p-3 sm:p-4 backdrop-blur-sm bg-opacity-95">
                        <div class="flex items-start space-x-2 sm:space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-6 h-6 sm:w-8 sm:h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-green-600 text-xs sm:text-sm"></i>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">
                                    {{ session('success') }}
                                </h3>
                                @if(session('verification_sent') && session('email'))
                                    <div class="text-xs text-gray-600 space-y-1">
                                        <p>We've sent a verification link to:</p>
                                        <p class="font-medium text-blue-600 break-all">{{ session('email') }}</p>
                                        <p>Please check your email and click the verification link to activate your account.</p>
                                    </div>
                                @endif
                            </div>
                            <button onclick="this.parentElement.parentElement.remove()" class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition-colors p-1">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="fixed top-2 right-2 left-2 sm:top-4 sm:right-4 sm:left-auto z-50 max-w-sm sm:max-w-md animate-slide-in-right">
                    <div class="bg-white rounded-xl shadow-2xl border-l-4 border-red-500 p-3 sm:p-4 backdrop-blur-sm bg-opacity-95">
                        <div class="flex items-start space-x-2 sm:space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-6 h-6 sm:w-8 sm:h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exclamation text-red-600 text-xs sm:text-sm"></i>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xs sm:text-sm font-semibold text-gray-900 mb-1 sm:mb-2">Login Failed</h3>
                                <div class="text-xs text-gray-600 space-y-1">
                                    <ul class="list-disc list-inside">
                                        @foreach($errors->all() as $error)
                                            <li class="break-words">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <button onclick="this.parentElement.parentElement.remove()" class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition-colors p-1">
                                <i class="fas fa-times text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            <div class="relative z-10 text-center mt-96">
                <p class="text-xl font-bold">Register now and secure your spot!</p>
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

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 fas fa-envelope"></i>
                        </div>
                        <input type="email"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('email') border-red-500 @enderror"
                               placeholder="alamat@email.com"
                               required
                               autofocus>
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 fas fa-lock"></i>
                        </div>
                        <input type="password"
                               id="password"
                               name="password"
                               class="w-full px-4 py-3 pl-10 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('password') border-red-500 @enderror"
                               placeholder="Enter password"
                               required>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox"
                               id="remember"
                               name="remember"
                               class="w-4 h-4 border-gray-300 rounded accent-indigo-900 focus:ring-indigo-900">
                        <label for="remember" class="block ml-2 text-sm text-gray-700">Remember Me</label>
                    </div>

                    <a href="{{ route('password.request') }}"
                       class="text-sm font-medium text-indigo-900 hover:text-secondary">
                        Forgot Password?
                    </a>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="w-full px-4 py-3 font-medium text-white transition duration-300 bg-orange-500 rounded-lg hover:bg-orange-600">
                        Sign in
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-indigo-900">
                    Not Registered Yet?
                    <a href="{{ route('register') }}"
                       class="font-medium text-indigo-900 hover:text-secondary">
                        Create an account
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
