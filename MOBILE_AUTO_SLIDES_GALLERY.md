# Mobile & Tablet Auto Slides Gallery

## 🎯 Overview
Sistem gallery mobile dan tablet yang secara otomatis menghitung jumlah slides berdasarkan jumlah foto yang ditampilkan, dengan fitur zoom in dan responsive design yang optimal untuk perangkat mobile.

## ⚙️ **Konfigurasi Otomatis Mobile**

### **1. Variabel Konfigurasi Mobile**
```php
@php
    // Konfigurasi mobile gallery - Otomatis menyesuaikan
    $mobileTotalImages = $totalImages; // Gunakan total images yang sama
    $mobileImagesPerSlide = 4; // 2x2 grid untuk mobile
    $mobileTotalSlides = ceil($mobileTotalImages / $mobileImagesPerSlide); // Hitung total slides otomatis
@endphp
```

### **2. Perhitungan Otomatis Mobile**
- **Total Images**: Menggunakan `$totalImages` yang sama dengan desktop
- **Images per Slide**: 4 (2x2 grid untuk mobile)
- **Total Slides**: `ceil($mobileTotalImages / $mobileImagesPerSlide)`
- **Responsive**: Otomatis menyesuaikan dengan jumlah images

## 📱 **Layout Mobile & Tablet**

### **1. Grid Layout Mobile**
```html
<div class="grid grid-cols-2 gap-4">
    <!-- 4 images dalam 2x2 grid -->
</div>
```

### **2. Image Sizing Mobile**
```html
<img src="https://picsum.photos/seed/gallery{{ $mobileImageIndex + 1 }}/300/200" 
     class="mobile-gallery-item w-full h-32 sm:h-40 object-cover rounded-lg shadow-md hover:shadow-lg transition-all duration-300 cursor-pointer">
```

### **3. Responsive Heights**
- **Mobile**: `h-32` (128px)
- **Tablet**: `sm:h-40` (160px)
- **Aspect Ratio**: 3:2 untuk mobile optimization

## 🎨 **Mobile Zoom Effects**

### **1. Hover Zoom Animation**
```css
.mobile-gallery-item:hover {
    transform: scale(1.1);
    box-shadow: 0 15px 30px rgba(0,0,0,0.25);
    z-index: 15;
    position: relative;
}
```

### **2. Container Effects**
```css
.mobile-gallery-item-container:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
```

### **3. Gradient Overlay**
```css
.mobile-gallery-item-container::before {
    background: linear-gradient(45deg, rgba(24, 41, 69, 0.1), rgba(245, 158, 11, 0.1));
    opacity: 0;
    transition: opacity 0.3s ease;
}
```

## 📊 **Distribusi Images Mobile**

### **Formula Distribusi Mobile**
```php
$mobileImageIndex = $i * $mobileImagesPerSlide + $j;
```

### **Contoh dengan 50 Images:**
```
Slide 0: Images 0-3   (4 images)
Slide 1: Images 4-7  (4 images)
Slide 2: Images 8-11 (4 images)
...
Slide 12: Images 48-49 (2 images)
Total: 13 slides
```

### **Contoh dengan 30 Images:**
```
Slide 0: Images 0-3   (4 images)
Slide 1: Images 4-7  (4 images)
Slide 2: Images 8-11 (4 images)
...
Slide 7: Images 28-29 (2 images)
Total: 8 slides
```

## 🎮 **Navigation Mobile**

### **1. Dots Navigation Otomatis**
```php
@for ($i = 0; $i < $mobileTotalSlides; $i++)
    <button class="gallery-dot {{ $i === 0 ? 'bg-[#182945]' : 'bg-gray-300' }}" data-slide="{{ $i }}">
        <!-- Dot untuk slide $i -->
    </button>
@endfor
```

### **2. Arrow Navigation**
```html
<button class="gallery-prev">
    <i class="fas fa-chevron-left"></i>
</button>
<button class="gallery-next">
    <i class="fas fa-chevron-right"></i>
</button>
```

### **3. Touch Support**
```css
.gallery-slider-container {
    touch-action: pan-y;
}
```

## 📱 **Responsive Design**

### **1. Mobile Layout (< 768px)**
- **Grid**: 2x2 (4 images per slide)
- **Image Size**: 300x200px
- **Height**: 128px (h-32)
- **Gap**: 16px (gap-4)

### **2. Tablet Layout (768px+)**
- **Grid**: 2x2 (4 images per slide)
- **Image Size**: 300x200px
- **Height**: 160px (sm:h-40)
- **Gap**: 16px (gap-4)

### **3. Touch Optimization**
- **Swipe Support**: Horizontal swipe navigation
- **Touch Feedback**: Visual feedback pada touch
- **Smooth Scrolling**: Optimized untuk touch devices

## ⚡ **Performance Mobile**

