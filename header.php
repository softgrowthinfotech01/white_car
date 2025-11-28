<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title></title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<style>
  @media (max-width: 640px) {
    body {
        padding-bottom: 70px; 
    }
  }
</style>
</head>
<body>
   
<nav class="flex items-center justify-between px-6 shadow-xl sticky top-0 bg-white z-30">

    <!-- Logo -->
   <div class="md:pl-32">
  <img src="img/logo_white.png" 
       class="h-10 w-auto md:h-16 my-3" 
       alt="Logo">
</div>


   


   
    <div class="flex space-x-8 font-medium md:pr-10">

        <a href="home" class="color-primary-text border-b-2 border-[#0BA6DF] pb-1 font-semibold">
            Home
        </a>

        <a href="services" class="hover:text-[#0BA6DF] text-gray-700 transition duration-300">
            Services
        </a>

         <a href="feedback" class="hidden md:inline hover:text-[#0BA6DF] text-gray-700 transition">
            Feedback
        </a>

        <a href="driverList" class="hidden md:inline hover:text-[#0BA6DF] text-gray-700 transition">
            Hire Driver
        </a>

        <a href="hireDriver" class="hidden md:inline hover:text-[#0BA6DF] text-gray-700 transition">
            Share Car
        </a>

        <a href="complaint" class="hidden md:inline hover:text-[#0BA6DF] text-gray-700 transition">
            Complaint
        </a>

        <a href="contact" class="hover:text-[#0BA6DF] text-gray-700 transition duration-300">
            Contact
        </a>

    </div>

</nav>






 <!-- MOBILE BOTTOM NAVIGATION -->
<nav class="fixed bottom-0 left-0 w-full bg-gray-900 border-t border-gray-200 sm:hidden z-50 shadow-[0_-2px_10px_rgba(0,0,0,0.1)]">

  <div class="grid grid-cols-4 text-center text-white">

    <!-- TAB 1 -->
    <a href="feedback" class="flex flex-col items-center py-2">
      <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1 bg-[#d1e7f0]">
        <img src="img/feedback.png" class="w-6 h-6 object-contain">
      </div>
      <span class="text-[11px] font-semibold">Feedback</span>
    </a>

    <!-- TAB 2 -->
    <a href="driverList" class="flex flex-col items-center py-2">
      <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1 bg-[#d1e7f0]">
        <img src="img/hireDriverIcon.png" class="w-6 h-6 object-contain">
      </div>
      <span class="text-[11px] font-semibold">Hire Driver</span>
    </a>

    <!-- TAB 3 -->
    <a href="hireDriver" class="flex flex-col items-center py-2">
      <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1 bg-[#d1e7f0]">
        <img src="img/shareCar.png" class="w-6 h-6 object-contain">
      </div>
      <span class="text-[11px] font-semibold">Share Car</span>
    </a>

    <!-- TAB 4 -->
    <a href="complaint" class="flex flex-col items-center py-2">
      <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1 bg-[#d1e7f0]">
        <img src="img/complaint.png" class="w-6 h-6 object-contain">
      </div>
      <span class="text-[11px] font-semibold">Complaint</span>
    </a>

  </div>

</nav>



</body>
</html>