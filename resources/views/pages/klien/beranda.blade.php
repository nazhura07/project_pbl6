@extends('layout.pages')
@section('title', 'Love & Learn')
@section('content')
    <div class="">
        <div class="bg-[#E81D25] flex justify-end pr-10 items-center py-4 gap-8 ">
            <a href="{{route('logout')}}" class="text-white">Logout</a>
        </div>
        {{-- section 1 --}}
        <div class="bg-red-200 h-full bg-cover bg-no-repeat"
            style="background-image: url('{{ asset('assets/images/rectangle red.png') }}');">
            <div class="flex justify-center items-center ">
                <div class="flex-1">
                    <h1 class="text-white text-center text-4xl mb-10">LOVE & LEARN <br>
                        MUNCAR </h1>
                    <div class="flex justify-center items-center flex-col gap-5">
                        <a href="{{route('klien.konselor')}}" class="bg-[#A5242D] text-center text-white w-48 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Konselor</span>
                        </a>
                        <a href="{{route('klien.jadwal')}}" class="bg-[#A5242D] text-center text-white w-48 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Schedule</span>
                        </a>
                        <a href="{{route('klien.artikel')}}" class="bg-[#A5242D] text-center text-white w-48 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Daftar Artikel</span>
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="{{ asset('assets/images/man_woman.png') }}" class="" alt="" srcset="">
                </div>
                
            </div>
        </div>
    </div>
@endsection
