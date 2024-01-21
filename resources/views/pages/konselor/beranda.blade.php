@extends('layout.pages')
@section('title', 'Love & Learn')
@section('content')
    <div class="">
        {{-- section 1 --}}
        <div class="bg-red-200 h-screen bg-cover bg-no-repeat"
            style="background-image: url('{{ asset('assets/images/rectangle red.png') }}');">
            <div class="absolute right-10 top-10 ">
                <a href="" class="bg-green-600 text-center text-white px-8 py-2 rounded-2xl hover:bg-green-500 duration-300 ease-in-out">Aktif</a>
    
                {{-- <a href="" class="bg-red-600 text-center text-white px-8 py-2 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">Tidak Aktif</a> --}}
            </div>
            <div class="flex justify-center items-center ">
                <div class="flex-1">
                    <h1 class="text-white text-center text-4xl mb-10">LOVE & LEARN <br>
                        MUNCAR </h1>
                    <div class="flex justify-center items-center flex-col gap-5">
                        <a href="{{route('konselor.pengajuanKonselor')}}" class="bg-[#A5242D] text-center text-white w-52 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Cek Pengajuan Konseling</span>
                        </a>
                        <a href="{{route('konselor.jadwal')}}" class="bg-[#A5242D] text-center text-white w-52 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Ubah Jadwalku</span>
                        </a>
                        <a href="{{route('logout')}}" class="bg-red-600 text-center text-white px-4 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-sm whitespace-nowrap">Logout</span>
                        </a>
                    </div>
                </div>
                <div class="flex-1 mt-10">
                    <img src="{{ asset('assets/images/man_woman.png') }}" class="h-full w" alt="" srcset="" >
                </div>
                
            </div>
        </div>
    </div>
@endsection
