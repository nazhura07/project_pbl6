@extends('layout.pages')
@section('title', 'Register User')
@section('content')
    <div class="bg-[#F0CDCF] h-screen flex justify-center items-center">
        <div class="bg-slate-50 p-10 rounded-3xl shadow-lg">
            <h1 class="text-center font-semibold text-xl mb-6">Buat Akun</h1>
            <div class="flex justify-center items-center gap-10">
                <div class="w-full flex-1">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm "
                                placeholder="nama lengkap" >
                        </div>
                        <div class="mb-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm "
                                placeholder="email" >
                        </div>
                        
                        
                        <div class="mb-2">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <input type="text" id="alamat" name="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm "
                            placeholder="alamat" >
                        </div>
                        <div class="mb-2">
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm "
                                name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Pilih Gender</option>
                                <option value="1">Pria</option>
                                <option value="0">Wanita</option>
                            </select>
                        </div>                 
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm "
                                placeholder="password" >
                        </div>
                        <div class="mb-4">
                            <button class="bg-red-400 text-white w-full rounded-3xl py-3 hover:bg-red-500 duration-300"
                                type="submit">Register</button>
                        </div>
                        <div class="flex justify-center items-center ">
                            <a href="{{route('loginview')}}" class="underline text-red-400">Sudah Memiliki Akun?</a>
                        </div>
                    </form>
                </div>
                <div class="bg-red-500 w-[400px] h-[480px] flex justify-center items-center rounded-xl flex-1">
                    <img src="{{ asset('assets/images/20231026_233516 1.png') }}" alt="" srcset=""
                        class="w-1/2 h-auto">
                </div>
            </div>
        </div>
    </div>
@endsection
