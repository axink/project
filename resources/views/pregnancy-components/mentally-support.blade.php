<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mentally health for mothers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Animate.css for additional animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Apply the animation */
        .slide-in {
            animation: slideIn 1s ease-out forwards;
        }

        /* Optional: Add delay for staggered effect */
        .box1 {
            animation-delay: 0.2s;
        }
    </style>
</head>

<body>
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

    <section class="relative py-16 px-6 overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Image Section -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <div class="box1 slide-in"
                    style="width: 400px; height: 300px; background: #ffc0cb9d; position: absolute; top: 5rem; left: 8rem;">
                </div>
                <img width="400px" src="assets/preg/mental.jpeg" alt="Pregnancy Planning"
                    class="rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 hover:rotate-1 index-10 slide-in" />
            </div>

            <!-- Content Section -->
            <div class="w-full md:w-1/2 text-center md:text-right">
                <h2 class="text-3xl md:text-4xl font-bold text-pink-700 mb-6 animate-fade-in">
                    چاوا پشتگێرییا دایکان بکەین ل دەمێ دووگیانیدا؟
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6 animate-slide-in">
                    پشتگێریا دایکان دەمێ دووگیانیێدا برتییە ژ چارەسەرکرنا پێدڤیێن جەستەی، و سوزداری ،کومەلایەتی.
                    خوارنەکا هەڤسەنگ پەیدا بکەن و هاندانا پشکنینا پێش ژ دایکبوونێ بکەن بو پشتراستی ژ تەندروستییا دەیکێ و
                    زاروکی. پالپشتییا سوزداری پيشکێش بکە ب گوهداریکرنێ، کێمکرنا سترێسێ، هەولدان تێگەهشتنا ئەو بارێ
                    دەروونی یێ ئەو تێدا د بورت. هاریکاریکرن د ئەنجامدانا ئەرکێن روژانەدا و گونجاندن دگەل گوهورینا ئاستێ
                    وزێ. و دەیک ب خو ژی پێدڤییە خوە پەروەردەبکەت دەربارەی دووگیانیێ بو تگەهشتن ل ئاستەنگان خوە رزگارکرن
                    ژ بن بارێ دەروونی یێ نە ئارام، پێدڤییە دەیک بزانت کو ئەو یا د گەشتەکا درێژ دا کو گەلەک پێدڤییا
                    هەردەم لسەر خو بیت و دەروون دروست بت. ژینگەهەکا ئارام و تەنا پەیدا بکە، و راهێنانێت وەک پیاسا
                    بەردەوام بکە چونکی ئەڤە دێ دەروونێ تە ئارامتر لێکەت. بەردەوام سوپاس گوزاربە و یا ئارامبە. دا گەشتا
                    تە ب ئارامی برێڤە بچت.
                </p>
                <a href="#more"
                    class="bg-pink-500 text-white font-semibold px-6 py-3 rounded shadow-lg hover:bg-pink-600 transform transition-transform duration-300 hover:scale-110 animate-bounce">
                    زێدەتر بزانە
                </a>
            </div>
        </div>
    </section>

    {{-- another sections --}}
    <section class="py-16" id="more">
        <div class="container mx-auto px-6">
            <!-- Header -->
            <h2 class="text-4xl font-bold text-pink-700 text-center mb-10" data-aos="fade-up">
                کێشێت بەربەلاڤ یێن تەندروستییا دەرونی ددەمێ دووگیانیێ دا
            </h2>

            <!-- Content -->
            <div class="space-y-12">
                <!-- Item 1 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/anx.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> دوودلی
                        </h3>
                        <p class="text-gray-700">
                            دوودلی ژ کێشێت بەربەلاڤە و یا چاڤەرێکرییە رویبدەت، ئەزمونەکا بەردەوام و یا چاڤەرێکرییە بو
                            دایک و بابان. دوودلی و ترس ژ تەندروستییا زاروکی، ژ پروسا ژ دایک بوونێ، گوهورینا هورمونان.
                            ئەڤە هەمی ئەگەرن و هەروەسا ئازارێت جەستەی ژی ئەگەرن. ئاستەکێ دیارکری ژ دوودلیێ ئاساییە بەلێ
                            ئەگەر بەردەوام بو و زور بو دێ بیتە ئەگەر کاریگەریێ لسەر ژیانا روژانە بکەت. ژ نیشانێت دوودلیێ
                            گەلەک خەمخارن و هزرکرن، هزروبیرێت نە گەلەک باش دەربارەی دووگیانیێ یان زاروکی، نیشانێت جەستەی
                            وەک بێهنتەنگی، سەرگێژبوون، بلندبوونا لێدانێت دلی و هەستکرن ب گەرمیێ خوهدان. زەحمەت نڤستن.
                        </p>
                    </div>
                </div>


                {{-- Item 2 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/dep.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> خەمۆکی
                        </h3>
                        <p class="text-gray-700">
                            خەمۆکی د دەمێ دووگیانیێ دا نە هەڤسەنگییا میزاجییە ل دەف ژنان کو کاریگەری لسەر ژنان هەیە
                            ددەمێ دووگیانیێ دا. هەستێ بەردەوام یێ خەمباریێ، کێمتەرخەمیێ و چەندین نیشانێت دی کو ئەگەر
                            نەهێنە چارەکرن دێ کاریگەری لسەر ژیانا روژانە هەبیت، کاریگەرییەکا نەرێنی لسەر ژیانا زارۆکی و
                            دەیکێ. ژ نیشانێت وێ هەست کرن ب خەباریێ ب بەردەوامی، نەبوونا حەزێ، هەستکرن ب تاوانباریێ،
                            بێزاربوون ب ساناهی، گری و ئاریشا تەرکیزێ. گوهورین د شێوازێ خەوێ دا، ماندیبوون، سەرئێشی،
                            ئازارێت ماسولکان و ئاریشە د مەعیدەیدا و د ریڤیکاندا. زەحمەت بریاردان، ئاریشا بیردانکێ. ئەڤە
                            هەمی رویددەن ژ بەر هندەک ئەگەران وەک گوهورینا هورمونان، فشارێت دەروونی ژبەر دووگیانیێ،
                            نەبوونا پشتگێریێ ژ کەسێت دەورووبەر، خارنێت نە دروست وەکی ڤەخارنێت کحولی، مادێت بێ هوشکەر
                        </p>
                    </div>
                </div>


                {{-- Item 3 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/ocd.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> نەخوشیێت دەروونی
                        </h3>
                        <p class="text-gray-700">
                            نەخوشییا دەروونی حالەتەکێ زەحمەت یێ دەمێ دووگیانیێیە، پێدڤی ب چاڤدێرییەکا بلەز یا پزیشکی
                            هەیە. ئەڤ حالەتە بەلکی ڤەقەتییان ژ واقعی و خەیال چوون بت کو کاریگەریێ لسەر دایکێ و زاروکی
                            بکەت. چێدبیت ئەڤ ئەڤە نەخوشییەکا دەروونی یا بەری دووگیانیێ بیت یان ژی بەلکی ددەمێ دووگیانیێ
                            دا سەرهەلدابیت. د ڤی حالەتی دا پێدڤی ب نڤاندنێیە ل نەخوشخانێ و چارەسەریێت بلەز. ژ نیشانان
                            وەکی گوهلێبوونا هندەک دەنگان کو د واقعی دا نینن، هەست و هزرێن نەخوش، ئالوزییێت ژ دایکبوونێ
                            بەلکی پەیدابن وەک ژ دایکبوونا پێشوەخت.
                        </p>
                    </div>
                </div>


                {{-- Item 4 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/pstd.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> نەخوشییا دوودلییا پشتی شۆکبوونێ (PTSD)
                        </h3>
                        <p class="text-gray-700">
                            نەخوشییا دوودلییا پشتی شۆکبوونێ د دەمێ دووگیانیێ دا یان پشتی دووگیانیێ چێدبیت روویبدەت، ئەڤ
                            حالەتە دروست دبیت ل دەف نەخوشی دەمێ بو نموونە ژ دایکبوونەکا زەحمەت دەرباس کربیت، یان ژ
                            بەرچوونا زاروکی روویدابیت یان ئازارەکا شەخسی یا نەخۆش توش بییە. د بیتە ئەگەر هەست و هزرێن
                            ترس و دوودلیێ ل دەف درووست ببن. ژ نیشانێت وێ ئەوژی کابوس دەربارەی وێ رویدانێ یان هزرێت نەخوش
                            ب بەردەوامی و گەلەکێت دی. هەست کرن ب بێزاریێ بەردەوام، یان کێشە د گەل پەیوەندیێت د گەل
                            زارۆکی. بەلێ چارەسەری یا هەی. ئاخفتن د گەل راهێنەرەکێ، ب تایبەتی ئەو کەسێت ل چارەسەریێت جەخت
                            لسەر تراوما هاتینە مەشقدان، د شێت هاریکار بیت. ب کارئینانا دەرمانێت سلامەت، چاڤدێرییەکا
                            گۆنجای، بارا پتر یا خەلکی د شێن چارە ببن ب دەربازبونا دەمی دێ هەست ب باشیێ کەن
                        </p>
                    </div>
                </div>


                {{-- Item 5 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/mood.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> گوهورینا مەزاجی </h3>
                        <p class="text-gray-700">
                            گوهورینا مەزاجی د دەمێ دووگیانیێدا گەلەک ئاساییە ژ ئەگەرێ گوهورینا هورمونان، نە ئارامییا
                            جەستەی و فشارێت دەروونی د دەمێ ئامادەکارییان بو زاروکبوونێ. ئەڤە د بنە ئەگەرێ گوهورینا بلەز
                            یا مەزاجی. هندەک جارا هەست ب لخوشیێ و هندەک جارا هەست ب تورەیێ و هندەک جارا هەست ب خەمباریێ،
                            ژن دناڤ ڤان هەمی حالەتان دا د بورت. کێمییا خەوێ و دوودلی سەبارەت داهاتوی د بنە ئەگەر کو فشار
                            ل سەر دەروونی پتر لێ بهێن. پێدڤییە ژن ب زانیت کو ئەو پێدڤی ب بێهنڤەدانێت تەمام هەیە، خارنەکا
                            تەندرووست و چالاک، بەردەوام کرنا وەرزشێت سڤک وەک رێڤەچوون یان هەناسێت کیر. ئاخفتن د گەل
                            کەسەکی دەربارەی هەستێت خو دێ تە پتر ئارام کەن، هندەک کەس د گەل تە بن کو پشتگێرییا بارێ
                            دەروونی یێ تە بکەن و گوهدارییا هەستێت تە بکەن و بە تە باخڤن ب شێوەک ئارام و جان دێ پتر وەل
                            تە کەت کو هەست ب ئارامیێ بکی. ئەگەر ئەڤ گوهورینا مەزاجی پتر لێ هات و زێدەتر بەردەوام بوو
                            گەلەک گرنگە کو سەرەدانا نوژداری بێتە کرن بو ب دەستڤە ئینانا پشتگێرییا پتر
                        </p>
                    </div>
                </div>


                {{-- Item 7 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/sleep.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> تێکچوونا خەوێ
                        </h3>
                        <p class="text-gray-700">
                            تێکچوونا خەوێ پشتی دووگییانیێ کێشەکا بەربەلاڤە د ناڤ ژنێت دووگیان دا، تێکچوونا هورمونان، یان
                            هەست کرن ب نە ئارامییا پشتی خەوێ نە ئارامییا جەستەی وەک پشت ئێش ئەڤە هەمی هندەک هوکارن بو
                            کێم خەویێ، دوودلی سەبارەت ب دووگیانیێ پەیدابوونا هەستێت نە ئارام وەل دەیکێ دکەت کو نڤستن بو
                            وێ پچەک ب زەحمەتر بیت. بو باشترکرنێ و پەیداکرنا ژینگەهەک ئارامتر بو نڤستنێ هندەک رێکان ب
                            کاربینە وەک خواندنا پەرتووکان، هەناسێت کیر یان گەرماڤەکا گەرم دێ هاریکارییا تە پتر کەت لسەر
                            خەوەک ئارام، ب کارئینانا بالیفکان بو پشتێ یان ناڤبەرا پێت خودا دێ بیتە ئەگەر بو نڤستنەک
                            ئارامتر. خوە ژ ڤەخارنێت کافاین تێدا دیر بهێلە، بلا ژورا نڤستنا تە ئارام و تاری یان ژی
                            روناهیێت کو زیانێ نە گەهینن خەوا تە تێڤە بن. ئەگەر ئەڤ کێشە مەزنتر لێهات یان بو ئەگەر کو
                            گەلەک تێکبچی باشترو د گەل نوژدارێ خوە باخڤی داکو رێنمایێت تەندروست سەبارەت ب خەوێ ب دەت تە.
                        </p>
                    </div>
                </div>




            </div>
        </div>
    </section>
</body>

</html>
