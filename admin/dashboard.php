<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
       Admin | White Car
    </title>

    <link rel="stylesheet" href="css/tail.css">
    <!-- <link rel="stylesheet" href="a.css"> -->   


    <!-- dddd -->

    <!--  -->
  
</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">
    <!-- ===== Preloader Start ===== -->
 <?php

include_once 'loader.php';


?>
<!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">

        <!-- ===== Sidebar Start ===== -->
        <?php

include_once 'sidebar.php';

?>
 <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative bg-gray-800 flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- Small Device Overlay Start -->
            <div @click="sidebarToggle = false" :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
                class="fixed w-full h-screen z-9 bg-gray-900/50"></div>

            <!-- Small Device Overlay End -->

            <!-- ===== Header Start ===== -->
           
              <?php

       include_once 'header.php';

            ?>
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
       <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 p-6 pt-20">

    <!-- Car Rentals -->
    <a href="list_carRental.php"  class="flex items-center gap-4 p-5 bg-white border border-gray-300 rounded-xl shadow-sm hover:scale-95">
        <div class=" p-3 bg-gray-100 rounded-lg">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15a4.5 4.5 0 014.5-4.5h10.5a4.5 4.5 0 014.5 4.5v2.25H2.25V15z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.5 10.5l1.5-4.5h12l1.5 4.5" />
            </svg>
        </div>
        <div  >
            <p class="text-gray-600 text-sm">Total Car Rentals</p>
            <h2 class="text-2xl font-bold text-gray-900">120</h2>
        </div>
</a>

    <!-- Driver Count -->
    <a href="list_driver.php"  class="flex items-center gap-4 p-5 bg-white border border-gray-300 rounded-xl shadow-sm hover:scale-95">
        <div class="p-3 bg-gray-100 rounded-lg">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 20.25a9 9 0 0118 0" />
            </svg>
        </div>
        <div>
            <p class="text-gray-600 text-sm">Total Drivers</p>
            <h2 class="text-2xl font-bold text-gray-900">45</h2>
        </div>
</a>

    <!-- Sharing Cab Drivers -->
    <a href="list_sharingCabDriver.php"  class="flex items-center gap-4 p-5 bg-white border border-gray-300 rounded-xl shadow-sm hover:scale-95">
        <div class="p-3 bg-gray-100 rounded-lg">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 19.5l1.5-4.5h16.5l1.5 4.5" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 10.5a6 6 0 1112 0" />
            </svg>
        </div>
        <div>
            <p class="text-gray-600 text-sm">Sharing Cab Drivers</p>
            <h2 class="text-2xl font-bold text-gray-900">18</h2>
        </div>
</a>

    <!-- Complaints -->
    <a href="list_complaint.php"  class="flex items-center gap-4 p-5  bg-white border border-gray-300 rounded-xl shadow-sm hover:scale-95">
        <div class="p-3 bg-gray-100 rounded-lg">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75" />
                <circle cx="12" cy="6.75" r="0.75" fill="currentColor" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.5 12A7.5 7.5 0 1112 19.5H6l-1.5 3v-3A7.5 7.5 0 014.5 12z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-600 text-sm">Complaints</p>
            <h2 class="text-2xl font-bold text-gray-900">7</h2>
        </div>
</a>

    <!-- Feedback -->
    <a href="list_feedback.php"  class="flex items-center gap-4 p-5 bg-white border border-gray-300 rounded-xl shadow-sm hover:scale-95">
        <div class="p-3 bg-gray-100 rounded-lg">
            <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 15l6-6 4 4 8-8" />
            </svg>
        </div>
        <div>
            <p class="text-gray-600 text-sm">Feedback</p>
            <h2 class="text-2xl font-bold text-gray-900">52</h2>
        </div>
</a>

</div>

            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->



    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>