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
</head>

<body class="bg-gray-50 text-gray-800">

    <a href="{{ route('pregnancystage') }}" style="position: sticky; top: 2rem; left: 1rem; z-index: 10000;">
        <button class="bg-blue-500 text-white px-6 py-3 m-5 rounded-full shadow-lg hover:shadow-xl transition-transform transform hover:bg-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </a>
    <br>

    <!-- Main Container -->
    <div class="container mx-auto p-8 mt-14 "  dir="rtl">
        <!-- Section 1 -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h1 class="text-2xl  text-blue-600 mb-4">
                دەربارەی دووگیانی و وەرزش
                <i class="fas fa-running mr-3"></i>
            </h1>
            <p class="text-gray-700 mb-4">
                دەربارەی دووگیانی و وەرزش چەندین سوودی تەندروستی هەیە بۆ ئەو خانمانەی کە لە کاتی دووگیانیدا وەرزش دەکەن، لەوانە
                کۆنترۆڵکردنی کێشی باشتر، باشترکردنی مەزاج و پاراستنی ئاستی لەشجوانی. وەرزشی ڕێک و پێک لە کاتی دووگیانیدا مەترسی
                ئاڵۆزییەکانی دووگیانی وەک بەرزی پەستانی خوێن و دووگیانی کەم دەکاتەوە.
                پێش ئەوەی لە کاتی دووگیانیدا وەرزش بکەیت، ڕاوێژ بە پزیشک، فیزیوتراپیست یان کارمەندی تەندروستی بکە.
                ئەگەر پێش دووگیان بوون زۆر کەم وەرزشت کردبوو لەوانەیە پێویست بکات بەرنامەی وەرزشی گونجاو هەڵبژێریت.
            </p>
            <img src="{{ asset('assets/preg.jpg') }}" alt="sport pregnancy">
        </div>

        <!-- Section 2 -->
        <div class="  rounded-xl shadow-lg p-8" dir="rtl">
            <h1 class="text-2xl  text-blue-600 mb-4">سوودەکانی وەرزش لە کاتی دووگیانیدا</h1>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                وەرزش لە کاتی دووگیانیدا سوودی جەستەیی و سۆزداری زۆری هەیە. چالاکی جەستەیی لەوانەیە یارمەتیدەر بێت بۆ چارەسەرکردنی
                هەندێک نیشانەکانی دووگیانی و هەست بە باشی دەکەیت، چونکە دەزانیت شتێکی باش بۆ خۆت و منداڵەکەت دەکەیت.
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
                        <h2 class="text-lg font-semibold text-blue-700">چێژ وەرگرتن</h2>
                        <p class="text-gray-600">چێژەکان بەردەوام پارەیەکی تەندروستی دەگرنەوە.</p>
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
                        <h2 class="text-lg font-semibold text-blue-700">وزەی زیادکراو</h2>
                        <p class="text-gray-600">دۆخی وزەیەکان یارمەتی دەدەنەوە بۆ جەستەی باشتر.</p>
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
                        <h2 class="text-lg font-semibold text-blue-700">لەشجوانی باشترکراو</h2>
                        <p class="text-gray-600">ئەنجامەکان دەبینین لە سەر ڕوخسار و بەناو جەستە.</p>
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
                        <h2 class="text-lg font-semibold text-blue-700">کەمکردنەوەی مەترسی ئاڵۆزییەکان</h2>
                        <p class="text-gray-600">مەترسی بەرزی پەستانی خوێن و دووگیانی کەم دەکرێت.</p>
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
                        <h2 class="text-lg font-semibold text-blue-700">چاکبوونەوە خێراتر</h2>
                        <p class="text-gray-600">دوای دایک بوون ڕزگار بوون زۆر خێراترە.</p>
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
                        <h2 class="text-lg font-semibold text-blue-700">باشترکردنی خەو</h2>
                        <p class="text-gray-600">خەوێکی هێمن و بێبەش داری پێشکەش دەکات.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{-- exercise  --}}

            <!-- Main Container -->
            <div class="container mx-auto p-8 mt-12">
                <!-- Heading -->
                <h1 class="text-4xl font-bold text-center text-teal-600 mb-8"> ژ باشترین کەنالا بۆ راهێنانێن دایکێ-بهێز بمینە   </h1>

                <!-- 3x3 Grid Layout -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Video 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative" style="padding-top: 56.25%">
                            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/DjyCGGdDEwU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-teal-600">Pregnancy Exercise - Full Body Workout</h3>
                            <p class="text-sm text-gray-500 mt-2">A safe and effective workout routine during pregnancy.</p>
                            <a href="https://youtu.be/DjyCGGdDEwU" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                        </div>
                    </div>

                        <!-- Video 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <!-- Video Embed -->
                        <div class="relative" style="padding-top: 56.25%">
                            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/xexbTNpwQEk?si=IGRQAIQn4gZD7-rs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <!-- Video Information -->
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-teal-600">Pregnancy Pilates</h3>
                            <p class="text-sm text-gray-500 mt-2">Pilates workout for strengthening and flexibility during pregnancy.</p>
                            <a href="https://youtu.be/xexbTNpwQEk" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                        </div>
                    </div>


                            <!-- Video 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <!-- Video Embed -->
                        <div class="relative" style="padding-top: 56.25%">
                            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/tgpFpLjEHhQ?si=1Xtc4RXNPBE_JaWM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <!-- Video Information -->
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-teal-600">Prenatal Yoga</h3>
                            <p class="text-sm text-gray-500 mt-2">Relaxing yoga session designed for expectant mothers.</p>
                            <a href="https://youtu.be/tgpFpLjEHhQ" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                        </div>
                    </div>

                                <!-- Video 4 -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <!-- Video Embed -->
                            <div class="relative" style="padding-top: 56.25%">
                                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/ilj05p-RSQU?si=BQU9jvnUzr6ufMcG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                            <!-- Video Information -->
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-teal-600">Gentle Pregnancy Exercises</h3>
                                <p class="text-sm text-gray-500 mt-2">Gentle exercises for relief during pregnancy.</p>
                                <a href="https://youtu.be/ilj05p-RSQU" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                            </div>
                        </div>

                        <!-- Video 5 -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <!-- Video Embed -->
                            <div class="relative" style="padding-top: 56.25%">
                                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/9hq6Vi5ivso?si=YRnUmd6XjHpgpqdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                            <!-- Video Information -->
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-teal-600">Postpartum Exercises</h3>
                                <p class="text-sm text-gray-500 mt-2">Exercises to regain strength after childbirth.</p>
                                <a href="https://youtu.be/9hq6Vi5ivso" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                            </div>
                        </div>

                            <!-- Video 6 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <!-- Video Embed -->
                        <div class="relative" style="padding-top: 56.25%">
                            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/RNPUwRNd7Po?si=2KJa7DUqfTLJ8HgC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                        <!-- Video Information -->
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-teal-600">Pregnancy Stretching</h3>
                            <p class="text-sm text-gray-500 mt-2">Stretching routines to ease discomfort during pregnancy.</p>
                            <a href="https://youtu.be/RNPUwRNd7Po" target="_blank" class="text-teal-600 hover:underline mt-4 inline-block">Watch on YouTube</a>
                        </div>
                    </div>

                </div>
            </div>



            <!-- Exercise Advice Section -->
            <div class="container mx-auto mt-12 p-6">
                <h2 class="text-3xl font-bold text-teal-700 mb-8 text-center">ئامۆژگاریێن گرنگ بۆ دایکان دەربارەی راهێنانێن وان </h2>

                <!-- Advice Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1: Stay Active (Updated Color) -->
                    <div class="bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-white">Stay Active, But Listen to Your Body</h3>
                        <p class="text-sm text-white mt-2">Gentle exercises like walking, swimming, and prenatal yoga are great ways to stay active. Always listen to your body and rest when needed.</p>
                    </div>

                    <!-- Card 2: Low-Impact Activities -->
                    <div class="bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-white">Focus on Low-Impact Activities</h3>
                        <p class="text-sm text-white mt-2">Opt for activities like walking, swimming, or cycling to stay fit without risking injury or overexertion.</p>
                    </div>

                    <!-- Card 3: Strengthen Your Core -->
                    <div class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-white">Strengthen Your Core</h3>
                        <p class="text-sm text-white mt-2">Prenatal yoga and pilates help strengthen your core muscles, promoting good posture and reducing back pain.</p>
                    </div>

                    <!-- Card 4: Stay Hydrated -->
                    <div class="bg-gradient-to-r from-indigo-400 via-indigo-500 to-indigo-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-white">Stay Hydrated</h3>
                        <p class="text-sm text-white mt-2">Drink plenty of water before, during, and after your workout to stay hydrated and maintain your energy levels.</p>
                    </div>

                    <!-- Card 6: Pelvic Floor Exercises (Updated Color) -->
                    <div class="bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-black">Do Pelvic Floor Exercises</h3>
                        <p class="text-sm text-black mt-2">Strengthen your pelvic muscles with Kegel exercises to support recovery and prevent incontinence.</p>
                    </div>
                    <!-- Card 5: Avoid High-Risk Activities -->
                    <div class="bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 rounded-xl shadow-lg p-6 transform transition-transform hover:scale-105">
                        <h3 class="text-xl font-semibold text-white">Avoid High-Risk Activities</h3>
                        <p class="text-sm text-white mt-2">Avoid contact sports or exercises that involve lying flat on your back after the first trimester. Always consult your doctor first.</p>
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
            <img src="{{ asset('assets/5-08.jpg') }}" alt="Exercise" class="w-full max-w-full rounded-lg shadow-lg object-cover">
        </div>

</body>

</html>
