<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="css/style.css">
         

    <title>Hire Driver</title>


<style>

  .active-tab {
    color: #2563eb;
    background-color: #e0dedeff;
  }
</style>


</head>
<body class="bg-white text-gray-800">

<?php
include_once "header.php";?>



<!-- <section class=" mt-3 mx-4 md:mx-12 pt-10 pb-10 rounded-lg bg-gray-50 overflow-hidden"> -->

<!-- hiredriver -->
<form class="max-w-lg mx-auto mt-4 mb-4 p-4 md:p-6  bg-blue-50 rounded-xl shadow-md space-y-5">

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
    <input
      type="text"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 "
      placeholder="Enter your name"
    />
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Mobile No</label>
    <input
      type="tel"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter your mobile number"
    />
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle Name</label>
    <input
      type="text"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter your vehicle name"
    />
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle Number</label>
    <input
      type="number"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter your vehicle number"
    />
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
    <input
      type="text"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter your address"
    />
  </div>

  <div class="flex flex-col md:flex-row md:gap-4">
  <div class="w-full md:w-1/2">
    <label class="block text-sm font-medium text-gray-700 mb-1">From</label>
    <input
      type="text"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter a city from"
    />
  </div>

  <div class="w-full md:w-1/2 mt-4 md:mt-0">
    <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
    <input
      type="text"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter a city to"
    />
  </div>
  </div>

  <div class="flex flex-col md:flex-row md:gap-4">
  <div class="w-full md:w-1/2">
    <label class="block text-sm font-medium text-gray-700 mb-1">Date/Time</label>
    <input
      type="datetime-local"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter date and time"
    />
  </div>

  <div class="w-full md:w-1/2 mt-4 md:mt-0">
    <label class="block text-sm font-medium text-gray-700 mb-1">Seating Capacity</label>
    <input
      type="number"
      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter Seating Capacity"
    />
  </div>
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Charges Upto 2300/- Rs</label>
    <input
      type="text"
      class="w-full md:w-2/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
      placeholder="Enter Charges for Travel"
    />
  </div>

  <button
    type="submit"
    class="w-full md:w-1/2 bg-green-600 text-white py-2 rounded-lg block mx-auto hover:bg-blue-700 transition"
  >
    Share
  </button>

</form>



<!-- </section> -->

</body>

</html>