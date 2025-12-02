@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-[#FAF3E0] py-4">
        <div class="text-sm px-6 text-gray-700 rounded-lg shadow-sm flex items-center gap-1 max-w-7xl mx-auto">
            <span class="text-gray-500 hover:underline cursor-pointer">Home</span>
            <span>></span><span> </span>
            <span class="text-gray-500 hover:underline cursor-pointer">Shop</span>
            <span>></span><span> </span> <span> | </span>
            <span class="text-black font-semibold">Asgaard sofa</span>
        </div>
    </div>


    <!-- Product Detail -->
    <section class="px-6 md:px-16 py-10 grid md:grid-cols-2 gap-12 max-w-7xl mx-auto">
        <!-- Image Section -->
        <div class="flex gap-6">
            <!-- Thumbnails (Left Side) -->
            <div class="flex flex-col gap-7">
                <img src="https://picsum.photos/id/101/100"
                    class="w-20 h-20 border rounded-md cursor-pointer hover:opacity-80 transition" alt="Thumb 1" />
                <img src="https://picsum.photos/id/102/100"
                    class="w-20 h-20 border rounded-md cursor-pointer hover:opacity-80 transition" alt="Thumb 2" />
                <img src="https://picsum.photos/id/103/100"
                    class="w-20 h-20 border rounded-md cursor-pointer hover:opacity-80 transition" alt="Thumb 3" />
                <img src="https://picsum.photos/id/104/100"
                    class="w-20 h-20 border rounded-md cursor-pointer hover:opacity-80 transition" alt="Thumb 4" />
            </div>

            <!-- Main Image -->
            <div class="flex items-start">
                <img src="https://picsum.photos/id/100/600/520"
                    class="rounded-xl border w-full max-h-[520px] object-cover" alt="Main Product Image" />
            </div>
        </div>

        <!-- Product Info -->
        <div>
            <h2 class="text-4xl font-semibold mb-2">Asgaard sofa</h2>
            <p class="text-2xl font-semibold text-gray-600 mb-3">Rs. 250,000.00</p>

            <!-- Rating -->
            <div class="flex items-center mb-4">
                <div class="text-yellow-400 text-lg">★★★★☆</div>
                <span class="text-sm text-gray-500 ml-3">5 Customer Review</span>
            </div>

            <p class="text-sm mb-6 text-gray-700 leading-relaxed">
                Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted
                hero
                with a well-balanced audio which boasts a clear midrange and extended highs for a sound.
            </p>

            <!-- Size -->
            <div class="mb-4">
                <h4 class="font-semibold mb-2">Size</h4>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-100">L</button>
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-100">XL</button>
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-100">XS</button>
                </div>
            </div>

            <!-- Color -->
            <div class="mb-6">
                <h4 class="font-semibold mb-2">Color</h4>
                <div class="flex gap-3">
                    <div class="w-6 h-6 rounded-full bg-purple-800 border cursor-pointer"></div>
                    <div class="w-6 h-6 rounded-full bg-black border cursor-pointer"></div>
                    <div class="w-6 h-6 rounded-full bg-yellow-600 border cursor-pointer"></div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="flex items-center gap-4 mb-6">
                <div class="flex border rounded overflow-hidden">
                    <button class="px-4 py-2 hover:bg-gray-100">-</button>
                    <span class="px-4 py-2 border-x">1</span>
                    <button class="px-4 py-2 hover:bg-gray-100">+</button>
                </div>
                <button class="px-6 py-2 bg-black text-white rounded hover:bg-gray-800">Add To Cart</button>
                <button class="px-6 py-2 border border-black text-black rounded hover:bg-gray-100">+ Compare</button>
            </div>

            <!-- SKU Info -->
            <div class="text-sm text-gray-600 space-y-1">
                <p><strong>SKU</strong>: SS001</p>
                <p><strong>Category</strong>: Sofas</p>
                <p><strong>Tags</strong>: Sofa, Chair, Home, Shop</p>
                <p><strong>Share</strong>:
                    <span class="inline-flex items-center gap-2 ml-2 text-xl">
                        🌐 📘 🐦
                    </span>
                </p>
            </div>
        </div>
    </section>



    <!-- Tabs -->
    <div class="px-6 md:px-16 mt-14">
        <!-- Tabs -->
        <div class="border-b border-gray-200 mb-8">
            <div class="flex justify-center">
                <nav class="flex gap-10 text-base font-medium">
                    <button class="pb-3 border-b-2 border-[#d4af37] text-[#d4af37] transition duration-200">
                        Description
                    </button>
                    <button class="pb-3 text-gray-500 hover:text-[#d4af37] transition duration-200">
                        Additional Information
                    </button>
                    <button class="pb-3 text-gray-500 hover:text-[#d4af37] transition duration-200">
                        Reviews <span class="text-sm align-top">[5]</span>
                    </button>
                </nav>
            </div>
        </div>

        <!-- Description Content -->
        <div class="ml-4 md:ml-10 lg:ml-20 max-w-3xl">
            <p class="text-lg text-gray-700 leading-relaxed">
                Embodying the raw, wayward spirit of rock 'n' roll, the Kilburn portable active stereo speaker takes the
                unmistakable look and sound of Marshall,
                unplugs the cords, and takes the show on the road. Embodying the raw, wayward spirit of rock 'n' roll,
                the Kilburn portable active stereo speaker takes
                the unmistakable look and sound of Marshall, unplugs the cords, and takes the show on the road.
            </p>
        </div>

        <!-- Images Section -->
        <div class="mt-10 flex justify-center gap-6 flex-wrap">
            <img src="https://picsum.photos/400/300?random=1" alt="Sample 1"
                class="rounded-lg shadow-lg w-full sm:w-1/2 max-w-sm transition-transform hover:scale-105 duration-300">
            <img src="https://picsum.photos/400/300?random=2" alt="Sample 2"
                class="rounded-lg shadow-lg w-full sm:w-1/2 max-w-sm transition-transform hover:scale-105 duration-300">
        </div>
    </div>


    <!-- Related Products -->
    <section class="px-6 md:px-16 mt-20">
        <h3 class="text-3xl font-semibold text-center text-gray-800 mb-10">Related Products</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Product Card -->
            <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
                <img src="https://picsum.photos/300/200?random=1" class="w-full h-48 object-cover rounded-t-2xl" alt="">
                <div class="p-4">
                    <h4 class="font-semibold text-lg text-gray-800">Syltherine</h4>
                    <p class="text-sm text-gray-500 mb-2">Stylish cafe chair</p>
                    <p class="text-lg font-bold text-yellow-700">
                        Rp 2.500.000
                        <span class="line-through text-sm text-gray-400 ml-2">Rp 3.500.000</span>
                    </p>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
                <img src="https://picsum.photos/300/200?random=2" class="w-full h-48 object-cover rounded-t-2xl" alt="">
                <div class="p-4">
                    <h4 class="font-semibold text-lg text-gray-800">Leviosa</h4>
                    <p class="text-sm text-gray-500 mb-2">Stylish cafe chair</p>
                    <p class="text-lg font-bold text-yellow-700">Rp 2.500.000</p>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
                <img src="https://picsum.photos/300/200?random=3" class="w-full h-48 object-cover rounded-t-2xl" alt="">
                <div class="p-4">
                    <h4 class="font-semibold text-lg text-gray-800">Lolito</h4>
                    <p class="text-sm text-gray-500 mb-2">Luxury big sofa</p>
                    <p class="text-lg font-bold text-yellow-700">
                        Rp 7.000.000
                        <span class="line-through text-sm text-gray-400 ml-2">Rp 14.000.000</span>
                    </p>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
                <img src="https://picsum.photos/300/200?random=4" class="w-full h-48 object-cover rounded-t-2xl" alt="">
                <div class="p-4">
                    <h4 class="font-semibold text-lg text-gray-800">Respira</h4>
                    <p class="text-sm text-gray-500 mb-2">Outdoor bar table and stool</p>
                    <p class="text-lg font-bold text-yellow-700">Rp 500.000</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-10">
            <button
                class="px-8 py-2 rounded-full border border-yellow-600 text-yellow-700 hover:bg-yellow-100 transition font-medium">
                Show More
            </button>
        </div>
    </section>
@endsection

@push('scripts')
<script>
// js sini
</script>
@endpush
