@extends('layout.pages')
@section('title', 'Jadwal')
@section('content')
    <div class="bg-[#F0CDCF] h-screen">
        <div class="container mx-auto py-8">
            <a href="{{route('klien.beranda')}}" class="flex justify-start items-center">
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
            <div class="flex justify-center items-center mt-10">
                <div class="bg-white rounded-2xl w-full py-4 px-10">
                    <h1 class="text-center font-semibold text-xl mb-10">Schedule Saya</h1>
                    <div class="relative overflow-x-auto">
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
                                            Nama Konselor
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        Pukul
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr Aris Sucipto
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Januari 2024
                                    </td>
                                    <td class="px-6 py-4">
                                        $09.00 - 10.00 WIB
                                    </td>
                                    <td class="px-6 py-4">
                                        Sudah di ACC
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center items-center gap-4">
                                            <form action="" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                                            </form>
                                            <a href="{{route('klien.rating')}}" class="bg-red-500 text-white py-2 w-28 text-center hover:bg-red-400 rounded-xl duration-300 ease-in-out">
                                                Nilai
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr Aris Sucipto
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Januari 2024
                                    </td>
                                    <td class="px-6 py-4">
                                        $09.00 - 10.00 WIB
                                    </td>
                                    <td class="px-6 py-4">
                                        Sudah di ACC
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr Aris Sucipto
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Januari 2024
                                    </td>
                                    <td class="px-6 py-4">
                                        $09.00 - 10.00 WIB
                                    </td>
                                    <td class="px-6 py-4">
                                        Sudah di ACC
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        Dr Aris Sucipto
                                    </td>
                                    <td class="px-6 py-4">
                                        17 Januari 2024
                                    </td>
                                    <td class="px-6 py-4">
                                        $09.00 - 10.00 WIB
                                    </td>
                                    <td class="px-6 py-4">
                                        Sudah di ACC
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>
        
    </div>
@endsection
