@extends('layout.pages')
@section('title', 'Artikel')
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
        <h1 class="text-center font-semibold mt-4 text-xl">Data Artikel</h1>
        <a href="{{route('admin.artikel.create')}}" class="bg-red-400 rounded-2xl py-2 px-10  text-white mt-10 hover:bg-red-500 duration-300 ease-in-out " type="submit">Tambah</a>
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
                                foto sampul
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Judul
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Link Artikel
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://www.halodoc.com/artikel/diare-tak-kunjung-berhenti-saatnya-hubungi-5-dokter-ini">

                                https://www.halodoc.com/artikel/diare-tak-kunjung-berhenti-saatnya-hubungi-5-dokter-ini
                            </a>
                        </td>

                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection
