<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Car</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
</head>
<body class="bg-white text-gray-900 font-sans">


<!-- header -->
<?php  

include_once "header.php";?> 


<section class="relative mt-0 mx-auto max-w-7xl md:rounded-b-xl overflow-hidden min-h-[500px] flex items-center justify-center pt-10 pb-20 md:py-20 z-10">


    <div class="absolute inset-0 bg-cover bg-center" 
         style="background-image: url('img/main_background1.png');">
        <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <div class="relative z-20 w-full px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        
        <div class="text-white hidden lg:block">
            <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">
                Your <span class="color-primary-text">Next Journey</span> Starts Here.
            </h1>
            <!-- <p class="text-xl text-gray-200 mb-6">
                Safe, reliable, and comfortable travel solutions, tailored just for you.
            </p> -->
            <div class="bg-white h-64 rounded-xl shadow-xl flex items-center justify-center text-gray-800 text-2xl font-bold bg-cover bg-center"style="background-image: url('img/main_background1.png');">
               
            </div>
        </div>

        <div class="w-full max-w-lg lg:max-w-none mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden">
            
            <ul class="flex w-full text-sm sm:text-base font-medium text-center text-gray-700 divide-x divide-gray-200 bg-gray-50 border-b">
                <li class="flex-1">
                    <button data-tabs-target="#oneway" class="tab-btn w-full p-3 sm:p-4 active-tab hover:bg-gray-100 transition">
                        Oneway Car
                    </button>
                </li>
                <li class="flex-1">
                    <button data-tabs-target="#roundtrip" class="tab-btn w-full p-3 sm:p-4 hover:bg-gray-100 transition">
                        Round Trip
                    </button>
                </li>
                <li class="flex-1">
                    <button data-tabs-target="#perhour" class="tab-btn w-full p-3 sm:p-4 hover:bg-gray-100 transition">
                        Per Hour
                    </button>
                </li>
                <li class="flex-1">
                    <button data-tabs-target="#minibus" class="tab-btn w-full p-3 sm:p-4 hover:bg-gray-100 transition">
                        Mini Bus
                    </button>
                </li>
            </ul>

            <div class="p-6">

                <div id="oneway" class="tab-content block space-y-4">
                    <input type="text" placeholder="From Location" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                    <input type="text" placeholder="To Destination" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                    <input type="date" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />

                    <div class="flex justify-center pt-2">
                        <a href="onewayCar.php" class="color-primary color-primary-hover text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                            Search Car
                        </a>
                    </div>
                </div>

                <div id="roundtrip" class="tab-content hidden space-y-4">
                    <input type="text" placeholder="From Location" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                    <input type="text" placeholder="To Destination" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" />
                    <div class="grid grid-cols-2 gap-4">
                        <input type="date" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" placeholder="Departure Date"/>
                        <input type="date" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#0BA6DF] focus:border-[#0BA6DF] transition" placeholder="Return Date"/>
                    </div>
                    <div class="flex justify-center pt-2">
                         <button class="color-primary color-primary-hover text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                            Search Round Trip
                        </button>
                    </div>
                </div>

                <div id="perhour" class="tab-content hidden">
                    <div class="p-6 text-center border-2 border-dashed border-gray-300 color-light rounded-lg">
                        <p class="text-xl text-gray-800">Local travel? Book by the hour!</p>
                         <button class="color-primary color-primary-hover text-white font-semibold py-2 px-6 rounded-full mt-4 transition">
                            View Hourly Rates
                        </button>
                    </div>
                </div>

                <div id="minibus" class="tab-content hidden">
                    <div class="p-6 text-center border-2 border-dashed border-gray-300 color-light rounded-lg">
                        <p class="text-xl text-gray-800">For groups and large families.</p>
                         <button class="color-primary color-primary-hover text-white font-semibold py-2 px-6 rounded-full mt-4 transition">
                            Request Bus Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

---

