<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sharing Car</title>
</head>
<body>


<!-- header -->
<?php

include_once "header.php";?>

<form class="w-full mx-auto px-4 py-3 bg-blue-50 shadow-md space-y-5">
<div class="text-white bg-blue-500 mt-7 text-center py-3 text-lg sm:text-xl font-bold" >Sharing Car </div>

<!-- From and To buttons -->
<div class="flex flex-col sm:flex-row items-center justify-between max-w-md mx-auto space-y-3 sm:space-y-0 sm:gap-x-4 m-0">

  <!-- FROM BUTTON -->
  <button class="w-full flex items-center justify-between bg-white border border-blue-500 rounded-xl px-4 py-3 shadow-sm hover:bg-gray-50 transition">

    <!-- Left side icon -->
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24" stroke-width="1.5"
           stroke="currentColor" class="w-5 h-5 text-blue-600">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
      </svg>

      <span class="text-gray-700 font-medium">From</span>
    </div>

    <!-- city name -->
    <span class="text-gray-900 font-semibold">Mumbai</span>
  </button>


  <!-- TO BUTTON -->
  <button class="w-full flex items-center justify-between bg-white border border-blue-500 rounded-xl px-4 py-3 shadow-sm hover:bg-gray-50 transition">

    <!-- icon -->
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24" stroke-width="1.5"
           stroke="currentColor" class="w-5 h-5 text-red-600">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
      </svg>

      <span class="text-gray-700 font-medium">To</span>
    </div>

    <!-- city name -->
    <span class="text-gray-900 font-semibold">Pune</span>
  </button>

</div>

<!-- calendar -->
<div class="flex items-center w-full max-w-xs mx-auto p-4">
    <button class="w-full flex items-center justify-center bg-white border border-blue-500 rounded-xl px-4 py-3 shadow-sm hover:bg-gray-50 transition">

    <!-- Left side icon -->
    <div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24" stroke-width="1.5"
           stroke="currentColor" class="w-5 h-5 text-blue-600">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M8 2v3m8-3v3M3 9h18M5 6h14a2 2 0 012 2v11a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />
      </svg>

      <span class="text-gray-700 font-medium">Calendar</span>
    </div>

    </button>
</div>

<!-- search btn -->
<div class="flex items-center w-40 mx-auto ">
    <button class="w-full sm:w-40 flex items-center justify-center font-medium text-gray-700 bg-green-500 border border-blue-50 rounded-lg px-4 py-3 shadow-sm hover:bg-green-400 transition">
    Search
    </button>
</div>

