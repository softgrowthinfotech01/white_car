<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Driver Form
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
            <main>
                <div class="p-4 mx-auto md:p-6">
                    <div class="grid grid-cols-6 gap-4 md:gap-6">
                        <div class="col-span-12 space-y-6 xl:col-span-7">

                            <!-- ====== Chart One Start -->
                            <!-- ====== Form Elements Section Start -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                                <div class="space-y-6">
                                    <div
                                        class="rounded-2xl border border-gray-200 bg-white ">
                                        <div class="px-5 py-4 sm:px-6 sm:py-5">
                                            <h3 class="text-base font-medium text-gray-800 ">
                                                Driver Details
                                            </h3>
                                        </div>
                                        <div
                                            class="grid grid-cols-1 md:grid-cols-2 gap-4 space-y-6 border-t border-gray-100 p-5 sm:p-6 ">
                                            <!-- driver name -->
                                            <div>
                                                <label for="driverName"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                                    Driver Fullname
                                                </label>
                                                <input type="text" id="driverName" placeholder="Enter driver fullname here..." required
                                                    class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>

                                            <!-- driver mobile number -->
                                            <div>
                                                <label for="driverNum"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                                    Driver Mobile Number
                                                </label>
                                                <div class="relative">
                                                    <span
                                                        class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500">
                                                        +91
                                                    </span>
                                                    <input type="url" placeholder="9876543210" id="driverNum"
                                                        class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pl-[90px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden" />
                                                </div>
                                            </div>


                                            <!-- price -->
                                            <div>
                                                <label for="price"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Price
                                                </label>
                                                <div class="relative">
                                                    <span
                                                        class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 ">
                                                        ₹
                                                    </span>
                                                    <input type="url" placeholder="000" id="price"
                                                        class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pl-[90px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden" />
                                                </div>
                                            </div>


                                            <!-- driver address -->


                                            <div>
                                                <label for="driverAddress"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Driver Address
                                                </label>
                                                <input type="text" id="driverAddress" placeholder="Enter driver address here..."
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>

                                            <!-- vehicle photo -->

                                            <div>
                                                <label for="driverPhoto"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Driver Photo
                                                </label>
                                                <input type="file" id="driverPhoto"
                                                    class="focus:border-ring-brand-300 shadow-theme-xs focus:file:ring-brand-300 h-11 w-full overflow-hidden rounded-lg border border-gray-300 bg-transparent text-sm text-gray-500 transition-colors file:mr-5 file:border-collapse file:cursor-pointer file:rounded-l-lg file:border-0 file:border-r file:border-solid file:border-gray-200 file:bg-gray-50 file:py-3 file:pr-3 file:pl-3.5 file:text-sm file:text-gray-700 placeholder:text-gray-400 hover:file:bg-gray-100 focus:outline-hidden " />
                                            </div>
                                        </div>
                                        <div class="mb-6 flex justify-center items-center gap-4">
                                            <button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white  focus:ring-4 focus:outline-none focus:ring-green-200 ">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent t leading-5">
                                                    Save
                                                </span>
                                            </button>

                                            <button type=""
                                                class="relative inline-flex items-center p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 ">
                                                <span
                                                    class=" relative px-8 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent  leading-5">
                                                    Cancel
                                                </span>
                                            </button>
                                        </div>


                                    </div>
                                    <!-- ====== Form Elements Section End -->

                                    <!-- ====== Chart One End -->
                                </div>

                            </div>
                            <!-- ====== Form Elements Section End -->

                            <!-- ====== Chart One End -->
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