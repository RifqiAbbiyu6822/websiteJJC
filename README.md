
# Company Profile Website

Website profil perusahaan yang modern dan responsif dengan fitur multi-halaman.

## Fitur Utama

### 🏠 Halaman Utama (index.php)
- **About Us** - Informasi tentang perusahaan
- **Our Work** - Portfolio proyek-proyek
- **Maps** - Lokasi kantor
- **Berita Terbaru** - 3 berita terbaru dengan tampilan card

### 📄 Halaman Terpisah
- **About Us** (`about.html`) - Halaman detail tentang perusahaan
- **Projects** (`projects.html`) - Halaman portfolio lengkap
- **News** (`news.html`) - Semua berita (5 artikel)
- **News Detail** (`news-detail.html`) - Halaman detail berita
- **Reports** (`reports.html`) - Laporan keuangan dan dokumen
- **Contact** (`contact.html`) - Form kontak dan informasi

## Struktur File

```
company-profile-template/
├── index.php              # Halaman utama
├── about.html             # Halaman About Us
├── projects.html          # Halaman Projects
├── news.html              # Halaman News
├── news-detail.html       # Halaman detail berita
├── reports.html           # Halaman Reports
├── contact.html           # Halaman Contact
├── includes/              # Komponen yang dapat digunakan ulang
│   ├── header.php         # Header website
│   ├── navbar.php         # Navigasi
│   ├── footer.php         # Footer
│   ├── about.php          # Konten About Us
│   ├── projects.php       # Konten Projects
│   ├── contact.php        # Konten Contact
│   └── map.php           # Konten Maps
├── data/                  # Data website
│   ├── news.php          # Data berita (5 artikel)
│   └── projects.php      # Data proyek
└── assets/               # Asset website
    ├── css/
    │   └── style.css     # CSS utama
    ├── js/
    │   └── main.js       # JavaScript
    └── img/              # Gambar
```

## Data Berita

Website menggunakan sistem data berbasis file PHP tanpa database. Data berita disimpan di `data/news.php` dengan format:

```php
[
  'id' => 1,
  'title' => 'Judul Berita',
  'date' => '2024-07-28',
  'excerpt' => 'Ringkasan berita',
  'content' => 'Konten lengkap berita',
  'image' => 'path/to/image.jpg'
]
```

## Fitur UI/UX

### 🎨 Desain Modern
- **Responsive Design** - Tampilan optimal di semua device
- **Card Hover Effects** - Animasi hover pada card berita
- **Smooth Transitions** - Transisi halus antar halaman
- **Modern Buttons** - Button dengan border radius dan hover effects

### 📱 Mobile Friendly
- **Bootstrap Grid** - Layout responsif
- **Touch Friendly** - Optimized untuk touch screen
- **Fast Loading** - Performa optimal

### 🔧 Customizable
- **Modular Structure** - Mudah menambah/mengubah konten
- **File-based Data** - Tidak memerlukan database
- **Clean Code** - Kode yang mudah dipahami dan dimodifikasi

## Cara Menambah Berita

1. Buka file `data/news.php`
2. Tambahkan array baru dengan format yang sama
3. Pastikan ID unik dan berurutan
4. Simpan file

## Cara Menambah Halaman Baru

1. Buat file HTML baru (contoh: `new-page.html`)
2. Include header, navbar, dan footer
3. Tambahkan konten di dalam `<main id="main">`
4. Update navbar di `includes/navbar.php`

## Teknologi yang Digunakan

- **PHP** - Backend logic
- **HTML5** - Markup
- **CSS3** - Styling dengan custom animations
- **Bootstrap 4** - Framework CSS
- **JavaScript** - Interaktivitas
- **Icofont** - Icon library

## Instalasi

1. Upload semua file ke web server
2. Pastikan server mendukung PHP
3. Akses melalui browser

## Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge

## Lisensi

Template ini menggunakan lisensi dari BootstrapMade.com dengan modifikasi untuk kebutuhan perusahaan.
# websiteJJC
# WebsiteJJC
# WebsiteJJC
# WebsiteJJC
# websiteJJC
