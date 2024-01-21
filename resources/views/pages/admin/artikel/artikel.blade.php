@extends('layout.pages')
@section('title', 'Artikel')
@section('content')
    <div class="container mx-auto py-10">
        <a href="{{route('admin.beranda')}}" class="flex w-fit justify-start items-center">
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
        <h1 class="text-center font-semibold mt-4 text-xl">Data Artikel</h1>
        <a href="{{route('admin.artikel.create')}}" class="bg-red-400 rounded-2xl py-2 px-10  text-white mt-10 hover:bg-red-500 duration-300 ease-in-out " type="submit">Tambah</a>
        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                NO
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                foto sampul
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                Judul
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Link Artikel
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $items )
                   
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$loop->iteration}}
                        </th>
                        <td class="px-6 py-4">
                            <div class="h-10 w-10 rounded-full" style="background-image: url('{{ asset('storage/'.$items->gambar) }}'); background-size: cover; background-position: center;">
                        </td>
                        <td class="px-6 py-4">
                            {{$items->judul}}
                        </td>
                        <td class="px-6 py-4">
                            {{$items->deskripsi}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{$items->link}}">
                                {{$items->link}}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.artikel.edit', $items->id) }}"
                                class="text-blue-500 hover:underline mr-4">Edit</a>
                            <form action="{{ route('admin.artikel.delete', $items->id) }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
