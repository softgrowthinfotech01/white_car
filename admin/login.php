<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>White Car Admin Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-gray-100 flex items-center justify-center">

    <div class="w-full max-w-sm bg-white shadow-md rounded-xl p-8 border border-gray-300">


        <div class="flex flex-col items-center mb-6">
            <img src="img/logo_white.png" class="h-16 w-auto mb-2" alt="Logo">
            <h2 class="text-xl font-bold text-gray-700">White Car Admin</h2>
        </div>

        <!-- Form -->
        <form action="dashboard.php" method="POST" class="space-y-4">

           
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type=""
                    name=""
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-gray-500"
                    placeholder="Enter your email"
                    required />
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                    type=""
                    name=""
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-gray-500"
                    placeholder="Enter your password"
                    required />
            </div>

          
            <button
                type="submit"
                class="w-full py-2 bg-gray-800 text-white rounded-md hover:bg-black transition">
                Login
            </button>

        </form>

    </div>

</body>
</html>
