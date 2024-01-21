@extends('layout.pages')
@section('title', 'Love & Learn')
@section('content')
    <div class="">
        {{-- section 1 --}}
        <div class="bg-red-200 h-screen bg-cover bg-no-repeat"
            style="background-image: url('{{ asset('assets/images/rectangle red.png') }}');">
            <div class="flex justify-center items-center ">
                <div class="flex-1">
                    <h1 class="text-white text-center text-4xl mb-10">LOVE & LEARN <br>
                        MUNCAR </h1>
                    <div class="flex justify-center items-center flex-col gap-5">
                        <a href="{{route('admin.konselor')}}" class="bg-[#A5242D] text-center text-white w-48 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Daftar Konselor</span>
                        </a>
                        <a href="{{route('admin.artikel')}}" class="bg-[#A5242D] text-center text-white w-48 py-4 rounded-2xl hover:bg-red-500 duration-300 ease-in-out">
                            <span class="text-base">Artikel</span>
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
