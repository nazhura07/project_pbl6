@extends('layout.pages')
@section('title', 'jadwal')
@section('content')
    <div class="container mx-auto py-10">
        <a href="{{ route('konselor.beranda') }}" class="flex justify-start items-center">
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
        <h1 class="text-center font-semibold mt-4 text-xl">Data Jadwal</h1>
        <a href="{{ route('konselor.jadwal.create') }}"
            class="bg-red-400 rounded-2xl py-2 px-10  text-white mt-10 hover:bg-red-500 duration-300 ease-in-out "
            type="submit">Tambah</a>
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
                                tanggal
                            </span>

                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                waktu awal
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            <span class="text-left">
                                waktu akhir
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <span class="text-center">
                                Aksi
                            </span>
                        </th>
                    </tr>
                </thead>
                @foreach ($jadwal as $data)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>

                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($data->tanggal)->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($data->waktu_awal)->format('H:i') }}

                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($data->waktu_akhir)->format('H:i') }}

                            </td>
                            <td class="px-6 py-4 flex justify-center items-center gap-4">

                <form action="{{route('konselor.jadwal.destroy', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 text-white py-2 w-28  hover:bg-red-400 rounded-xl duration-300 ease-in-out">Batalkan</button>
                </form>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
