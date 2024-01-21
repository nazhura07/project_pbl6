@extends('layout.pages')
@section('title','login Admin')
@section('content')
<div class="bg-[#F0CDCF] h-screen flex justify-center items-center">
    <div class="bg-slate-50 p-10 rounded-3xl shadow-lg">
        <div class="flex justify-center items-center gap-10">
            <div class="w-full flex-1">
                @if ( session()->has("registerSukses"))
                <x-toast :type="'sukses'" :message="session('registerSukses')" />
                @endif
                    <h1 class="text-center font-semibold text-xl mb-6">Masuk Ke Akun</h1>
                    <form action="{{route('login')}}" method="post">
                        @if ($errors->has('login'))
                                <p class="text-red-500 text-sm italic">{{ $errors->first('login') }}</p>
                            @endif
                        @csrf
                        <div class="mb-2">
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="email" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="password" required>
                        </div>
                        <div class="mb-4">
                            <button class="bg-red-400 text-white w-full rounded-3xl py-3 hover:bg-red-500 duration-300" type="submit">Masuk</button>
                        </div>
                        <div class="flex justify-center items-center ">
                            <a href="" class="underline text-red-400">Register Sebagai Klien?</a>
                        </div>
                    </form>
                </div>
                <div class="bg-red-500 w-[400px] h-72 flex justify-center items-center rounded-xl flex-1">
                        <img src="{{asset('assets/images/20231026_233516 1.png')}}" alt="" srcset="" class="w-1/2 h-auto">
                    
                </div>
            </div>
        </div>
    </div>
@endsection