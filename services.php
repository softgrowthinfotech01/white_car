<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
    
<!-- header -->
<?php  

include_once "header.php";?>

<!-- header end -->


<section class="py-16 bg-gray-100" id="services">

  <!-- Title -->
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 border-b-4 border-sky-500 inline-block pb-1">
      Our Services
    </h2>
    <p class="text-gray-500 mt-2">We offer reliable, professional & comfortable travel options.</p>
  </div>

  <!-- Services Grid -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-6">

    <!-- SERVICE CARD -->
    <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl 
                hover:-translate-y-2 transition-all duration-300 cursor-pointer">

      <!-- Icon Circle -->
      <div class="flex justify-center mb-6">
        <span class="h-20 w-20 bg-sky-500 rounded-full flex items-center justify-center
                     group-hover:bg-sky-600 transition duration-300">
          <img src="img/bookCab.webp" class="w-12 h-12 object-contain" />
        </span>
      </div>

      <h3 class="text-xl font-semibold text-gray-800 text-center">Book Cab</h3>
      <p class="text-gray-500 text-center mt-2">
        Instant cab booking with trained and professional drivers.
      </p>
    </div>

    <!-- SERVICE CARD -->
    <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl 
                hover:-translate-y-2 transition-all duration-300 cursor-pointer">

      <div class="flex justify-center mb-6">
        <span class="h-20 w-20 bg-sky-500 rounded-full flex items-center justify-center
                     group-hover:bg-sky-600 transition duration-300">
          <img src="img/hourlyCab.webp" class="w-12 h-12 object-contain" />
        </span>
      </div>

      <h3 class="text-xl font-semibold text-gray-800 text-center">Hourly Base Cab</h3>
      <p class="text-gray-500 text-center mt-2">
        Hire a cab on an hourly basis — convenient for short trips.
      </p>
    </div>

    <!-- SERVICE CARD -->
    <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl 
                hover:-translate-y-2 transition-all duration-300 cursor-pointer">

      <div class="flex justify-center mb-6">
        <span class="h-20 w-20 bg-sky-500 rounded-full flex items-center justify-center
                     group-hover:bg-sky-600 transition duration-300">
          <img src="img/bookTraveller.webp" class="w-12 h-12 object-contain" />
        </span>
      </div>

      <h3 class="text-xl font-semibold text-gray-800 text-center">Book Traveller</h3>
      <p class="text-gray-500 text-center mt-2">
        Comfortable travellers perfect for group and family tours.
      </p>
    </div>

    <!-- SERVICE CARD -->
    <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl 
                hover:-translate-y-2 transition-all duration-300 cursor-pointer">

      <div class="flex justify-center mb-6">
        <span class="h-20 w-20 bg-sky-500 rounded-full flex items-center justify-center
                     group-hover:bg-sky-600 transition duration-300">
          <img src="img/hireDriver.webp" class="w-12 h-12 object-contain" />
        </span>
      </div>

      <h3 class="text-xl font-semibold text-gray-800 text-center">Hire Driver</h3>
      <p class="text-gray-500 text-center mt-2">
        Need a driver? Get a verified and professional driver anytime.
      </p>
    </div>

  </div>
</section>




<!-- footer -->
<?php  

include_once "footer.php";?> 


<!-- footer end -->




</body>
</html>