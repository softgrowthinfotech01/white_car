<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Car</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>

    <style>
    .carousel {
      --items: 6;
      --carousel-duration: 30s;
      --carousel-width: 80vw;
      --carousel-item-width: 280px;
      --carousel-item-height: 350px;
      --carousel-item-gap: 2rem;
      position: relative;
      overflow: hidden;
    }

    .carousel-mask {
      position: absolute;
      inset: 0;
      pointer-events: none;
      mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
    }

    .carousel-inner {
      position: relative;
      width: var(--carousel-width);
      max-width: 1200px;
      height: var(--carousel-item-height);
    }

    .carousel-item {
      animation: marquee var(--carousel-duration) linear infinite;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .carousel:hover .carousel-item {
      animation-play-state: paused;
    }

    .carousel-item:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 18px 35px rgba(15, 23, 42, 0.35);
    }

    @keyframes marquee {
      0% { transform: translateX(0); }
      100% {
        transform: translateX(
          calc(
            (var(--items) * (var(--carousel-item-width) + var(--carousel-item-gap))) * -1
          )
        );
      }
    }
  </style>

</head>

<body class="bg-white text-gray-900 font-sans">


    <!-- header -->
    <?php

    include_once "header.php"; ?>

<!-- header end -->

    <section class="relative w-full h-auto md:h-[500px] lg:h-[650px] mx-auto max-w-8xl overflow-hidden z-10">

        <!-- FLOWBITE CAROUSEL -->
        <div id="hero-carousel" class="relative w-full h-[300px] md:absolute md:inset-0 md:h-full" data-carousel="slide"
            data-carousel-interval="3000">

            <!-- Slide 1 -->
            <div class="hidden duration-700 ease-in-out h-full w-full" data-carousel-item="active">
                <div class="h-full w-full bg-cover bg-center"
                    style="background-image: url('img/main_background1.png');">
                    <div class="h-full w-full bg-black/70 flex items-center">
                        <div class="text-white px-4 sm:px-6 lg:px-16 w-full lg:w-1/2 
            text-center lg:text-left
            flex flex-col items-center lg:items-start">
                            <h1 class="text-3xl lg:text-5xl font-extrabold mb-6 leading-tight">
                                Your <span class="color-primary-text">Next Journey</span> Starts Here.
                            </h1>
                            <p class="text-lg md:text-xl text-gray-200">
                                Safe, reliable, and comfortable travel solutions, tailored just for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hidden duration-700 ease-in-out h-full w-full" data-carousel-item>
                <div class="h-full w-full bg-cover bg-center"
                    style="background-image: url('img/main_background2.png');">
                    <div class="h-full w-full bg-black/70 flex items-center">
                        <div class="text-white px-4 sm:px-6 lg:px-16 w-full lg:w-1/2 
            text-center lg:text-left
            flex flex-col items-center lg:items-start">
                            <h1 class="text-3xl lg:text-5xl font-extrabold mb-6 leading-tight">
                                Book <span class="color-primary-text">Premium Cars</span> Anytime.
                            </h1>
                            <p class="text-lg md:text-xl text-gray-200">
                                Choose from our wide fleet and travel anywhere with ease.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hidden duration-700 ease-in-out h-full w-full" data-carousel-item>
                <div class="h-full w-full bg-cover bg-center"
                    style="background-image: url('img/main_background3.png');">
                    <div class="h-full w-full bg-black/70 flex items-center">
                        <div class="text-white px-4 sm:px-6 lg:px-16 w-full lg:w-1/2 
            text-center lg:text-left
            flex flex-col items-center lg:items-start">
                            <h1 class="text-3xl lg:text-5xl font-extrabold mb-6 leading-tight">
                                Travel <span class="color-primary-text">Anywhere</span> Hassle-Free.
                            </h1>
                            <p class="text-lg md:text-xl text-gray-200">
                                Affordable rides with experienced drivers, ready when you are.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- RIGHT SIDE FORM -->
        <div class="relative md:absolute md:inset-0 flex items-end md:items-center justify-center md:justify-end px-4 md:px-6 lg:px-16 z-30 pointer-events-none mt-6 md:mt-0">
            <div class="w-full max-w-md md:max-w-lg lg:max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden pointer-events-auto 
            mb-6 md:mb-0">

                <ul
                    class="flex w-full text-sm sm:text-base font-medium text-center text-gray-700 divide-x divide-gray-200 bg-gray-50 border-b">
                    <li class="flex-1">
                        <button data-tabs-target="#oneway"
                            class="tab-btn w-full whitespace-nowrap h-12 sm:h-14 flex items-center justify-center p-3 sm:p-4 hover:bg-gray-100 transition">
                            Oneway Car
                        </button>
                    </li>
                    <li class="flex-1">
                        <button data-tabs-target="#roundtrip"
                            class="tab-btn w-full whitespace-nowrap h-12 sm:h-14 flex items-center justify-center p-3 sm:p-4 hover:bg-gray-100 transition">
                            Round Trip
                        </button>
                    </li>
                    <li class="flex-1">
                        <button data-tabs-target="#perhour"
                            class="tab-btn w-full whitespace-nowrap h-12 sm:h-14 flex items-center justify-center p-3 sm:p-4 hover:bg-gray-100 transition">
                            Per Hour
                        </button>
                    </li>
                    <li class="flex-1">
                        <button data-tabs-target="#minibus"
                            class="tab-btn w-full whitespace-nowrap h-12 sm:h-14 flex items-center justify-center p-3 sm:p-4 hover:bg-gray-100 transition">
                            Mini Bus
                        </button>
                    </li>
                </ul>


                <div class="p-6">

                    <div id="oneway" class="tab-content block space-y-4 py-4 ">
                        <input type="text" placeholder="From Location"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                        <input type="text" placeholder="To Destination"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                        <input type="date"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />

                        <div class="flex justify-center pt-2">
                            <a href="shareCar"
                                class="color-primary color-primary-hover text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                                Search Car
                            </a>
                        </div>
                    </div>


                           <!-- roundtrip -->
                    <div id="roundtrip" class="tab-content hidden">
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 bg-gray-800">

                            <div class="grid gap-8 md:grid-cols-3">

                                <!-- CARD 1 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/fourSeater.png" alt="4 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            4 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="roundTrip" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>


                                <!-- CARD 2 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/7seater.png" alt="7 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            7 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="roundTrip" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <!-- CARD 3 -->
                                <div class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/9seater.png" alt="9 Seater" class=" w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            9 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="roundTrip" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="perhour" class="tab-content hidden">
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 bg-gray-800">

                            <div class="grid gap-8 md:grid-cols-3">

                                <!-- CARD 1 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/4seater.png" alt="4 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            4 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="perHour" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>


                                <!-- CARD 2 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/sevenSeater.png" alt="7 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            7 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="perHour" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <!-- CARD 3 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/nineSeater.png" alt="9 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            9 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="perHour" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="minibus" class="tab-content hidden">
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 bg-gray-800">

                            <div class="grid gap-8 md:grid-cols-3">

                                <!-- CARD 1 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/15seater.png" alt="15 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            15 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="miniBus" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>


                                <!-- CARD 2 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/20seater.png" alt="20 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            20 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="miniBus" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>

                                <!-- CARD 3 -->
                                <div
                                    class="w-full max-w-[250px] sm:max-w-[280px] md:max-w-sm mx-auto 
     border border-gray-200 rounded-2xl shadow-md 
     hover:shadow-lg transition-all duration-300
     bg-gradient-to-br from-white via-blue-50 to-blue-200 
     transform hover:-translate-y-1">

                                    <!-- Image -->
                                    <a href="#">
                                        <img src="img/26seater.png" alt="26 Seater" class="w-full rounded-t-2xl object-cover h-40 sm:h-44 md:h-48 lg:object-contain lg:h-auto">
                                    </a>

                                    <!-- Content -->
                                    <div class="p-6 text-center">

                                        <h1 class="text-2xl font-semibold text-gray-800 mb-6">
                                            26 Seater
                                        </h1>

                                        <!-- Button -->
                                        <a href="miniBus" class="inline-flex items-center justify-center text-white bg-blue-600 
                  hover:bg-blue-700 border border-transparent shadow-sm
                  font-medium rounded-xl text-sm px-4 py-2.5 transition-all">
                                            See More
                                            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>


    <section class="py-16 px-6 md:px-16 color-light">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Our Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center max-w-6xl mx-auto">

            <!-- Card 1 -->
            <div
                class="cursor-pointer group relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-lg transition-shadow duration-300">
                <div class="relative h-56 m-2.5 overflow-hidden rounded-md">
                    <img class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
                        src="img/bookCab.png" alt="book a cab" />
                </div>

                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">Book Cab</h6>
                    <p class="text-slate-600 leading-normal">Quick cab booking in just one tap—simple and seamless.</p>
                </div>


            </div>

            <!-- Card 2 - Hourly Base Cab -->
            <div
                class="cursor-pointer group relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-lg transition-shadow duration-300">
                <div
                    class="relative h-56 m-2.5 overflow-hidden rounded-md bg-slate-50 flex items-center justify-center">
                    <img class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
                        src="img/hourlyCab.png" alt="Hourly Service Icon" />
                </div>

                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">Hourly Base Cab</h6>
                    <p class="text-slate-600 leading-normal">Hire a cab hourly, your time your way.</p>
                </div>


            </div>

            <!-- Card 3 - Book Traveller -->
            <div
                class="cursor-pointer group relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-lg transition-shadow duration-300">
                <div
                    class="relative h-56 m-2.5 overflow-hidden rounded-md bg-slate-50 flex items-center justify-center">
                    <img class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
                        src="img/bookTraveller.png" alt="Mini Bus Icon" />
                </div>

                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">Book Traveller</h6>
                    <p class="text-slate-600 leading-normal">Book a traveller for group journeys.</p>
                </div>


            </div>

            <!-- Card 4 - Hire Driver -->
            <div
                class="cursor-pointer group relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-lg transition-shadow duration-300">
                <div
                    class="relative h-56 m-2.5 overflow-hidden rounded-md bg-slate-50 flex items-center justify-center">
                    <img class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
                        src="img/hireDriver.png" alt="Driver Icon" />
                </div>

                <div class="p-4">
                    <h6 class="mb-2 text-slate-800 text-xl font-semibold">Hire Driver</h6>
                    <p class="text-slate-600 leading-normal">Hire a professional driver anytime.</p>
                </div>

            </div>

        </div>
    </section>`


    <!-- car slider -->

 <!-- ================== EASTER HIGHLIGHTS SECTION ================== -->
<section class="w-full max-w-6xl mx-auto py-12 md:py-16 ">



  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Our Vehicles</h2>
    
  </div>

  <div class="carousel mx-auto">

    <div class="carousel-mask"></div>

    <div class="carousel-inner">

 
      <!-- ITEM 1 -->
<article class="carousel-item absolute top-0 bg-white rounded-xl overflow-hidden border border-slate-200 shadow-sm "
  style=" left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*0*-1);">

  <div class="w-full h-[160px]">
    <img src="img/innova.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Toyota</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">Innova Crysta</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200">
    <div class="flex items-center justify-between">
    
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">7 Seater</span>
    </div>
  </div>

</article>



<!-- ITEM 2 -->
<article class="carousel-item absolute top-0 bg-white  rounded-xl overflow-hidden border border-slate-200  shadow-sm"
  style="left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*1*-1);">

  <div class="w-full h-[160px]">
    <img src="img/tigor.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Tata</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">Tigor</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200 ">
    <div class="flex items-center justify-between">
      
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">4 Seater</span>
    </div>
  </div>

</article>



<!-- ITEM 3 -->
<article class="carousel-item absolute top-0 bg-white  rounded-xl overflow-hidden border border-slate-200  shadow-sm"
  style="left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*2*-1);">

  <div class="w-full h-[160px]">
    <img src="img/city.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Honda</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">City</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200 ">
    <div class="flex items-center justify-between">
   
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">4 Seater</span>
    </div>
  </div>

</article>



<!-- ITEM 4 -->
<article class="carousel-item absolute top-0 bg-white  rounded-xl overflow-hidden border border-slate-200  shadow-sm"
  style="left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*3*-1);">

  <div class="w-full h-[160px]">
    <img src="img/scorpio.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Mahindra</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">Scorpio</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200 ">
    <div class="flex items-center justify-between">
      
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">7 Seater</span>
    </div>
  </div>

</article>



<!-- ITEM 5 -->
<article class="carousel-item absolute top-0 bg-white  rounded-xl overflow-hidden border border-slate-200  shadow-sm"
  style="left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*4*-1);">

  <div class="w-full h-[160px]">
    <img src="img/ciaz.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Maruti Suzuki</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">Ciaz</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200 ">
    <div class="flex items-center justify-between">
      
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">4 Seater</span>
    </div>
  </div>

</article>



<!-- ITEM 6 -->
<article class="carousel-item absolute top-0 bg-white  rounded-xl overflow-hidden border border-slate-200  shadow-sm"
  style="left: calc(100% + var(--carousel-item-gap)); width: var(--carousel-item-width); height: 300px; animation-delay: calc(var(--carousel-duration)/var(--items)*5*-1);">

  <div class="w-full h-[160px]">
    <img src="img/creta.png" class="w-full h-full object-cover" />
  </div>

  <div class="px-4 pt-3 pb-2">
    <div class="flex items-center gap-2">
      <img src="https://www.mychoize.com/assets/img/mini_car.svg" class="w-5 h-5" />
      <p class="text-sm">Hyundai</p>
    </div>
    <div class="text-lg font-semibold text-right mr-2">Creta</div>
  </div>

  <div class="px-4 py-2 border-t border-slate-200 ">
    <div class="flex items-center justify-between">
     
      <span class="text-sm font-semibold bg-sky-500 text-white px-3 py-2 rounded-lg mt-2 ms-2">4 Seater</span>
    </div>
  </div>

</article>



    </div>
  </div>

</section>




    <section class="py-16 px-6 md:px-16 color-light">
        <div
            class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center bg-white p-8 rounded-2xl shadow-2xl">

            <!-- Carousel Replaced Here -->
            <div class="h-75 rounded-xl shadow-lg flex items-center justify-center overflow-hidden z-20">

                <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-full overflow-hidden rounded-xl">

                        <!-- Item 1 -->
                        <div class="duration-700 ease-in-out" data-carousel-item="active">
                            <img src="img/tadobaTiger.png"
                                class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                                alt="tiger image">
                        </div>

                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="img/deer.png"
                                class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                                alt="deer image">
                        </div>

                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="img/safari.jpg"
                                class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                                alt="safari image">
                        </div>

                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="img/tiger2.png"
                                class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                                alt="tiger image">
                        </div>

                    </div>
                </div>

            </div>

            <!-- Right Content -->
            <div class="p-2">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Tadoba Booking Service</h2>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Description here....
                </p>
                <div class="p-4 rounded-xl border-l-4 border-[#0BA6DF] bg-gray-50">
                    <h3 class="font-bold text-lg text-gray-800 mb-1">Exclusive Package Details:</h3>
                    <p class="text-sm text-gray-600">Description here....</p>
                </div>
                <button
                    class="mt-6 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300 shadow-lg">
                    Book Tadoba Trip
                </button>
            </div>

        </div>
    </section>

  <!-- footer -->
    <?php

    include_once "footer.php"; ?>

    <!-- footer end -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabButtons = document.querySelectorAll(".tab-btn");
            const tabContents = document.querySelectorAll(".tab-content");

            // Function to handle tab switching and styling
            const switchTab = (button) => {
                // Deactivate all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove("active-tab");
                });

                // Activate the clicked button
                button.classList.add("active-tab");

                // Hide all content
                tabContents.forEach(content => content.classList.add("hidden"));

                // Show the target content
                const target = button.dataset.tabsTarget;
                document.querySelector(target).classList.remove("hidden");
            };

            tabButtons.forEach(button => {
                button.addEventListener("click", () => switchTab(button));
            });

            // Default open on load
            const initialActiveButton = document.querySelector('.tab-btn[data-tabs-target="#oneway"]');
            if (initialActiveButton) {
                switchTab(initialActiveButton);
            }
        });
    </script>

</body>

</html>