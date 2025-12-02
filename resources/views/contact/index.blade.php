@extends('layout.app')

@section('content')
    <!-- Hero -->
    <section id="beranda" class="relative overflow-hidden h-72 flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&h=300&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-brand-900/50"></div>
        <div class="relative z-10 text-center">
            <h2
                class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-white to-brand-200 drop-shadow-[0_2px_10px_rgba(255,255,255,0.3)] animate-glow">
                Contact Us
            </h2>
            <div class="text-sm text-white/90 rounded-lg shadow-soft flex items-center gap-1 justify-center mt-3">
                <a href="index.html"
                    class="text-gray-100 hover:text-brand-400 hover:underline cursor-pointer transition">Home</a>
                <span class="text-yellow-500">&gt;</span>
                <span class="text-brand-400 font-semibold">Contact</span>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="max-w-7xl mx-auto px-4 py-16 md:py-24">
        <div class="text-center max-w-xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-brand-700">Hubungi Kami</h2>
            <p class="text-gray-600 md:text-lg mt-4">
                Untuk informasi lebih lanjut tentang properti kami atau untuk konsultasi gratis, silakan hubungi kami.
                Tim kami siap membantu Anda 24/7!
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-6 glass p-8 rounded-2xl shadow-soft border border-white/60">
                <div class="flex gap-4 items-start">
                    <i data-feather="map-pin" class="w-6 h-6 text-brand-400"></i>
                    <div>
                        <strong class="text-brand-700 font-semibold">Alamat</strong><br />
                        <span class="text-gray-600">Jl. sutera boulevard kav.22 dan 26 Alam Sutera, kelurahan Paku Alam,
                            Kecamatan Serpong Utara, South Tangerang 15320</span>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <i data-feather="phone" class="w-6 h-6 text-brand-400"></i>
                    <div>
                        <strong class="text-brand-700 font-semibold">Telepon</strong><br />
                        <span class="text-gray-600">
                            Mobile: +62 123-4567-8910<br />
                            Hotline: +62 123-456-7891
                        </span>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <i data-feather="clock" class="w-6 h-6 text-brand-400"></i>
                    <div>
                        <strong class="text-brand-700 font-semibold">Jam Kerja</strong><br />
                        <span class="text-gray-600">
                            Senin–Jumat: 08:00 - 17:00 WIB<br />
                            Sabtu–Minggu: 09:00 - 15:00 WIB
                        </span>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <i data-feather="mail" class="w-6 h-6 text-brand-400"></i>
                    <div>
                        <strong class="text-brand-700 font-semibold">Email</strong><br />
                        <span class="text-gray-600">support@arthadaya.id</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="glass p-8 rounded-2xl shadow-soft border border-white/60">
                <form class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-brand-700 mb-1">Nama Anda</label>
                        <input type="text" placeholder="Masukkan nama Anda"
                            class="w-full border border-brand-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-brand-400 focus:outline-none transition bg-white/80"
                            required />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-brand-700 mb-1">Alamat Email</label>
                        <input type="email" placeholder="Masukkan email Anda"
                            class="w-full border border-brand-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-brand-400 focus:outline-none transition bg-white/80"
                            required />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-brand-700 mb-1">Subjek</label>
                        <input type="text" placeholder="Masukkan subjek (opsional)"
                            class="w-full border border-brand-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-brand-400 focus:outline-none transition bg-white/80" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-brand-700 mb-1">Pesan</label>
                        <textarea rows="5" placeholder="Tuliskan pesan Anda..."
                            class="w-full border border-brand-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-brand-400 focus:outline-none transition bg-white/80"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-6 py-3 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft font-semibold flex items-center justify-center gap-2">
                        <i data-feather="send" class="w-5 h-5"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="bg-brand-50 py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 grid sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <i data-feather="phone" class="w-6 h-6 text-brand-700"></i>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Konsultasi Gratis</strong><br />
                    <span class="text-gray-600 text-sm">Dapatkan saran properti tanpa biaya</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <i data-feather="shield" class="w-6 h-6 text-brand-700"></i>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Legalitas Terjamin</strong><br />
                    <span class="text-gray-600 text-sm">SHM lengkap dan bebas sengketa</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <i data-feather="map-pin" class="w-6 h-6 text-brand-700"></i>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Lokasi Strategis</strong><br />
                    <span class="text-gray-600 text-sm">Dekat fasilitas umum dan transportasi</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <i data-feather="award" class="w-6 h-6 text-brand-700"></i>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Layanan 24/7</strong><br />
                    <span class="text-gray-600 text-sm">Dukungan pelanggan responsif</span>
                </p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Scripts -->
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

        // Fallback image handling
        document.querySelectorAll('img').forEach(img => {
            img.onerror = () => {
                img.src = 'images/fallback-contact.jpg'; // Ganti dengan path ke gambar lokal Anda
            };
        });
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
