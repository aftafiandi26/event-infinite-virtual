<section id="contact" class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="grid gap-6 sm:gap-8 lg:gap-10 px-4 sm:px-6 mx-auto max-w-7xl sm:grid-cols-1 lg:grid-cols-2">

        <!-- ========== CONTACT FORM SECTION ========== -->
        <div>
            <!-- Form Header -->
            <div class="mb-4 sm:mb-6">
                <h3 class="mb-2 text-xl sm:text-2xl font-bold text-center sm:text-left">
                    CONTACT US
                </h3>
                <p class="text-sm sm:text-base text-gray-600 text-center sm:text-left">
                    Contact us for all your questions and opinions
                </p>
            </div>

            <!-- Contact Form -->
            <form class="space-y-3 sm:space-y-4">
                <!-- Personal Information Fields -->
                <div class="space-y-3 sm:space-y-4">
                    <input type="text"
                           placeholder="Name *"
                           class="w-full p-3 text-sm sm:text-base border border-gray-300 rounded-md focus:ring-2 focus:ring-[#f59e0b] focus:border-transparent"
                           required>

                    <input type="email"
                           placeholder="Email Address *"
                           class="w-full p-3 text-sm sm:text-base border border-gray-300 rounded-md focus:ring-2 focus:ring-[#f59e0b] focus:border-transparent"
                           required>

                    <input type="text"
                           placeholder="Phone Number (Optional)"
                           class="w-full p-3 text-sm sm:text-base border border-gray-300 rounded-md focus:ring-2 focus:ring-[#f59e0b] focus:border-transparent">
                </div>

                <!-- Location Selection -->
                <select class="w-full p-3 text-sm sm:text-base border border-gray-300 rounded-md focus:ring-2 focus:ring-[#f59e0b] focus:border-transparent"
                        required>
                    <option value="" disabled selected>Country / Region *</option>
                    <option value="US">United States (US)</option>
                    <option value="ID">Indonesia</option>
                    <option value="SG">Singapore</option>
                    <option value="MY">Malaysia</option>
                    <option value="TH">Thailand</option>
                </select>

                <!-- Message Field -->
                <textarea rows="4"
                          placeholder="Tell us about your inquiry or feedback"
                          class="w-full p-3 text-sm sm:text-base border border-gray-300 rounded-md focus:ring-2 focus:ring-[#f59e0b] focus:border-transparent resize-none">
                </textarea>

                <!-- Terms and Conditions -->
                <div class="flex items-start space-x-2">
                    <label class="custom-checkbox">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <span class="text-xs sm:text-sm text-gray-600">
                        I want to receive news and updates once in a while. By submitting, I'm agreed to the
                        <a href="#" class="text-[#f59e0b] hover:underline">Terms & Conditions</a>
                    </span>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full px-4 sm:px-6 py-3 text-sm sm:text-base text-white bg-[#182945] rounded-md hover:bg-[#1a1f3a] transition-colors duration-200 font-medium">
                    SEND MESSAGE
                </button>
            </form>
        </div>

        <!-- ========== LOCATION & INFO SECTION ========== -->
        <div class="mt-6 sm:mt-0">
            <!-- Map Section -->
            <div class="mb-4 sm:mb-6">
                <div class="w-full h-64 bg-gray-200 rounded-md shadow-md flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-map-marker-alt text-4xl text-gray-400 mb-2"></i>
                        <p class="text-gray-600 font-medium">Interactive Map</p>
                        <p class="text-sm text-gray-500">Infinite Studios Batam Location</p>
                    </div>
                </div>
            </div>

            <!-- Location Description -->
            <blockquote class="p-4 sm:p-6 text-sm sm:text-base text-white bg-[#182945] rounded-md mb-4">
                "Infinite Studios Batam is just a 40-minute ferry ride from Singapore's Tanah Merah Ferry Terminal,
                making it easily accessible for international filmmakers, production crews, and visitors who are
                seeking world-class facilities within close proximity to Singapore."
            </blockquote>

            <!-- Contact Information -->
            <div class="mb-4 p-4 bg-gray-50 rounded-md">
                <h4 class="font-semibold text-gray-800 mb-2">Contact Information</h4>
                <div class="space-y-1 text-sm text-gray-600">
                    <p><i class="fas fa-map-marker-alt text-[#f59e0b] mr-2"></i>Batam, Indonesia</p>
                    <p><i class="fas fa-phone text-[#f59e0b] mr-2"></i>+62 778 123 4567</p>
                    <p><i class="fas fa-envelope text-[#f59e0b] mr-2"></i>info@infinitestudios.com</p>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="flex justify-center sm:justify-start space-x-4 text-lg sm:text-xl text-[#182945]">
                <a href="#"
                   class="hover:text-[#f59e0b] transition-colors duration-200"
                   title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                   class="hover:text-[#f59e0b] transition-colors duration-200"
                   title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"
                   class="hover:text-[#f59e0b] transition-colors duration-200"
                   title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#"
                   class="hover:text-[#f59e0b] transition-colors duration-200"
                   title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#"
                   class="hover:text-[#f59e0b] transition-colors duration-200"
                   title="Pinterest">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        </div>
    </div>
</section>
