<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Car Rental List
    </title>

    <link rel="stylesheet" href="css/tail.css">
    <!-- <link rel="stylesheet" href="a.css"> -->

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

    //include_once 'loader.php';
    

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
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
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
            <main class="px-4 py-5 md:px-8">
                <div class="max-w-5xl mx-auto">

                    <div
                        class="rounded-xl border border-gray-200 bg-white shadow-sm">

                        <!-- Header -->
                        <div class="px-4 py-3 border-b border-gray-100 ">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Car Rental Details
                            </h3>
                        </div>

                        <!-- Table Wrapper -->
                        <div class="overflow-x-auto px-2 py-3 sm:px-4 sm:py-4">

                            <table class="min-w-full text-left border-separate border-spacing-y-2">

                                <thead>
                                    <tr class="bg-gray-50 ">
                                        <th class="p-3 text-sm font-medium text-gray-600">Vehicle Name</th>
                                        <th class="p-3 text-sm font-medium text-gray-600">Vehicle Number</th>
                                        <th class="p-3 text-sm font-medium text-gray-600">Vehicle Photo</th>
                                        <th class="p-3 text-sm font-medium text-gray-600">Vehicle Type</th>
                                        <th class="p-3 text-sm font-medium text-gray-600">Action</th>

                                    </tr>
                                </thead>

                                <tbody class="text-sm">

                                    <tr class="bg-white rounded-lg shadow-sm">
                                        <td class="p-3 text-gray-700 ">Ertiga</td>

                                        <td class="p-3 text-gray-700 ">MH01CC0001</td>

                                        <td class="p-3">
                                            <div class="flex -space-x-2">
                                                <img src="" class="w-6 h-6 border-2 border-white rounded-full" />
                                            </div>
                                        </td>

                                        <td class="p-3 text-gray-700 ">7 Seater</td>
                                        <td class="p-3 text-gray-700 "><button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Update
                                                </span>
                                            </button></td>


                                    </tr>
                                    <tr class="bg-white rounded-lg shadow-sm">
                                        <td class="p-3 text-gray-700 ">Innova</td>

                                        <td class="p-3 text-gray-700 ">MH02CC0002</td>

                                        <td class="p-3">
                                            <div class="flex -space-x-2">
                                                <img src="" class="w-6 h-6 border-2 border-white rounded-full" />
                                            </div>
                                        </td>

                                        <td class="p-3 text-gray-700 ">7 Seater</td>
                                        <td class="p-3 text-gray-700 "><button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200 ">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Update
                                                </span>
                                            </button></td>



                                    </tr>
                                    <tr class="bg-white  rounded-lg shadow-sm">
                                        <td class="p-3 text-gray-700 ">Swift</td>

                                        <td class="p-3 text-gray-700 ">MH03CC0003</td>

                                        <td class="p-3">
                                            <div class="flex -space-x-2">
                                                <img src="" class="w-6 h-6 border-2 border-white rounded-full" />
                                            </div>
                                        </td>

                                        <td class="p-3 text-gray-700 ">4 Seater</td>
                                        <td class="p-3 text-gray-700 "><button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white  focus:ring-4 focus:outline-none focus:ring-green-200 ">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Update
                                                </span>
                                            </button></td>



                                    </tr>
                                    <tr class="bg-white rounded-lg shadow-sm">
                                        <td class="p-3 text-gray-700 ">Triber</td>

                                        <td class="p-3 text-gray-700 ">MH04CC0004</td>

                                        <td class="p-3">
                                            <div class="flex -space-x-2">
                                                <img src="" class="w-6 h-6 border-2 border-white rounded-full" />
                                            </div>
                                        </td>

                                        <td class="p-3 text-gray-700 ">7 Seater</td>
<td class="p-3 text-gray-700 "><button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white  focus:ring-4 focus:outline-none focus:ring-green-200 ">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Update
                                                </span>
                                            </button></td>


                                    </tr>


                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </main>

            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->



    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>