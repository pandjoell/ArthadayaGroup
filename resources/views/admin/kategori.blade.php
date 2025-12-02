@extends('layout.admin')

@section('content')
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h1 class="text-2xl md:text-3xl font-bold text-brand-700">Kelola Kategori</h1>
        <div class="flex items-center gap-4 w-full sm:w-auto">
            <div
                class="w-10 h-10 rounded-full bg-gradient-to-r from-brand-400 to-brand-600 flex items-center justify-center text-white font-bold">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
        </div>

    </div>
    <button id="btnAddKategori"
        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-400 text-white hover:bg-brand-500 transition shadow-soft">
        <i data-feather="plus-circle" class="w-5 h-5"></i> Tambah Kategori
    </button>

    <!-- Table Kategori -->
    <div class="glass p-6 rounded-2xl shadow-soft border border-white/60 overflow-x-auto">

        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 border border-green-300 px-4 py-2 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-lg font-bold mb-4 text-brand-700">Daftar Kategori</h2>

        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-brand-200">
                    <th class="py-3">Nama Kategori</th>
                    <th class="py-3 w-32">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr class="border-b border-brand-200 hover:bg-brand-100/50 transition">
                        <td class="py-3 font-semibold">{{ $kategori->nama_kategori }}</td>

                        <td class="py-3 flex gap-2">

                            <!-- Button Edit -->
                            <button
                                class="btnEditKategori px-3 py-1 rounded-lg bg-yellow-400 text-white text-xs hover:bg-yellow-500"
                                data-id="{{ $kategori->id }}" data-nama="{{ $kategori->nama_kategori }}">
                                Edit
                            </button>

                            <!-- Button Delete -->
                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST"
                                onsubmit="return confirm('Hapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 rounded-lg bg-red-500 text-white text-xs hover:bg-red-600">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- MODAL TAMBAH KATEGORI -->
    <div id="modalAddKategori" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 px-4">
        <div class="bg-white p-6 rounded-2xl w-full max-w-md shadow-xl">
            <h2 class="font-bold text-brand-700 mb-4 text-lg">Tambah Kategori</h2>

            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf

                <label class="text-sm font-semibold">Nama Kategori</label>
                <input type="text" name="nama_kategori" required
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-brand-200 focus:ring-brand-400">

                <div class="flex justify-end mt-4 gap-2">
                    <button type="button" class="closeModal px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400">
                        Batal
                    </button>
                    <button class="px-4 py-2 rounded-lg bg-brand-400 text-white hover:bg-brand-500">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL EDIT KATEGORI -->
    <div id="modalEditKategori" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 px-4">
        <div class="bg-white p-6 rounded-2xl w-full max-w-md shadow-xl">
            <h2 class="font-bold text-brand-700 mb-4 text-lg">Edit Kategori</h2>

            <form id="formEditKategori" method="POST">
                @csrf
                @method('PUT')

                <label class="text-sm font-semibold">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="editNamaKategori" required
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-brand-200 focus:ring-brand-400">

                <div class="flex justify-end mt-4 gap-2">
                    <button type="button" class="closeModal px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400">
                        Batal
                    </button>
                    <button class="px-4 py-2 rounded-lg bg-brand-400 text-white hover:bg-brand-500">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        feather.replace();
        // OPEN ADD MODAL
        document.getElementById('btnAddKategori').addEventListener('click', () => {
            document.getElementById('modalAddKategori').classList.remove('hidden');
            document.getElementById('modalAddKategori').classList.add('flex');
        });

        // OPEN EDIT MODAL
        document.querySelectorAll('.btnEditKategori').forEach(btn => {
            btn.addEventListener('click', () => {
                let id = btn.dataset.id;
                let nama = btn.dataset.nama;

                document.getElementById('editNamaKategori').value = nama;
                document.getElementById('formEditKategori').action =
                    `/admin/kategori/${id}`;

                document.getElementById('modalEditKategori').classList.remove('hidden');
                document.getElementById('modalEditKategori').classList.add('flex');
            });
        });

        // CLOSE ALL MODAL
        document.querySelectorAll('.closeModal').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('modalAddKategori').classList.add('hidden');
                document.getElementById('modalEditKategori').classList.add('hidden');
            });
        });
    </script>
@endsection
