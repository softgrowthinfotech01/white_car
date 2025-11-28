<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Bus</title>
</head>
<body>
    
<!-- header -->
<?php  

include_once "header.php";?>

<!-- header end -->

<section class="py-10 bg-white " id="bus-section">

  <div class="max-w-6xl mx-auto px-4">

    <!-- Title -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-gray-800 border-b-4 border-sky-500 inline-block pb-1">
        Book Hourly Base Car
      </h2>
      <p class="text-gray-500 mt-2">Choose Based on Seating Capacity</p>
    </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

    <!-- CARD 4 SEATER -->
   <div class="group relative cursor-pointer overflow-hidden bg-white 
            px-6 pt-6 pb-5 
            shadow-md ring-1 ring-gray-200 transition-all duration-300 
            hover:-translate-y-1 hover:shadow-xl rounded-2xl 
            max-w-[470px] w-full mx-auto">


    <!-- BLUE CIRCLE BACKGROUND -->
<span class="absolute top-8 left-6 z-0 
             h-16 w-16 rounded-full bg-sky-500 
             transition-all duration-500 group-hover:scale-[9]"></span>


<span class="absolute top-9 left-7 z-10 
             h-14 w-14 flex items-center justify-center">

  <!-- WHITE CAR ICON -->
  <img src="img/car_icon.png" 
       alt="car icon"
       class="w-9 h-9 invert">

</span>


    <div class="relative z-10">

        <!-- HEADER -->
        <h3 class="text-center font-bold text-base text-gray-900 group-hover:text-white">
            4 SEATER
        </h3>

        <!-- TITLE -->
        <h2 class="text-lg font-bold text-gray-900 text-center mt-4 group-hover:text-white">
            Hourly Car Rental
        </h2>
        <p class="text-sm text-gray-600 text-center group-hover:text-white/80">
            Perfect For Your City Ride 🚕
        </p>

        <!-- PRICES -->
        <div class="flex justify-center items-center gap-2 mt-4">
            <span class="line-through text-gray-400 text-sm group-hover:text-white/70">₹ 500</span>
            <span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs font-semibold group-hover:bg-white group-hover:text-sky-600">
                SAVE 40%
            </span>
        </div>

        <p class="text-3xl font-bold text-center mt-1 group-hover:text-white">
            ₹ 299<span class="text-lg">/Hr</span>
        </p>

        <!-- FEATURES -->
        <ul class="mt-4 space-y-1.5 text-gray-700 text-sm group-hover:text-white">
            <li class="flex gap-2"><span class="text-green-500">✔</span> All A/C Cars</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> If you park here for longer than the alloted time, the charges will increase.</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 1 Hr – 10 Km/Hr Limit</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 2 Hr – 25 Km/Hr Limit</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> T&C Apply</li>
        </ul>

        <!-- BUTTON -->
        <button class="mt-5 w-full bg-sky-600 hover:bg-sky-700 text-white py-2 rounded-lg font-semibold shadow">
            📞 Enquiry
        </button>

    </div>
</div>


    <!-- CARD 7 SEATER -->
    <div class="group relative cursor-pointer overflow-hidden bg-white 
            px-6 pt-6 pb-5 
            shadow-md ring-1 ring-gray-200 transition-all duration-300 
            hover:-translate-y-1 hover:shadow-xl rounded-2xl 
            max-w-[470px] w-full mx-auto">

       <!-- BLUE CIRCLE BACKGROUND -->
<span class="absolute top-8 left-6 z-0 
             h-16 w-16 rounded-full bg-sky-500 
             transition-all duration-500 group-hover:scale-[9]"></span>


<span class="absolute top-9 left-7 z-10 
             h-14 w-14 flex items-center justify-center">

  <!-- WHITE CAR ICON -->
  <img src="img/car_icon.png" 
       alt="car icon"
       class="w-9 h-9 invert">

