<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Feedback List
    </title>

    <link rel="stylesheet" href="css/tail.css">
    <!-- <link rel="stylesheet" href="a.css"> -->
     <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


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
          <main class="px-4 py-5 md:px-8">
    <div class="max-w-5xl mx-auto">

        <div class="rounded-xl mt-20 bg-white shadow-sm">

            <!-- Header -->
            <div class="px-4 py-3 bg-rose-100 rounded-t-[15px]">
                <h3 class="text-lg font-semibold text-gray-800">
                     Feedback
                </h3>
            </div>

            <!-- Table Wrapper -->
            <div class="overflow-x-auto px-2 py-3 sm:px-4 sm:py-4">

                <table class="min-w-full text-left border-separate border-spacing-y-2">

                    
                         <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
						<tr>
							<th data-priority="1">Name</th>
							<th data-priority="2">Mobile Number</th>
							<th data-priority="3">Email</th>
							<th data-priority="4">Feedback</th>
							
							
						</tr>
					</thead>
					<tbody class="text-center">
                        

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

 <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {
			
			var table = $('#example').DataTable( {
					responsive: true
				} )
				.columns.adjust()
				.responsive.recalc();
		} );
	
	</script>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>