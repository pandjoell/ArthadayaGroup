  <!-- Top Bar -->
  <div class="w-full bg-brand-900 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between">
      <p class="opacity-90">Selamat datang, Admin Arthadaya</p>
      <div class="flex items-center gap-4">
        <a href="#" class="underline hover:no-underline">Lihat Laporan</a>
        <button id="logoutBtn"
          class="inline-flex items-center gap-2 px-3 py-1 rounded-xl bg-brand-400 text-white hover:bg-brand-500 transition">
          <i data-feather="log-out" class="w-4 h-4"></i> Keluar
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Toggle -->
      <button id="mobileSidebarBtn"
        class="md:hidden fixed top-14 left-4 z-50 p-2 rounded-xl bg-brand-700 text-white hover:bg-brand-800 transition">
        <i data-feather="menu" class="w-6 h-6"></i>
      </button>

  <!-- Sidebar + Content -->
  <div class="flex min-h-[calc(100vh-48px)]">
    <!-- Sidebar -->
    <aside id="sidebar"
      class="fixed md:static inset-y-0 left-0 w-64 bg-gradient-to-b from-brand-700 to-brand-900 text-white flex flex-col shadow-xl transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50">
      <div
        class="px-6 py-6 text-center text-xl font-bold border-b border-gray-700 flex items-center justify-center gap-2">
        <img src="{{ asset('images/arthadaya_group.jpg') }}" alt="Arthadaya Logo"
          class="h-10 w-10 rounded-xl shadow-soft">
        Arthadaya Admin
      </div>
      <nav class="flex-1 px-4 py-6 space-y-2">
        <a href="{{ route('dashboard-admin') }}" class="flex items-center p-3 rounded-xl {{ request()->routeIs('dashboard-admin') ? 'bg-brand-400' : '' }} hover:bg-brand-600 transition">
          <i data-feather="grid" class="w-5 h-5 mr-3"></i> Dashboard
        </a>
        <a href="{{ route('kategori.index') }}" class="flex items-center p-3 rounded-xl {{ request()->routeIs('kategori.index') ? 'bg-brand-400' : '' }} hover:bg-brand-600 transition">
          <i data-feather="layers" class="w-5 h-5 mr-3"></i> Kategori
        </a>
        <a href="{{ route('property.index') }}" class="flex items-center p-3 rounded-xl {{ request()->routeIs('property.index') ? 'bg-brand-400' : '' }} hover:bg-brand-600 transition">
          <i data-feather="home" class="w-5 h-5 mr-3"></i> Properti
        </a>
        <a href="kendaraan.html" class="flex items-center p-3 rounded-xl hover:bg-brand-500 transition">
          <i data-feather="truck" class="w-5 h-5 mr-3"></i> Kendaraan
        </a>
        <a href="jasa.html" class="flex items-center p-3 rounded-xl hover:bg-brand-500 transition">
          <i data-feather="tool" class="w-5 h-5 mr-3"></i> Jasa
        </a>
        <a href="transactions.html" class="flex items-center p-3 rounded-xl hover:bg-brand-600 transition">
          <i data-feather="dollar-sign" class="w-5 h-5 mr-3"></i> Transaksi
        </a>
        <a href="clients.html" class="flex items-center p-3 rounded-xl hover:bg-brand-600 transition">
          <i data-feather="users" class="w-5 h-5 mr-3"></i> Klien
        </a>
        <a href="consultations.html" class="flex items-center p-3 rounded-xl hover:bg-brand-600 transition">
          <i data-feather="phone" class="w-5 h-5 mr-3"></i> Konsultasi
        </a>
        <a href="settings.html" class="flex items-center p-3 rounded-xl hover:bg-brand-600 transition">
          <i data-feather="settings" class="w-5 h-5 mr-3"></i> Pengaturan
        </a>
      </nav>
      <div class="px-4 py-4 text-sm border-t border-gray-700 text-center">
        © <span id="year"></span> Arthadaya
      </div>
    </aside>