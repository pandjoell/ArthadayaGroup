<!-- Navbar -->
<header class="sticky top-0 z-50 bg-white/80 backdrop-blur supports-[backdrop-filter]:glass border-b border-[#E5E5E5]">
    <div class="max-w-7xl mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
           

            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-brand-700 transition">Home</a>
                <a href="{{ route('shop.index') }}" class="text-gray-600 hover:text-brand-700 transition">Shop</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-brand-700 transition">About</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-brand-700 transition">Contact</a>
                <a href="{{ route('faq') }}" class="text-gray-600 hover:text-brand-700 transition">FAQ</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <button
                    class="inline-flex items-center gap-2 px-3 py-2 rounded-xl border border-[#E5E5E5] hover:border-brand-600 hover:text-brand-700 transition shadow-soft">
                    <i data-feather="search" class="w-4 h-4"></i>
                    <span>Cari</span>
                </button>
                <a href="#produk"
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition shadow-soft">
                    <i data-feather="shopping-bag" class="w-4 h-4"></i>
                    <span>Belanja</span>
                </a>
                @guest
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center justify-center h-10 w-10 rounded-full border border-[#E5E5E5] hover:border-brand-600 transition shadow-soft overflow-hidden">
                        <img src="{{ asset('images/user.png') }}" alt="User Profile" class="h-full w-full object-cover">
                    </a>
                @endguest

                @auth
                    <a href="{{ route('profile') }}"
                        class="inline-flex items-center justify-center h-10 w-10 rounded-full border border-[#E5E5E5] hover:border-brand-600 transition shadow-soft overflow-hidden">
                        <img src="{{ asset('images/user.png') }}" alt="User Profile" class="h-full w-full object-cover">
                    </a>
                @endauth
            </div>

            <div class="md:hidden flex items-center gap-3">
                @guest
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center justify-center h-10 w-10 rounded-full border border-[#E5E5E5] hover:border-brand-600 transition shadow-soft overflow-hidden">
                        <img src="{{ asset('images/user.png') }}" alt="User Profile" class="h-full w-full object-cover">
                    </a>
                @endguest

                @auth
                    <a href="{{ route('profile') }}"
                        class="inline-flex items-center justify-center h-10 w-10 rounded-full border border-[#E5E5E5] hover:border-brand-600 transition shadow-soft overflow-hidden">
                        <img src="{{ asset('images/user.png') }}" alt="User Profile" class="h-full w-full object-cover">
                    </a>
                @endauth
                <button id="mobileBtn"
                    class="inline-flex items-center justify-center h-10 w-10 rounded-xl border border-[#E5E5E5]">
                    <i data-feather="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden pt-3 pb-4">
            <nav class="flex flex-col gap-2">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">Home</a>
                <a href="{{ route('shop.index') }}"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">Shop</a>
                <a href="{{ route('about') }}"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">About</a>
                <a href="{{ route('contact') }}"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">Contact</a>
                <a href="{{ route('faq') }}"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">FAQ</a>
                <a href="#"
                    class="px-3 py-2 rounded-lg hover:bg-[#F9F1E7] text-gray-600 hover:text-brand-700">Profil</a>
            </nav>
        </div>
    </div>
</header>
