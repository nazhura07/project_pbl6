@extends('layout.pages')
@section('title', 'Artikel')
@section('content')
    <div class="bg-[#F0CDCF] h-full">
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
            <h1 class="text-center text-2xl font-semibold mb-10">Artikel</h1>
            <div class="grid grid-cols-3 gap-10 justify-center items-center">
                @foreach ($artikels as $data)
                    
                <div class="flex justify-center items-center">
                    <div class="flex flex-col bg-white rounded-xl w-72 overflow-hidden">
                        <div class="h-40"
                            style="background-image: url('{{ asset('assets/images/'. $data->gambar) }}'); background-size: cover; background-position: center;">
                        </div>
                        <div class="flex justify-center items-center flex-col gap-4 p-2">
                            <h1 class="font-semibold text-red-500 text-xl">{{ $data->judul }}</h1>
                            <p class="line-clamp-5 text-justify">{{ $data->deskripsi }}</p>
                            <a href="{{$data->link}}" class="hover:text-red-400 duration-300 ease-in-out">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    @endsection
