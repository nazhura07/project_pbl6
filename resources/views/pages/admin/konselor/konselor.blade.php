@extends('layout.pages')
@section('title', 'Konselor')
@section('content')
    <div class="container mx-auto py-10">
        <a href="{{route('admin.beranda')}}" class="flex justify-start items-center">
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
        <a href="{{route('admin.konselor.create')}}" class="bg-red-400 rounded-2xl py-2 px-10  text-white mt-10 hover:bg-red-500 duration-300 ease-in-out " type="submit">Tambah</a>
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <div class="h-10 w-10 rounded-full" style="background-image: url('{{ asset('assets/images/dr.png') }}'); background-size: cover; background-position: center;">
                        </td>
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
                        <td class="px-6 py-4 flex justify-center items-center gap-4">
                            <a href="" class="bg-blue-500 text-white text-center py-2 w-28  hover:bg-blue-400 rounded-xl duration-300 ease-in-out">
                                Edit
                            </a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <div class="h-10 w-10 rounded-full" style="background-image: url('{{ asset('assets/images/dr.png') }}'); background-size: cover; background-position: center;">
                        </td>
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
                        <td class="px-6 py-4 flex justify-center items-center gap-4">
                            <a href="" class="bg-blue-500 text-white text-center py-2 w-28  hover:bg-blue-400 rounded-xl duration-300 ease-in-out">
                                Edit
                            </a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <div class="h-10 w-10 rounded-full" style="background-image: url('{{ asset('assets/images/dr.png') }}'); background-size: cover; background-position: center;">
                        </td>
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
                        <td class="px-6 py-4 flex justify-center items-center gap-4">
                            <a href="" class="bg-blue-500 text-white text-center py-2 w-28  hover:bg-blue-400 rounded-xl duration-300 ease-in-out">
                                Edit
                            </a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            <div class="h-10 w-10 rounded-full" style="background-image: url('{{ asset('assets/images/dr.png') }}'); background-size: cover; background-position: center;">
                        </td>
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
                        <td class="px-6 py-4 flex justify-center items-center gap-4">
                            <a href="" class="bg-blue-500 text-white text-center py-2 w-28  hover:bg-blue-400 rounded-xl duration-300 ease-in-out">
                                Edit
                            </a>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
