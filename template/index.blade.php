<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kategori
        </h2>
    </x-slot>

    <div class="py-12" x-data="{
        openCreateCategoryModal: false,
        {{-- FOREACH CATEGORY UNTUK MODAL EDIT --}}
        openEditCategoryModal{{ 1002 }}: false,
        {{-- END --}}
    }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- NOTIFICATION PLACEMENT --}}

            {{-- END --}}

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-blue-600 px-6 py-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-white">Kategori Management</h3>
                            <p class="text-blue-100 text-sm">Kelola data kategori</p>
                        </div>

                        {{-- TOMBOL TAMBAH CATEGORY --}}
                        <button @click="openCreateCategoryModal = true"
                            class="inline-flex items-center p-2 bg-white bg-opacity-20 text-sm text-white rounded-lg hover:bg-opacity-30 transition duration-200">
                            Tambah Kategori
                        </button>
                        {{-- END --}}
                    </div>
                </div>

                <!-- Table Section -->
                <div class="p-6">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="w-full text-sm text-left overflow-hidden">
                            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                <tr>
                                    <th class="p-3 border-b">#</th>
                                    <th class="p-3 border-b">Nama Kategori</th>
                                    <th class="p-3 border-b">Tanggal Dibuat</th>
                                    <th class="p-3 text-center border-b">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-gray-600">
                                {{-- FOREACH DATA CATEGORY --}}
                                <tr>
                                    <td class="p-3">1</td>
                                    <td class="p-3">Makanan</td>
                                    <td class="p-3">20 September 2025, 06:16</td>
                                    <td class="p-3 text-center">
                                        <div class="flex justify-center gap-2">
                                            {{-- LINK DETAIL CATEGORY --}}
                                            <a href=""
                                                class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded text-sm">Detail</a>
                                            {{-- END --}}

                                            {{-- TOMBOL MODAL EDIT CATEGORY --}}
                                            <button @click="openEditCategoryModal{{ 1002 }} = true"
                                                class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded text-sm">
                                                Edit
                                            </button>
                                            {{-- END --}}

                                            {{-- DELETE CATEGORY --}}
                                            <form action="" method="POST" style="display: inline;">
                                                <button type="submit"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini? seluruh produk yang berelasi dengan kategori akan ikut terhapus')"
                                                    class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded text-sm">Hapus</button>
                                            </form>
                                            {{-- END --}}
                                        </div>
                                    </td>
                                </tr>
                                {{-- END FOREACH --}}

                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- MODAL TAMBAH CATEGORY --}}
                <div x-show="openCreateCategoryModal"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    @click.outside="openCreateCategoryModal = false">

                    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 flex flex-col" @click.stop>
                        <!-- Modal Header -->
                        <div class="bg-blue-600 rounded-t-xl px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-xl font-bold text-white">Tambah Kategori Baru</h2>
                                    <p class="text-blue-100 text-sm">Lengkapi informasi kategori</p>
                                </div>
                                <button @click="openCreateCategoryModal = false"
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

                            {{-- FORM PLACEMENT --}}

                            {{-- END --}}

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3 pt-4">
                                <button type="button" @click="openCreateCategoryModal = false"
                                    class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition duration-200">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                                    Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END --}}


                {{-- MODAL EDIT CATEGORY --}}
                <div x-show="openEditCategoryModal{{ 1002 }}"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    @click.outside="openEditCategoryModal{{ 1002 }} = false">

                    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 flex flex-col" @click.stop>
                        <!-- Modal Header -->
                        <div class="bg-yellow-600 rounded-t-xl px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-xl font-bold text-white">Edit Kategori
                                    </h2>
                                    <p class="text-yellow-100 text-sm">Perbarui informasi
                                        kategori</p>
                                </div>
                                <button @click="openEditCategoryModal{{ 1002 }} = false"
                                    class="text-white hover:bg-white hover:bg-opacity-20 rounded-lg p-1 transition duration-200">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Modal Body -->
                        <div class="p-6 space-y-6 overflow-y-auto max-h-[70vh]">

                            {{-- FORM PLACEMENT --}}

                            {{-- END --}}

                            <div class="flex flex-col sm:flex-row gap-3 pt-4">
                                <button type="button" @click="openEditCategoryModal{{ 1002 }} = false"
                                    class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition duration-200">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                                    Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END MODAL --}}
            </div>
        </div>
    </div>
</x-app-layout>
