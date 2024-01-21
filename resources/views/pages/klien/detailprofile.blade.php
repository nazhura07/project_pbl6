@extends('layout.pages')
@section('title', 'Detail Profil')
@section('content')
    <div class="bg-[#F0CDCF] h-full">
        <div class="container mx-auto py-8">
            <a href="{{route('klien.konselor')}}" class="flex justify-start items-center">
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
        </div>
        <div class="flex justify-center items-center">
            <div class="bg-white rounded-2xl py-4 px-10">
                <h1 class="text-center font-semibold text-2xl mb-10">Detail Profile</h1>
                @foreach ($data as $data)
                    <div class="grid grid-cols-7 gap-20">
                        <div class="flex flex-col bg-white rounded-3xl w-72 overflow-hidden col-span-2">
                            <div class="h-72"
                                style="background-image: url('{{ $data->foto }}'); background-size: cover; background-position: center;">
                            </div>
                        
                            @if ($data->status == 0)
                                <div class="w-full flex justify-center items-center bg-red-500 py-2 rounded-b-3xl">
                                    <span class="text-white text-center">Tidak Aktif</span>
                                </div>
                            @else
                                <div class="w-full flex justify-center items-center bg-green-500 py-2 rounded-b-3xl">
                                    <span class="text-white text-center">Sedang Aktif</span>
                                </div>
                            @endif

                            <a href="{{ route('klien.konselor.janjitemu',1) }}"
                                class="mt-8 bg-red-500 w-full text-white py-3 text-center rounded-2xl">
                                <span>Ajukan Sesi Konseling</span>
                            </a>
                        </div>
                        <div class="col-span-3 flex flex-col space-y-2">
                            <div class="">
                                <h1 class="text-red-400 font-semibold text-lg">Nama Lengkap</h1>
                                <div class="w-full rounded-xl border border-gray-500 p-3">
                                    <span>{{ $data->nama }}</span>
                                </div>
                            </div>

                            <div class="">
                                <h1 class="text-red-400 font-semibold text-lg">Spesialis</h1>
                                <div class="w-full rounded-xl border border-gray-500 p-3">
                                    <span>{{ $data->spesialisasi }}</span>
                                </div>
                            </div>

                            <div class="">
                                <h1 class="text-red-400 font-semibold text-lg">Alamat</h1>
                                <div class="w-full rounded-xl border border-gray-500 p-3">
                                    <span>{{ $data->alamat }}</span>
                                </div>
                            </div>

                            <div class="">
                                <h1 class="text-red-400 font-semibold text-lg">Email</h1>
                                <div class="w-full rounded-xl border border-gray-500 p-3">
                                    <span>{{ $data->email }}</span>
                                </div>
                            </div>

                            <div class="">
                                <h1 class="text-red-400 font-semibold text-lg">Pendidikan Terakhir</h1>
                                <div class="w-full rounded-xl border border-gray-500 p-3">
                                    <span>{{ $data->pendidikan_terakhir }}</span>
                                </div>
                            </div>
                @endforeach

            </div>
            <div class="col-span-2 ">
                <h1 class="text-red-400 font-semibold text-lg mb-4">Komentar</h1>
                <div class="flex flex-col space-y-4 h-[480px]  overflow-y-auto">
                    <div class="bg-red-50 p-3 rounded-xl ">
                        <div class="flex justify-start flex-row items-center gap-2 mb-2">
                            <div class="h-5 w-5 rounded-full"
                                style="background-image: url('{{ asset('assets/images/avatar' . random_int(1, 6) . '.jpeg') }}'); background-size: cover; background-position: center;">
                            </div>
                            <h1>Username123</h1>

                        </div>
                        <div class="mb-2">
                            <div class="flex items-center">
                                <svg class="ms-1 h-4 w-4 text-yellow-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
