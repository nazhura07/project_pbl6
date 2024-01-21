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
                <div class="">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        {{-- @foreach ($konselor as $data) --}}
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>

                </div>
                <h1 class="text-center mt-4 font-semibold text-lg mb-4">Pilih Jam</h1>
                <form action="" method="POST">
                    @csrf
                    <div class="w-full grid grid-cols-4 gap-4">
                        @foreach ($konselor as $data)
                        <label class="cursor-pointer">
                            <input type="radio" id="jam" value="1" class="peer sr-only" name="jam" />
                            <div
                                class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                            
                                        <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">{{ \Carbon\Carbon::parse($data->waktu_awal)->format('H:i') }}
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
       <script>
        document.addEventListener('DOMContentLoaded', function () {
            var availableTimeSlots = []; // Array to store available time slots

            // Your existing datepicker initialization code

            var dateInput = document.querySelector("input[name='tanggal']");
            dateInput.addEventListener('input', function () {
                // Call a function to update available time slots
                updateAvailableTimeSlots(dateInput.value);
            });

            // Function to update available time slots based on the selected date
            function updateAvailableTimeSlots(selectedDate) {
                // Assuming you have a way to get available time slots for each date on the server side
                // You can store this data in the "availableTimeSlots" array
                // For simplicity, I'll manually populate the array in this example
                availableTimeSlots = getAvailableTimeSlots(selectedDate);

                // Update the time slot options in the form
                updateTimeSlotOptions();
            }

            // Function to get available time slots for a specific date (replace with actual data retrieval logic)
            function getAvailableTimeSlots(selectedDate) {
                // Example: manually populating the array (replace with actual data retrieval)
                if (selectedDate === '2024-01-06') {
                    return [
                        { id: 1, startTime: '09:00', endTime: '10:00' },
                        { id: 2, startTime: '11:00', endTime: '12:00' },
                        // Add more time slots as needed
                    ];
                } else {
                    return [];
                }
            }

            // Function to update the time slot options in the form
            function updateTimeSlotOptions() {
                var grid = document.querySelector('.grid');

                // Remove existing options
                while (grid.firstChild) {
                    grid.removeChild(grid.firstChild);
                }

                // Append new options based on the availableTimeSlots array
                for (var i = 0; i < availableTimeSlots.length; i++) {
                    var timeSlot = availableTimeSlots[i];
                    var label = document.createElement('label');
                    label.className = 'cursor-pointer';

                    var input = document.createElement('input');
                    input.type = 'radio';
                    input.id = 'jam';
                    input.value = timeSlot.id;
                    input.className = 'peer sr-only';
                    input.name = 'jam';

                    var div = document.createElement('div');
                    div.className = 'w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2 peer-checked:shadow-md peer-checked:shadow-blue-700';

                    // Update the content of the time slot based on your data structure
                    div.innerHTML = '<div class="flex flex-col gap-1"><div class="flex items-center justify-between"><p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">' + timeSlot.startTime + '-' + timeSlot.endTime + '</p></div></div>';

                    label.appendChild(input);
                    label.appendChild(div);
                    grid.appendChild(label);
                }
            }
        });
    </script>
@endsection
