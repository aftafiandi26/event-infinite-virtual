<style>
    .podium-1 { background-color: #facc15; } /* gold */
    .podium-2 { background-color: #9ca3af; } /* silver */
    .podium-3 { background-color: #ea580c; } /* bronze */

    /* Custom checkbox style */
    .custom-checkbox {
      position: relative;
      padding-left: 30px;
      cursor: pointer;
      display: inline-block;
    }

    .custom-checkbox input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 20px;
      width: 20px;
      background-color: #eee;
      border-radius: 4px;
    }

    .custom-checkbox input:checked ~ .checkmark {
      background-color: #4f46e5;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .custom-checkbox input:checked ~ .checkmark:after {
      display: block;
    }

    .custom-checkbox .checkmark:after {
      left: 7px;
      top: 3px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }

    /* Animation Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    /* Animation Classes */
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    .animate-fade-in-up-delay {
        animation: fadeInUp 0.8s ease-out 0.3s forwards;
        opacity: 0;
    }

    .animate-fade-in-up-delay-2 {
        animation: fadeInUp 0.8s ease-out 0.6s forwards;
        opacity: 0;
    }

    .animate-fade-in-right {
        animation: fadeInRight 0.8s ease-out 0.4s forwards;
        opacity: 0;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-pulse {
        animation: pulse 3s ease-in-out infinite;
    }

    /* Responsive Animation Adjustments */
    @media (max-width: 768px) {
        .animate-fade-in-up,
        .animate-fade-in-up-delay,
        .animate-fade-in-up-delay-2 {
            animation-duration: 0.6s;
        }

        .animate-fade-in-right {
            animation-duration: 0.6s;
        }
    }

    /* Reduced Motion Support */
    @media (prefers-reduced-motion: reduce) {
        .animate-fade-in-up,
        .animate-fade-in-up-delay,
        .animate-fade-in-up-delay-2,
        .animate-fade-in-right,
        .animate-float,
        .animate-pulse {
            animation: none;
            opacity: 1;
            transform: none;
        }
    }

    /* Desktop Sliding Gallery */
.desktop-gallery-container {
    min-height: 400px;
}

.desktop-gallery-slider {
    width: 100%;
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.desktop-gallery-slide {
    min-width: 100%;
    padding: 0.5rem;
}

.desktop-gallery-item-container {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.desktop-gallery-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

.desktop-gallery-item:hover {
    transform: scale(1.15);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    z-index: 20;
    position: relative;
}

.desktop-gallery-item-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

/* Desktop Gallery Controls */
.desktop-gallery-prev, .desktop-gallery-next {
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.desktop-gallery-prev:hover, .desktop-gallery-next:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.desktop-gallery-dot {
    cursor: pointer;
    transition: all 0.3s ease;
}

.desktop-gallery-dot.active {
    background-color: #182945;
    transform: scale(1.2);
}

/* Enhanced Zoom Effect */
.desktop-gallery-item-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(24, 41, 69, 0.1), rgba(245, 158, 11, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 12px;
    z-index: 1;
}

.desktop-gallery-item-container:hover::before {
    opacity: 1;
}

/* Responsive Desktop Gallery */
@media (min-width: 1024px) {
    .desktop-gallery-container {
        min-height: 450px;
    }

    .desktop-gallery-item {
        height: 200px;
    }

    .desktop-gallery-item:hover {
        transform: scale(1.2);
    }
}

@media (min-width: 1280px) {
    .desktop-gallery-container {
        min-height: 500px;
    }

    .desktop-gallery-item {
        height: 220px;
    }

    .desktop-gallery-item:hover {
        transform: scale(1.25);
    }
}

/* Mobile Sliding Gallery */
.gallery-slider-container {
    position: relative;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 1rem;
}

.gallery-slider {
    width: 100%;
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.gallery-slide {
    min-width: 100%;
    padding: 0.5rem;
}

/* Mobile Gallery Item Container */
.mobile-gallery-item-container {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.mobile-gallery-item {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

.mobile-gallery-item:hover {
    transform: scale(1.1);
    box-shadow: 0 15px 30px rgba(0,0,0,0.25);
    z-index: 15;
    position: relative;
}

.mobile-gallery-item-container:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* Enhanced Mobile Zoom Effect */
.mobile-gallery-item-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(24, 41, 69, 0.1), rgba(245, 158, 11, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 8px;
    z-index: 1;
}

.mobile-gallery-item-container:hover::before {
    opacity: 1;
}

.gallery-dot {
    cursor: pointer;
    transition: all 0.3s ease;
}

.gallery-dot.active {
    background-color: #182945;
    transform: scale(1.2);
}

.gallery-prev, .gallery-next {
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.gallery-prev:hover, .gallery-next:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* Touch Support */
.gallery-slider-container {
    touch-action: pan-y;
}

/* Gallery Modal Styles */
#galleryModal {
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

#galleryModal.show {
    display: flex !important;
    animation: fadeIn 0.3s ease;
}

#galleryModal.hide {
    animation: fadeOut 0.3s ease;
}

#modalImage {
    transition: all 0.3s ease;
    max-width: 90vw;
    max-height: 90vh;
}

/* Modal Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes fadeOut {
    from {
        opacity: 1;
        transform: scale(1);
    }
    to {
        opacity: 0;
        transform: scale(0.8);
    }
}

/* Modal Controls */
#closeModal, #prevImage, #nextImage {
    backdrop-filter: blur(5px);
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    padding: 8px;
    transition: all 0.3s ease;
}

#closeModal:hover, #prevImage:hover, #nextImage:hover {
    background: rgba(0, 0, 0, 0.6);
    transform: scale(1.1);
}

/* Image Counter */
#imageCounter {
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
}

/* Responsive Modal */
@media (max-width: 768px) {
    #galleryModal {
        padding: 1rem;
    }

    #modalImage {
        max-width: 95vw;
        max-height: 85vh;
    }

    #closeModal, #prevImage, #nextImage {
        padding: 6px;
    }

    #closeModal {
        top: 1rem;
        right: 1rem;
    }

    #prevImage {
        left: 1rem;
    }

    #nextImage {
        right: 1rem;
    }
}

/* Responsive Adjustments */
@media (max-width: 640px) {
    .gallery-slide {
        padding: 0.25rem;
    }

    .gallery-prev, .gallery-next {
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
    }
}

/* Animation for smooth transitions */
.gallery-slider {
    will-change: transform;
}

.gallery-slide img {
    transition: all 0.3s ease;
}

.gallery-slide img:hover {
    transform: scale(1.05);
    z-index: 10;
    position: relative;
}
  </style>
