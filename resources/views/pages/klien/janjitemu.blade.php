@extends('layout.pages')
@section('title', 'Janji Temu')
@section('content')
    <div class="bg-[#F0CDCF] h-screen">
        <div class="container mx-auto py-8">
            <a href="{{route('klien.konselor')}}" class="flex justify-start items-center">
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
        </div>
        <div class="flex justify-center items-center">
            <div class="bg-white rounded-2xl py-4 px-10">
                <h1 class="text-center font-semibold text-2xl mb-10">Buat Janji Temu</h1>
                <p class="text-center">Buat Janji Temu dengan <br> <span class="text-red-400 text-xl">{{$konselor->nama}}</span> </p>
                {{-- {{$konselor->jamKonselings}} --}}
                <div class="">
                  

                </div>
                <h1 class="text-center mt-4 font-semibold text-lg mb-4">Pilih Jam</h1>
                <form action="" method="POST">
                    @csrf
                    <div class="w-full grid grid-cols-1 gap-4">
                        @foreach ($konselor->jamKonselings as $data)
                        {{-- <p>{{$data}}</p> --}}
                        <label class="cursor-pointer">
                            <input type="radio" id="jam" value="1" class="peer sr-only" name="jam" />
                            <div
                                class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                            
                                        <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">{{ date('d F Y', strtotime($data->tanggal)) }}
                                            {{ \Carbon\Carbon::parse($data->waktu_awal)->format('H:i') }}
                                            - {{ \Carbon\Carbon::parse($data->waktu_akhir)->format('H:i') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                        @endforeach
                        
                    </div>
                    <button class="bg-red-400 rounded-2xl py-4 w-full text-white mt-10 hover:bg-red-500 duration-300 ease-in-out" type="submit">Ajukan Sesi</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endsection
