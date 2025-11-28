<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="css/style.css">
         

    <title>Share car</title>





</head>
<body class="bg-white text-gray-800">

<?php
include_once "header.php";?>



<!-- <section class=" mt-3 mx-4 md:mx-12 pt-10 pb-10 rounded-lg bg-gray-50 overflow-hidden"> -->

<!-- hiredriver -->
<section class="py-12 bg-gray-100">
  <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl px-6 py-10">

    <!-- Title -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-gray-800 border-b-4 border-sky-500 inline-block pb-1">
        Share Your Details
      </h2>
      <p class="text-gray-500 mt-2">Fill the form and submit your travel request.</p>
    </div>

    <form class="space-y-6">

      <!-- Name -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Name</label>
        <input type="text" placeholder="Enter your name"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- Mobile -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Mobile No</label>
        <input type="tel" placeholder="Enter your mobile number"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- Vehicle Name -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Vehicle Name</label>
        <input type="text" placeholder="Enter your vehicle name"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- Vehicle Number -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Vehicle Number</label>
        <input type="text" placeholder="Enter your vehicle number"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- Address -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Address</label>
        <input type="text" placeholder="Enter your address"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- From + To -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-gray-700 font-semibold mb-1">From</label>
          <input type="text" placeholder="City from"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <div>
          <label class="block text-gray-700 font-semibold mb-1">To</label>
          <input type="text" placeholder="City to"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>
      </div>

      <!-- Date / Seating -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-gray-700 font-semibold mb-1">Date / Time</label>
          <input type="datetime-local"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <div>
          <label class="block text-gray-700 font-semibold mb-1">Seating Capacity</label>
          <input type="number" placeholder="4 / 7 / 9"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>
      </div>

      <!-- Charges -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Charges Upto 2300/- Rs</label>
        <input type="text" placeholder="Enter charges for travel"
          class="w-full md:w-2/3 px-4 py-3 border border-gray-300 rounded-lg
                 focus:ring-2 focus:ring-sky-500 focus:outline-none">
      </div>

      <!-- Button -->
      <div class="text-center">
        <button type="submit"
          class="w-full md:w-1/2 bg-sky-600 text-white font-semibold 
                 py-3 rounded-lg shadow-md hover:bg-sky-700 transition">
          Share
        </button>
      </div>

    </form>

  </div>
</section>



<!-- </section> -->

</body>

</html>