@extends('layout.admin')
@section('content')
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-brand-700">Dashboard Admin</h1>
        <div class="flex items-center gap-4">
            <input type="text" placeholder="Cari properti, klien, atau transaksi..."
                class="px-4 py-2 rounded-xl border border-brand-200 focus:ring-2 focus:ring-brand-400 outline-none bg-white/80 glass" />
        </div>
    </div>

    <!-- Quick Action -->
    <div class="mb-6">
        <a href="properties.html"
            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-400 text-white hover:bg-brand-500 transition shadow-soft">
            <i data-feather="plus-circle" class="w-5 h-5"></i> Tambah Properti Baru
        </a>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
        <div class="glass p-6 rounded-2xl shadow-soft hover:shadow-lg transition border border-white/60">
            <div class="flex items-center gap-3">
                <i data-feather="building" class="w-6 h-6 text-brand-400"></i>
                <h2 class="text-gray-600 text-sm">Total Properti</h2>
            </div>
            <p class="text-2xl font-bold mt-2 text-brand-700">128</p>
        </div>
        <div class="glass p-6 rounded-2xl shadow-soft hover:shadow-lg transition border border-white/60">
            <div class="flex items-center gap-3">
                <i data-feather="dollar-sign" class="w-6 h-6 text-brand-400"></i>
                <h2 class="text-gray-600 text-sm">Total Penjualan</h2>
            </div>
            <p class="text-2xl font-bold mt-2 text-brand-700">Rp 45,6 M</p>
        </div>
        <div class="glass p-6 rounded-2xl shadow-soft hover:shadow-lg transition border border-white/60">
            <div class="flex items-center gap-3">
                <i data-feather="list" class="w-6 h-6 text-brand-400"></i>
                <h2 class="text-gray-600 text-sm">Listing Aktif</h2>
            </div>
            <p class="text-2xl font-bold mt-2 text-brand-700">92</p>
        </div>
        <div class="glass p-6 rounded-2xl shadow-soft hover:shadow-lg transition border border-white/60">
            <div class="flex items-center gap-3">
                <i data-feather="phone" class="w-6 h-6 text-brand-400"></i>
                <h2 class="text-gray-600 text-sm">Permintaan Konsultasi</h2>
            </div>
            <p class="text-2xl font-bold mt-2 text-brand-700">34</p>
        </div>
    </div>

    <!-- Chart + Table -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6">
        <!-- Chart -->
        <div class="glass p-6 rounded-2xl shadow-soft lg:col-span-2 border border-white/60">
            <h2 class="text-lg font-bold mb-4 text-brand-700">Tren Penjualan Properti</h2>
            <canvas id="salesChart" class="w-full h-64"></canvas>
        </div>

        <!-- Table -->
        <div class="glass p-6 rounded-2xl shadow-soft border border-white/60">
            <h2 class="text-lg font-bold mb-4 text-brand-700">Transaksi Terbaru</h2>
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-brand-200">
                        <th class="py-3">Properti</th>
                        <th class="py-3">Klien</th>
                        <th class="py-3">Jumlah</th>
                        <th class="py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-brand-200 hover:bg-brand-100/50 transition">
                        <td class="py-3">Villa Jogja</td>
                        <td class="py-3">Budi Santoso</td>
                        <td class="py-3">Rp 2,5 M</td>
                        <td class="py-3">
                            <span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-xs">Selesai</span>
                        </td>
                    </tr>
                    <tr class="border-b border-brand-200 hover:bg-brand-100/50 transition">
                        <td class="py-3">Tanah Sleman</td>
                        <td class="py-3">Siti Aminah</td>
                        <td class="py-3">Rp 1,2 M</td>
                        <td class="py-3">
                            <span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs">Proses</span>
                        </td>
                    </tr>
                    <tr class="border-b border-brand-200 hover:bg-brand-100/50 transition">
                        <td class="py-3">Apartemen Malioboro</td>
                        <td class="py-3">Joko Widodo</td>
                        <td class="py-3">Rp 1,8 M</td>
                        <td class="py-3">
                            <span class="px-2 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">Menunggu</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-100/50 transition">
                        <td class="py-3">Rumah Bantul</td>
                        <td class="py-3">Dewi Lestari</td>
                        <td class="py-3">Rp 3,0 M</td>
                        <td class="py-3">
                            <span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-xs">Selesai</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        feather.replace();

        // Sidebar toggle for mobile
        const mobileSidebarBtn = document.getElementById('mobileSidebarBtn');
        const sidebar = document.getElementById('sidebar');
        mobileSidebarBtn?.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Tahun dinamis di footer
        document.getElementById('year').textContent = new Date().getFullYear();

        // Chart.js for Property Sales
        const ctx = document.getElementById('salesChart').getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(184,142,47,0.5)');
        gradient.addColorStop(1, 'rgba(184,142,47,0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Penjualan Properti (Rp Miliar)',
                    data: [5.2, 7.8, 12.4, 9.6, 15.3, 20.1],
                    borderColor: '#B88E2F',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#333',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        padding: 10,
                        borderColor: '#B88E2F',
                        borderWidth: 1
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Penjualan (Rp Miliar)',
                            color: '#333'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan',
                            color: '#333'
                        }
                    }
                }
            }
        });
    </script>
@endpush

@push('styles')
@endpush
