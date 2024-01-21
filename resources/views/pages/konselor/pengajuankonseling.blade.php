@extends('layout.pages')
@section('title', 'Pengajuan')
@section('content')
    <div class="container mx-auto py-10">
        <a href="{{ route('konselor.beranda') }}" class="flex justify-start items-center">
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
        <h1 class="text-center font-semibold mt-4 text-xl">Pengajuan Konseling</h1>

        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                No
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Nama
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Tanggal Diajukan
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Waktu Diajukan
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Alamat
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <span class="text-center">
                                Aksi
                            </span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Nala Nafisah
                        </td>
                        <td class="px-6 py-4">
                            15 Januari 2024
                        </td>
                        <td class="px-6 py-4">
                            09.00-10.00
                        </td>
                        <td class="px-6 py-4">
                            Banyuwangi
                        </td>
                        <form action="" method="post">
                            <td class="px-6 py-4 flex justify-center items-center gap-4">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                    class="bg-red-500 text-white text-center py-2 w-32  hover:bg-red-400 rounded-xl duration-300 ease-in-out">
                                    Ditolak
                                </button>
                        </form>
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="bg-green-500 text-white text-center py-2 w-32  hover:bg-green-400 rounded-xl duration-300 ease-in-out">
                                Diterima
                            </button>
                        </form>
                        <form action="" method="post">
                            @csrf
                            @method('PUT')

                            <button 
                                class="bg-blue-500 text-white text-center py-2 w-32  hover:bg-blue-400 rounded-xl duration-300 ease-in-out">
                                Selesai</button>
                        </form>
                        {{-- <p class="text-green-500 text-center">Telah Diterima</p> --}}
                        {{-- <p class="text-red-500 text-center">Telah Ditolak</p> --}}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
