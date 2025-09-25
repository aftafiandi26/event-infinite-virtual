<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="relative flex items-center justify-center min-h-screen p-4">
    <!-- Background -->
    <div class="absolute inset-0 bg-[url('/image/medal-is.jpg')] bg-contain bg-center brightness-50"></div>

    <!-- Main Container -->
    <div class="flex flex-col w-full max-w-4xl overflow-hidden shadow-2xl bg-white-100 rounded-xl md:flex-row">

        <!-- Left Panel (Image & Quotes) -->
        <div class="relative flex flex-col items-center justify-center px-8 pb-8 overflow-hidden text-white md:w-1/2">
            <!-- Background Overlay -->
            <div class="absolute inset-0 bg-slate-600 bg-center bg-cover brightness-50"></div>

            <!-- Logo -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[220px] bg-[url('/image/is-03.png')] bg-contain bg-no-repeat bg-top z-10"></div>

            <!-- Motivational Quotes -->
            <div class="relative z-10 text-center mt-96 space-y-4">
                <p class="text-xl font-bold text-white">"The only impossible journey is the one you never begin."</p>
                <p class="text-lg text-gray-200">"Every champion was once a contender who refused to give up."</p>
                <p class="text-base text-gray-300">"Your only limit is your mind."</p>
            </div>
        </div>

        <!-- Right Panel (Registration Form) -->
        <div class="relative flex flex-col justify-center p-8 bg-white md:w-1/2">

            <!-- Logo Header -->
            <div class="flex justify-center mb-2">
                <div class="w-[280px] h-[80px] bg-[url('/image/ek-is.png')] bg-contain bg-no-repeat bg-center"></div>
            </div>

            <!-- Form Header -->
            <div class="mb-4 text-center">
                <h2 class="text-lg font-bold text-gray-800">Create Your Account</h2>
                <p class="mt-1 text-sm text-gray-600">Join us and be part of this amazing event!</p>
            </div>

            <!-- Registration Form -->
            <form class="space-y-3" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First Name & Last Name -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <!-- First Name -->
                    <div>
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-700">First Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                                <i class="text-gray-400 fas fa-user text-sm"></i>
                            </div>
                            <input type="text" id="first_name" name="first_name"
                                   class="w-full px-3 py-2 pl-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                   placeholder="John" value="{{ old('first_name') }}" required>
                        </div>
                        @error('first_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="last_name" class="block mb-1 text-sm font-medium text-gray-700">Last Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                                <i class="text-gray-400 fas fa-user text-sm"></i>
                            </div>
                            <input type="text" id="last_name" name="last_name"
                                   class="w-full px-3 py-2 pl-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                                   placeholder="Doe" value="{{ old('last_name') }}">
                        </div>
                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                            <i class="text-gray-400 fas fa-envelope text-sm"></i>
                        </div>
                        <input type="email" id="email" name="email"
                               class="w-full px-3 py-2 pl-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="john.doe@email.com" value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block mb-1 text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                            <i class="text-gray-400 fas fa-phone text-sm"></i>
                        </div>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-3 py-2 pl-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="+62 812-3456-7890" value="{{ old('phone') }}" required>
                    </div>
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Address -->
                <div>
                    <label for="address" class="block mb-1 text-sm font-medium text-gray-700">Address (Optional)</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                            <i class="text-gray-400 fas fa-map-marker-alt text-sm"></i>
                        </div>
                        <input type="text" id="address" name="address"
                               class="w-full px-3 py-2 pl-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="Your address" value="{{ old('address') }}">
                    </div>
                    @error('address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                            <i class="text-gray-400 fas fa-lock text-sm"></i>
                        </div>
                        <input type="password" id="password" name="password"
                               class="w-full px-3 py-2 pl-8 pr-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="Enter password" required>
                        <button type="button" onclick="togglePassword('password')"
                                class="absolute inset-y-0 right-0 flex items-center pr-2.5 text-gray-400 hover:text-gray-600">
                            <i id="password-eye" class="fas fa-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                            <i class="text-gray-400 fas fa-lock text-sm"></i>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full px-3 py-2 pl-8 pr-8 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                               placeholder="Confirm password" required>
                        <button type="button" onclick="togglePassword('password_confirmation')"
                                class="absolute inset-y-0 right-0 flex items-center pr-2.5 text-gray-400 hover:text-gray-600">
                            <i id="password_confirmation-eye" class="fas fa-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <input type="checkbox" id="terms" name="terms"
                           class="w-4 h-4 mt-1 border-gray-300 rounded accent-indigo-900 focus:ring-indigo-900" required>
                    <label for="terms" class="block ml-2 text-sm text-gray-700">
                        I agree to the <a href="#" class="text-indigo-900 hover:text-secondary underline">Terms and Conditions</a>
                        and <a href="#" class="text-indigo-900 hover:text-secondary underline">Privacy Policy</a>
                    </label>
                </div>
                @error('terms')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="w-full px-4 py-2 font-medium text-white transition duration-300 bg-orange-500 rounded-lg hover:bg-orange-600">
                        <i class="fas fa-user-plus mr-2"></i>
                        Create Account
                    </button>
                </div>
            </form>

            <!-- Footer Link -->
            <div class="mt-4 text-center">
                <p class="text-sm text-indigo-900">
                    You Have Registered?
                    <a href="{{ route('login') }}" class="font-medium text-indigo-900 hover:text-secondary">Let's go login</a>
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId + '-eye');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
