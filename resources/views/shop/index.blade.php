@extends('layout.app')

@section('content')
    <!-- Hero -->
    <section id="beranda" class="relative overflow-hidden h-72 flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&h=300&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-brand-900/50"></div>
        <div class="relative z-10 text-center">
            <h2
                class="text-4xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-white to-brand-200 drop-shadow-[0_2px_10px_rgba(255,255,255,0.3)] animate-glow">
                Shop
            </h2>
            <div class="text-sm text-white/90 rounded-lg shadow-soft flex items-center gap-1 justify-center mt-3">
                <a href="index.html"
                    class="text-gray-100 hover:text-brand-400 hover:underline cursor-pointer transition">Arthadaya</a>
                <span class="text-yellow-500">&gt;</span>
                <span class="text-brand-400 font-semibold">Shop</span>
            </div>
        </div>
    </section>

    <!-- Filter and Products -->
    <section id="produk" class="pb-16 pt-5 md:pb-24 md:pt-13 bg-[#F9F1E7]">
        <div class="max-w-7xl mx-auto px-4">
            <div
                class="flex flex-col md:flex-row md:justify-between items-start md:items-center gap-4 bg-brand-50 p-4 rounded-lg shadow-sm border border-[#E5E5E5]">
                <div class="flex flex-wrap items-center gap-3 text-sm text-gray-700">
                    <button onclick="toggleFilter()"
                        class="flex items-center gap-2 bg-white hover:bg-brand-100 text-brand-700 px-3 py-1.5 rounded-md border border-brand-400 shadow transition">
                        <iconify-icon icon="material-symbols:filter-alt-outline" class="w-4 h-4"></iconify-icon>
                        <span>Filter</span>
                    </button>
                    <span class="hidden sm:inline text-gray-400">|</span>
                    <span>Showing <span class="font-semibold text-brand-700">1–16</span> of <span
                            class="font-semibold text-brand-700">32</span> results</span>
                </div>
                <div class="flex flex-wrap items-center gap-2 text-sm">
                    <div class="flex items-center bg-white border border-brand-400 rounded-md shadow-sm px-2">
                        <input type="text" placeholder="Search..." class="p-2 focus:outline-none text-gray-700" />
                        <button onclick="doSearch()" class="text-brand-400 hover:text-brand-600 transition">
                            <iconify-icon icon="material-symbols:search" class="w-5 h-5"></iconify-icon>
                        </button>
                    </div>
                    <select
                        class="bg-white border border-brand-400 rounded-md px-3 py-2 shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-400">
                        <option>Show 16</option>
                        <option>Show 32</option>
                        <option>Show All</option>
                    </select>
                    <select
                        class="bg-white border border-brand-400 rounded-md px-3 py-2 shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-400">
                        <option>Sort by Default</option>
                        <option>Sort by Price</option>
                        <option>Sort by Rating</option>
                    </select>
                </div>
            </div>

            <!-- Grid -->
            <div id="gridProduk" class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <article data-category="rumah"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Rumah Minimalis Jakarta">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5] text-red-600">Promo</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Rumah Minimalis Jakarta</h3>
                        <p class="text-gray-600 text-sm">Rumah 2 lantai dengan taman luas</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp2.500.000.000</div>
                                <div class="text-xs line-through text-gray-400">Rp3.000.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 2 -->
                <article data-category="rumah"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Villa Modern Bali">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Villa Modern Bali</h3>
                        <p class="text-gray-600 text-sm">Villa tropis dengan kolam renang</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp4.500.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 3 -->
                <article data-category="apartemen"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Apartemen Jakarta Selatan">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5] text-red-600">Promo</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Apartemen Jakarta Selatan</h3>
                        <p class="text-gray-600 text-sm">Unit 2 kamar dengan fasilitas gym</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp1.800.000.000</div>
                                <div class="text-xs line-through text-gray-400">Rp2.200.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 4 -->
                <article data-category="paviliun"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Paviliun Yogyakarta">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5] text-blue-600">Limited</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Paviliun Yogyakarta</h3>
                        <p class="text-gray-600 text-sm">Paviliun modern dekat Malioboro</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp900.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 5 -->
                <article data-category="tanah"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1595844217575-1e2a3c848548?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Tanah Kavling Bandung">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Tanah Kavling Bandung</h3>
                        <p class="text-gray-600 text-sm">Lahan strategis untuk investasi</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp1.200.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 6 -->
                <article data-category="rumah"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Rumah Modern Surabaya">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5] text-green-600">Baru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Rumah Modern Surabaya</h3>
                        <p class="text-gray-600 text-sm">Rumah dengan rooftop garden</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp3.800.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 7 -->
                <article data-category="apartemen"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Apartemen Mewah Bali">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full bg-white/90 border border-[#E5E5E5] text-red-600">Promo</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Apartemen Mewah Bali</h3>
                        <p class="text-gray-600 text-sm">Unit dengan pemandangan pantai</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp2.500.000.000</div>
                                <div class="text-xs line-through text-gray-400">Rp3.200.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Product 8 -->
                <article data-category="tanah"
                    class="group bg-white rounded-2xl border border-[#E5E5E5] overflow-hidden shadow-soft hover:shadow-lg transition">
                    <div class="relative overflow-hidden">
                        <img class="h-56 w-full object-cover group-hover:scale-105 transition"
                            src="https://images.unsplash.com/photo-1590247813695-5c73a5 lossy&q=80&w=400&h=300&auto=format&fit=crop"
                            alt="Tanah Investasi Bogor">
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-lg">Tanah Investasi Bogor</h3>
                        <p class="text-gray-600 text-sm">Lahan dekat kawasan wisata</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div>
                                <div class="font-extrabold">Rp800.000.000</div>
                            </div>
                            <button
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
                                <i data-feather="shopping-cart" class="w-4 h-4"></i> Hubungi
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="mt-10 flex justify-center space-x-2">
                <button
                    class="px-3 py-1 border border-[#E5E5E5] rounded hover:bg-brand-700 hover:text-white transition">1</button>
                <button
                    class="px-3 py-1 border border-[#E5E5E5] rounded hover:bg-brand-700 hover:text-white transition">2</button>
                <button
                    class="px-3 py-1 border border-[#E5E5E5] rounded hover:bg-brand-700 hover:text-white transition">3</button>
                <button
                    class="px-3 py-1 border border-[#E5E5E5] rounded hover:bg-brand-700 hover:text-white transition">Next</button>
            </div>
        </div>
    </section>
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

        // Filter produk
        const filterButtons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('#gridProduk [data-category]');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const cat = btn.getAttribute('data-filter');
                filterButtons.forEach(b => {
                    b.classList.remove('bg-brand-700', 'text-white', 'border-brand-700');
                    b.classList.add('bg-white', 'border-[#E5E5E5]', 'text-[#333]');
                });
                btn.classList.remove('bg-white', 'border-[#E5E5E5]', 'text-[#333]');
                btn.classList.add('bg-brand-700', 'text-white', 'border-brand-700');

                cards.forEach(card => {
                    const c = card.getAttribute('data-category');
                    const show = (cat === 'all' || c === cat);
                    card.classList.toggle('hidden', !show);
                });
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

        /* Hide scrollbar for overflow-x-auto */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Fade-in animation for products */
        #gridProduk article {
            transition: opacity 0.3s ease-in-out;
        }

        #gridProduk article.hidden {
            opacity: 0;
            pointer-events: none;
        }

        #gridProduk article:not(.hidden) {
            opacity: 1;
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
