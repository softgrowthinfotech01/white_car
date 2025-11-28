<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
        class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r-[5px] border-gray-300  bg-gray-300 lg:static lg:translate-x-0">
        
<!-- SIDEBAR HEADER -->
<div :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="flex items-center gap-3 py-[6px] px-3 bg-gray-300">

    
    <div class="flex items-center gap-3"
         :class="sidebarToggle ? 'lg:hidden' : ''">

       
        <div class="h-18 w-50 flex items-center justify-center rounded-lg  bg-gray-300 ms-3">
           <img src="img/logo_white.png" 
     class="h-18 w-50 rounded-md object-cover border border-gray-300 pt-2" />
        </div>

    </div>

    

</div>


<!-- SIDEBAR BODY -->
<div class="flex flex-col py-15 px-7 overflow-y-auto duration-300 ease-linear no-scrollbar">

    <nav x-data="{selected: $persist('Dashboard')}">

        
        <h3 class="mt-6 mb-4 text-xs font-semibold uppercase text-gray-950"
            :class="sidebarToggle ? 'lg:hidden' : ''">
            <span class="bg-gray-100 p-1 rounded-md">MENU</span>
        </h3>

        <ul class="flex flex-col gap-8">

         <li>
    <a href="dashboard"
       @click="selected = 'Dashboard'"
       class="flex items-center gap-3 px-3 py-2 border border-gray-300 rounded-md hover:bg-gray-100 transition"
       :class="selected === 'Dashboard' ? 'bg-gray-200' : ''">

        
        <svg class="h-5 w-5 text-gray-700" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="3" width="8" height="8" stroke="currentColor" stroke-width="1.4"/>
            <rect x="13" y="3" width="8" height="8" stroke="currentColor" stroke-width="1.4"/>
            <rect x="3" y="13" width="8" height="8" stroke="currentColor" stroke-width="1.4"/>
            <rect x="13" y="13" width="8" height="8" stroke="currentColor" stroke-width="1.4"/>
        </svg>

        <span class="text-sm font-medium text-black"
              :class="sidebarToggle ? 'lg:hidden' : ''">
              Dashboard
        </span>
    </a>
</li>

 <!-- location -->

 <li>
                <button
                    @click.prevent="selected = (selected === 'location' ? '' : 'location')"
                    class="flex w-full items-center gap-3 px-3 py-2 border border-gray-300 rounded-md hover:bg-gray-100 transition"
                    :class="selected === 'location' ? 'bg-gray-200' : ''">

                    <svg class="h-5 w-5 text-gray-700" viewBox="0 0 24 24" fill="none">
                        <rect x="4" y="4" width="16" height="16" stroke="currentColor" stroke-width="1.4"/>
                    </svg>

                    <span class="text-sm font-medium text-black"
                        :class="sidebarToggle ? 'lg:hidden' : ''">Location</span>

                    <svg class="h-4 w-4 ml-auto text-gray-600 transition-transform"
                        :class="selected === 'location' ? 'rotate-180' : ''"
                        viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </button>

                <!-- DROPDOWN -->
                <div x-show="selected === 'location'" x-collapse class="mt-3 ml-10 space-y-4">

                    <a href="form_location"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">
                        Location Form
                    </a>

                </div>
            </li>
            <!-- ============ FORMS ============ -->
            <li>
                <button
                    @click.prevent="selected = (selected === 'Forms' ? '' : 'Forms')"
                    class="flex w-full items-center gap-3 px-3 py-2 border border-gray-300 rounded-md hover:bg-gray-100 transition"
                    :class="selected === 'Forms' ? 'bg-gray-200' : ''">

                    <svg class="h-5 w-5 text-gray-700" viewBox="0 0 24 24" fill="none">
                        <rect x="4" y="4" width="16" height="16" stroke="currentColor" stroke-width="1.4"/>
                    </svg>

                    <span class="text-sm font-medium text-black"
                        :class="sidebarToggle ? 'lg:hidden' : ''">Forms</span>

                    <svg class="h-4 w-4 ml-auto text-gray-600 transition-transform"
                        :class="selected === 'Forms' ? 'rotate-180' : ''"
                        viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </button>

                <!-- DROPDOWN -->
                <div x-show="selected === 'Forms'" x-collapse class="mt-3 ml-10 space-y-4">

                    <a href="form_carRental"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">
                        Car Rental Form
                    </a>

                    <a href="form_driver"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">
                        Driver Details Form
                    </a>

                     <a href="form_perHour"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">
                        Per Hour Form
                    </a>

                    <a href="form_miniBus"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">
                        Mini Bus Form
                    </a>

                </div>
            </li>

            <!-- ============ RECORD ============ -->
            <li>
                <button
                    @click.prevent="selected = (selected === 'Tables' ? '' : 'Tables')"
                    class="flex w-full items-center gap-3 px-3 py-2 border border-gray-300 rounded-md hover:bg-gray-100 transition"
                    :class="selected === 'Tables' ? 'bg-gray-200' : ''">

                    <svg class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24">
                        <rect x="3" y="5" width="18" height="3" fill="currentColor" />
                        <rect x="3" y="11" width="18" height="3" fill="currentColor" />
                        <rect x="3" y="17" width="18" height="3" fill="currentColor" />
                    </svg>

                    <span class="text-sm font-medium text-black"
                        :class="sidebarToggle ? 'lg:hidden' : ''">Record</span>

                    <svg class="h-4 w-4 ml-auto text-gray-600 transition-transform"
                        :class="selected === 'Tables' ? 'rotate-180' : ''"
                        viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>

                </button>

                <div x-show="selected === 'Tables'" x-collapse class="mt-3 ml-10 space-y-4">

                    <a href="list_carRental"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Car Rental List</a>

                    <a href="list_perHour"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Per Hour</a>

                    <a href="list_miniBus"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Mini Bus</a>    

                    <a href="list_driver"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Driver List</a>

                    <a href="list_sharingCabDriver"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Sharing Cab Driver List</a>

                    <a href="list_feedback"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Feedback</a>

                    <a href="list_complaint"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Complaint</a>

                     <a href="list_location"
                        class="block px-3 py-2 text-sm border border-gray-300 rounded-md hover:bg-gray-100">Location</a>    

                </div>
            </li>

        

        </ul>

    </nav>

</div>

    </aside>

</body>

</html>