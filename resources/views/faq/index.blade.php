@extends('layout.app')

@section('content')
    <!-- Hero -->
    <section id="beranda" class="relative overflow-hidden h-72 flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&h=300&auto=format&fit=crop');"
        onerror="this.style.backgroundImage='url(images/fallback-faq.jpg)'">
        <div class="absolute inset-0 bg-brand-900/50"></div>
        <div class="relative z-10 text-center">
            <h2
                class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-white to-brand-200 drop-shadow-[0_2px_10px_rgba(255,255,255,0.3)] animate-glow">
                FAQ
            </h2>
            <div class="text-sm text-white/90 rounded-lg shadow-soft flex items-center gap-1 justify-center mt-3">
                <a href="index.html"
                    class="text-gray-100 hover:text-brand-400 hover:underline cursor-pointer transition">Home</a>
                <span class="text-yellow-500">&gt;</span>
                <span class="text-brand-400 font-semibold">FAQ</span>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="max-w-4xl mx-auto px-4 py-16 md:py-24">
        <div class="text-center max-w-xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-brand-700">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-gray-600 md:text-lg mt-4">
                Temukan jawaban atas pertanyaan umum tentang pembelian properti, legalitas, konsultasi, dan layanan
                kami. Jika Anda memiliki pertanyaan lain, hubungi kami!
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Bagaimana proses pembelian properti dengan Arthadaya?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Proses pembelian dimulai dengan konsultasi gratis dengan tim kami untuk memahami kebutuhan Anda.
                        Selanjutnya, kami akan membantu Anda memilih properti, melakukan kunjungan lokasi, dan mengurus
                        dokumen legal seperti SHM. Pembayaran dapat dilakukan secara tunai atau cicilan, sesuai opsi
                        yang tersedia.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Apakah semua properti memiliki Sertifikat Hak Milik (SHM)?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Ya, semua properti yang ditawarkan oleh Arthadaya dilengkapi dengan Sertifikat Hak Milik (SHM)
                        yang sah dan bebas sengketa. Kami juga menyediakan dukungan hukum untuk memastikan transaksi
                        Anda aman.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Bisakah saya mendapatkan konsultasi gratis sebelum membeli?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Tentu saja! Kami menawarkan konsultasi gratis untuk membantu Anda memahami opsi properti,
                        lokasi, dan proses pembelian. Hubungi kami melalui telepon (+62 812-3456-7890) atau formulir
                        kontak untuk menjadwalkan konsultasi.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Apa saja pilihan pembayaran yang tersedia?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Kami menyediakan opsi pembayaran tunai, cicilan melalui bank mitra, dan skema pembayaran
                        fleksibel lainnya. Detail dapat dibahas selama konsultasi dengan tim kami untuk menyesuaikan
                        dengan kebutuhan Anda.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Bagaimana Arthadaya memastikan kualitas properti?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Kami menggunakan material premium dan bekerja dengan kontraktor terpercaya untuk memastikan
                        kualitas konstruksi. Setiap properti juga melalui pemeriksaan kualitas ketat sebelum diserahkan
                        kepada pembeli.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Apakah ada garansi untuk properti yang dibeli?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Ya, kami menawarkan garansi hingga 2 tahun untuk masalah struktural pada properti. Hubungi tim
                        layanan pelanggan kami untuk informasi lebih lanjut tentang ketentuan garansi.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Bagaimana cara menjadwalkan kunjungan ke lokasi properti?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Anda dapat menjadwalkan kunjungan melalui formulir kontak di situs kami atau menghubungi hotline
                        kami (+62 274-123-4567). Tim kami akan mengatur waktu yang sesuai untuk Anda.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="glass rounded-2xl shadow-soft border border-white/60 overflow-hidden">
                <button
                    class="accordion-toggle w-full flex justify-between items-center p-6 text-left text-brand-700 font-semibold"
                    aria-expanded="false">
                    <span>Apakah Arthadaya melayani pembelian di luar Yogyakarta?</span>
                </button>
                <div class="accordion-content max-h-0 opacity-0 overflow-hidden px-6 pb-0 text-gray-600">
                    <p class="pb-6">
                        Ya, kami memiliki properti di lebih dari 10 kota di Indonesia, termasuk Jakarta, Surabaya, dan
                        Bali. Lihat katalog kami di halaman Shop atau hubungi kami untuk informasi lebih lanjut.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <p class="text-gray-600 md:text-lg mb-4">Masih ada pertanyaan? Kami siap membantu!</p>
            <a href="contact.html"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft font-semibold">
                Hubungi Kami
            </a>
        </div>
    </section>

    <!-- Features -->
    <section class="bg-brand-50 py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 grid sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-brand-700 text-xl">📞</span>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Konsultasi Gratis</strong><br />
                    <span class="text-gray-600 text-sm">Dapatkan saran properti tanpa biaya</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-brand-700 text-xl">🛡️</span>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Legalitas Terjamin</strong><br />
                    <span class="text-gray-600 text-sm">SHM lengkap dan bebas sengketa</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-brand-700 text-xl">📍</span>
                </div>
                <p>
                    <strong class="text-brand-700 font-semibold">Lokasi Strategis</strong><br />
                    <span class="text-gray-600 text-sm">Dekat fasilitas umum dan transportasi</span>
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-soft hover:-translate-y-1 transition">
                <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-brand-700 text-xl">🏆</span>
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

        // Dynamic year in footer
        document.getElementById('year').textContent = new Date().getFullYear();

        // Fallback image handling
        document.querySelectorAll('img').forEach(img => {
            img.onerror = () => {
                img.src = 'images/fallback-faq.jpg';
            };
        });

        // Accordion functionality
        document.querySelectorAll('.accordion-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(otherContent => {
                    if (otherContent !== content) {
                        otherContent.style.maxHeight = '0';
                        otherContent.style.opacity = '0';
                        otherContent.previousElementSibling.classList.remove('active');
                    }
                });

                // Toggle current accordion
                if (isOpen) {
                    content.style.maxHeight = '0';
                    content.style.opacity = '0';
                    button.classList.remove('active');
                } else {
                    content.style.maxHeight = `${content.scrollHeight}px`;
                    content.style.opacity = '1';
                    button.classList.add('active');
                }
            });
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

        /* Accordion styling */
        .accordion-toggle {
            position: relative;
        }

        .accordion-toggle::after {
            content: '\25BC';
            /* Down arrow */
            font-size: 1rem;
            position: absolute;
            right: 1.5rem;
            transition: transform 0.3s ease;
        }

        .accordion-toggle.active::after {
            content: '\25B2';
            /* Up arrow */
            transform: rotate(180deg);
        }

        .accordion-content {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }
    </style>
@endpush
