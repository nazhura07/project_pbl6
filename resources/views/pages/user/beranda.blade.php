@extends('layout.pages')
@section('title','love & lern')
@section('content')
    <div class="">
        <div class="bg-[#E81D25] flex justify-end items-center py-4 gap-8 ">
            <a href="" class="text-white">Masuk</a>
           
                <a href="" class="text-white">
                    <div class="bg-red-400 hover:bg-red-500 duration-300 ease-in-out rounded-3xl px-4 py-2 mr-10">
                        <span>Buat Akun</span>
                    </div>
                </a>
        </div>
        {{-- section 1 --}}
        <div class="bg-red-200 h-screen" style="background-image: url('{{ asset('assets/images/rectangle-red.png') }}');">
            <div class="flex">
                <div class="">
                    <h1>LOVE&LEARN
                        MUNCAR </h1>
                    <a href="">
                        <div class="">
                            <span>Daftar Artikel</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="">
                            <span>Artikel</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="">
                            <span>Konseling</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection