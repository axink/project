<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pregnancy stages</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Animate.css for additional animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    @include('layouts.navbar')

    <style>
        /* Hero background image styling */
        .hero-bg {
            background-image: url('assets/baby.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Reveal animation */
        .benefit-card {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.7s forwards;
        }

        /* Animation keyframes */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add delay for each card to appear sequentially */
        .benefit-card:nth-child(1) {
            animation-delay: 0.3s;
        }
        .benefit-card:nth-child(2) {
            animation-delay: 0.5s;
        }
        .benefit-card:nth-child(3) {
            animation-delay: 0.7s;
        }
        .benefit-card:nth-child(4) {
            animation-delay: 0.9s;
        }
        .benefit-card:nth-child(5) {
            animation-delay: 1.1s;
        }
        .benefit-card:nth-child(6) {
            animation-delay: 1.3s;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="hero-bg bg-blue-900 bg-opacity-60 py-24 text-white relative">
        <div class="container mx-auto text-center px-6 animate__animated animate__fadeIn">
            <h1 class="text-4xl md:text-5xl font-bold animate__animated animate__fadeInDown mb-4">هەمی پێزانین دەربارەی
                دوگیانیێ بۆ دایکان
                💙</h1>
            <p class="text-lg mb-6 animate__animated animate__fadeInUp">بهێزکرن پالپشتیکرنا هەمی دایکان د گەشتا دۆگیانی
            </p>

            <!-- Search Bar with animation -->
            <div class="relative max-w-lg mx-auto animate__animated animate__fadeIn animate__delay-1s">
                <a href="#main">
                    <button
                        class="bg-white text-blue-600 mt-6 px-8 py-3 rounded-full shadow-md transition duration-300 transform hover:bg-gray-200 hover:scale-105">
                        زێدەتر فێربە دگەل مە
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Complete Modern Pregnancy Cards Section -->
    <section class="py-16 bg-rose-50" id="main">
        <div class="max-w-6xl mx-auto px-4">
 <h2 class="text-3xl font-bold text-center mb-12 text-rose-800 font-[cursive]">👶 پێشکێشکرنێت مە بۆ دایکان 👶</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 7: Pregnancy Stages -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-red-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-red-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/4151/4151496.png" alt="Pregnancy Stages"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-red-900">حەفتیێت د‌ووگیانیێ</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            هەمی قۆناغێن دووگیانیێ ببینە و پتر شارەزاببە دەربارەی ڤێ گەشتێ
                        </p>
                        
                        <a href="{{route('pregnancy-components.weeks')}}"
                        class="inline-block bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 🤰
                        </a>
                    </div>
                </div>

                <!-- Card 1: Early Signs -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-pink-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-rose-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/4151/4151496.png" alt="Early Signs"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-rose-900">نیشانێت دەستپێکی</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            ئەو پێزانینێت دەربارەی نیشانێت دەستپێکی ل دەف دایکێ دیاردبن
                        </p>
                        <a href="{{ route('pregnancy-components.first') }}"
                        class="inline-block bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 💖
                        </a>
                    </div>
                </div>

                <!-- Card 2: Nutrition -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-amber-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-amber-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/2741/2741809.png" alt="Nutrition"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-amber-900">پلاندانانا خارنێ</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            خارنا تە هێزا تە ۆ یا زارۆکێ تەیە خارنەکا ساخلەم بخۆ
                        </p>
                        <a href="{{ route('pregnancy-components.food') }}"
                        class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 🥑
                        </a>
                    </div>
                </div>

                <!-- Card 3: Emotional Support -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-blue-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003193.png" alt="Emotional Support"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-blue-900">پاڵپشتیا دەروونی</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            بلا تە دەرۆنەکێ تەندرۆست هەبت د ڤێ گەشتێ دا
                        </p>
                        <a href="{{ route('pregnancy-components.mentally-support') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 🌈
                        </a>
                    </div>
                </div>

                <!-- Card 4: Exercises -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-purple-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1535/1535010.png" alt="Exercise"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-purple-900">راهێنانێن رۆژانە</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            رۆژانە وەرزشێ بکە داکۆ تۆ ۆ زارۆکێ تە ساخلەم بمینن
                        </p>
                        <a href="{{ route('pregnancy-components.exercise') }}"
                        class="inline-block bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 🧘‍♀️
                        </a>
                    </div>
                </div>

                <!-- Card 6: Vitamins -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-green-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/525/525883.png" alt="Vitamins"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-green-900">فیتامینێن ب مفا</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            پێدڤیە دایک هەمی فیتامینێن گرنگ وەربگریت
                        </p>
                        <a href="{{ route('pregnancy-components.vitamins') }}"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 💊
                        </a>
                    </div>
                </div>

                <!-- Card 5: Sleep -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-indigo-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-indigo-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/869/869869.png" alt="Sleep"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-indigo-900">نڤستن</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            خەۆ بۆ دایکێ گەلەک یا گرنگە ، ئەڤان ئامۆژگاریان بەرچاڤ وەربگرە
                        </p>
                        <a href="{{ route('pregnancy-components.sleeping') }}"
                        class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 😴
                        </a>
                    </div>
                </div>

                <!-- Modern Pregnancy Monitoring Card -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-cyan-200">
                    <div class="p-6 text-center">
                        <div
                            class="w-20 h-20 mx-auto mb-4 bg-cyan-100 rounded-full flex items-center justify-center p-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/3106/3106880.png" alt="Monitoring Icon"
                                class="w-12">
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-cyan-900">مۆنیتۆرکردنا دڵ</h3>
                        <p class="text-gray-600 mb-5 text-sm leading-relaxed">
                            چاڤدێریا دڵی زارۆک گرنگە بۆ ئەمنی و ساخلەمیا وان
                        </p>
                        <a href="{{ route('pregnancy-components.monitorheart') }}"
                        class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white px-5 py-2 rounded-full text-sm font-medium hover:shadow-lg transition-all">
                        پتر بزانە 💓
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-gradient-to-b from-sky-100 to-blue-50 py-16">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">
                دگەل مە ساخلەم بە 💕
            </h2>
        </div>
    </section>

    @include('layouts.footer')

</body>
</html>