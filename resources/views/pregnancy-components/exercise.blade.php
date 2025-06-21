<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise for Mothers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slide-in {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fade-in {
            animation: fade-in 1.5s ease-out;
        }

        .animate-slide-in {
            animation: slide-in 1s ease-out;
        }

        .animate-bounce {
            animation: bounce 2s infinite;
        }
    </style>
    {{-- @include('layouts.navbar') --}}
</head>

<body class="bg-gray-50 text-gray-800">

    <a href="{{ route('pregnancystage') }}" style="position: sticky; top: 2rem; left: 1rem; z-index: 10000;">
        <button
            class="bg-blue-500 text-white px-6 py-3 m-5 rounded-full shadow-lg hover:shadow-xl transition-transform transform hover:bg-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </a>
    <br>

    <!-- Main Container -->
    <div class="container mx-auto p-8 mt-14" dir="rtl">
        <!-- Section 1 -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6 text-center">
            <h1 class="text-2xl  text-blue-600 mb-4">
                دەربارەی دووگیانی و وەرزش
                <i class="fas fa-running mr-3"></i>
            </h1>
            <p class="text-gray-700 mb-4">
                دەربارەی دووگیانیێ و وەرزشێ چەندین مفایێت تەندروستی یێن مەزن تێدا هەنە بو وان خانمان یێن ل دەمێ
                دووگیانیێ وەرزشێ دکەن، ژوان ژی کونترولکرنا کێشێ، باشترکرنا میزاجی و پاراستنا ئاستێ لەشجوانیێ. وەرزشا رێک
                و پێک ددەمێ دووگیاننیێ دا مەترسیا ئالوزییێت دووگیانیێ وەک بلند بوونا پەستانا خوینێ کێم دکەت. بەلێ دگەل
                هندێ ژی پێدڤییە ل دیڤ رێنمایێت نوژداری وەرزش بهێت کرن، چونکی دبیت هندەک جورێن وەرزشێ ب کێر تە نەهێن.
                ڤێجا بو پاراستنا ساخلەمییا خوە و یا زاروکێ خوە و ژ بو ژیانەکا ئارامتر د ڤێ گەشتێدا، وەرزشەکا گونجای ب
                هەلبژێرو.
            </p>
            <img src="{{ asset('assets/preg-exec.jpg') }}" alt="sport pregnancy">
        </div>

        <!-- Section 2 -->
        <div class="  rounded-xl shadow-lg p-8" dir="rtl">
            <h1 class="text-2xl  text-blue-600 mb-4">ژ مفایێت وەرزشێ ل دەمێ دووگییانیێ</h1>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                وەرزش ل دەمێ دووگیانیێ گەلەک مفایێت لەشی و عاتیفی هەنە، چالاکیێت لەشی بەلکی د هاریکار بن بو چارەسەرکرنا
                هندەک ژ نیشانێت دووگیانیێ و پتر هەست ب باشیێ بکی. چۆنکی تو دزانی کو تو یا کارەکێ باش بو خوە و زاروکێ خوە
                دکی.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Benefit Item 1 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-heartbeat text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">ئارامی وەرگرتن</h2>
                    </div>
                </div>

                <!-- Benefit Item 2 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-weight text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">وزەکا زێدەتر </h2>
                    </div>
                </div>

                <!-- Benefit Item 3 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-running text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700"> لەش جوانییەک پتر</h2>
                    </div>
                </div>

                <!-- Benefit Item 4 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-heart text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">کێمکرنا مەترسیێن ئالوز</h2>
                    </div>
                </div>

                <!-- Benefit Item 5 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-child text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">زیتر ساخبوون</h2>
                    </div>
                </div>

                <!-- Benefit Item 6 -->
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0">
                        <div class="bg-blue-100 text-blue-700 rounded-full p-3">
                            <i class="fas fa-bed text-2xl"></i>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-blue-700">خەوەک باشتر</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{-- exercise  --}}

    <!-- Main Container -->
    <div class="container mx-auto p-8 mt-12">
        <!-- Heading -->
        <h1 class="text-4xl font-bold text-center text-teal-600 mb-8"> ژ باشترین کەنالا بۆ راهێنانێن دایکێ-بهێز بمینە
        </h1>

        <!-- 3x3 Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Video 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/DjyCGGdDEwU"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Pregnancy Exercise - Full Body Workout</h3>
                    <p class="text-sm text-gray-500 mt-2">A safe and effective workout routine during pregnancy.</p>
                    <a href="https://youtu.be/DjyCGGdDEwU" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Video Embed -->
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/xexbTNpwQEk?si=IGRQAIQn4gZD7-rs" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Video Information -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Pregnancy Pilates</h3>
                    <p class="text-sm text-gray-500 mt-2">Pilates workout for strengthening and flexibility during
                        pregnancy.</p>
                    <a href="https://youtu.be/xexbTNpwQEk" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>


            <!-- Video 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Video Embed -->
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/tgpFpLjEHhQ?si=1Xtc4RXNPBE_JaWM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Video Information -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Prenatal Yoga</h3>
                    <p class="text-sm text-gray-500 mt-2">Relaxing yoga session designed for expectant mothers.</p>
                    <a href="https://youtu.be/tgpFpLjEHhQ" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Video Embed -->
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/ilj05p-RSQU?si=BQU9jvnUzr6ufMcG"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Video Information -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Gentle Pregnancy Exercises</h3>
                    <p class="text-sm text-gray-500 mt-2">Gentle exercises for relief during pregnancy.</p>
                    <a href="https://youtu.be/ilj05p-RSQU" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Video Embed -->
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/9hq6Vi5ivso?si=YRnUmd6XjHpgpqdk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Video Information -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Postpartum Exercises</h3>
                    <p class="text-sm text-gray-500 mt-2">Exercises to regain strength after childbirth.</p>
                    <a href="https://youtu.be/9hq6Vi5ivso" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Video Embed -->
                <div class="relative" style="padding-top: 56.25%">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/RNPUwRNd7Po?si=2KJa7DUqfTLJ8HgC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Video Information -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-teal-600">Pregnancy Stretching</h3>
                    <p class="text-sm text-gray-500 mt-2">Stretching routines to ease discomfort during pregnancy.</p>
                    <a href="https://youtu.be/RNPUwRNd7Po" target="_blank"
                        class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                </div>
            </div>

        </div>
    </div>



    <!-- Exercise Advice Section -->
    <div class="container mx-auto mt-12 p-6">
        <h2 class="text-3xl font-bold text-teal-700 mb-8 text-center">ئامۆژگاریێن گرنگ بۆ دایکان دەربارەی راهێنانێن وان
        </h2>

        <!-- Advice Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1: Stay Active (Updated Color) -->
            <div
                class="bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-white">چالاک بمینە بەلێ گوهێ خوە بدە جەستەێ خوە</h3>
                <p class="text-sm text-white mt-2">
                    چالاکیێت نەرم وەک پیاسەکرن، و مەلەڤانی، هتد... ژ هەلبژارتنێن گەلەک باشن بەتە و زاروکێ تە. دا هەمی
                    دەما یا چالاک بی و ب هێز بی.
                </p>
            </div>

            <!-- Card 2: Low-Impact Activities -->
            <div
                class="bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-white">جەخت لسەر چالاکیێت کاریگەر بکە</h3>
                <p class="text-sm text-white mt-2">
                    چالاکیێت وەک پیاسە کرن، پایسکل سیاری، مەلەڤانی، بو خوە پاراستن ژ بێزاریێ و پەیداکرنا ژینگەهەک ساخلەم
                    و پاقشتر و ئەکتیڤ تر.
                </p>
            </div>

            <!-- Card 3: Strengthen Your Core -->
            <div
                class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-white">هەولبدە ئارامیا دەرونێ خوە ب پارێزە</h3>
                <p class="text-sm text-white mt-2">
                    برێکا وەرزشێ هەولبدە ئارامییا دەرونێ خوە ب پارێزە، و پێکولان بکە هەمی دەمان ل سەرخوبی و دیربی ژ هەر
                    ژینگەهەکێ کو تە نە ئارام فکەت.
                </p>
            </div>

            <!-- Card 4: Stay Hydrated -->
            <div
                class="bg-gradient-to-r from-indigo-400 via-indigo-500 to-indigo-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-white"> ئاڤێ ڤەخۆ </h3>
                <p class="text-sm text-white mt-2">
                    رێژەکا باش یا ئاڤێ ڤەخۆ ل دەمێ وەرزشێ و پشتی وەرزشێ، دا لەشێ تە شێدار بمینت. و بەردەوام ب هێز ب
                    مینت.
                </p>
            </div>

            <!-- Card 6: Pelvic Floor Exercises (Updated Color) -->
            <div
                class="bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-black">ڕاهێنانان بۆ بنچینا حەوزێ ئەنجام بدەن.</h3>
                <p class="text-sm text-black mt-2">
                    ماسولکێت حەوزێ بهێز بکە ب رێکا ڕاهێنانێت کیگڵ بۆ هاریکرنا ساخبوون و خۆڕانەگرتن ژ خۆڕانەگرتن.
                </p>
            </div>
            <!-- Card 5: Avoid High-Risk Activities -->
            <div
                class="bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                <h3 class="text-xl font-semibold text-white">راهێنانێت گران و ب مەترسی نەکە</h3>
                <p class="text-sm text-white mt-2">

                </p>
            </div>

        </div>
    </div>


    <!-- Responsive Image Section with Heading -->
    <div class="max-w-full p-6">
        <!-- Header with Style -->
        <h1 class="text-3xl sm:text-4xl font-semibold text-teal-600 mb-4 text-center">
            ب هیڤیا گەشتەک ساخلەم
        </h1>
        <!-- Image -->
        <img src="{{ asset('assets/preg.png') }}" alt="Exercise"
            class="w-full max-w-full rounded-lg shadow-lg object-cover">
    </div>

</body>

</html>
