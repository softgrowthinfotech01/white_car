<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Complaint List
    </title>

    <link rel="stylesheet" href="css/tail.css">
    <!-- <link rel="stylesheet" href="a.css"> -->

    <!--  -->

</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, ' Mode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
          Mode = JSON.parse(localStorage.getItem(' Mode'));
         $watch(' Mode', value => localStorage.setItem(' Mode', JSON.stringify(value)))"
    :class="{'  bg-gray-900':  Mode === true}">
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

        <div class="rounded-xl border border-gray-200 bg-white  :border-gray-800  :bg-white/5 shadow-sm">

            <!-- Header -->
            <div class="px-4 py-3 border-b border-gray-100  :border-gray-800">
                <h3 class="text-lg font-semibold text-gray-800  :text-white">
                     Complaint
                </h3>
            </div>

            <!-- Table Wrapper -->
            <div class="overflow-x-auto px-2 py-3 sm:px-4 sm:py-4">

                <table class="min-w-full text-left border-separate border-spacing-y-2">

                    <thead>
                        <tr class="bg-gray-50  :bg-gray-900/20">
                            <th class="p-3 text-sm font-medium text-gray-600">Name</th>
                            <th class="p-3 text-sm font-medium text-gray-600">Mobile Number</th>
                            <th class="p-3 text-sm font-medium text-gray-600">Email</th>
                            <th class="p-3 text-sm font-medium text-gray-600">Complaint</th>
                            
                        </tr>
                    </thead>

                    <tbody class="text-sm">

                        <tr class="bg-white  :bg-gray-900 rounded-lg shadow-sm">
                            <td class="p-3 text-gray-700  :text-gray-300">Salman</td>

                            <td class="p-3 text-gray-700  :text-gray-300">9876543210</td>

                            <td class="p-3 text-gray-700  :text-gray-300">salman@gmail.com</td>

                            <td class="p-3 text-gray-700  :text-gray-300">usbxuwhbsxuscbuwbcubcxuhdbs</td>
                            
                        </tr>

                          <tr class="bg-white  :bg-gray-900 rounded-lg shadow-sm">
                            <td class="p-3 text-gray-700  :text-gray-300">Ajay</td>

                            <td class="p-3 text-gray-700  :text-gray-300">9876543210</td>

                            <td class="p-3 text-gray-700  :text-gray-300">ajay@gmail.com</td>

                            <td class="p-3 text-gray-700  :text-gray-300">usbxuwhbsxuscbuwbcubcxuhdbs</td>
                            
                        </tr>
                          <tr class="bg-white  :bg-gray-900 rounded-lg shadow-sm">
                            <td class="p-3 text-gray-700  :text-gray-300">Sunny</td>

                            <td class="p-3 text-gray-700  :text-gray-300">9876543210</td>

                            <td class="p-3 text-gray-700  :text-gray-300">sunny@gmail.com</td>

                            <td class="p-3 text-gray-700  :text-gray-300">usbxuwhbsxuscbuwbcubcxuhdbs</td>
                            
                        </tr>
                          <tr class="bg-white  :bg-gray-900 rounded-lg shadow-sm">
                            <td class="p-3 text-gray-700  :text-gray-300">Amir</td>

                            <td class="p-3 text-gray-700  :text-gray-300">9876543210</td>

                            <td class="p-3 text-gray-700  :text-gray-300">amir@gmail.com</td>

                            <td class="p-3 text-gray-700  :text-gray-300">usbxuwhbsxuscbuwbcubcxuhdbs</td>
                            
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