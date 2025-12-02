@extends('layout.app')

@section('content')
    <!-- Hero -->
    <section id="beranda" class="relative overflow-hidden">
        <div class="absolute inset-0 bg-grid bg-[size:28px_28px] opacity-40 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
            <!-- Konten kiri -->
            <div>
                <span
                    class="inline-block text-xs font-semibold tracking-wider uppercase text-brand-700 bg-brand-50 rounded-full px-3 py-1">Unggulan
                    2025</span>
                <h1 class="mt-5 text-4xl md:text-5xl font-extrabold leading-tight">
                    Furniture Minimalis untuk <span class="text-brand-700">Ruang Nyaman</span>
                </h1>
                <p class="mt-4 text-gray-600 md:text-lg">
                    Koleksi kursi, meja, dan rak premium dengan material ramah lingkungan. Desain rapi, fungsional, dan
                    tahan lama
                    — cocok untuk rumah modern Anda.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#produk"
                        class="px-5 py-3 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft">Lihat
                        Produk</a>
                    <a href="#keunggulan"
                        class="px-5 py-3 rounded-xl border border-[#E5E5E5] hover:border-brand-600 hover:text-brand-700 transition">Kenapa
                        Arthadaya?</a>
                </div>

                <!-- Stats -->
                <div class="mt-10 grid grid-cols-3 gap-4">
                    <div class="p-4 rounded-2xl bg-white shadow-soft text-center">
                        <div class="text-2xl font-extrabold">1.5K+</div>
                        <div class="text-xs text-gray-500">Produk Terjual</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-white shadow-soft text-center">
                        <div class="text-2xl font-extrabold">4.9/5</div>
                        <div class="text-xs text-gray-500">Rating Pelanggan</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-white shadow-soft text-center">
                        <div class="text-2xl font-extrabold">50+</div>
                        <div class="text-xs text-gray-500">Desain Baru</div>
                    </div>
                </div>
            </div>

            <!-- Konten kanan (gambar) -->
            <div class="relative md:h-[525px] h-80"> <!-- tinggi layar di desktop, tinggi 80 di mobile -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-brand-200 to-white rounded-3xl blur-2xl opacity-60">
                </div>
                <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?q=80&w=1600&auto=format&fit=crop"
                    alt="Ruang Tamu Minimalis" class="relative rounded-3xl shadow-soft w-full h-full object-cover">
                <div
                    class="absolute bottom-4 left-4 right-4 glass rounded-2xl p-4 flex items-center justify-between border border-white/60 shadow-soft">
                    <div class="text-sm">
                        <div class="font-semibold">Sofa Kayu “Aurelia”</div>
                        <div class="text-gray-600">Solid wood, kain premium</div>
                    </div>
                    <a href="#produk"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                        <span>Detail</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Keunggulan -->
    <section id="keunggulan" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-extrabold">Kenapa memilih <span
                        class="text-brand-700">Arthadaya</span>?
                </h2>
                <p class="mt-3 text-gray-600">Kami mengutamakan kualitas, desain, dan layanan purna jual yang membuat
                    pengalaman
                    belanja makin nyaman.</p>
            </div>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- card -->
                <div class="p-6 rounded-2xl border border-[#E5E5E5] shadow-soft hover:-translate-y-1 transition bg-white">
                    <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                        <i data-feather="check-circle" class="w-6 h-6 text-brand-700"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Material Premium</h3>
                    <p class="mt-1 text-sm text-gray-600">Kayu solid & finishing ramah lingkungan, awet bertahun-tahun.</p>
                </div>

                <div class="p-6 rounded-2xl border border-[#E5E5E5] shadow-soft hover:-translate-y-1 transition bg-white">
                    <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                        <i data-feather="truck" class="w-6 h-6 text-brand-700"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Pengiriman Cepat</h3>
                    <p class="mt-1 text-sm text-gray-600">Jangkauan nasional, aman dengan packaging kuat.</p>
                </div>

                <div class="p-6 rounded-2xl border border-[#E5E5E5] shadow-soft hover:-translate-y-1 transition bg-white">
                    <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                        <i data-feather="tool" class="w-6 h-6 text-brand-700"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Garansi 1 Tahun</h3>
                    <p class="mt-1 text-sm text-gray-600">Dukungan purna jual dan servis bila diperlukan.</p>
                </div>

                <div class="p-6 rounded-2xl border border-[#E5E5E5] shadow-soft hover:-translate-y-1 transition bg-white">
                    <div class="h-12 w-12 rounded-xl bg-brand-100 flex items-center justify-center mb-4">
                        <i data-feather="shield" class="w-6 h-6 text-brand-700"></i>
                    </div>
                    <h3 class="font-semibold text-lg">Aman & Terpercaya</h3>
                    <p class="mt-1 text-sm text-gray-600">Transaksi aman, retur mudah, CS responsif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section id="produk" class="py-16 md:py-24 bg-[#F9F1E7]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="md:flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold">Koleksi Produk</h2>
                    <p class="mt-2 text-gray-600">Pilih kategori favoritmu. Semua harga sudah termasuk pajak.</p>
                </div>

                <!-- Filter -->
                <div class="mt-6 md:mt-0 flex gap-2">
                    <button data-filter="all"
                        class="filter-btn px-4 py-2 rounded-xl border border-[#E5E5E5] bg-white hover:border-brand-600 hover:text-brand-700 transition">Semua</button>
                    <button data-filter="kursi"
                        class="filter-btn px-4 py-2 rounded-xl border border-[#E5E5E5] bg-white hover:border-brand-600 hover:text-brand-700 transition">Kursi</button>
                    <button data-filter="meja"
                        class="filter-btn px-4 py-2 rounded-xl border border-[#E5E5E5] bg-white hover:border-brand-600 hover:text-brand-700 transition">Meja</button>
                    <button data-filter="rak"
                        class="filter-btn px-4 py-2 rounded-xl border border-[#E5E5E5] bg-white hover:border-brand-600 hover:text-brand-700 transition">Rak</button>
                </div>
            </div>

            <!-- Grid -->
            <div id="gridProduk" class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Card template (gunakan data-category untuk filter) -->
                <article data-category="kursi"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=1548&auto=format&fit=crop"
                            alt="Kursi Nordik">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5]">Baru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Kursi Nordik</h3>
                        <p class="text-gray-600 text-sm">Kayu oak, dudukan empuk.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp1.299.000</div>
                                <div class="text-xs line-through text-gray-400">Rp1.499.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>

                <article data-category="meja"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=1600&auto=format&fit=crop"
                            alt="Meja Kopi Atlas">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5]">Promo</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Meja Kopi Atlas</h3>
                        <p class="text-gray-600 text-sm">Finishing matte, anti gores.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp899.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>

                <article data-category="rak"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?q=80&w=1600&auto=format&fit=crop"
                            alt="Rak Dinding Lattice">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5]">Bestseller</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Rak Dinding Lattice</h3>
                        <p class="text-gray-600 text-sm">Modular, mudah dipasang.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp499.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>

                <article data-category="meja"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1553034545-32d4b91e4c46?q=80&w=1600&auto=format&fit=crop"
                            alt="Meja Belajar Sora">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Meja Belajar “Sora”</h3>
                        <p class="text-gray-600 text-sm">Compact, kabel rapi.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp1.099.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>

                <article data-category="kursi"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=1600&auto=format&fit=crop"
                            alt="Kursi Putar Nova">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Kursi Putar “Nova”</h3>
                        <p class="text-gray-600 text-sm">Ergonomis, breathable mesh.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp1.399.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>

                <article data-category="rak"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1582582494700-99a1c9f7c79a?q=80&w=1600&auto=format&fit=crop"
                            alt="Rak Buku Arka">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Rak Buku “Arka”</h3>
                        <p class="text-gray-600 text-sm">5 susun, kokoh & stabil.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp799.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Tambah
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <!-- CTA -->
            <div class="mt-10 flex justify-center">
                <a href="#newsletter"
                    class="px-6 py-3 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft inline-flex items-center gap-2">
                    <i data-feather="star" class="w-5 h-5"></i> Lihat Promo & Diskon
                </a>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-extrabold">Apa kata pelanggan?</h2>
                <p class="mt-2 text-gray-600">Mereka sudah merasakan kualitas Arthadaya.</p>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl border border-[#E5E5E5] bg-white shadow-soft">
                    <div class="flex items-center gap-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=1"
                            alt="Avatar">
                        <div>
                            <div class="font-semibold">Rani W.</div>
                            <div class="text-xs text-gray-500">Jakarta</div>
                        </div>
                    </div>
                    <p class="mt-4 text-[#333]">“Desainnya elegan, pemasangan mudah, pelayanan cepat. Puas banget!”</p>
                    <div class="mt-3 flex">
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                    </div>
                </div>

                <div class="p-6 rounded-2xl border border-[#E5E5E5] bg-white shadow-soft">
                    <div class="flex items-center gap-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=5"
                            alt="Avatar">
                        <div>
                            <div class="font-semibold">Dimas K.</div>
                            <div class="text-xs text-gray-500">Bandung</div>
                        </div>
                    </div>
                    <p class="mt-4 text-[#333]">“Harga oke, kualitas mantap. Recommended untuk ruang kerja!”</p>
                    <div class="mt-3 flex">
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500"></i>
                    </div>
                </div>

                <div class="p-6 rounded-2xl border border-[#E5E5E5] bg-white shadow-soft">
                    <div class="flex items-center gap-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/100?img=13"
                            alt="Avatar">
                        <div>
                            <div class="font-semibold">Salsa A.</div>
                            <div class="text-xs text-gray-500">Surabaya</div>
                        </div>
                    </div>
                    <p class="mt-4 text-[#333]">“Raknya kokoh, tampilannya mewah. Pengiriman juga rapi.”</p>
                    <div class="mt-3 flex">
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                        <i data-feather="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16 md:py-24 bg-[#F9F1E7]">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold">Pertanyaan Umum</h2>
                <p class="mt-2 text-gray-600">Masih ragu? Cek jawaban singkat berikut.</p>
            </div>

            <div class="mt-8 space-y-4">
                <!-- item -->
                <details class="group rounded-2xl bg-white border border-[#E5E5E5] shadow-soft p-5">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <h3 class="font-semibold">Berapa lama waktu pengiriman?</h3>
                        <i data-feather="chevron-down" class="w-5 h-5 transition group-open:rotate-180"></i>
                    </summary>
                    <p class="mt-3 text-gray-600">Umumnya 2–5 hari kerja untuk kota besar. Luar pulau 5–10 hari.</p>
                </details>

                <details class="group rounded-2xl bg-white border border-[#E5E5E5] shadow-soft p-5">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <h3 class="font-semibold">Apakah bisa COD?</h3>
                        <i data-feather="chevron-down" class="w-5 h-5 transition group-open:rotate-180"></i>
                    </summary>
                    <p class="mt-3 text-gray-600">Saat ini COD tersedia di beberapa kota tertentu. Hubungi CS untuk cek
                        ketersediaan.</p>
                </details>

                <details class="group rounded-2xl bg-white border border-[#E5E5E5] shadow-soft p-5">
                    <summary class="flex items-center justify-between cursor-pointer list-none">
                        <h3 class="font-semibold">Bagaimana kebijakan retur?</h3>
                        <i data-feather="chevron-down" class="w-5 h-5 transition group-open:rotate-180"></i>
                    </summary>
                    <p class="mt-3 text-gray-600">Retur 7 hari setelah barang diterima jika terdapat cacat produksi.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section id="newsletter" class="py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-4">
            <div
                class="relative overflow-hidden rounded-3xl bg-gradient-to-tr from-brand-700 to-brand-500 text-white p-8 md:p-12 shadow-soft">
                <div class="absolute inset-0 opacity-20 mix-blend-overlay"
                    style="background-image:url('https://images.unsplash.com/photo-1505691723518-36a5ac3b2d56?q=80&w=1600&auto=format&fit=crop'); background-size:cover; background-position:center;">
                </div>
                <div class="relative">
                    <h3 class="text-2xl md:text-3xl font-extrabold">Dapatkan Info Diskon & Koleksi Baru</h3>
                    <p class="mt-2 text-white/90">Masukkan email untuk menerima newsletter bulanan kami.</p>
                    <form class="mt-6 md:flex items-center gap-3"
                        onsubmit="event.preventDefault(); alert('Terima kasih! Kamu sudah berlangganan.');">
                        <input type="email" required placeholder="Masukkan email kamu"
                            class="w-full md:flex-1 px-4 py-3 rounded-xl text-[#333] placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-white/80">
                        <button
                            class="mt-3 md:mt-0 px-5 py-3 rounded-xl bg-white text-brand-800 font-semibold hover:bg-[#E5E5E5] transition">Berlangganan</button>
                    </form>
                </div>
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

        // Filter produk sederhana
        const filterButtons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('#gridProduk [data-category]');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const cat = btn.getAttribute('data-filter');
                filterButtons.forEach(b => b.classList.remove('ring-2', 'ring-brand-600'));
                btn.classList.add('ring-2', 'ring-brand-600');

                cards.forEach(card => {
                    const c = card.getAttribute('data-category');
                    const show = (cat === 'all' || c === cat);
                    card.classList.toggle('hidden', !show);
                });
            })
        });
    </script>
@endpush