<section class="py-16 px-6 md:px-16 bg-white">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Our Services</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center max-w-6xl mx-auto">

        <div class="group p-6 color-light rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border border-gray-100">
            <div class="color-primary-text text-4xl mb-4 flex items-center justify-center">
                <img src="img/main_background1.png" alt="Book Cab Icon" class="w-12 h-12 mx-auto object-contain"/>
            </div>
            <p class="text-lg font-semibold text-gray-900">Book Cab</p>
            <p class="text-sm text-gray-600 mt-1">Description....</p>
        </div>

        <div class="group p-6 color-light rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border border-gray-100">
            <div class="color-primary-text text-4xl mb-4 flex items-center justify-center">
                <img src="http://googleusercontent.com/image_collection/image_retrieval/8928857081969263710_0" alt="Hourly Service Icon" class="w-12 h-12 mx-auto object-contain"/>
            </div>
            <p class="text-lg font-semibold text-gray-900">Hourly Base Cab</p>
            <p class="text-sm text-gray-600 mt-1">Description....</p>
        </div>

        <div class="group p-6 color-light rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border border-gray-100">
            <div class="color-primary-text text-4xl mb-4 flex items-center justify-center">
                <img src="http://googleusercontent.com/image_collection/image_retrieval/906086668090859123_0" alt="Mini Bus Icon" class="w-12 h-12 mx-auto object-contain"/>
            </div>
            <p class="text-lg font-semibold text-gray-900">Book Traveller</p>
            <p class="text-sm text-gray-600 mt-1">Description....</p>
        </div>

        <div class="group p-6 color-light rounded-xl shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1 border border-gray-100">
            <div class="color-primary-text text-4xl mb-4 flex items-center justify-center">
                <img src="http://googleusercontent.com/image_collection/image_retrieval/1437796377026803880_0" alt="Chauffeur Icon" class="w-12 h-12 mx-auto object-contain"/>
            </div>
            <p class="text-lg font-semibold text-gray-900">Hire Driver</p>
            <p class="text-sm text-gray-600 mt-1">Description....</p>
        </div>

    </div>
</section>

<section class="py-16 px-6 md:px-16 color-light">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center bg-white p-8 rounded-2xl shadow-2xl">

        <div class="h-64 rounded-xl shadow-lg flex items-center justify-center text-xl font-semibold overflow-hidden">
            <img src="

http://googleusercontent.com/image_collection/image_retrieval/13482153910774190311_0
" 
                 alt="Tiger in Tadoba National Park" 
                 class="w-full h-full object-cover"/>
        </div>

        <div class="p-2">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tadoba Booking Service</h2>
            <p class="text-gray-700 mb-6 leading-relaxed">
                Description here....
            </p>
            <div class="p-4 rounded-xl border-l-4 border-[#0BA6DF] bg-gray-50">
                <h3 class="font-bold text-lg text-gray-800 mb-1">Exclusive Package Details:</h3>
                <p class="text-sm text-gray-600">Description here....</p>
            </div>
            <button class="mt-6 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Book Tadoba Trip
            </button>
        </div>

    </div>
</section>
---

<footer class="mt-0 px-6 md:px-16 py-12 bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

        <div>
            <h3 class="font-bold text-xl mb-3 color-primary-text">White Car</h3>
            <p class="text-sm text-gray-400 leading-relaxed">
                paragraph here....
            </p>
        </div>

        <div>
            <h3 class="font-bold text-lg mb-3">Address</h3>
            <p class="text-gray-400">
                Chandrapur, Maharashtra
            </p>
        </div>

        <div>
            <h3 class="font-bold text-lg mb-3">Get in Touch</h3>
            <p class="text-gray-400 mb-1">📞 +91 9876543210</p>
            <p class="text-gray-400">📧 <a href="#" class="hover:text-[#0BA6DF] transition">Email: contact@whitecar.com</a></p>
        </div>

    </div>
    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-500 text-sm">
        &copy; white car.
    </div>
</footer>

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