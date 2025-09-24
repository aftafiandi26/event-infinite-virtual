<section class="py-8 sm:py-12 bg-gray-50">
    <div class="px-4 sm:px-6 mx-auto max-w-7xl">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#182945] mb-6 sm:mb-8">Event Gallery</h2>

        <!-- Desktop Sliding Gallery -->
        <div class="hidden md:block">
            <div class="desktop-gallery-container relative w-full mx-auto overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl shadow-lg p-6">
                @php
                    // Konfigurasi gallery - Mudah diubah sesuai kebutuhan
                    $totalImages = 50; // Jumlah total images (ubah sesuai kebutuhan)
                    $imagesPerSlide = 6; // Jumlah images per slide (3x2 grid)
                    $totalSlides = ceil($totalImages / $imagesPerSlide); // Hitung total slides otomatis

                    // Debug info (opsional)
                    // echo "Total Images: $totalImages, Images per Slide: $imagesPerSlide, Total Slides: $totalSlides";
                @endphp

                <div class="desktop-gallery-slider flex transition-transform duration-500 ease-in-out" id="desktopGallerySlider">
                    @for ($i = 0; $i < $totalSlides; $i++)
                        <div class="desktop-gallery-slide flex-shrink-0 w-full">
                            <div class="grid grid-cols-3 gap-6">
                                @for ($j = 0; $j < $imagesPerSlide; $j++)
                                    @php $imageIndex = $i * $imagesPerSlide + $j; @endphp
                                    @if($imageIndex < $totalImages)
                                        <div class="desktop-gallery-item-container">
                                            <img src="https://picsum.photos/seed/gallery{{ $imageIndex + 1 }}/400/300"
                                                 class="desktop-gallery-item w-full h-48 object-cover rounded-lg shadow-md transition-all duration-500 ease-out cursor-pointer"
                                                 alt="Event Gallery {{ $imageIndex + 1 }}"
                                                 data-index="{{ $imageIndex }}"
                                                 data-full-src="https://picsum.photos/seed/gallery{{ $imageIndex + 1 }}/1200/800"
                                                 onclick="openGalleryModal({{ $imageIndex }}, '{{ $totalImages }}')">
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Desktop Gallery Controls -->
                <div class="flex justify-between items-center mt-6">
                    <button class="desktop-gallery-prev px-4 py-2 bg-[#182945] text-white rounded-lg hover:bg-[#1a1f3a] transition-colors duration-300 shadow-md">
                        <i class="fas fa-chevron-left mr-2"></i>Previous
                    </button>

                    <!-- Desktop Gallery Dots -->
                    <div class="flex space-x-2">
                        @for ($i = 0; $i < $totalSlides; $i++)
                            <button class="desktop-gallery-dot w-3 h-3 rounded-full {{ $i === 0 ? 'bg-[#182945]' : 'bg-gray-300' }} hover:bg-[#182945] transition-all duration-300" data-slide="{{ $i }}"></button>
                        @endfor
                    </div>

                    <button class="desktop-gallery-next px-4 py-2 bg-[#182945] text-white rounded-lg hover:bg-[#1a1f3a] transition-colors duration-300 shadow-md">
                        Next<i class="fas fa-chevron-right ml-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile & Tablet Sliding Gallery -->
        <div class="md:hidden">
            @php
                // Konfigurasi mobile gallery - Otomatis menyesuaikan
                $mobileTotalImages = $totalImages; // Gunakan total images yang sama
                $mobileImagesPerSlide = 4; // 2x2 grid untuk mobile
                $mobileTotalSlides = ceil($mobileTotalImages / $mobileImagesPerSlide); // Hitung total slides otomatis
            @endphp

            <div class="gallery-slider-container overflow-hidden">
                <div class="gallery-slider flex transition-transform duration-500 ease-in-out" id="gallerySlider">
                    @for ($i = 0; $i < $mobileTotalSlides; $i++)
                        <div class="gallery-slide flex-shrink-0 w-full">
                            <div class="grid grid-cols-2 gap-4">
                                @for ($j = 0; $j < $mobileImagesPerSlide; $j++)
                                    @php $mobileImageIndex = $i * $mobileImagesPerSlide + $j; @endphp
                                    @if($mobileImageIndex < $mobileTotalImages)
                                        <div class="mobile-gallery-item-container">
                                            <img src="https://picsum.photos/seed/gallery{{ $mobileImageIndex + 1 }}/300/200"
                                                class="mobile-gallery-item w-full h-32 sm:h-40 object-cover rounded-lg shadow-md hover:shadow-lg transition-all duration-300 cursor-pointer"
                                                alt="Event Gallery {{ $mobileImageIndex + 1 }}"
                                                data-index="{{ $mobileImageIndex }}"
                                                data-full-src="https://picsum.photos/seed/gallery{{ $mobileImageIndex + 1 }}/800/600"
                                                onclick="openGalleryModal({{ $mobileImageIndex }}, '{{ $mobileTotalImages }}')">
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Navigation Dots -->
                <div class="flex justify-center mt-6 space-x-2">
                    @for ($i = 0; $i < $mobileTotalSlides; $i++)
                        <button class="gallery-dot w-3 h-3 rounded-full {{ $i === 0 ? 'bg-[#182945]' : 'bg-gray-300' }} hover:bg-[#182945] transition-all duration-300" data-slide="{{ $i }}"></button>
                    @endfor
                </div>

                <!-- Navigation Arrows -->
                <div class="flex justify-between items-center mt-4">
                    <button class="gallery-prev px-4 py-2 bg-[#182945] text-white rounded-lg hover:bg-[#1a1f3a] transition-colors duration-300">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="gallery-next px-4 py-2 bg-[#182945] text-white rounded-lg hover:bg-[#1a1f3a] transition-colors duration-300">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- Gallery Modal -->
<div id="galleryModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-90 items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full w-full h-full flex items-center justify-center">
        <!-- Close Button -->
        <button id="closeModal" class="absolute top-4 right-4 z-10 text-white hover:text-gray-300 transition-colors duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Navigation Arrows -->
        <button id="prevImage" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 text-white hover:text-gray-300 transition-colors duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button id="nextImage" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 text-white hover:text-gray-300 transition-colors duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Modal Image -->
        <img id="modalImage" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" alt="Gallery Image">

        <!-- Image Counter -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full">
            <span id="imageCounter">1 / 50</span>
        </div>
    </div>
</div>
