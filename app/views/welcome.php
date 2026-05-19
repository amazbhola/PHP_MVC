<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tender Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-indigo-200 via-purple-200 to-indigo-300 min-h-screen flex items-center">

<div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-xl p-10">

    <!-- NAVBAR -->
    <div class="flex justify-between items-center mb-10">

        <h1 class="text-2xl font-bold text-gray-800">
            TENDER<span class="text-indigo-500">SYS</span>
        </h1>

        <div class="space-x-6 text-gray-700 hidden md:flex">
            <a href="<?= url('/') ?>" class="hover:text-indigo-500">Home</a>
            <a href="<?= url('/tender') ?>" class="hover:text-indigo-500">Tenders</a>
            <a href="/department" class="hover:text-indigo-500">Department</a>
            <a href="/contact" class="hover:text-indigo-500">Contact</a>
        </div>

        <a href="<?= url('') ?>"
           class="bg-indigo-500 text-white px-5 py-2 rounded-full hover:bg-indigo-600">
            Sign In
        </a>

    </div>

    <!-- HERO SECTION -->
    <div class="grid md:grid-cols-2 gap-10 items-center">

        <!-- LEFT SIDE -->
        <div>

            <h2 class="text-5xl font-extrabold text-gray-800 leading-tight">
                Welcome to <br>
                <span class="text-indigo-600">Tender Management</span>
            </h2>

            <p class="text-gray-500 mt-4">
                Manage all government & private tenders easily in one system.
                Track documents, security, deadlines and departments in real-time.
            </p>

            <div class="mt-8 flex space-x-4">

                <a href="/tender"
                   class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">
                    Get Started
                </a>

                <a href="/about"
                   class="border border-indigo-500 text-indigo-600 px-6 py-3 rounded-full hover:bg-indigo-50">
                    Learn More
                </a>

            </div>

        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="relative">

            <div class="bg-indigo-100 rounded-3xl p-10">

                <img src="https://illustrations.popsy.co/gray/digital-nomad.svg"
                     class="w-full h-80 object-contain">

            </div>

            <!-- floating cards -->
            <div class="absolute top-5 left-5 bg-white shadow px-4 py-2 rounded-lg text-sm">
                📄 Tender Docs
            </div>

            <div class="absolute bottom-5 right-5 bg-white shadow px-4 py-2 rounded-lg text-sm">
                ⏳ Deadline Tracking
            </div>

        </div>

    </div>

    <!-- FEATURES -->
    <div class="grid md:grid-cols-3 gap-6 mt-12">

        <div class="bg-gray-50 p-6 rounded-xl">
            <h3 class="font-bold text-lg">Easy Management</h3>
            <p class="text-gray-500 mt-2">Manage all tenders in one dashboard.</p>
        </div>

        <div class="bg-gray-50 p-6 rounded-xl">
            <h3 class="font-bold text-lg">Secure Data</h3>
            <p class="text-gray-500 mt-2">Your tender data is fully secure.</p>
        </div>

        <div class="bg-gray-50 p-6 rounded-xl">
            <h3 class="font-bold text-lg">Fast Access</h3>
            <p class="text-gray-500 mt-2">Quick search and filtering system.</p>
        </div>

    </div>

</div>

</body>
</html>