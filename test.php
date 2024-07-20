<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANCET Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .gradient-bg {
            background: #86e3ce;
            background-size: 800% 800%;
            animation: gradient 15s ease infinite;
        }

        .gradient-bg:hover {
            background: linear-gradient(270deg, #ff7e5f, #feb47b, #86e3ce, #9bafd9);
            background-size: 800% 800%;
            animation: gradient 15s ease infinite;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="gradient-bg text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">What is TANCET?</h1>
            <p class="mt-4 text-lg">Tamil Nadu Common Entrance Test (TANCET) is an entrance exam for postgraduate programs.</p>
        </div>
    </header>

    <!-- About TANCET Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center text-gray-800">About TANCET</h2>
            <p class="mt-4 text-gray-600 text-center">
                TANCET is conducted by Anna University for admission to MBA, MCA, M.E., M.Tech., M.Arch., and M.Plan programs in colleges across Tamil Nadu.
            </p>
        </div>
    </section>

    <!-- Buttons Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Explore TANCET</h2>
            <div class="mt-8 flex flex-col md:flex-row justify-center gap-8">
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg">
                    Find the Suitable College for My Rank
                </a>
                <a href="#" class="bg-green-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg">
                    College Previous Years Rank Details by Community
                </a>
                <a href="#" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg">
                    Check My Eligibility for Particular College
                </a>
            </div>
        </div>
    </section>

    <!-- Uses of TANCET Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center text-gray-800">Uses of TANCET</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-teal-500">Postgraduate Admissions</h3>
                    <p class="mt-4 text-gray-600">
                        TANCET scores are used for admission to postgraduate programs in various colleges across Tamil Nadu.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-teal-500">Scholarship Eligibility</h3>
                    <p class="mt-4 text-gray-600">
                        High TANCET scores can help students qualify for scholarships and financial aid.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-teal-500">Career Advancement</h3>
                    <p class="mt-4 text-gray-600">
                        Graduating from a prestigious institution via TANCET can enhance career opportunities and professional growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Famous Colleges Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center text-gray-800">Famous Colleges Appearing for TANCET</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/300" alt="Anna University" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-blue-500">Anna University</h3>
                        <p class="mt-4 text-gray-600">
                            A premier institution known for its excellence in engineering and technology education.
                        </p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/300" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-blue-500">PSG College of Technology</h3>
                        <p class="mt-4 text-gray-600">
                            Renowned for its engineering programs and industry connections.
                        </p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/300" alt="Loyola College" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-blue-500">Loyola College</h3>
                        <p class="mt-4 text-gray-600">
                            Known for its management and arts programs with a strong emphasis on academic excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 TANCET Info. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>