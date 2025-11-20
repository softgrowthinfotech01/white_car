<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Car</title>
      

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

  <!-- booking-->
  
<section class=" mt-6 mx-4 md:mx-12 rounded-lg bg-gray-50 overflow-hidden">

    <!-- TAB BAR (Stick to top like Flowbite) -->
    <ul class="flex w-full text-sm font-medium text-center text-gray-700 divide-x divide-gray-300 border-b border-gray-300 bg-white">
        <li class="flex-1">
            <button data-tabs-target="#oneway"
                class="tab-btn w-full p-3 sm:p-4 bg-white hover:bg-blue-50 active-tab">
                Oneway Car
            </button>
        </li>

        <li class="flex-1">
            <button data-tabs-target="#roundtrip"
                class="tab-btn w-full p-3 sm:p-4 bg-white hover:bg-blue-50">
                Round Trip
            </button>
        </li>

        <li class="flex-1">
            <button data-tabs-target="#perhour"
                class="tab-btn w-full p-3 sm:p-4 bg-white hover:bg-blue-50">
                Per Hour
            </button>
        </li>

        <li class="flex-1">
            <button data-tabs-target="#minibus"
                class="tab-btn w-full p-3 sm:p-4 bg-white hover:bg-blue-50">
                Mini Bus
            </button>
        </li>
    </ul>

    <!-- CONTENT AREA -->
    <div class="p-6">

        <!-- Oneway -->
        <div id="oneway" class="tab-content block">
            <div class="bg-blue-50 p-6 rounded-xl shadow max-w-xl mx-auto">
                <input type="text" placeholder="From" class="w-full mb-3 p-3 rounded border" />
                <input type="text" placeholder="To" class="w-full mb-3 p-3 rounded border" />
                <input type="date" class="w-full p-3 rounded border" />

                <div class="flex justify-center">
                    <a href="onewayCar.php"
                        class="border bg-blue-500 rounded-lg text-white p-3 mt-4">
                        Search
                    </a>
                </div>
            </div>
        </div>

        <!-- Round Trip -->
        <div id="roundtrip" class="tab-content hidden">
            <div class="bg-blue-50 p-6 rounded-xl shadow max-w-xl mx-auto">
                <input type="text" placeholder="From" class="w-full mb-3 p-3 rounded border" />
                <input type="text" placeholder="To" class="w-full mb-3 p-3 rounded border" />
                <input type="date" class="w-full mb-3 p-3 rounded border" />
                <input type="date" class="w-full p-3 rounded border" />
            </div>
        </div>

        <!-- Per Hour -->
        <div id="perhour" class="tab-content hidden">
            <div class="bg-blue-50 p-6 rounded-xl shadow max-w-xl mx-auto">
                <p class="text-center text-gray-600">Per Hour Booking</p>
            </div>
        </div>

        <!-- Mini Bus -->
        <div id="minibus" class="tab-content hidden">
            <div class="bg-blue-50 p-6 rounded-xl shadow max-w-xl mx-auto">
                <p class="text-center text-gray-600">Mini Bus Booking</p>
            </div>
        </div>

    </div>
</section>

  <!-- OUR SERVICES -->
  <section class="mt-12 px-6 md:px-12">
    <h2 class="text-2xl font-semibold mb-6">Our Services</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

      <div>
        <div class="bg-blue-50 h-32 rounded-xl shadow flex items-center justify-center">Photo</div>
        <p class="mt-2 font-medium">Book Cab</p>
      </div>

      <div>
        <div class="bg-blue-50 h-32 rounded-xl shadow flex items-center justify-center">Photo</div>
        <p class="mt-2 font-medium">Hourly Base Cab</p>
      </div>

      <div>
        <div class="bg-blue-50 h-32 rounded-xl shadow flex items-center justify-center">Photo</div>
        <p class="mt-2 font-medium">Book Traveller</p>
      </div>

      <div>
        <div class="bg-blue-50 h-32 rounded-xl shadow flex items-center justify-center">Photo</div>
        <p class="mt-2 font-medium">Hire Driver</p>
      </div>

    </div>
  </section>

  <!-- BIG PHOTO + PACKAGE -->
  <section class="mt-12 px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-8">

    <!-- Large Photo -->
    <div class="bg-blue-50 h-64 rounded-2xl shadow flex items-center justify-center text-xl font-semibold">
      Photo
    </div>

    <!-- Package Details -->
    <div>
      <h2 class="text-xl font-semibold mb-2">Tadoba Booking Service</h2>
      <div class="border h-40 rounded-xl shadow flex items-center justify-center font-semibold text-lg">
        Package Details
      </div>
    </div>

  </section>

  <!-- ABOUT, LOCATION, CONTACT -->
  <footer class="mt-16 px-6 md:px-12 py-12 bg-gray-100 grid grid-cols-1 md:grid-cols-3 gap-10">

    <div>
      <h3 class="font-bold text-lg mb-2">About</h3>
      <p class="text-sm leading-relaxed">
        We are dedicated to providing safe, reliable, and convenient transport solutions with our
        comprehensive taxi and ride-hailing services.
      </p>
    </div>

    <div>
      <h3 class="font-bold text-lg mb-2">Location</h3>
      <p>Chandrapur,<br>Maharashtra - 442401</p>
    </div>

    <div>
      <h3 class="font-bold text-lg mb-2">Contact</h3>
      <p>+91 2225546454</p>
      <p>Email:</p>
    </div>

  </footer>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach(button => {
        button.addEventListener("click", () => {

            tabButtons.forEach(btn => {
                btn.classList.remove("bg-blue-100", "text-blue-700", "active-tab");
                btn.classList.add("bg-white");
            });

            
            button.classList.add("bg-blue-100", "text-blue-700", "active-tab");

          
            tabContents.forEach(content => content.classList.add("hidden"));

           
            const target = button.dataset.tabsTarget;
            document.querySelector(target).classList.remove("hidden");
        });
    });

    // Default open
    tabButtons[0].click();
});
</script>


</body>

</html>