<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round Trip</title>
</head>
<body>
    
<!-- header -->
<?php  

include_once "header.php";?>

<!-- header end -->

<section class="py-10 bg-white" id="cars-section">

  <div class="max-w-6xl mx-auto px-4">

    <!-- Title -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-gray-800 border-b-4 border-sky-500 inline-block pb-1">
       Book Round Trip Car
      </h2>
      <p class="text-gray-500 mt-2">Choose Based on Seating Capacity</p>
    </div>

    <!-- FILTER BUTTONS -->
    <div class="flex justify-center gap-3 mb-8">
      <button data-filter="all"
        class="filter-btn filter-active px-6 py-2 rounded-md text-sm font-semibold bg-sky-500 text-white">
        All
      </button>

      <button data-filter="four"
        class="filter-btn px-6 py-2 rounded-md text-sm font-semibold bg-gray-200 text-gray-700">
        4 Seater
      </button>

      <button data-filter="seven"
        class="filter-btn px-6 py-2 rounded-md text-sm font-semibold bg-gray-200 text-gray-700">
        7 Seater
      </button>

      <button data-filter="nine"
        class="filter-btn px-6 py-2 rounded-md text-sm font-semibold bg-gray-200 text-gray-700">
        9 Seater
      </button>
    </div>

    <!-- CAR GRID -->
    <div id="car-items" class="grid grid-cols-1 sm:grid-cols-2 gap-6">

      <!-- CARD 1 -->
      <div id="car-1" class="car-item four bg-[#f5f5f5] rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden border border-gray-300 mx-2 sm:mx-0">
        <div class="flex flex-col md:flex-row">

          <div class="w-full md:w-1/2 overflow-hidden  flex items-center justify-center ">
            <img src="img/city.webp"
                 class="w-full h-full object-cover hover:scale-110 transition duration-500">
          </div>

          
          <div class="w-full md:w-1/2 p-4 sm:p-0 flex flex-col justify-center text-center ">
             <span class="mt-0 w-32 inline-block ml-auto bg-orange-100 text-black px-4 py-1 rounded-md text-sm font-medium text-center">
              4 Seater
            </span>
            <h4 class="text-xl font-bold py-1 text-center">Honda</h4>
            <p class="text-gray-700 text-lg font-semibold text-center">City</p>

           
            <button class="mt-3 w-50 mx-auto inline-block bg-blue-600 text-white px-4 py-1 rounded-md text-sm font-medium text-center">
             📞 Enquiry
</button>
          </div>
          

        </div>
      </div>

      <!-- CARD 2 -->
      <div id="car-2" class="car-item seven bg-[#f5f5f5] rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden border border-gray-300 mx-2 sm:mx-0">
        <div class="flex flex-col md:flex-row">

          <div class="w-full md:w-1/2 overflow-hidden  flex items-center justify-center ">
            <img src="img/innova.webp"
                 class="w-full h-full object-cover hover:scale-110 transition duration-500">
          </div>

          
          <div class="w-full md:w-1/2 p-4 sm:p-0 flex flex-col justify-center text-center ">
             <span class="mt-0 w-32 inline-block ml-auto bg-orange-100 text-black px-4 py-1 rounded-md text-sm font-medium text-center">
              7 Seater
            </span>
            <h4 class="text-xl font-bold py-1 text-center">Toyota</h4>
            <p class="text-gray-700 text-lg font-semibold text-center">Innova Crysta</p>

           
            <button class="mt-3 w-50 mx-auto inline-block bg-blue-600 text-white px-4 py-1 rounded-md text-sm font-medium text-center">
              📞 Enquiry
</button>
          </div>
          

        </div>
      </div>

      <!-- CARD 3 -->
      <div id="car-3" class="car-item nine bg-[#f5f5f5] rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden border border-gray-300 mx-2 sm:mx-0">
        <div class="flex flex-col md:flex-row">

           <div class="w-full md:w-1/2 overflow-hidden  flex items-center justify-center ">
            <img src="img/scorpio.webp"
                 class="w-full h-full object-cover hover:scale-110 transition duration-500">
          </div>

          
          <div class="w-full md:w-1/2 p-4 sm:p-0 flex flex-col justify-center text-center ">
             <span class="mt-0 w-32 inline-block ml-auto bg-orange-100 text-black px-4 py-1 rounded-md text-sm font-medium text-center">
              9 Seater
            </span>
            <h4 class="text-xl font-bold py-1 text-center">Mahindra</h4>
            <p class="text-gray-700 text-lg font-semibold text-center">Scorpio</p>

           
            <button class="mt-3 w-50 mx-auto inline-block bg-blue-600 text-white px-4 py-1 rounded-md text-sm font-medium text-center">
              📞 Enquiry
</button>
          </div>
          

        </div>
      </div>

    </div>

  </div>
</section>



<!-- footer -->
<?php  

include_once "footer.php";?> 


<!-- footer end -->



<script>
  const filterBtns = document.querySelectorAll(".filter-btn");
  const carItems = document.querySelectorAll(".car-item");

  filterBtns.forEach(btn => {
    btn.addEventListener("click", () => {

      // highlight active button
      filterBtns.forEach(b => b.classList.remove("bg-sky-500", "text-white"));
      filterBtns.forEach(b => b.classList.add("bg-gray-200", "text-gray-700"));

      btn.classList.remove("bg-gray-200", "text-gray-700");
      btn.classList.add("bg-sky-500", "text-white");

      const filter = btn.dataset.filter;

      carItems.forEach(car => {
        if (filter === "all" || car.classList.contains(filter)) {
          car.classList.remove("hidden");
        } else {
          car.classList.add("hidden");
        }
      });

    });
  });
</script>


</body>
</html>