</span>


        <div class="relative z-10">

            <h3 class="text-center font-bold text-base text-gray-900 group-hover:text-white">
                7 SEATER
            </h3>

            <h2 class="text-lg font-bold text-gray-900 text-center mt-4 group-hover:text-white">
                Hourly Car Rental
            </h2>
            <p class="text-sm text-gray-600 text-center group-hover:text-white/80">
                Perfect For Your City Ride 🚕
            </p>

            <div class="flex justify-center items-center gap-2 mt-4">
                <span class="line-through text-gray-400 text-sm group-hover:text-white/70">₹ 600</span>
                <span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs font-semibold group-hover:bg-white group-hover:text-sky-600">
                    SAVE 42%
                </span>
            </div>

            <p class="text-3xl font-bold text-center mt-1 group-hover:text-white">
                ₹ 349<span class="text-lg">/Hr</span>
            </p>

           <ul class="mt-4 space-y-1.5 text-gray-700 text-sm group-hover:text-white">
            <li class="flex gap-2"><span class="text-green-500">✔</span> All A/C Cars</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> If you park here for longer than the alloted time, the charges will increase.</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 1 Hr – 10 Km/Hr Limit</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 2 Hr – 25 Km/Hr Limit</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> T&C Apply</li>
        </ul>

            <button class="mt-5 w-full bg-sky-600 hover:bg-sky-700 text-white py-2 rounded-lg font-semibold shadow">
                📞 Enquiry
            </button>

        </div>
    </div>

    <!-- CARD 9 SEATER -->
    <div class="group relative cursor-pointer overflow-hidden bg-white 
            px-6 pt-6 pb-5 
            shadow-md ring-1 ring-gray-200 transition-all duration-300 
            hover:-translate-y-1 hover:shadow-xl rounded-2xl 
            max-w-[470px] w-full mx-auto">

      <!-- BLUE CIRCLE BACKGROUND -->
<span class="absolute top-8 left-6 z-0 
             h-16 w-16 rounded-full bg-sky-500 
             transition-all duration-500 group-hover:scale-[9]"></span>


<span class="absolute top-9 left-7 z-10 
             h-14 w-14 flex items-center justify-center">

  <!-- WHITE CAR ICON -->
  <img src="img/car_icon.png" 
       alt="car icon"
       class="w-9 h-9 invert">

</span>


        <div class="relative z-10">

            <h3 class="text-center font-bold text-base text-gray-900 group-hover:text-white">
                9 SEATER
            </h3>

            <h2 class="text-lg font-bold text-gray-900 text-center mt-4 group-hover:text-white">
                Hourly Car Rental
            </h2>
            <p class="text-sm text-gray-600 text-center group-hover:text-white/80">
                Perfect For Your City Ride 🚕
            </p>

            <div class="flex justify-center items-center gap-2 mt-4">
                <span class="line-through text-gray-400 text-sm group-hover:text-white/70">₹ 700</span>
                <span class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs font-semibold group-hover:bg-white group-hover:text-sky-600">
                    SAVE 38%
                </span>
            </div>

            <p class="text-3xl font-bold text-center mt-1 group-hover:text-white">
                ₹ 399<span class="text-lg">/Hr</span>
            </p>

           <ul class="mt-4 space-y-1.5 text-gray-700 text-sm group-hover:text-white">
            <li class="flex gap-2"><span class="text-green-500">✔</span> All A/C Cars</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> If you park here for longer than the alloted time, the charges will increase.</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 1 Hr – 10 Km/Hr Limit</li>
            <li class="flex gap-2 leading-tight"><span class="text-green-500">✔</span> 2 Hr – 25 Km/Hr Limit</li>
            <li class="flex gap-2"><span class="text-green-500">✔</span> T&C Apply</li>
        </ul>
            <button class="mt-5 w-full bg-sky-600 hover:bg-sky-700 text-white py-2 rounded-lg font-semibold shadow">
                📞 Enquiry
            </button>

        </div>
    </div>

</div>


  </div>
</section>



<!-- footer -->
<?php  

include_once "footer.php";?> 


<!-- footer end -->



</body>
</html>