import './bootstrap';

import Alpine from 'alpinejs';

// Performance optimizations
window.Alpine = Alpine;

// Start Alpine.js
Alpine.start();

// Performance monitoring (development only)
if (process.env.NODE_ENV === 'development') {
    // Monitor performance
    window.addEventListener('load', () => {
        if ('performance' in window) {
            const perfData = performance.getEntriesByType('navigation')[0];
            console.log('Page Load Time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
        }
    });
}
