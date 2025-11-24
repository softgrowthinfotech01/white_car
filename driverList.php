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

<form class="max-w-lg mx-auto px-4 py-3 bg-blue-50 shadow-md space-y-5">
<div class="text-white bg-blue-500 mt-7 text-center py-3 text-lg sm:text-xl font-bold"> Driver List </div>
 <!-- Button -->
<div class="w-1/2 flex items-center justify-center max-w-md mx-auto space-y-3 ">
  <button class="w-1/2 md:w-full flex items-center justify-between bg-white border border-blue-500 rounded-xl px-4 py-3 shadow-sm hover:bg-gray-50 transition">

    <!-- icon -->
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg"
           fill="none" viewBox="0 0 24 24" stroke-width="1.5"
           stroke="currentColor" class="w-5 h-5 text-red-600">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
      </svg>
    </div>
    <!-- city name -->
    <span class="text-gray-900 font-medium">Pune</span>
  </button>
</div>


<!-- card 1 -->
<div class="max-w-md mx-auto bg-white border-2 border-blue-300 rounded-xl shadow-sm">
      <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.png" alt="car" class="w-25 h-25 object-cover rounded-full"/>
          <div class="flex flex-col justify-between px-4 py-3">
            <div class="font-semibold text-lg text-gray-800">Abhishek Rathod</div>

            <!-- icon -->
            <div class="flex items-center">
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

            <div class="flex items-center">
            <span class="text-gray-700 font-medium text-sm">5 Years Experience</span>
            </div>

          </div>
        </div>

         <!-- Rs -->
        <div class="flex flex-col items-end">
          <div class="text-gray-800 font-semibold text-sm">₹ 700/-Day</div>
          </div>
        </div>

        <!-- call now btn -->
         <div class="flex justify-end p-3 ">
          <button class="w-1/2 items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
            <span class="text-lg font-medium">Call Now</span>
          </button>
         </div>
        </div>
      </div>
</div>

<!-- card 2 -->
<div class="max-w-md mx-auto bg-white border-2 border-blue-300 rounded-xl shadow-sm">
      <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.png" alt="car" class="w-25 h-25 object-cover rounded-full"/>
          <div class="flex flex-col justify-between px-4 py-3">
            <div class="font-semibold text-lg text-gray-800">Nikhil Chaudhari</div>

            <!-- icon -->
            <div class="flex items-center ">
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

            <div class="flex items-center">
            <span class="text-gray-700 font-medium text-sm">10 Years Experience</span>
            </div>

          </div>
        </div>

         <!-- Rs -->
        <div class="flex flex-col items-end">
          <div class="text-gray-800 font-semibold text-sm">₹ 500/-Day</div>
          </div>
        </div>

        <!-- call now btn -->
         <div class="flex justify-end p-3 ">
          <button class="w-1/2 items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
            <span class="text-lg font-medium">Call Now</span>
          </button>
         </div>
        </div>
      </div>
</div>

<!-- card 3 -->
<div class="max-w-md mx-auto bg-white border-2 border-blue-300 rounded-xl shadow-sm">
      <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.png" alt="car" class="w-25 h-25 object-cover rounded-full"/>
          <div class="flex flex-col justify-between px-4 py-3">
            <div class="font-semibold text-lg text-gray-800">Ajay Kolhe</div>

            <!-- icon -->
            <div class="flex items-center ">
            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-5 h-5 text-green-600">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
            <!-- location  -->
            <span class="text-gray-700 font-medium text-sm">Manish nagar, Chandrapur</span>
            </div>

            <!-- Experience -->

            <div class="flex items-center">
            <span class="text-gray-700 font-medium text-sm">7 Years Experience</span>
            </div>

          </div>
        </div>

         <!-- Rs -->
        <div class="flex flex-col items-end">
          <div class="text-gray-800 font-semibold text-sm">₹ 600/-Day</div>
          </div>
        </div>

        <!-- call now btn -->
         <div class="flex justify-end p-3 ">
          <button class="w-1/2 items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
            <span class="text-lg font-medium">Call Now</span>
          </button>
         </div>
        </div>
      </div>
</div>

<!-- card 4 -->
<div class="max-w-md mx-auto bg-white border-2 border-blue-300 rounded-xl shadow-sm">
      <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center gap-3">
            <!-- Image -->
          <img src="img/main_background1.png" alt="car" class="w-25 h-25 object-cover rounded-full"/>
          <div class="flex flex-col justify-between px-4 py-3">
            <div class="font-semibold text-lg text-gray-800">Rahul singh</div>

            <!-- icon -->
            <div class="flex items-center ">
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

            <div class="flex items-center">
            <span class="text-gray-700 font-medium text-sm">6 Years Experience</span>
            </div>

          </div>
        </div>

         <!-- Rs -->
        <div class="flex flex-col items-end">
          <div class="text-gray-800 font-semibold text-sm">₹ 750/-Day</div>
          </div>
        </div>

        <!-- call now btn -->
         <div class="flex justify-end p-3 ">
          <button class="w-1/2 items-center bg-blue-50 border border-blue-200 text-gray-700 px-5 py-1 gap-2 rounded-md shadow-sm hover:bg-blue-100">
            <span class="text-lg font-medium">Call Now</span>
          </button>
         </div>
        </div>
      </div>
</div>


</form>
</body>
</html>