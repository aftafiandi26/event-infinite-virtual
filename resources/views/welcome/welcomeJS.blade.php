<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// Initialize Swiper for Events
const swiper = new Swiper(".myEvents", {
    loop: false,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// 3D Gallery Animation (if element exists)
let angle = 0;
const gallery = document.getElementById('gallery3d');

if (gallery) {
    setInterval(() => {
        angle += 25; // setiap 3 detik geser 25 derajat
        gallery.style.transform = `rotateY(${angle}deg)`;
    }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
    // Desktop Sliding Gallery Controls
    const desktopSlider = document.getElementById('desktopGallerySlider');
    const desktopPrevBtn = document.querySelector('.desktop-gallery-prev');
    const desktopNextBtn = document.querySelector('.desktop-gallery-next');
    const desktopDots = document.querySelectorAll('.desktop-gallery-dot');

    if (desktopSlider && desktopDots.length > 0) {
        let currentDesktopSlide = 0;
        const totalDesktopSlides = desktopDots.length;

        // Update desktop slider position
        function updateDesktopSlider() {
            desktopSlider.style.transform = `translateX(-${currentDesktopSlide * 100}%)`;

            // Update dots
            desktopDots.forEach((dot, index) => {
                if (index === currentDesktopSlide) {
                    dot.classList.add('active');
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-[#182945]');
                } else {
                    dot.classList.remove('active');
                    dot.classList.add('bg-gray-300');
                    dot.classList.remove('bg-[#182945]');
                }
            });
        }

        // Next slide
        function nextDesktopSlide() {
            currentDesktopSlide = (currentDesktopSlide + 1) % totalDesktopSlides;
            updateDesktopSlider();
        }

        // Previous slide
        function prevDesktopSlide() {
            currentDesktopSlide = (currentDesktopSlide - 1 + totalDesktopSlides) % totalDesktopSlides;
            updateDesktopSlider();
        }

        // Event listeners
        if (desktopNextBtn) {
            desktopNextBtn.addEventListener('click', nextDesktopSlide);
        }

        if (desktopPrevBtn) {
            desktopPrevBtn.addEventListener('click', prevDesktopSlide);
        }

        // Dot navigation
        desktopDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentDesktopSlide = index;
                updateDesktopSlider();
            });
        });

        // Auto-play for desktop gallery
        let desktopAutoPlay = setInterval(nextDesktopSlide, 6000);

        // Pause auto-play on hover
        if (desktopSlider) {
            desktopSlider.addEventListener('mouseenter', () => {
                clearInterval(desktopAutoPlay);
            });

            desktopSlider.addEventListener('mouseleave', () => {
                desktopAutoPlay = setInterval(nextDesktopSlide, 6000);
            });
        }

        // Initialize
        updateDesktopSlider();
    }

    // Mobile Sliding Gallery
    const slider = document.getElementById('gallerySlider');
    const dots = document.querySelectorAll('.gallery-dot');
    const prevBtn = document.querySelector('.gallery-prev');
    const nextBtn = document.querySelector('.gallery-next');

    if (slider && dots.length > 0) {
        let currentSlide = 0;
        const totalSlides = dots.length; // Otomatis menyesuaikan dengan jumlah dots

    // Update slider position
    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;

        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active');
                dot.classList.remove('bg-gray-300');
                dot.classList.add('bg-[#182945]');
            } else {
                dot.classList.remove('active');
                dot.classList.add('bg-gray-300');
                dot.classList.remove('bg-[#182945]');
            }
        });
    }

    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }

    // Previous slide
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }

    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });

    // Touch/swipe support
    let startX = 0;
    let endX = 0;

    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    function handleSwipe() {
        const threshold = 50;
        const diff = startX - endX;

        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextSlide(); // Swipe left - next slide
            } else {
                prevSlide(); // Swipe right - previous slide
            }
        }
    }

    // Auto-play (optional)
    let autoPlay = setInterval(nextSlide, 5000);

    // Pause auto-play on hover
    slider.addEventListener('mouseenter', () => {
        clearInterval(autoPlay);
    });

    slider.addEventListener('mouseleave', () => {
        autoPlay = setInterval(nextSlide, 5000);
    });

        // Initialize
        updateSlider();
    }

    // Gallery Modal Functionality
    let currentModalImage = 0;
    let totalModalImages = 0;
    let imageSources = [];

    // Open modal function
    window.openGalleryModal = function(imageIndex, totalImages) {
        currentModalImage = parseInt(imageIndex);
        totalModalImages = parseInt(totalImages);

        // Generate image sources
        imageSources = [];
        for (let i = 0; i < totalModalImages; i++) {
            imageSources.push(`https://picsum.photos/seed/gallery${i + 1}/1200/800`);
        }

        // Show modal
        const modal = document.getElementById('galleryModal');
        modal.classList.remove('hidden');
        modal.classList.add('show');

        // Update image
        updateModalImage();

        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    };

    // Update modal image
    function updateModalImage() {
        const modalImage = document.getElementById('modalImage');
        const imageCounter = document.getElementById('imageCounter');

        modalImage.src = imageSources[currentModalImage];
        modalImage.alt = `Event Gallery ${currentModalImage + 1}`;
        imageCounter.textContent = `${currentModalImage + 1} / ${totalModalImages}`;
    }

    // Close modal
    function closeModal() {
        const modal = document.getElementById('galleryModal');
        modal.classList.add('hide');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('show', 'hide');
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Previous image
    function prevModalImage() {
        currentModalImage = (currentModalImage - 1 + totalModalImages) % totalModalImages;
        updateModalImage();
    }

    // Next image
    function nextModalImage() {
        currentModalImage = (currentModalImage + 1) % totalModalImages;
        updateModalImage();
    }

    // Event listeners (with null checks)
    const closeModalBtn = document.getElementById('closeModal');
    const prevImageBtn = document.getElementById('prevImage');
    const nextImageBtn = document.getElementById('nextImage');

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }
    if (prevImageBtn) {
        prevImageBtn.addEventListener('click', prevModalImage);
    }
    if (nextImageBtn) {
        nextImageBtn.addEventListener('click', nextModalImage);
    }

    // Close modal on background click (with null check)
    const galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        galleryModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    }

    // Keyboard navigation (with null check)
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('galleryModal');
        if (modal && !modal.classList.contains('hidden')) {
            switch(e.key) {
                case 'Escape':
                    closeModal();
                    break;
                case 'ArrowLeft':
                    prevModalImage();
                    break;
                case 'ArrowRight':
                    nextModalImage();
                    break;
            }
        }
    });

    // Touch/swipe support for modal (with null checks)
    let touchStartX = 0;
    let touchEndX = 0;

    const modalImage = document.getElementById('modalImage');
    if (modalImage) {
        modalImage.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        modalImage.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
    }

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextModalImage(); // Swipe left - next image
            } else {
                prevModalImage(); // Swipe right - previous image
            }
        }
    }
});
</script>


