<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    
<!-- header -->
<?php  

include_once "header.php";?>

<!-- header end -->

<section class="py-14 bg-gray-100">

  <div class="max-w-6xl mx-auto px-5">

    <!-- Page Title -->
    <div class="text-center mb-10">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 border-b-4 border-sky-500 inline-block pb-1">
        Contact Us
      </h2>
      <p class="text-gray-500 mt-2">We’re here to assist you anytime.</p>
    </div>

    <!-- Info Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 bg-white p-8 rounded-2xl shadow-lg">

      <!-- About Section -->
      <div>
        <h3 class="font-bold text-xl mb-3 text-gray-800 color-primary-text">White Car</h3>
        <p class="text-sm text-gray-600 leading-relaxed">
          Affordable rides with experienced drivers, ready when you are.
        </p>
      </div>

      <!-- Address Section -->
      <div>
        <h3 class="font-bold text-lg mb-3 text-gray-800">Address</h3>
        <p class="text-gray-600">
          Chandrapur, Maharashtra
        </p>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="font-bold text-lg mb-3 text-gray-800">Get in Touch</h3>
        <p class="text-gray-600 mb-1">📞 +91 9876543210</p>
        <p class="text-gray-600">
          📧 <a href="mailto:contact@whitecar.com" 
                class="hover:text-sky-600 transition">
              contact@whitecar.com
            </a>
        </p>
      </div>

    </div>

    <!-- Contact Form -->
    <div class="mt-12 bg-white p-8 rounded-2xl shadow-lg max-w-4xl mx-auto">
      
      <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center border-b-4 border-sky-500 inline-block pb-1">
        Send Us a Message
      </h3>

      <form class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Full Name -->
        <div class="col-span-1">
          <label class="block text-gray-700 font-semibold mb-1">Full Name</label>
          <input type="text" placeholder="Enter your full name"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <!-- Mobile Number -->
        <div class="col-span-1">
          <label class="block text-gray-700 font-semibold mb-1">Mobile Number</label>
          <input type="tel" maxlength="10" placeholder="Enter your mobile number"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <!-- Email -->
        <div class="col-span-1 md:col-span-2">
          <label class="block text-gray-700 font-semibold mb-1">Email</label>
          <input type="email" placeholder="Enter your email"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <!-- Message -->
        <div class="col-span-1 md:col-span-2">
          <label class="block text-gray-700 font-semibold mb-1">Message</label>
          <textarea rows="4" placeholder="Write your message here"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg 
                   resize-none focus:ring-2 focus:ring-sky-500 focus:outline-none"></textarea>
        </div>

        <!-- Button -->
        <div class="col-span-1 md:col-span-2 text-center">
          <button type="submit"
            class="bg-sky-600 hover:bg-sky-700 text-white font-semibold 
                   px-10 py-3 rounded-lg shadow-md">
            Send Message
          </button>
        </div>

      </form>
    </div>

  </div>

</section>




<!-- footer -->
<?php  

include_once "footer.php";?> 


<!-- footer end -->




</body>
</html>