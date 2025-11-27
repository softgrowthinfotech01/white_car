<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title></title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
   
<nav class="flex items-center justify-between px-6 py-4 shadow-xl sticky top-0 bg-white z-30">

    <div class="text-2xl font-bold md:pl-32 color-primary-text">LOGO</div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-8 font-medium md:pr-32">

        <a href="#" class="color-primary-text hover:text-[#0BA6DF] transition">Home</a>
        <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Services</a>
       <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Feedback</a>
        <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Hire Driver</a>
        <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Share Car</a>
        <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Complaint</a>
        <a href="#" class="hover:text-[#0BA6DF] text-gray-700 transition">Contact</a>

    </div>

</nav>





 <!-- MOBILE BOTTOM NAVIGATION -->
<!-- MOBILE BOTTOM NAVIGATION -->
<nav class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 sm:hidden z-50 shadow-[0_-2px_10px_rgba(0,0,0,0.1)]">

  <div class="grid grid-cols-4 text-center text-gray-800">

    <!-- TAB 1 -->
    <a href="#"
       class="flex flex-col items-center py-2">
       
     <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1" style="background-color:#7ec5e0">
  <img src="img/feedback.png" class="w-6 h-6 object-contain" alt="feedback icon">
</div>



      <span class="text-[11px] font-medium font-semibold">Feedback</span>
    </a>

    <!-- TAB 2 -->
    <a href="#"
       class="flex flex-col items-center py-2">

     <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1" style="background-color:#7ec5e0">
  <img src="img/hireDriverIcon.png" class="w-6 h-6 object-contain" alt="Hire Driver icon">
</div>

      <span class="text-[11px] font-medium font-semibold">Hire Driver</span>
    </a>

    <!-- TAB 3 -->
    <a href="#"
       class="flex flex-col items-center py-2">

     <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1" style="background-color:#7ec5e0">
  <img src="img/shareCar.png" class="w-6 h-6 object-contain" alt="Share car icon">
</div>

      <span class="text-[11px] font-medium font-semibold">Share Car</span>
    </a>

    <!-- TAB 4 -->
    <a href="#"
       class="flex flex-col items-center py-2">

  <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-1" style="background-color:#7ec5e0">
  <img src="img/complaint.png" class="w-6 h-6 object-contain" alt="complaint icon">
</div>

      <span class="text-[11px] font-medium font-semibold">Complaint</span>
    </a>

  </div>

</nav>


</body>
</html>