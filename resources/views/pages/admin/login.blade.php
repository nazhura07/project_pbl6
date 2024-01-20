@extends('layout.pages')
@section('title','login Admin')
@section('content')
    <div class="bg-[#F0CDCF]">
        <div class="bg-slate-50">
            <div class="flex justify-center items-center">
                <div class="">
                    <h1>Masuk Ke Akun</h1>
                    <form action="" method="post">
                        @csrf
                        <div class="">
                            <input type="email" name="email" id="">
                        </div>
                        <div class="">
                            <input type="password" name="password" id="">
                        </div>
                        <div class="">
                            <button type="submit">Masuk</button>
                        </div>
                        <div class="">
                            <a href="">Masuk Sebagai User</a>
                        </div>
                    </form>
                </div>
                <div class="bg-red-500">
                    <div class="flex justify-center items-center">
                        <img src="{{asset('assets/images/20231026_233516 1.png')}}" alt="" srcset="" class="w-3/4 h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection