<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
       Update Per Hour Vehicle Form
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
    <div class="flex h-screen bg-gray-800 overflow-hidden">

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
                <div class="p-4 mx-auto md:p-6 ">
                    <div class="grid grid-cols-6 gap-4 md:gap-6">
                        <div class="col-span-12 space-y-6 xl:col-span-7">

                            <!-- ====== Chart One Start -->
                            <!-- ====== Form Elements Section Start -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                                <div class="space-y-6">
                                    <div
                                        class="rounded-2xl mt-20 bg-white ">
                                        <div class="px-5 bg-rose-100 rounded-t-[15px] py-4 sm:px-6  sm:py-5">
                                            <h3 class="text-base  font-medium text-gray-800 ">
                                               Update Vehicle Details
                                            </h3>
                                        </div>
                                        <div
                                            class="grid grid-cols-1  md:grid-cols-2 gap-4 space-y-6  border-t border-gray-100 p-5 sm:p-6  ">

                                             <div>
                                                <label for="VehicleType"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                                    Update Vehicle Type
                                                </label>
                                                <div x-data="{ isOptionSelected: false }"
                                                    class="relative z-20 bg-transparent">
                                                    <select id="VehicleType"
                                                        class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full  appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden "
                                                        :class="isOptionSelected && 'text-gray-800'"
                                                        @change="isOptionSelected = true">
                                                        <option value=""
                                                            class="text-gray-700 ">
                                                            Select Type
                                                        </option>
                                                        <option value=""
                                                            class="text-gray-700 ">
                                                            4 Seater
                                                        </option>
                                                        <option value=""
                                                            class="text-gray-700 ">
                                                            7 Seater
                                                        </option>
                                                        <option value=""
                                                            class="text-gray-700 ">
                                                            9 Seater
                                                        </option>
                                                    </select>
                                                    <span
                                                        class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 ">
                                                        <svg class="stroke-current" width="20" height="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                                                stroke="" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="vehicleName"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Update Vehicle Name
                                                </label>
                                                <input type="text" id="vehicleName"
                                                    placeholder="Enter vehicle name here..." required
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>

                                            <div>
                                                <label for="price"
                                                    class="mb-1.5 block text-sm font-medium text-gray-70">
                                                   Update Rent Price
                                                </label>
                                                <input type="text" id="price"
                                                    placeholder="Enter price here..."
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden" />
                                            </div>

                                            <!-- vehicle photo -->

                                            <div>
                                                <label for="vehiclePhoto"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                                   Update Vehicle Photo
                                                </label>
                                                <input type="file" id="vehiclePhoto"
                                                    class="focus:border-ring-brand-300 shadow-theme-xs focus:file:ring-brand-300 h-11 w-full overflow-hidden rounded-lg border border-gray-300 bg-transparent text-sm text-gray-500 transition-colors file:mr-5 file:border-collapse file:cursor-pointer file:rounded-l-lg file:border-0 file:border-r file:border-solid file:border-gray-200 file:bg-gray-50 file:py-3 file:pr-3 file:pl-3.5 file:text-sm file:text-gray-700 placeholder:text-gray-400 hover:file:bg-gray-100 focus:outline-hidden " />
                                            </div>
                                             <div>
                                                <label for="mobileNum"
                                                    class="mb-1.5 block text-sm font-medium text-gray-70">
                                                  Update  Mobile Number
                                                </label>
                                                <input type="text" id="mobileNum"
                                                    placeholder="Enter Mobile Number here..."
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden" />
                                            </div>

                                             <div>
                                                <label for="desc1"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Description 1
                                                </label>
                                                <input type="text" id="desk1"
                                                    placeholder="Enter description here..." 
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>
                                             <div>
                                                <label for="desc2"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Description 2
                                                </label>
                                                <input type="text" id="desk2"
                                                    placeholder="Enter description here..." 
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>
                                             <div>
                                                <label for="desc3"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Description 3
                                                </label>
                                                <input type="text" id="desk3"
                                                    placeholder="Enter description here..." 
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>
                                             <div>
                                                <label for="desc4"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Description 4
                                                </label>
                                                <input type="text" id="desk4"
                                                    placeholder="Enter description here..." 
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>
                                             <div>
                                                <label for="desc5"
                                                    class="mb-1.5 block text-sm font-medium text-gray-700">
                                                    Description 5
                                                </label>
                                                <input type="text" id="desk5"
                                                    placeholder="Enter description here..." 
                                                    class=" shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10  h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden " />
                                            </div>

                                       

                                         
                                        </div>
                                        <div class="mb-6 pb-2 flex justify-center items-center gap-4">
                                            <button type=""
                                                class=" inline-flex items-center  p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white  focus:ring-4 focus:outline-none focus:ring-green-200">
                                                <span
                                                    class=" relative px-10 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Update
                                                </span>
                                            </button>

                                            <button type=""
                                                class="relative inline-flex items-center p-0.5 overflow-hidden text-sm font-medium text-heading rounded group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white  focus:ring-4 focus:outline-none focus:ring-pink-200">
                                                <span
                                                    class=" relative px-8 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded group-hover:bg-transparent leading-5">
                                                    Cancel
                                                </span>
                                            </button>
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