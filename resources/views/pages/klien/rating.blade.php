@extends('layout.pages')
@section('title', 'Komentar Konselor')
@section('content')
    <div class="bg-[#F0CDCF] h-screen">
        <div class="container mx-auto py-8">
            <a href="{{route('klien.jadwal')}}" class="flex justify-start items-center">
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
            <div class="flex justify-center items-center mt-10">
                <div class="bg-white rounded-2xl w-1/2 py-4 px-10">
                    <h1 class="text-center font-semibold text-xl mb-10">Beri Nilai Konselor</h1>
                    <form action="" method="post">
                        @csrf
                        <div class="mb-4">
                            <h1>Beri Bintang</h1>
                            <select id="bintang" name="bintang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5" selected>5</option>
                              </select>
                              <div class="mb-4">
                                <div class="flex items-center ">
                                  @for ($i = 1; $i <= 5; $i++)
                                    <svg class="star-icon w-4 h-4 @if ($i <= 5) text-yellow-300 @else text-gray-300 dark:text-gray-500 @endif ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                  @endfor
                                </div>
                              </div>
                        <div class="mb-4">
                            <h1>Komentar</h1>
                            <textarea id="komentar" name="komentar" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-sm" placeholder="Komentar" required></textarea>
                        </div>
                        <button type="submit" class="bg-red-400 text-white w-full rounded-3xl py-3 hover:bg-red-500 duration-300">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          // Dapatkan elemen dropdown dan bintang
          const dropdown = document.getElementById('bintang');
          const starIcons = document.querySelectorAll('.star-icon');
      
          // Tambahkan event listener pada perubahan nilai dropdown
          dropdown.addEventListener('change', function () {
            // Ambil nilai yang dipilih dari dropdown
            const selectedValue = parseInt(dropdown.value);
      
            // Setiap bintang memiliki class 'star-icon', jadi kita bisa mengaksesnya satu per satu
            starIcons.forEach((icon, index) => {
              // Jika index kurang dari nilai yang dipilih, beri warna kuning
              if (index < selectedValue) {
                icon.classList.add('text-yellow-300');
                icon.classList.remove('text-gray-300');
              } else {
                icon.classList.remove('text-yellow-300');
                icon.classList.add('text-gray-300');
              }
            });
          });
        });
      </script>
@endsection
