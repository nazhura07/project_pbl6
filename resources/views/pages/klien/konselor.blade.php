@extends('layout.pages')
@section('title','Konselor')
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
            <h1 class="text-center text-2xl font-semibold mb-10">Daftar Konselor</h1>
            <div class="grid grid-cols-3 gap-10 justify-center items-center">
                <div class="flex justify-center items-center">
                    @foreach ($konselor as $data)
                        
                    <div class="flex flex-col bg-white rounded-3xl w-72 overflow-hidden">
                        <div class="h-72" style="background-image: url('{{ asset('assets/images/'. $data->foto) }}'); background-size: cover; background-position: center;">
                        </div>
                        <div class="flex justify-center items-center flex-col gap-4 p-4">
                            <h1>{{ $data->nama }}</h1>
                            <h3>{{ $data->spesialisasi }}</h3>
                        </div>
                        <a href="{{route('klien.konselor.detail',1)}}" class="w-full flex justify-center items-center bg-red-500 py-2 rounded-b-3xl">
                            <span class="text-white text-center">Lihat Profil</span>
                        </a>
                    </div>
                    @endforeach

                </div>

                
        </div>
    </div>
@endsection