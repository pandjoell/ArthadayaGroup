@extends('layout.app')

@section('content')
    <!-- Banner -->
    <section id="beranda" class="relative overflow-hidden h-72 flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=1200&h=300&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-brand-900/50"></div>
        <div class="relative z-10 text-center">
            <h2
                class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-white to-brand-200 drop-shadow-[0_2px_10px_rgba(255,255,255,0.3)] animate-glow">
                About Arthadaya
            </h2>
            <div class="text-sm text-white/90 rounded-lg shadow-soft flex items-center gap-1 justify-center mt-3">
                <a href="index.html"
                    class="text-gray-100 hover:text-brand-400 hover:underline cursor-pointer transition">Arthadaya</a>
                <span class="text-yellow-500">&gt;</span>
                <span class="text-brand-400 font-semibold">About</span>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <main class="max-w-7xl mx-auto px-4 py-16 md:py-24">
        <!-- Hero About Section -->
        <section class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div class="order-2 md:order-1">
                <span
                    class="inline-block text-xs font-semibold tracking-wider uppercase text-brand-700 bg-brand-50 rounded-full px-3 py-1 mb-4">Tentang
                    Kami</span>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    Menciptakan Hunian Nyaman dengan Properti Minimalis
                </h1>
                <p class="text-gray-600 md:text-lg mb-8">
                    Arthadaya adalah perusahaan properti yang berdedikasi untuk menghadirkan hunian dan investasi
                    properti berkualitas tinggi dengan desain minimalis modern. Didirikan pada tahun 2015, kami telah
                    membantu ribuan keluarga mewujudkan mimpi hunian ideal di seluruh Indonesia.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="contact.html"
                        class="px-6 py-3 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft font-semibold">Hubungi
                        Kami</a>
                    <a href="shop.html#produk"
                        class="px-6 py-3 rounded-xl border border-brand-200 hover:border-brand-400 hover:text-brand-700 transition shadow-soft">Lihat
                        Properti</a>
                </div>
            </div>
            <div class="order-1 md:order-2 relative h-80 md:h-[525px]">
                <div class="absolute -inset-4 bg-gradient-to-tr from-brand-200 to-white rounded-3xl blur-2xl opacity-60">
                </div>
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=600&h=500&auto=format&fit=crop"
                    alt="Tim Arthadaya" class="relative rounded-3xl shadow-soft w-full h-full object-cover" />
                <div
                    class="absolute bottom-4 left-4 right-4 glass rounded-2xl p-4 flex items-center justify-between border border-white/60 shadow-soft">
                    <div class="text-sm">
                        <div class="font-semibold text-white">Tim Arthadaya</div>
                        <div class="text-gray-200">Ahli Properti Minimalis</div>
                    </div>
                    <a href="contact.html"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                        <i data-feather="phone" class="w-4 h-4"></i>
                        <span>Konsultasi</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="py-16 md:py-24 bg-brand-50 rounded-3xl">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Visi & Misi</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="p-6 rounded-2xl bg-white shadow-soft">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                            <i data-feather="eye" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-xl mb-3">Visi</h3>
                        <p class="text-gray-600">Menjadi pemimpin dalam pengembangan properti minimalis berkelanjutan di
                            Indonesia, menciptakan ruang hidup yang harmonis dengan lingkungan.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-soft">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                            <i data-feather="target" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-xl mb-3">Misi</h3>
                        <p class="text-gray-600">Menyediakan properti berkualitas tinggi dengan desain inovatif, harga
                            terjangkau, dan layanan pelanggan prima untuk memenuhi kebutuhan hunian modern.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sejarah Kami -->
        <section class="py-16 md:py-24">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Sejarah Kami</h2>
                <p class="text-gray-600 md:text-lg mb-12 max-w-3xl mx-auto">Didirikan pada tahun 2015 oleh sekelompok
                    arsitek dan pengembang properti visioner, Arthadaya dimulai dengan proyek paviliun kecil di
                    Yogyakarta. Kini, kami telah berkembang menjadi perusahaan properti nasional dengan portofolio lebih
                    dari 500 unit properti di seluruh Indonesia, fokus pada desain minimalis dan berkelanjutan.</p>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="p-4 rounded-2xl bg-brand-50 text-center">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">2015</div>
                        <p class="text-gray-600">Didirikan</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-brand-50 text-center">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">300+</div>
                        <p class="text-gray-600">Proyek Selesai</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-brand-50 text-center">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">10+</div>
                        <p class="text-gray-600">Kota</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tim Kami -->
        <section class="py-16 md:py-24 bg-brand-50">
            <div class="max-w-6xl mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Tim Kami</h2>
                    <p class="text-gray-600 md:text-lg">Tim berpengalaman yang berdedikasi untuk menciptakan properti
                        berkualitas tinggi.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4 shadow-soft object-cover"
                            src="https://i.pravatar.cc/128?img=1" alt="Ahmad Santoso" />
                        <h3 class="font-semibold text-lg mb-2">Ahmad Santoso</h3>
                        <p class="text-gray-600 mb-4">CEO & Founder</p>
                        <p class="text-sm text-gray-500">Arsitek berpengalaman 15 tahun dengan visi untuk properti
                            berkelanjutan.</p>
                    </div>
                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4 shadow-soft object-cover"
                            src="https://i.pravatar.cc/128?img=2" alt="Siti Nurhaliza" />
                        <h3 class="font-semibold text-lg mb-2">Siti Nurhaliza</h3>
                        <p class="text-gray-600 mb-4">Direktur Desain</p>
                        <p class="text-sm text-gray-500">Spesialis desain minimalis yang memadukan fungsi dan estetika.
                        </p>
                    </div>
                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4 shadow-soft object-cover"
                            src="https://i.pravatar.cc/128?img=3" alt="Budi Hartono" />
                        <h3 class="font-semibold text-lg mb-2">Budi Hartono</h3>
                        <p class="text-gray-600 mb-4">Manajer Proyek</p>
                        <p class="text-sm text-gray-500">Ahli pengelolaan proyek dengan rekam jejak tepat waktu dan
                            budget.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mengapa Arthadaya -->
        <section class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Mengapa Arthadaya?</h2>
                    <p class="text-gray-600 md:text-lg mb-8">Kami mengutamakan kualitas, desain, dan layanan purna jual
                        yang membuat pengalaman berinvestasi properti makin nyaman.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="p-6 rounded-2xl border border-brand-200 shadow-soft hover:-translate-y-1 transition bg-white">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                            <i data-feather="check-circle" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Material Premium</h3>
                        <p class="text-sm text-gray-600">Konstruksi berkualitas tinggi dengan material ramah lingkungan,
                            tahan lama bertahun-tahun.</p>
                    </div>
                    <div
                        class="p-6 rounded-2xl border border-brand-200 shadow-soft hover:-translate-y-1 transition bg-white">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                            <i data-feather="truck" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Lokasi Strategis</h3>
                        <p class="text-sm text-gray-600">Pemilihan lokasi dekat fasilitas umum, transportasi, dan
                            potensi apresiasi nilai tinggi.</p>
                    </div>
                    <div
                        class="p-6 rounded-2xl border border-brand-200 shadow-soft hover:-translate-y-1 transition bg-white">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                            <i data-feather="shield" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Legalitas Lengkap</h3>
                        <p class="text-sm text-gray-600">Dokumen lengkap SHM, bebas sengketa, dan dukungan hukum purna
                            jual.</p>
                    </div>
                    <div
                        class="p-6 rounded-2xl border border-brand-200 shadow-soft hover:-translate-y-1 transition bg-white">
                        <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                            <i data-feather="award" class="w-6 h-6 text-brand-700"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Terpercaya</h3>
                        <p class="text-sm text-gray-600">Rating 4.9/5 dari 1.500+ pelanggan, transaksi aman dengan CS
                            responsif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="py-16 md:py-24 bg-brand-50">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <div class="grid grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-white shadow-soft">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">500+</div>
                        <p class="text-sm text-gray-600">Unit Properti Terjual</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-soft">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">4.9/5</div>
                        <p class="text-sm text-gray-600">Rating Pelanggan</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-soft">
                        <div class="text-3xl font-extrabold text-brand-400 mb-2">10+</div>
                        <p class="text-sm text-gray-600">Kota di Indonesia</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        feather.replace();

        // Mobile menu toggle
        const mbBtn = document.getElementById('mobileBtn');
        const mbMenu = document.getElementById('mobileMenu');
        mbBtn?.addEventListener('click', () => {
            mbMenu.classList.toggle('hidden');
        });

        // Tahun dinamis di footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
@endpush

@push('styles')
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        }

        /* Subtle glass effect */
        .glass {
            background: rgba(255, 255, 255, .7);
            backdrop-filter: blur(10px);
        }

        /* Glow animation for hero */
        @keyframes glow {

            0%,
            100% {
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.3);
            }

            50% {
                text-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6);
            }
        }

        .animate-glow {
            animation: glow 4s ease-in-out infinite;
        }
    </style>
@endpush
