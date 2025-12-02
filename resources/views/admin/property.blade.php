@extends('layout.admin')

@section('content')
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h1 class="text-2xl md:text-3xl font-bold text-brand-700">Kelola Properti</h1>
        <div class="flex items-center gap-4 w-full sm:w-auto">
            <div
                class="w-10 h-10 rounded-full bg-gradient-to-r from-brand-400 to-brand-600 flex items-center justify-center text-white font-bold">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
        </div>
    </div>

    <!-- Quick Action -->
    <div class="mb-6">
        <button id="addPropertyBtn"
            class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-400 text-white hover:bg-brand-500 transition shadow-soft">
            <i data-feather="plus-circle" class="w-5 h-5"></i> Tambah Properti
        </button>
    </div>

    <!-- Properties Table -->
    <div class="glass p-6 rounded-2xl shadow-soft border border-white/60 overflow-x-auto">
        <h2 class="text-lg font-bold mb-4 text-brand-700">Daftar Properti</h2>

        @if (session('success'))
            <div class="mb-4 text-green-700 bg-green-100 border border-green-300 px-4 py-2 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if ($propertis->count() > 0)
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-brand-200">
                        <th class="py-3 hidden sm:table-cell">Gambar</th>
                        <th class="py-3">Nama Properti + Spesifikasi</th>
                        <th class="py-3">Kategori</th>
                        <th class="py-3">Alamat</th>
                        <th class="py-3">Latitude</th>
                        <th class="py-3">Longitude</th>
                        <th class="py-3">Harga</th>
                        <th class="py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propertis as $item)
                        <tr class="border-b border-brand-200 hover:bg-brand-100/50 transition">
                            <td class="py-3 hidden sm:table-cell">
                                <img src="{{ $item->image_url ?? asset('images/fallback-property.jpg') }}"
                                    alt="{{ $item->nama }}" class="w-12 h-12 object-cover rounded-lg">
                            </td>

                            <td class="py-3">
                                <div class="font-semibold">{{ $item->nama }}</div>

                                @if ($item->spesifikasis->count() > 0)
                                    <div class="flex flex-wrap gap-1 mt-1">
                                        @foreach ($item->spesifikasis as $spec)
                                            <span
                                                class="px-2 py-1 text-xs rounded-lg bg-brand-100 text-brand-700 border border-brand-200">
                                                <b>{{ $spec->key }}</b>: {{ $spec->value }}
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-xs text-gray-400 mt-1 block">-</span>
                                @endif
                            </td>

                            <!-- Kategori -->
                            <td class="py-3">
                                @if ($item->kategoris->count())
                                    <div class="flex flex-wrap gap-1">
                                        @foreach ($item->kategoris as $kat)
                                            <span
                                                class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-lg">{{ $kat->nama_kategori }}</span>
                                        @endforeach
                                    </div>
                                @else
                                    -
                                @endif
                            </td>

                            <td class="py-3">{{ $item->alamat ?? '-' }}</td>
                            <td class="py-3">{{ $item->latitude }}</td>
                            <td class="py-3">{{ $item->longitude }}</td>
                            <td class="py-3">Rp {{ number_format($item->harga) }}</td>

                            <td class="py-3 flex gap-2">
                                <button type="button" class="editBtn text-blue-600 hover:text-blue-800"
                                    data-id="{{ $item->id }}" data-nama="{{ $item->nama }}"
                                    data-deskripsi="{{ $item->deskripsi }}" data-harga="{{ $item->harga }}"
                                    data-alamat="{{ $item->alamat }}" data-latitude="{{ $item->latitude }}"
                                    data-longitude="{{ $item->longitude }}" data-kategori='@json($item->kategoris->pluck('id'))'
                                    data-specs='@json($item->spesifikasis)'>
                                    Edit
                                </button>

                                <form action="{{ route('property.destroy', $item->id) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin mau hapus properti ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center py-12 text-gray-500">
                <i data-feather="inbox" class="w-12 h-12 mx-auto mb-3 opacity-70"></i>
                <p class="text-lg font-semibold">Belum ada data properti</p>
                <p class="text-sm">Klik tombol <b>Tambah Properti</b> untuk menambahkan data baru.</p>
            </div>
        @endif
    </div>

    <!-- MODAL -->
    <div id="propertyModal" class="fixed inset-0 hidden modal-overlay z-50 flex items-center justify-center bg-black/40">
        <div class="glass p-6 rounded-2xl shadow-soft border border-white/60 w-full max-w-lg relative bg-white">
            <h2 id="modalTitle" class="text-lg font-bold mb-4 text-brand-700">Tambah Properti</h2>

            <form id="propertyForm" method="POST" action="{{ route('property.store') }}">
                @csrf
                <input type="hidden" id="methodField" name="_method" value="POST">

                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Nama Properti</label>
                        <input type="text" id="propertyName" name="nama" required
                            class="w-full border rounded-xl px-4 py-2" />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-1">Deskripsi</label>
                        <textarea id="propertyDescription" name="deskripsi" rows="3" class="w-full border rounded-xl px-4 py-2"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-1">Harga (Rp)</label>
                        <input type="number" id="propertyPrice" name="harga" required
                            class="w-full border rounded-xl px-4 py-2" />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-1">Alamat</label>
                        <input type="text" id="propertyAddress" name="alamat"
                            class="w-full border rounded-xl px-4 py-2" />
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Latitude</label>
                            <input type="text" id="propertyLat" name="latitude"
                                class="w-full border rounded-xl px-4 py-2" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-1">Longitude</label>
                            <input type="text" id="propertyLong" name="longitude"
                                class="w-full border rounded-xl px-4 py-2" />
                        </div>
                    </div>

                    <!-- KATEGORI BARU: TAG SYSTEM -->
                    <div class="relative">
                        <label class="block text-sm font-semibold mb-1">Kategori</label>

                        <!-- TAG -->
                        <div id="categoryTags"
                            class="w-full border rounded-xl px-3 py-2 flex flex-wrap gap-2 cursor-text min-h-[45px]">
                        </div>

                        <!-- INPUT SEARCH -->
                        <input type="text" id="categorySearch" class="w-full border rounded-xl px-3 py-2 mt-2"
                            placeholder="Cari kategori..." autocomplete="off">

                        <!-- DROPDOWN -->
                        <div id="categoryDropdown"
                            class="hidden border mt-1 rounded-xl bg-white shadow max-h-40 overflow-y-auto absolute w-full z-50">
                            @foreach ($kategoris as $kategori)
                                <div class="px-3 py-2 hover:bg-gray-100 cursor-pointer category-item"
                                    data-id="{{ $kategori->id }}" data-name="{{ $kategori->nama_kategori }}">
                                    {{ $kategori->nama_kategori }}
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- SPESIFIKASI -->
                    <div>
                        <label class="block text-sm font-semibold mb-1">Spesifikasi</label>
                        <div id="specification-container"></div>
                        <button type="button" id="add-specification-btn"
                            class="mt-2 px-3 py-1 bg-brand-400 text-white rounded-lg">Tambah Spesifikasi</button>
                    </div>
                </div>

                <div class="flex justify-end mt-6 gap-3">
                    <button type="button" id="closeModal"
                        class="px-4 py-2 rounded-xl bg-gray-200 hover:bg-gray-300">Batal</button>
                    <button type="submit"
                        class="px-6 py-2 rounded-xl bg-brand-400 text-white hover:bg-brand-500">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        feather.replace();

        const modal = document.getElementById('propertyModal');
        const closeModal = document.getElementById('closeModal');
        const form = document.getElementById('propertyForm');
        const modalTitle = document.getElementById('modalTitle');
        const methodField = document.getElementById('methodField');

        const fields = {
            name: document.getElementById('propertyName'),
            description: document.getElementById('propertyDescription'),
            price: document.getElementById('propertyPrice'),
            address: document.getElementById('propertyAddress'),
            lat: document.getElementById('propertyLat'),
            long: document.getElementById('propertyLong')
        };

        /* ================== CATEGORY TAG SYSTEM =================== */

        let selectedCategories = [];
        const categoryTags = document.getElementById("categoryTags");
        const categorySearch = document.getElementById("categorySearch");
        const categoryDropdown = document.getElementById("categoryDropdown");
        // --- show ALL categories when input is focused (so user doesn't need to type) ---
        categorySearch.addEventListener('focus', () => {
            // tampilkan dropdown
            categoryDropdown.classList.remove('hidden');

            // pastikan semua item terlihat (reset filter)
            document.querySelectorAll('.category-item').forEach(item => {
                item.style.display = 'block';
            });
        });

        // juga jika user klik area tag, fokuskan input & buka dropdown
        categoryTags.addEventListener('click', () => {
            categorySearch.focus();
            categoryDropdown.classList.remove('hidden');

            // show all items
            document.querySelectorAll('.category-item').forEach(item => {
                item.style.display = 'block';
            });
        });


        const categoryList = [...document.querySelectorAll(".category-item")].map(i => ({
            id: parseInt(i.dataset.id),
            name: i.dataset.name
        }));

        function renderCategoryTags() {
            categoryTags.innerHTML = "";

            selectedCategories.forEach(cat => {
                const tag = document.createElement("div");
                tag.className =
                    "flex items-center gap-2 bg-blue-100 text-blue-700 px-2 py-1 rounded-lg text-sm";

                tag.innerHTML = `
            ${cat.name}
            <button type="button" class="text-red-600 font-bold remove-tag" data-id="${cat.id}">×</button>
        `;

                categoryTags.appendChild(tag);
            });

            selectedCategories.forEach(cat => {
                const hidden = document.createElement("input");
                hidden.type = "hidden";
                hidden.name = "kategori_id[]";
                hidden.value = cat.id;
                categoryTags.appendChild(hidden);
            });

            document.querySelectorAll(".remove-tag").forEach(btn => {
                btn.addEventListener("click", () => {
                    selectedCategories = selectedCategories.filter(c => c.id !== parseInt(btn.dataset.id));
                    renderCategoryTags();
                });
            });
        }

        categorySearch.addEventListener("input", () => {
            const search = categorySearch.value.toLowerCase();
            categoryDropdown.classList.remove("hidden");

            document.querySelectorAll(".category-item").forEach(item => {
                item.style.display = item.dataset.name.toLowerCase().includes(search) ? "block" : "none";
            });
        });

        document.querySelectorAll(".category-item").forEach(item => {
            item.addEventListener("click", () => {
                const id = parseInt(item.dataset.id);
                const name = item.dataset.name;

                if (!selectedCategories.some(c => c.id === id)) {
                    selectedCategories.push({
                        id,
                        name
                    });
                }

                categorySearch.value = "";
                categoryDropdown.classList.add("hidden");
                renderCategoryTags();
            });
        });

        document.addEventListener("click", (e) => {
            if (!categoryTags.contains(e.target) && !categorySearch.contains(e.target)) {
                categoryDropdown.classList.add("hidden");
            }
        });

        /* ================== END CATEGORY TAG SYSTEM =================== */


        /* ================== ADD MODAL =================== */
        document.getElementById('addPropertyBtn').addEventListener('click', () => {
            modal.classList.remove('hidden');
            modalTitle.textContent = 'Tambah Properti';
            form.action = '{{ route('property.store') }}';
            form.reset();
            methodField.value = 'POST';

            // reset kategori
            selectedCategories = [];
            renderCategoryTags();

            // reset spesifikasi
            specContainer.innerHTML = "";
            addSpecRow();
        });

        /* ================== CLOSE =================== */
        closeModal.addEventListener('click', () => modal.classList.add('hidden'));

        /* ================== SPESIFIKASI =================== */
        const specContainer = document.getElementById("specification-container");
        const addSpecBtn = document.getElementById("add-specification-btn");

        function addSpecRow(key = "", value = "") {
            const row = document.createElement("div");
            row.classList.add("flex", "gap-2", "mb-2");

            row.innerHTML = `
        <input type="text" name="spesifikasi_key[]" class="w-1/2 p-2 border rounded" placeholder="Key" value="${key}">
        <input type="text" name="spesifikasi_value[]" class="w-1/2 p-2 border rounded" placeholder="Value" value="${value}">
        <button type="button" class="px-3 bg-red-500 text-white rounded remove-btn">X</button>
    `;

            row.querySelector(".remove-btn").addEventListener("click", () => row.remove());
            specContainer.appendChild(row);
        }

        addSpecBtn.addEventListener("click", () => addSpecRow());

        /* ================== EDIT =================== */
        document.querySelectorAll(".editBtn").forEach(btn => {
            btn.addEventListener("click", () => {
                modal.classList.remove("hidden");

                modalTitle.textContent = "Edit Properti";
                methodField.value = 'PUT';
                form.action = '/admin/property/' + btn.dataset.id;

                fields.name.value = btn.dataset.nama;
                fields.description.value = btn.dataset.deskripsi;
                fields.price.value = btn.dataset.harga;
                fields.address.value = btn.dataset.alamat;
                fields.lat.value = btn.dataset.latitude;
                fields.long.value = btn.dataset.longitude;

                /* SET KATEGORI */
                selectedCategories = [];
                let catIds = JSON.parse(btn.dataset.kategori || "[]");

                catIds.forEach(id => {
                    const found = categoryList.find(c => c.id === id);
                    if (found) selectedCategories.push(found);
                });

                renderCategoryTags();

                /* SET SPESIFIKASI */
                const specs = JSON.parse(btn.dataset.specs || "[]");
                specContainer.innerHTML = "";

                if (specs.length > 0) {
                    specs.forEach(s => addSpecRow(s.key, s.value));
                } else {
                    addSpecRow();
                }
            });
        });
    </script>
@endpush
