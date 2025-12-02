@extends('layout.app')

@section('content')
    <!-- Main Content -->
    <section class="max-w-6xl mx-auto px-4 py-12 mb-16">
        <!-- Container Utama dengan Glass Effect -->
        <div class="glass rounded-3xl shadow-glass p-6 md:p-8">
            <!-- Tabs dengan Layout yang Lebih Baik -->
            <div class="border-b border-brand-100 mb-8 pb-4">
                <div class="flex flex-wrap justify-center md:justify-start gap-6 md:gap-0">
                    <button id="tab-profile"
                        class="tab-active py-2 px-6 font-semibold transition-all duration-200 relative">Profil</button>
                    <button id="tab-favorites"
                        class="tab-inactive py-2 px-6 font-semibold transition-all duration-200 relative">Favorit</button>
                </div>
            </div>

            <!-- Tab Content: Profil -->
            <div id="content-profile" class="">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Foto Profil Sidebar -->
                    <div class="lg:col-span-1 flex flex-col items-center lg:items-start space-y-4">
                        <div class="relative">
                            <div
                                class="h-32 w-32 rounded-full border-4 border-brand-100 overflow-hidden shadow-soft mx-auto lg:mx-0">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf33534f?q=80&w=200&h=200&auto=format&fit=crop"
                                    alt="Foto Profil" class="h-full w-full object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&h=200&auto=format&fit=crop'">
                            </div>
                            <button
                                class="absolute bottom-2 right-2 bg-brand-700 text-white p-2 rounded-full shadow-soft hover:bg-brand-800 transition-all duration-200">
                                <i data-feather="camera" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="text-center lg:text-left">
                            <h4 class="text-lg font-semibold text-brand-700">John Doe</h4>
                            <p class="text-gray-500 text-sm">Pengguna Premium</p>
                        </div>
                        <button
                            class="w-full px-4 py-2 bg-brand-700 text-white rounded-xl hover:bg-brand-800 transition-all duration-200 shadow-soft">
                            Ubah Foto Profil
                        </button>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                            class="w-full px-4 py-2 bg-red-700 text-white rounded-xl hover:bg-brand-800 transition-all duration-200 shadow-soft">
                            Logout
                        </button>
                        </form>
                        
                    </div>
                    <!-- Informasi Pengguna Main Content -->
                    <div class="lg:col-span-2 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-600">Nama Lengkap</label>
                                <p class="text-lg font-semibold text-brand-700">John Doe</p>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-600">Email</label>
                                <p class="text-lg font-semibold text-brand-700">john.doe@example.com</p>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-600">Nomor Telepon</label>
                                <p class="text-lg font-semibold text-brand-700">+62 812-3456-7890</p>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-600">Tanggal Bergabung</label>
                                <p class="text-lg font-semibold text-brand-700">15 Januari 2024</p>
                            </div>
                        </div>
                        <div class="pt-6 border-t border-brand-100">
                            <h3 class="text-xl font-semibold text-brand-700 mb-4">Alamat Pengiriman</h3>
                            <div class="bg-brand-50 p-4 rounded-xl">
                                <p class="text-gray-700">Jl. Contoh No. 123, Kelurahan Sukamaju, Kecamatan Gondomanan,
                                    Yogyakarta 55122</p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a href="#"
                                class="flex-1 inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand-700 text-white rounded-xl hover:bg-brand-800 transition-all duration-200 shadow-soft">
                                <i data-feather="edit" class="w-5 h-5"></i>
                                Edit Profil
                            </a>
                            <a href="#"
                                class="flex-1 inline-flex items-center justify-center gap-2 px-6 py-3 border border-brand-700 text-brand-700 rounded-xl hover:bg-brand-700 hover:text-white transition-all duration-200 shadow-soft">
                                <i data-feather="settings" class="w-5 h-5"></i>
                                Pengaturan Akun
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content: Favorit -->
            <div id="content-favorites" class="hidden">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-bold text-brand-700">Produk Favorit (3)</h3>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-brand-700 hover:text-brand-800 font-medium">
                            <i data-feather="plus" class="w-4 h-4"></i>
                            Tambah Favorit Baru
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Dummy Produk Favorit 1 -->
                        <div class="product-card bg-white rounded-2xl overflow-hidden shadow-soft">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=300&h=200&auto=format&fit=crop"
                                    alt="Rumah Minimalis" class="w-full h-48 object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=300&h=200&auto=format&fit=crop'">
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Favorit</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4 class="font-semibold text-brand-700 text-lg mb-2">Rumah Minimalis Modern</h4>
                                <p class="text-gray-600 text-sm mb-3">Lokasi: Yogyakarta • 3 Kamar</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-2xl font-bold text-brand-700">Rp 500.000.000</span>
                                    <span class="bg-brand-100 text-brand-700 px-2 py-1 rounded text-sm">Tersedia</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-brand-700 hover:text-brand-800 text-sm font-medium">Lihat
                                        Detail</a>
                                    <button class="text-red-500 hover:text-red-700 transition-all duration-200">
                                        <i data-feather="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Dummy Produk Favorit 2 -->
                        <div class="product-card bg-white rounded-2xl overflow-hidden shadow-soft">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=300&h=200&auto=format&fit=crop"
                                    alt="Apartemen Mewah" class="w-full h-48 object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=300&h=200&auto=format&fit=crop'">
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Favorit</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4 class="font-semibold text-brand-700 text-lg mb-2">Apartemen Mewah di Kota</h4>
                                <p class="text-gray-600 text-sm mb-3">Lokasi: Jakarta • 2 Kamar</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-2xl font-bold text-brand-700">Rp 800.000.000</span>
                                    <span class="bg-brand-100 text-brand-700 px-2 py-1 rounded text-sm">Tersedia</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-brand-700 hover:text-brand-800 text-sm font-medium">Lihat
                                        Detail</a>
                                    <button class="text-red-500 hover:text-red-700 transition-all duration-200">
                                        <i data-feather="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Dummy Produk Favorit 3 -->
                        <div class="product-card bg-white rounded-2xl overflow-hidden shadow-soft">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1600566752355-35792a6b3df4?q=80&w=300&h=200&auto=format&fit=crop"
                                    alt="Tanah Strategis" class="w-full h-48 object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=300&h=200&auto=format&fit=crop'">
                                <div class="absolute top-3 right-3">
                                    <span
                                        class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">Favorit</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4 class="font-semibold text-brand-700 text-lg mb-2">Tanah Strategis Dekat Pusat</h4>
                                <p class="text-gray-600 text-sm mb-3">Luas: 200 m² • Sertifikat SHM</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-2xl font-bold text-brand-700">Rp 300.000.000</span>
                                    <span class="bg-brand-100 text-brand-700 px-2 py-1 rounded text-sm">Tersedia</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <a href="#"
                                        class="text-brand-700 hover:text-brand-800 text-sm font-medium">Lihat Detail</a>
                                    <button class="text-red-500 hover:text-red-700 transition-all duration-200">
                                        <i data-feather="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Scripts -->
    <script>
        // Initialize Feather Icons
        feather.replace();

        // Mobile menu toggle
        const mbBtn = document.getElementById('mobileBtn');
        const mbMenu = document.getElementById('mobileMenu');
        mbBtn?.addEventListener('click', () => {
            mbMenu.classList.toggle('hidden');
        });

        // Dynamic year
        document.getElementById('year').textContent = new Date().getFullYear();

        // Tab functionality
        const tabProfile = document.getElementById('tab-profile');
        const tabFavorites = document.getElementById('tab-favorites');
        const contentProfile = document.getElementById('content-profile');
        const contentFavorites = document.getElementById('content-favorites');

        tabProfile.addEventListener('click', () => {
            tabProfile.classList.remove('tab-inactive');
            tabProfile.classList.add('tab-active');
            tabFavorites.classList.remove('tab-active');
            tabFavorites.classList.add('tab-inactive');
            contentProfile.classList.remove('hidden');
            contentFavorites.classList.add('hidden');
        });

        tabFavorites.addEventListener('click', () => {
            tabFavorites.classList.remove('tab-inactive');
            tabFavorites.classList.add('tab-active');
            tabProfile.classList.remove('tab-active');
            tabProfile.classList.add('tab-inactive');
            contentFavorites.classList.remove('hidden');
            contentProfile.classList.add('hidden');
        });
    </script>
@endpush

@push('styles')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, .8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .tab-active {
            border-bottom: 3px solid #B88E2F;
            color: #B88E2F;
            position: relative;
        }

        .tab-active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #B88E2F, #F9F1E7);
        }

        .tab-inactive {
            color: #6B7280;
        }

        .product-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            transition: transform 0.3s ease;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }

        .hero-bg {
            background: linear-gradient(135deg, rgba(184, 142, 47, 0.1) 0%, rgba(249, 241, 231, 0.5) 100%);
        }
    </style>
@endpush
