@extends('layout.pages')
@section('title', 'Tambah Jadwal')
@section('content')
<div class="container mx-auto">
    <a href="" class="flex justify-start items-center mt-4">
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
    <h1 class="text-center font-semibold text-xl mb-10">Tambah Jadwal</h1>
    <div class="flex justify-center items-center">
        <div class="bg-[#FFF5F5] w-3/4 p-10 mb-20 rounded-3xl">
            <form action="" method="post" class="space-y-4" >
                @csrf
                <div class="">
                    <h1>Tanggal</h1>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>
                </div>
                <div class="">
                    <h1>Jam Awal</h1>
                    <input type="time" id="jam_awal" name="jam_awal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="Spesialis" required>
                </div>
                <div class="">
                    <h1>Jam Akhir</h1>
                    <input type="time" id="jam_akhir" name="jam_akhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="Alamat" required>
                </div>

                <div class="flex justify-center items-center">
                    <button type="submit" class="text-white py-4 px-10 bg-red-400 rounded-xl hover:bg-red-500 duration-300 ease-in-out">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endsection