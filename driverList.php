<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver List</title>
</head>
<body>


<!-- header -->
<?php

include_once "header.php";?>

<form class="w-full mx-auto px-4 py-3 bg-blue-50 shadow-md space-y-5">
<div class="text-white bg-blue-500 mt-7 text-center py-3 text-lg sm:text-xl font-bold"> Driver List </div>
 <!-- Button -->
<div class="w-full flex items-center justify-center">
  <!-- btn -->
  <button class="w-80 sm:w-80 lg:w-96 flex items-center justify-center bg-white border border-blue-500 rounded-xl px-4 py-3 shadow-sm hover:bg-gray-50 transition">
    <!-- icon -->
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24" stroke-width="1.5"
           stroke="currentColor" class="w-5 h-5 text-red-600">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
      </svg>
    <!-- city name -->
    <span class="text-gray-900 font-medium pl-5">Pune</span>
  </button>
</div>

<!-- cards -->

<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 gap-6 lg:grid-cols-3 gap-6">
    <!-- card 1 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Tukum, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              5 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 700/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 2 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Nikhil Chaudhari</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Ramnagar, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              10 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 500/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>


    </div>

    <!-- card 3 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Nikhil Chaudhari</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Ramnagar, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              10 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 500/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 4 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Rahul singh</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Sarkar nagar, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              6 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 750/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 5 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Tukum, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              5 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 700/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 6 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Tukum, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              5 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 700/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 7 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none ">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Tukum, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              5 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 700/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>

    <!-- card 8 -->
    <div class="w-full p-5 bg-white border-2 border-blue-300 rounded-xl shadow-sm hover:bg-blue-200 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:transform-none">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.webp" alt="car" class="w-20 h-20 object-cover rounded-full"/>
          <div>
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>
            <!-- icon -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                   stroke="currentColor" class="w-5 h-5 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
              </svg>
            <!-- location  -->
              <span class="text-gray-700 font-medium text-sm">Tukum, Chandrapur</span>
            </div>
              <!-- Experience -->
            <div class="flex items-center text-gray-700 font-medium text-sm">
              5 Years Experience
            </div>
            </div>
          </div>
         <!-- Rs -->
          <div class="text-gray-800 font-semibold text-sm mt-3">₹ 700/-Day</div>
        </div>
        <!-- call now btn -->
          <div class="flex justify-end mt-3">
           <button class="w-1/2 items-center text-lg font-medium bg-blue-50 border border-blue-200 text-gray-700 px-5 py-2 rounded-md shadow-sm hover:bg-blue-100">
             Call Now
           </button>
          </div>
    </div>



</div>
</form>
</body>
</html>