@extends('layout.pages')
@section('title', 'Konselor')
@section('content')
    <div class="container mx-auto py-10">
        <a href="{{ route('admin.beranda') }}" class="flex justify-start items-center">
            <div class="w-6 h-6">
                <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill="#000000"
                            d="M685.248 104.704a64 64 0 0 1 0 90.496L368.448 512l316.8 316.8a64 64 0 0 1-90.496 90.496L232.704 557.248a64 64 0 0 1 0-90.496l362.048-362.048a64 64 0 0 1 90.496 0z">
                        </path>
                    </g>
                </svg>
            </div>
            <h1 class="text-xl">Back</h1>
        </a>
        <h1 class="text-center font-semibold mt-4 text-xl">Data Konselor</h1>
        <a href="{{ route('admin.konselor.create') }}"
            class="bg-red-400 rounded-2xl py-2 px-10  text-white mt-10 hover:bg-red-500 duration-300 ease-in-out "
            type="submit">Tambah</a>
        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                NO
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                pas foto
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Nama
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Spesialis
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($konselors as $konselor)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                <div class="h-10 w-10 rounded-full"
                                    style="background-image: url('{{ asset('storage/' . $konselor->foto) }}'); background-size: cover; background-position: center;">
                            </td>
                            <td class="px-6 py-4">
                                {{ $konselor->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konselor->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konselor->spesialisasi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konselor->alamat }}
                            </td>
                            <td class="px-3 py-4 flex justify-center items-center gap-2">
                                <a href="{{ route('admin.konselor.edit', $konselor->id) }}"
                                    class="flex items-center justify-center w-16 h-12 px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700">
                                    <span>Edit</span>
                                </a>
                                <form action="{{ route('admin.konselor.destroy', $konselor->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="flex items-center justify-center w-16 h-12 px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-700 hover:bg-red-800">
                                        <span>Hapus</span>
                                    </button>
                                    <div id="popup-modal"
                                        class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                                        <div class="flex items-center justify-center min-h-screen">
                                            <div class="bg-white p-4 rounded-md">
                                                <p class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus?</p>
                                                <div class="flex justify-end">
                                                    <button id="confirm-delete"
                                                        class="px-4 py-2 text-white bg-red-600 rounded-md">Ya,
                                                        Hapus</button>
                                                    <button id="cancel-delete"
                                                        class="ml-2 px-4 py-2 text-gray-700 bg-gray-200 rounded-md">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popupModal = document.getElementById('popup-modal');
            const confirmDeleteBtn = document.getElementById('confirm-delete');
            const cancelDeleteBtn = document.getElementById('cancel-delete');

            const showPopupModal = () => {
                popupModal.classList.remove('hidden');
            };

            const hidePopupModal = () => {
                popupModal.classList.add('hidden');
            };

            // Tambahkan event listener untuk tombol hapus
            document.querySelectorAll('[data-modal-toggle="popup-modal"]').forEach(btn => {
                btn.addEventListener('click', showPopupModal);
            });

            // Tambahkan event listener untuk tombol batalkan
            cancelDeleteBtn.addEventListener('click', hidePopupModal);

            // Tambahkan event listener untuk tombol konfirmasi hapus
            confirmDeleteBtn.addEventListener('click', function() {
                // Ambil formulir yang aktif dan kirimkan
                const activeForm = document.querySelector(
                    'form[data-modal-target="popup-modal"]:not(.hidden)');
                if (activeForm) {
                    activeForm.submit();
                }

                // Sembunyikan modal
                hidePopupModal();
            });
        });
    </script>

@endsection
