<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>

    <!-- Include Tailwind CSS and Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <style>
        .gradient {
            background: linear-gradient(90deg, #83b7e1 0%, #3f7bc9 100%);
        }
    </style>

    @include('layouts.navbar')
</head>

<body class="leading-normal tracking-normal text-white gradient">
    <!-- Hero Section with Background Image -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('assets/mother.jpg');">
        <div class="w-full h-full bg-white/50">
            <div class="container mx-auto px-12 py-35 flex items-center justify-center">
                <div class="text-center max-w-2xl">
                    <p class="uppercase tracking-widest text-gray-700 mb-2">What business are you?</p>
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight mb-4">
                        Main Hero Message to sell yourself!
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-800 mb-8">
                        Sub-hero message, not too long and not too short. Make it just right!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SVG Decorative Section -->
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2,44)" fill="#FFFFFF" fill-rule="nonzero" opacity="0.1">
                    <path d="M0,0 C90.728,0.928 147.913,27.188 291.910,59.912 C387.908,81.728 543.605,89.335 759,82.733
                        C469.336,156.254 216.336,153.668 0,74.973"/>
                    <path d="M100,104.708 C277.413,72.235 426.148,52.525 546.204,45.579 C666.259,38.633 810.525,41.798 979,55.074
                        C931.07,56.123 810.303,74.846 616.7,111.243 C423.097,147.641 250.863,145.463 100,104.708 Z"/>
                </g>
                <g transform="translate(-4,76)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459
                        C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596
                        622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532
                        856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387
                        C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354
                        L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"/>
                </g>
            </g>
        </svg>
    </div>

    <!-- Topics Section -->
    <section class="bg-white text-gray-800 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Explore Helpful Topics</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Pregnancy Stages</h3>
                    <p class="text-sm">Learn about each trimester and how to take care of yourself and your baby.</p>
                </div>
                <div class="bg-pink-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Baby Names</h3>
                    <p class="text-sm">Find beautiful boy and girl names with meanings.</p>
                </div>
                <div class="bg-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Tips</h3>
                    <p class="text-sm">Discover what to eat for a healthy pregnancy journey.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