<!-- card 1 -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
  <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
        <div class="flex items-center justify-between px-4 py-3">
          <div class="flex items-center gap-3">
            <img src="img/main_background1.webp" alt="car" class="w-16 h-12 object-cover rounded-lg "/>
            <div>
              <div class="font-semibold text-lg text-gray-800 ">Bhushan</div>
            </div>
          </div>


          <div class="flex flex-col items-end space-y-2">
            <div class="text-gray-800 font-semibold text-md">₹ 1150 / person</div>

            <button class="flex items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13A19.5 19.5 0 0 1 3.13 8.82 19.86 19.86 0 0 1 .0 0 2 2 0 0 1 2 0h3a2 2 0 0 1 2 1.72c.12 1.05.37 2.07.72 3.03a2 2 0 0 1-.45 1.95L6.54 8.54a16 16 0 0 0 7.92 7.92l1.86-1.86a2 2 0 0 1 1.95-.45c.96.35 1.98.6 3.03.72A2 2 0 0 1 22 16.92z"/>
              </svg>

              <span class="text-md font-medium">Enquire</span>
            </button>
            </div>
          </div>

        <!-- border -->
        <div class="border-t border-blue-200 "></div>

        <div class="px-6 py-4">
          <div class="flex">
            <div class="w-12 flex flex-col items-center ml-7">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2C8.7 2 6 4.7 6 8c0 4.8 6 11.5 6 11.5S18 12.8 18 8c0-3.3-2.7-6-6-6z"
                fill="#22c55e" />
              <circle cx="12" cy="8" r="2.2" fill="white" />
              </svg>


              <!-- vertical line -->
              <div class="w-px bg-gray-300 h-7 mx-auto -mt-1 "></div>

              <!-- dot -->
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
            </div>

            <div class="flex-1">
              <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">Nagpur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">1.30 pm</div>
              </div>

              <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">Chandrapur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">4.00 pm</div>
              </div>
            </div>
          </div>
        </div>
        </div>

  <!-- card 2 -->

  <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
        <div class="flex items-center justify-between px-4 py-3 ">
          <div class="flex items-center gap-3">
            <img src="img/main_background1.webp" alt="car" class="w-16 h-12 object-cover rounded-lg "/>
            <div>
              <div class="font-semibold text-lg text-gray-800 ">Bhushan</div>
            </div>
          </div>


          <div class="flex flex-col items-end space-y-2">
            <div class="text-gray-800 font-semibold text-md">₹ 1150 / person</div>

            <button class="flex items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13A19.5 19.5 0 0 1 3.13 8.82 19.86 19.86 0 0 1 .0 0 2 2 0 0 1 2 0h3a2 2 0 0 1 2 1.72c.12 1.05.37 2.07.72 3.03a2 2 0 0 1-.45 1.95L6.54 8.54a16 16 0 0 0 7.92 7.92l1.86-1.86a2 2 0 0 1 1.95-.45c.96.35 1.98.6 3.03.72A2 2 0 0 1 22 16.92z"/>
              </svg>

              <span class="text-md font-medium">Enquire</span>
            </button>
          </div>
        </div>

        <!-- border -->
        <div class="border-t border-blue-200 "></div>

        <div class="px-6 py-4">
          <div class="flex">
            <div class="w-12 flex flex-col items-center ml-7 ">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2C8.7 2 6 4.7 6 8c0 4.8 6 11.5 6 11.5S18 12.8 18 8c0-3.3-2.7-6-6-6z"
                fill="#22c55e" />
              <circle cx="12" cy="8" r="2.2" fill="white" />
              </svg>


              <!-- vertical line -->
              <div class="w-px bg-gray-300 h-7 mx-auto -mt-1 "></div>

              <!-- dot -->
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
            </div>

            <div class="flex-1">
              <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">Chandrapur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">8.00 am</div>
              </div>

              <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">Gadchiroli</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">10.30 am</div>
              </div>
            </div>
          </div>
         </div>
  </div>

  <!-- card 3 -->

  <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
        <div class="flex items-center justify-between px-4 py-3">
          <div class="flex items-center gap-3">
            <img src="img/main_background1.webp" alt="car" class="w-16 h-12 object-cover rounded-lg "/>
            <div>
              <div class="font-semibold text-lg text-gray-800 ">Bhushan</div>
            </div>
          </div>


          <div class="flex flex-col items-end space-y-2">
            <div class="text-gray-800 font-semibold text-md">₹ 1150 / person</div>

            <button class="flex items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13A19.5 19.5 0 0 1 3.13 8.82 19.86 19.86 0 0 1 .0 0 2 2 0 0 1 2 0h3a2 2 0 0 1 2 1.72c.12 1.05.37 2.07.72 3.03a2 2 0 0 1-.45 1.95L6.54 8.54a16 16 0 0 0 7.92 7.92l1.86-1.86a2 2 0 0 1 1.95-.45c.96.35 1.98.6 3.03.72A2 2 0 0 1 22 16.92z"/>
              </svg>

              <span class="text-md font-medium">Enquire</span>
            </button>
          </div>
        </div>

        <!-- border -->
        <div class="border-t border-blue-200 "></div>

        <div class="px-6 py-4">
          <div class="flex">
            <div class="w-12 flex flex-col items-center ml-7">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2C8.7 2 6 4.7 6 8c0 4.8 6 11.5 6 11.5S18 12.8 18 8c0-3.3-2.7-6-6-6z"
                fill="#22c55e" />
              <circle cx="12" cy="8" r="2.2" fill="white" />
              </svg>


              <!-- vertical line -->
              <div class="w-px bg-gray-300 h-7 mx-auto -mt-1 "></div>

              <!-- dot -->
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
            </div>

            <div class="flex-1">
              <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">Chandrapur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">6.00 am</div>
              </div>

              <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">Nagpur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">8.30 am</div>
              </div>
            </div>
          </div>
         </div>
  </div>

  <!-- card 4 -->

  <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
        <div class="flex items-center justify-between px-4 py-3">
          <div class="flex items-center gap-3">
            <img src="img/main_background1.webp" alt="car" class="w-16 h-12 object-cover rounded-lg "/>
            <div>
              <div class="font-semibold text-lg text-gray-800 ">Bhushan</div>
            </div>
          </div>


          <div class="flex flex-col items-end space-y-2">
            <div class="text-gray-800 font-semibold text-md">₹ 1150 / person</div>

            <button class="flex items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13A19.5 19.5 0 0 1 3.13 8.82 19.86 19.86 0 0 1 .0 0 2 2 0 0 1 2 0h3a2 2 0 0 1 2 1.72c.12 1.05.37 2.07.72 3.03a2 2 0 0 1-.45 1.95L6.54 8.54a16 16 0 0 0 7.92 7.92l1.86-1.86a2 2 0 0 1 1.95-.45c.96.35 1.98.6 3.03.72A2 2 0 0 1 22 16.92z"/>
              </svg>

              <span class="text-md font-medium">Enquire</span>
            </button>
          </div>
        </div>

        <!-- border -->
        <div class="border-t border-blue-200 "></div>

        <div class="px-6 py-4">
          <div class="flex">
            <div class="w-12 flex flex-col items-center ml-7">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2C8.7 2 6 4.7 6 8c0 4.8 6 11.5 6 11.5S18 12.8 18 8c0-3.3-2.7-6-6-6z"
                fill="#22c55e" />
              <circle cx="12" cy="8" r="2.2" fill="white" />
              </svg>


              <!-- vertical line -->
              <div class="w-px bg-gray-300 h-7 mx-auto -mt-1 "></div>

              <!-- dot -->
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
            </div>

            <div class="flex-1">
              <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">Chandrapur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">6.00 am</div>
              </div>

              <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">Nagpur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">8.30 am</div>
              </div>
            </div>
          </div>
         </div>
  </div>

  <!-- card 5 -->

  <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
        <div class="flex items-center justify-between px-4 py-3">
          <div class="flex items-center gap-3">
            <img src="img/main_background1.webp" alt="car" class="w-16 h-12 object-cover rounded-lg "/>
            <div>
              <div class="font-semibold text-lg text-gray-800 ">Bhushan</div>
            </div>
          </div>


          <div class="flex flex-col items-end space-y-2">
            <div class="text-gray-800 font-semibold text-md">₹ 1150 / person</div>

            <button class="flex items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13A19.5 19.5 0 0 1 3.13 8.82 19.86 19.86 0 0 1 .0 0 2 2 0 0 1 2 0h3a2 2 0 0 1 2 1.72c.12 1.05.37 2.07.72 3.03a2 2 0 0 1-.45 1.95L6.54 8.54a16 16 0 0 0 7.92 7.92l1.86-1.86a2 2 0 0 1 1.95-.45c.96.35 1.98.6 3.03.72A2 2 0 0 1 22 16.92z"/>
              </svg>

              <span class="text-md font-medium">Enquire</span>
            </button>
          </div>
        </div>

        <!-- border -->
        <div class="border-t border-blue-200 "></div>

        <div class="px-6 py-4">
          <div class="flex">
            <div class="w-12 flex flex-col items-center ml-7">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2C8.7 2 6 4.7 6 8c0 4.8 6 11.5 6 11.5S18 12.8 18 8c0-3.3-2.7-6-6-6z"
                fill="#22c55e" />
              <circle cx="12" cy="8" r="2.2" fill="white" />
              </svg>


              <!-- vertical line -->
              <div class="w-px bg-gray-300 h-7 mx-auto -mt-1 "></div>

              <!-- dot -->
              <div class="w-2 h-2 rounded-full bg-red-500"></div>
            </div>

            <div class="flex-1">
              <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">Chandrapur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">6.00 am</div>
              </div>

              <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">Nagpur</div>
                <div class="text-sm text-gray-600 sm: mr-14 lg:mr-14">8.30 am</div>
              </div>
            </div>
          </div>
         </div>
  </div>

</div>
</form>
</body>
</html>