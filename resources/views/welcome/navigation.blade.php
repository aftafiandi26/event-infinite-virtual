<header class="sticky top-0 z-50 w-full bg-[#EEF0F3] shadow-lg">
    <div class="flex items-center justify-between px-4 sm:px-6 py-3 mx-auto max-w-7xl">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="/image/new-is.png" alt="Logo" class="h-8 md:h-10">
            {{-- <div class="hidden sm:block">
                <h1 class="text-lg font-bold text-[#182945]">EVENT <span class="text-[#f59e0b]">KINEMA</span></h1>
            </div> --}}
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-6 text-sm">
            <a href="/login" class="text-[#182945] hover:text-[#f59e0b] font-medium transition-colors duration-200">Sign In</a>
            <a href="/register" class="text-[#182945] hover:text-[#f59e0b] font-medium transition-colors duration-200">Sign Up</a>
            <a href="#contact" class="text-[#182945] hover:text-[#f59e0b] font-medium transition-colors duration-200">Contact Us</a>
        </nav>

        <!-- Mobile Hamburger Menu -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-[#182945] hover:text-[#f59e0b] hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/login" class="block px-3 py-2 text-base font-medium text-[#182945] hover:text-[#f59e0b] hover:bg-gray-50 rounded-md transition-colors duration-200">
                Sign In
            </a>
            <a href="/register" class="block px-3 py-2 text-base font-medium text-[#182945] hover:text-[#f59e0b] hover:bg-gray-50 rounded-md transition-colors duration-200">
                Sign Up
            </a>
            <a href="#contact" class="block px-3 py-2 text-base font-medium text-[#182945] hover:text-[#f59e0b] hover:bg-gray-50 rounded-md transition-colors duration-200">
                Contact Us
            </a>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuButton.addEventListener('click', function() {
        const isHidden = mobileMenu.classList.contains('hidden');

        if (isHidden) {
            mobileMenu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });

    // Close mobile menu when clicking on links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
});
</script>
