@extends('layout.pages')
@section('title', 'Artikel')
@section('content')
<div class="container mx-auto">
    <a href="{{route('admin.artikel')}}" class="flex justify-start items-center mt-4">
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
    <h1 class="text-center font-semibold text-xl mb-10">Tambah Artikel</h1>
    <div class="flex justify-center items-center">
        <div class="bg-[#FFF5F5] w-3/4 p-10 mb-20 rounded-3xl">
            <form action="{{route('admin.artikel.update',$artikel->id)}}" method="post" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <h1>Judul</h1>
                    <input type="text" id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="Judul" required value="{{$artikel->judul}}">
                </div>
                <div class="">
                    <h1>Deskripsi</h1>
                    <textarea id="deskripsi" name="deskripsi" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm" placeholder="Deskripsi" required>{{$artikel->deskripsi}}</textarea>
                </div>
                <div class="">
                    <h1>Link</h1>
                    <input type="text" id="link" name="link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="link" required value="{{$artikel->link}}">
                </div>
                <div class="">
                    <h1>Foto</h1>
                    <input type="file" id="file" name="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm " placeholder="Pendidikan Terakhir" required>
                </div>
                <div class=""></div>
                <div class="flex justify-center items-center">
                    <button type="submit" class="text-white py-4 px-10 bg-red-400 rounded-xl hover:bg-red-500 duration-300 ease-in-out">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection