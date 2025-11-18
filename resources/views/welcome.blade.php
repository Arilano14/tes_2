<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planetarium UIN WS - Observatorium</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2A6C12',
                        'primary-light': '#3bbf4f',
                        'primary-bg': '#98FF72',
                        'badge-green': '#98FF72',
                        dark: '#232428',
                        'gray-text': '#8D8D8D',
                        'gray-bg': '#E5E5E5',
                        'gray-light': '#F5F5F5',
                        'footer-dark': '#191B1F',
                        border: '#ABABAB',
                    },
                    fontFamily: {
                        sans: ['Inter', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                    },
                    borderRadius: {
                        'custom': '16px',
                    },
                    boxShadow: {
                        'custom': '0 2px 8px rgba(0, 0, 0, 0.08)',
                        'custom-md': '0 4px 12px rgba(0, 0, 0, 0.12)',
                    }
                }
            }
        }
    </script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        .hero-gradient {
            background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.5) 100%);
        }
    </style>
</head>

<body class="font-sans text-dark bg-white antialiased">
    <body>
    @include('components.layouts.app.navbar')

    <main class="p-6">
        @yield('content')
    </main>
</body>

    <!-- ==================== Hero ==================== -->
    <section class="relative w-full h-[671px] flex items-center overflow-hidden bg-black mt-0">
        <img src="{{ asset('images/homepage/Container-1.png') }}" 
            alt="Planetarium" 
            class="absolute top-0 left-0 w-full h-full object-cover object-center m-0 p-0">
            
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 w-full max-w-[1200px] mx-auto px-6 text-center">
            <h1 class="text-white text-[46px] md:text-[38px] sm:text-[28px] xs:text-2xl font-extrabold leading-tight mb-7 drop-shadow-[0_4px_20px_rgba(0,0,0,0.4)]">
                Selamat Datang di<br>
                Website Planetorium<br>
                Obsrvatorium UIN WS
            </h1>
            <a href="#"
            class="inline-flex items-center justify-center px-8 py-3.5 rounded-lg font-bold text-[13px] xs:text-xs uppercase tracking-wide bg-badge-green text-dark shadow-[0_4px_12px_rgba(152,255,114,0.4)] hover:bg-primary-light hover:-translate-y-0.5 hover:shadow-[0_6px_16px_rgba(152,255,114,0.5)] transition-all duration-300">
            Pesan Tiket Sekarang
            </a>
        </div>
    </section>


    <!-- ==================== Cards ==================== -->
    <section class="py-[60px] sm:py-[42px] bg-gray-light">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="grid grid-cols-4 lg:grid-cols-2 sm:grid-cols-1 gap-5">
                <a href="#" class="bg-white rounded-custom p-6 pb-[18px] border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300 text-center">
                    <img src="{{ asset('images/homepage/earth-pin.png') }}" alt="Icon" class="w-12 h-12 mx-auto mb-3.5 object-contain">
                    <h3 class="text-[15px] font-bold mb-2 text-dark leading-tight">Lihat Kuota dan Jadwal Tayang</h3>
                    <p class="text-xs text-gray-text leading-relaxed">Sebelum Booking para peserta harus melihat jadwal tayang dahulu</p>
                </a>
                <a href="#" class="bg-white rounded-custom p-6 pb-[18px] border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300 text-center">
                    <img src="{{ asset('images/homepage/earth-pin.png') }}" alt="Icon" class="w-12 h-12 mx-auto mb-3.5 object-contain">
                    <h3 class="text-[15px] font-bold mb-2 text-dark leading-tight">Berita Planetarium Observatorium</h3>
                    <p class="text-xs text-gray-text leading-relaxed">Temukan berita terkini terkait pengelolaan dan observatorium UIN WS</p>
                </a>
                <a href="#" class="bg-white rounded-custom p-6 pb-[18px] border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300 text-center">
                    <img src="{{ asset('images/homepage/earth-pin.png') }}" alt="Icon" class="w-12 h-12 mx-auto mb-3.5 object-contain">
                    <h3 class="text-[15px] font-bold mb-2 text-dark leading-tight">Notifikasi dan Pengumuman</h3>
                    <p class="text-xs text-gray-text leading-relaxed">Mari lihat notifikasi dan pengumuman terkini</p>
                </a>
                <a href="#" class="bg-white rounded-custom p-6 pb-[18px] border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300 text-center">
                    <img src="{{ asset('images/homepage/earth-pin.png') }}" alt="Icon" class="w-12 h-12 mx-auto mb-3.5 object-contain">
                    <h3 class="text-[15px] font-bold mb-2 text-dark leading-tight">Foto, Vidio, dan Dokumentasi</h3>
                    <p class="text-xs text-gray-text leading-relaxed">Mari lihat foto, vidio, dan dokumentasi planetarium observatorium UIN WS</p>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== Berita ==================== -->
    <section class="py-[60px] sm:py-[42px]">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="mb-8">
                <h2 class="text-[32px] sm:text-[26px] font-extrabold mb-1.5 text-dark">Berita Terbaru</h2>
                <p class="text-sm text-gray-text">Informasi seputar pengelolaan Planetorium Observatorium UIN WS</p>
            </div>
            <div class="grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-[22px]">
                <article class="bg-white rounded-custom overflow-hidden border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300">
                    <div class="w-full h-[180px] overflow-hidden bg-gray-bg">
                        <img src="{{ asset('images/homepage/aset1.png') }}" alt="Berita 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-400">
                    </div>
                    <div class="p-[18px]">
                        <h3 class="text-sm font-bold mb-2.5 text-dark leading-snug line-clamp-2">Merit Tuk Pakis dan Bersih Desa di Dusun Genting: Wujud Syukur...</h3>
                        <div class="text-[11px] text-gray-text flex gap-1.5 items-center">
                            <span>admin</span>
                            <span>•</span>
                            <span>October 1, 2025</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white rounded-custom overflow-hidden border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300">
                    <div class="w-full h-[180px] overflow-hidden bg-gray-bg">
                        <img src="{{ asset('images/homepage/aset2.png') }}" alt="Berita 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-400">
                    </div>
                    <div class="p-[18px]">
                        <h3 class="text-sm font-bold mb-2.5 text-dark leading-snug line-clamp-2">Penyelamatan dan Translokasi Anakan Elang Hitam di TN...</h3>
                        <div class="text-[11px] text-gray-text flex gap-1.5 items-center">
                            <span>admin</span>
                            <span>•</span>
                            <span>September 11, 2025</span>
                        </div>
                    </div>
                </article>
                <article class="bg-white rounded-custom overflow-hidden border border-[#E2E1E6] hover:-translate-y-1 hover:shadow-custom-md transition-all duration-300">
                    <div class="w-full h-[180px] overflow-hidden bg-gray-bg">
                        <img src="{{ asset('images/homepage/aset3.png') }}" alt="Berita 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-400">
                    </div>
                    <div class="p-[18px]">
                        <h3 class="text-sm font-bold mb-2.5 text-dark leading-snug line-clamp-2">Upacara Bendera HUT ke-80 RI di Sabana 2 Gunung Merbabu...</h3>
                        <div class="text-[11px] text-gray-text flex gap-1.5 items-center">
                            <span>admin</span>
                            <span>•</span>
                            <span>August 18, 2025</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ==================== Pengumuman ==================== -->
    <section class="py-[60px] sm:py-[42px] bg-gray-light">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="mb-2">
                <h2 class="text-[32px] sm:text-[26px] font-extrabold mb-1.5 text-dark">Pengumuman</h2>
                <p class="text-[13px] text-gray-text mb-[26px]">Informasi penting</p>
            </div>
            <div class="grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-[22px]">
                <a href="#" class="py-[18px] pl-3 border-l-[3px] border-primary bg-gray-light hover:bg-white hover:shadow-custom transition-all duration-300">
                    <h4 class="text-[13px] font-bold mb-2 text-dark leading-snug line-clamp-2">Penutupan Jalur Pendakian Gunung Merbabu</h4>
                    <div class="text-[11px] text-gray-text">admin • August 26, 2025</div>
                </a>
                <a href="#" class="py-[18px] pl-3 border-l-[3px] border-primary bg-gray-light hover:bg-white hover:shadow-custom transition-all duration-300">
                    <h4 class="text-[13px] font-bold mb-2 text-dark leading-snug line-clamp-2">Kompetisi Desain Smart Toilet: Wujudkan Toilet Ramah Lingkungan di Jalur...</h4>
                    <div class="text-[11px] text-gray-text">admin • June 13, 2025</div>
                </a>
                <a href="#" class="py-[18px] pl-3 border-l-[3px] border-primary bg-gray-light hover:bg-white hover:shadow-custom transition-all duration-300">
                    <h4 class="text-[13px] font-bold mb-2 text-dark leading-snug line-clamp-2">Pembukaan Obyek Wisata Pendakian Taman Nasional Gunung Merbabu</h4>
                    <div class="text-[11px] text-gray-text">admin • February 17, 2025</div>
                </a>
                <a href="#" class="py-[18px] pl-3 border-l-[3px] border-primary bg-gray-light hover:bg-white hover:shadow-custom transition-all duration-300">
                    <h4 class="text-[13px] font-bold mb-2 text-dark leading-snug line-clamp-2">SIARAN PERS Nomor: SP.03 /T.28/TU/KSA/10/2024 Penutupan Obyek...</h4>
                    <div class="text-[11px] text-gray-text">admin • October 21, 2024</div>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== Galeri ==================== -->
    <section class="py-[60px] sm:py-[42px]">
        <div class="max-w-[1200px] mx-auto px-6">
            <div class="flex flex-col sm:flex-row justify-between items-end sm:items-start mb-8 sm:gap-3">
                <h2 class="text-[32px] sm:text-[26px] font-extrabold text-dark">Foto & Video</h2>
                <span class="bg-badge-green text-dark px-4 py-1.5 rounded-[20px] text-[11px] font-bold uppercase tracking-wide">Galeri</span>
            </div>
            <div class="grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-[18px]">
                <div class="relative overflow-hidden rounded-custom bg-gray-bg shadow-custom h-[240px] lg:h-[240px] sm:h-[200px]">
                    <img src="{{ asset('images/homepage/Container.png') }}" alt="Galeri 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="relative overflow-hidden rounded-custom bg-gray-bg shadow-custom h-[240px] lg:h-[240px] sm:h-[200px]">
                    <img src="{{ asset('images/homepage/Container-1.png') }}" alt="Galeri 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="relative overflow-hidden rounded-custom bg-gray-bg shadow-custom h-[240px] lg:h-[240px] sm:h-[200px]">
                    <img src="{{ asset('images/homepage/Container-2.png') }}" alt="Galeri 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="relative overflow-hidden rounded-custom bg-gray-bg shadow-custom lg:col-span-1 col-span-2 h-[230px] lg:h-[210px] sm:h-[200px]">
                    <img src="{{ asset('images/homepage/Link.png') }}" alt="Galeri 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="relative overflow-hidden rounded-custom bg-gray-bg shadow-custom h-[230px] lg:h-[210px] sm:h-[200px]">
                    <img src="{{ asset('images/homepage/Container-3.png') }}" alt="Galeri 5" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Footer ==================== -->
    @include('components.layouts.app.footer')

    <!-- ==================== JavaScript ==================== -->
    <script>
        // Header scroll effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 1px 4px rgba(0, 0, 0, 0.04)';
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>