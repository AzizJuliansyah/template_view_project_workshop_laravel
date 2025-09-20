<x-app-layout>
    <x-slot name="header">
        <a href="" class="inline-flex items-center font-semibold text-xl text-gray-800 leading-tight">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Kategori: -- CATEGORY NAME PLACEMENT --
        </a>

    </x-slot>

    <div class="py-12" x-data="{
        openCreateProductModal: false,
        {{-- FOREACH CATEGORY UNTUK MODAL EDIT --}}
        openEditProductModal{{ 1005 }}: false,
        {{-- END --}}
    }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- NOTIFICATION PLACEMENT --}}

            {{-- END --}}

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Header Section -->
                <div class="bg-blue-600 px-6 py-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-white">Kategori -- CATEGORY NAME PLACEMNET --
                                Management</h3>
                            <p class="text-blue-100 text-sm">-- CATEGORY DESCRIPTION PLACEMENT --</p>
                        </div>
                        <button @click="openCreateProductModal = true"
                            class="inline-flex items-center p-2 bg-white bg-opacity-20 text-sm text-white rounded-lg hover:bg-opacity-30 transition duration-200">
                            Tambah Product
                        </button>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="p-6">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="w-full text-sm text-left overflow-hidden">
                            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                <tr>
                                    <th class="p-3 border-b">#</th>
                                    <th class="p-3 border-b">SKU</th>
                                    <th class="p-3 border-b">Nama</th>
                                    <th class="p-3 border-b">Stok</th>
                                    <th class="p-3 border-b">Harga</th>
                                    <th class="p-3 border-b">Tanggal Dibuat</th>
                                    <th class="p-3 text-center border-b">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-gray-600">
                                {{-- FOREACH DATA PRODUCT --}}
                                    <tr>
                                        <td class="p-3">1</td>
                                        <td class="p-3">SKU-123AB</td>
                                        <td class="p-3">Ayam Bakar</td>
                                        <td class="p-3">250</td>
                                        <td class="p-3">Rp. 35.000,00
                                        </td>
                                        <td class="p-3">20 September 2025, 06:16</td>
                                        <td class="p-3 text-center">
                                            <div class="flex justify-center gap-2">
                                                {{-- TOMBOL MODAL EDIT PRODUCT --}}
                                                <button @click="openEditProductModal{{ 1005 }} = true"
                                                    class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded text-sm">
                                                    Edit
                                                </button>
                                                {{-- END --}}

                                                {{-- DELETE PRODUCT --}}
                                                <form action="" method="post">
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')"
                                                        class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded text-sm">Hapus</button>
                                                </form>
                                                {{-- END --}}
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- MODAL EDIT PRODUCT --}}
                                    <div x-show="openEditProductModal{{ 1005 }}"
                                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95" style="display: none;">

                                        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 flex flex-col">
                                            <!-- Modal Header -->
                                            <div class="bg-yellow-600 rounded-t-xl px-6 py-4">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h2 class="text-xl font-bold text-white">Edit
                                                            Product</h2>
                                                        <p class="text-yellow-100 text-sm">Perbarui
                                                            informasi product
                                                        </p>
                                                    </div>
                                                    <button @click="openEditProductModal{{ 1005 }} = false"
                                                        class="text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-1 transition duration-200">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Modal Body -->
                                            <div class="p-6 space-y-6 overflow-y-auto max-h-[70vh]">
                                                <form action="" method="POST" class="space-y-3">

                                                    <input type="hidden" name="category_id" value="{{ 1002 }}">

                                                    <div class="space-y-2">
                                                        <label class="text-sm font-semibold text-gray-700">Nama
                                                            Product</label>
                                                        <input type="text" name="product_name" value="Ayam Bakar"
                                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-yellow-500">
                                                    </div>

                                                    <div class="space-y-2">
                                                        <label class="text-sm font-semibold text-gray-700">SKU
                                                            Product</label>
                                                        <input type="text" name="product_sku" value="SKU-123AB"
                                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-yellow-500">
                                                    </div>

                                                    <div class="space-y-2">
                                                        <label class="text-sm font-semibold text-gray-700">Stok
                                                            Product</label>
                                                        <input type="number" name="product_stock" value="250"
                                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-yellow-500">
                                                    </div>

                                                    <div class="space-y-2">
                                                        <label class="text-sm font-semibold text-gray-700">Harga
                                                            Product</label>
                                                        <input type="number" step="0.01" name="product_price"
                                                            value="35000"
                                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 focus:ring-2 focus:ring-yellow-500">
                                                    </div>
                                                    <div class="flex flex-col sm:flex-row gap-3 pt-4">
                                                        <button type="button"
                                                            @click="openEditProductModal{{ 1005 }} = false"
                                                            class="flex-1 px-3 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">
                                                            Batal
                                                        </button>
                                                        <button type="submit"
                                                            class="flex-1 px-3 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded-lg">
                                                            Update Data
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- END --}}
                                {{-- END --}}
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Enhanced Modal untuk Tambah Product -->
                <div x-show="openCreateProductModal"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    style="display: none;">

                    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 flex flex-col">
                        <!-- Modal Header -->
                        <div class="bg-blue-600 rounded-t-xl px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-xl font-bold text-white">Tambah Product Baru</h2>
                                    <p class="text-blue-100 text-sm">Lengkapi informasi product</p>
                                </div>
                                <button @click="openCreateProductModal = false"
                                    class="text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-1 transition duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Modal Body -->
                        <div class="p-6 space-y-6 overflow-y-auto max-h-[70vh]">
                            <form action="" method="POST" class="space-y-3">

                                <input type="hidden" name="category_id" id="category_id"
                                    value="{{ 1002 }}">

                                <!-- Nama Field -->
                                <div class="space-y-2">
                                    <label class="flex items-center text-sm font-semibold text-gray-700">
                                        Nama Product
                                    </label>
                                    <div class="relative">
                                        <input type="text" name="product_name" placeholder="Masukkan nama product"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="flex items-center text-sm font-semibold text-gray-700">
                                        SKU Product
                                    </label>
                                    <div class="relative">
                                        <input type="text" name="product_sku" placeholder="Masukkan SKU product"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="flex items-center text-sm font-semibold text-gray-700">
                                        Stok Product
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="product_stock"
                                            placeholder="Masukkan stok product"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="flex items-center text-sm font-semibold text-gray-700">
                                        Harga Product
                                    </label>
                                    <div class="relative">
                                        <input type="number" step="0.01" name="product_price"
                                            placeholder="Masukkan harga product"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-gray-50 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-3 pt-4">
                                    <button type="button" @click="openCreateProductModal = false"
                                        class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition duration-200">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                                        Simpan Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->
            </div>
        </div>
    </div>
</x-app-layout>
