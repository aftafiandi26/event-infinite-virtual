<x-guest-layout>
    <div class="flex min-h-screen">
        <!-- Bagian Kiri -->
        <div class="flex-col items-center justify-center hidden p-10 bg-white md:flex w-1/">
            <img src="{{ asset('image/logo.png') }}" class="w-1/2 mb-10">
            
            <div class="text-center">
                <h2 class="mb-2 text-3xl font-bold tracking-wide">EVENT KINEMA</h2>
                <p class="text-gray-700">PT KINEMA SYSTRANS MULTIMEDIA</p>
            </div>

            <div class="mt-10 text-center">
                <h3 class="text-xl font-semibold">Register now and secure your spot!</h3>
                <p class="mt-2 text-gray-600">
                    Discover. Join. Experience. Choose your sport event and be part of the action!
                </p>
            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="flex items-center justify-center w-full p-8 bg-gray-100 md:w-1/2">
            <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
                <div class="flex flex-col items-center mb-6">
                    <img src="/images/ifw-logo.png" alt="IFW Logo" class="w-20 mb-4">
                    <h2 class="text-2xl font-bold">Login to your Account</h2>
                </div>

                <!-- Google Login -->
                <a href="#"
                   class="flex items-center justify-center px-4 py-2 mb-6 border border-gray-300 rounded-lg hover:bg-gray-50">
                    <img src="/images/google-icon.png" class="w-5 h-5 mr-2" alt="Google">
                    <span class="text-gray-700">Continue with Google</span>
                </a>

                <div class="mb-6 text-sm text-center text-gray-400">
                    ------------- or Sign in with Email -------------
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full mt-1"
                                      type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block w-full mt-1"
                                      type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="text-red-600 border-gray-300 rounded focus:ring-red-500"
                                   name="remember">
                            <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-sm text-red-600 hover:underline">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <!-- Button -->
                    <x-primary-button class="w-full px-4 py-2 text-white bg-red-600 rounded-lg hover:bg-red-800">
                        {{ __('Login') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
