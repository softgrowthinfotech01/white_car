<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint</title>
</head>
<body>
    
<!-- header -->
<?php  

include_once "header.php";?>

<!-- header end -->

<section class="py-12 bg-gray-100">
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6 sm:p-10">

    <!-- Title -->
    <div class="text-center mb-6">
      <h2 class="text-3xl font-bold text-gray-800 border-b-4 border-sky-500 inline-block pb-1">
        Submit a Complaint
      </h2>
      <p class="text-gray-500 mt-2">We’re here to help you. Please share your issue below.</p>
    </div>

    <!-- Form -->
    <form class="space-y-5">

      <!-- Full Name -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Full Name</label>
        <input type="text" placeholder="Enter your full name"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg 
                 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
      </div>

      <!-- Mobile Number -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Mobile Number</label>
        <input type="tel" maxlength="10" placeholder="Enter your mobile number"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Email</label>
        <input type="email" placeholder="Enter your email"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
      </div>

      <!-- Complaint -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1">Complaint</label>
        <textarea rows="4" placeholder="Describe your issue"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                 focus:outline-none focus:ring-2 focus:ring-sky-500 resize-none" required></textarea>
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit"
          class="w-full sm:w-auto bg-sky-600 hover:bg-sky-700 text-white 
                 font-semibold px-8 py-3 rounded-lg shadow">
          Submit Complaint
        </button>
      </div>

    </form>

  </div>
</section>




<!-- footer -->
<?php  

include_once "footer.php";?> 


<!-- footer end -->




</body>
</html>