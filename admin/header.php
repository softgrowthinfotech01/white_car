<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

</head>
<body>
    <header x-data="{ menuToggle: false }"
    class="sticky top-0 z-[9999] flex w-full bg-white border-b border-gray-300 lg:px-6">

    <div class="flex w-full items-center justify-between px-3 py-3 lg:py-4">

 
        <button
            @click.stop="sidebarToggle = !sidebarToggle"
            class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 lg:h-11 lg:w-11">

            <!-- hamburger -->
            <svg x-show="!sidebarToggle" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <!-- close icon -->
            <svg x-show="sidebarToggle" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
        
        <div class="flex items-center gap-3">

           
            <a href="login.php"
                class="flex items-center gap-2 rounded-lg px-3 py-2 text-gray-700 border border-gray-300 hover:bg-gray-100">

                <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 3h4v18h-4M10 17l5-5-5-5M5 12h10" />
                </svg>

                <span class="text-sm">Sign out</span>
            </a>

        </div>

    </div>
</header>

</body>
</html>