### **1. Image Optimization**
```html
<!-- Optimized untuk mobile -->
<img src="https://picsum.photos/seed/gallery{{ $mobileImageIndex + 1 }}/300/200">
```
- **Size**: 300x200px (optimal untuk mobile)
- **Format**: WebP support
- **Lazy Loading**: Efficient loading

### **2. CSS Optimization**
```css
.mobile-gallery-item {
    will-change: transform;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
```

### **3. JavaScript Optimization**
```javascript
const totalSlides = dots.length; // Otomatis menyesuaikan
let currentSlide = 0;

// Auto-play untuk mobile
let autoPlay = setInterval(nextSlide, 5000);
```

## 🎯 **Use Cases Mobile**

### **1. Event Gallery (50 Images)**
```php
$mobileTotalImages = 50; // 13 slides (12 slides penuh + 1 slide dengan 2 images)
$mobileImagesPerSlide = 4; // 2x2 grid
```

### **2. Product Gallery (30 Images)**
```php
$mobileTotalImages = 30; // 8 slides (7 slides penuh + 1 slide dengan 2 images)
$mobileImagesPerSlide = 4; // 2x2 grid
```

### **3. Portfolio Gallery (100 Images)**
```php
$mobileTotalImages = 100; // 25 slides (semua slides penuh)
$mobileImagesPerSlide = 4; // 2x2 grid
```

## 🔧 **Konfigurasi Fleksibel**

### **1. Mengubah Images per Slide**
```php
// Untuk 6 images per slide (3x2 grid)
$mobileImagesPerSlide = 6;
$mobileTotalSlides = ceil($mobileTotalImages / 6);

// Untuk 2 images per slide (2x1 grid)
$mobileImagesPerSlide = 2;
$mobileTotalSlides = ceil($mobileTotalImages / 2);
```

### **2. Responsive Images per Slide**
```php
// Desktop: 6 images per slide
$desktopImagesPerSlide = 6;

// Mobile: 4 images per slide
$mobileImagesPerSlide = 4;

// Tablet: 6 images per slide
$tabletImagesPerSlide = 6;
```

## 🎨 **Visual Effects Mobile**

### **1. Zoom Animation**
- **Scale**: 1.1x pada hover
- **Duration**: 0.4s cubic-bezier
- **Shadow**: Enhanced shadow untuk depth

### **2. Container Effects**
- **Lift**: TranslateY(-3px) pada hover
- **Shadow**: Multi-layer shadow effects
- **Gradient**: Subtle overlay effect

### **3. Touch Feedback**
- **Immediate Response**: Instant visual feedback
- **Smooth Transitions**: Natural motion curves
- **Accessibility**: Touch-friendly interactions

## 📊 **Layout Structure Mobile**

### **Mobile Gallery Layout:**
```
┌─────────────────────────┐
│    Gallery Container    │
│  ┌─────────────────┐    │
│  │ [img1] [img2]    │    │
│  │ [img3] [img4]    │    │
│  └─────────────────┘    │
│  [●] [●] [●] [●] Dots   │
│  [<] [>] Arrows         │
└─────────────────────────┘
```

### **Image Distribution:**
- **Per Slide**: 4 images (2x2 grid)
- **Total Slides**: Otomatis berdasarkan total images
- **Navigation**: Dots + Arrows + Touch

## 🚀 **Technical Features**

### **1. Auto-calculation**
```php
$mobileTotalSlides = ceil($mobileTotalImages / $mobileImagesPerSlide);
```

### **2. Dynamic Navigation**
```javascript
const totalSlides = dots.length; // Otomatis
```

### **3. Responsive Images**
```html
<img src="https://picsum.photos/seed/gallery{{ $mobileImageIndex + 1 }}/300/200">
```

## 📱 **Mobile Optimization**

### **1. Touch Support**
- **Swipe Navigation**: Horizontal swipe
- **Touch Feedback**: Visual feedback
- **Smooth Scrolling**: Optimized untuk touch

### **2. Performance**
- **Image Size**: 300x200px untuk mobile
- **Lazy Loading**: Efficient loading
- **Smooth Animations**: 60fps target

### **3. Accessibility**
- **Touch Targets**: Minimum 44px touch targets
- **Screen Reader**: Alt text untuk images
- **Keyboard Navigation**: Arrow key support

## 🔧 **Maintenance Mobile**

### **1. Menambah Images**
```php
// Cukup ubah $totalImages
$totalImages = 75; // Otomatis menjadi 19 slides mobile
```

### **2. Mengubah Layout**
```php
// Ubah images per slide
$mobileImagesPerSlide = 6; // 3x2 grid
```

### **3. Debug Mode**
```php
// Uncomment untuk debug
// echo "Mobile Total Images: $mobileTotalImages, Images per Slide: $mobileImagesPerSlide, Total Slides: $mobileTotalSlides";
```

---
**Last Updated**: January 2025
**Version**: 1.8.0 - Mobile Auto Slides Gallery
**Status**: ✅ Production Ready

