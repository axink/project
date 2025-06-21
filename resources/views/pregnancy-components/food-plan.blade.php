<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>food plan for mothers</title>
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

    <section class="relative py-16 px-6">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Image Section -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <img width="500px" src="assets/preg/diet.jpeg" alt="Pregnancy Planning"
                    class="rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 hover:rotate-1" />
            </div>
            <!-- Content Section -->
            <div class="w-full md:w-1/2 text-center md:text-right">
                <h2 class="text-3xl md:text-4xl font-bold text-pink-700 mb-6 animate-fade-in">
                    خارنەکا ساخلەم بخو ددەمێ دووگیانیێ دا
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6 animate-slide-in">
                    خوارنەکا تەندرووست بو پاراستنا شێوازێ ژیانەکا تەندروست گەلەک گرنگە ل دەمێ تو یا ب دووگیانی یان تە
                    پلان هەنە ب دووگیان بکەڤی. خوارنا خارنەکا ساخلەم ل دەمێ دووگیانیێ دا هاریکارییا گەشا زاروکێ تە د کت
                    ب شێوەک باش. پێدڤی ناکت رجێمەکا دیارکری تە هەبت، بەلێ پێدڤییە روژانە خوارنێت جوراوجور ب خوی بو
                    پشتراستیێ کو تو و زاروکێ تە خوراکێ پێدڤی وەردگرن. پێشنیار د هێتە کرن کو کو ڤیتامینا و کانزایێت پێدڤی
                    ژ خارنا خو وەرگری. بەلێ ددەمێ دووگیانیێ دا گرنگە ترشێ فۆلیک بخوی بو پشتراست بوون ژ هندێ کو هەمی
                    خوراکێ پێدڤی وەردگری.
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
            <h2 class="text-4xl font-bold text-green-700 text-center mb-10" data-aos="fade-up">
                باشترین خوارن و سوپەر فوود
            </h2>

            <!-- Content -->
            <div class="space-y-12">
                <!-- Food Item 1 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/vegtble.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2">کەسکاتی و سەرزەوات
                        </h3>
                        <p class="text-gray-700">
                            سەرزەوات بەشەک گرنگە ژ خوارنا دووگیانیێ چونکی ریشال دناڤدانە و کاربوهیدرات و کالوری کێمترە.
                            کەسکاتی ڤیتامین و کانزایێت پێدڤی وەک فۆلات، ئاسن، کالسیوم، دابین دکت کو هاریکارییا گەشا ب
                            هێز و تەندروستیا زاروکێ تە دکت. کەسکاتیێ ریشال یێت تێدا کو هاریکارە بو رێگری کرنێ ژ
                            قەبزاتیێ.
                        </p>
                    </div>
                </div>

                <!-- Food Item 2 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/fruit.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2">فێقیێ تازە</h3>
                        <p class="text-gray-700">
                            خارنا فێقی د دەمێ دووگیانیێ دا گەلەک ب مفایە چۆنکی ڤیتامین و ریشال و شەکرا سروشتی د ناڤ دا
                            هەیە کو دێ گەلەک مفای ل تە و زاروکێ تە کت. فێقیێت وەک پرتەقال (ڤیتامین C)، موز (پوتاسیوم) و
                            سێڤ(ریشال) تێدانە هاریکارییا پاراستنا تەندروستییێ و ريگریێ ل قەبزیێ و هاریکارییا گەشا زاروکی
                            د کت. سەرەرای هندێ ژی، ئاڤەکا باش د ناڤدا هەیە. بەلێ ژ بیرنەکی کو وان گەلەک باش بشوی. بو
                            نەهێلانا هەر پیساتییەکێ.
                        </p>
                    </div>
                </div>


                <!-- Food Item 3 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/egg.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> هێک</h3>
                        <p class="text-gray-700">
                            خارنا هێکان گەلەک ب مفانە ب ژنێت دووگیان، بەلێ پێدڤییە باش بهێنە کەلاندن بەری بهێنە خوارن.
                            ژنێت دووگیان دشێن مفای ژ خارنا هێکێ وەرگرن. هێکا کومەکا ڤیتامینان د ناڤ دایە وەک ڤیتامین A
                            کو هاریکارییا گەشا گونجای یا چاڤ و پیستی دکەت، سیستەمێ بەرگێریێ ب هێز د ئێخت. مفایێت گرنگ بو
                            دووگیانیێ هەنە وەک یود، فولات، ئاسن د ناڤ دا هەنە کو د گرنگ بو گەشا زاروکی.
                        </p>
                    </div>
                </div>

                <!-- Food Item 4 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/salmon.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> ماسییا سەلەمونی </h3>
                        <p class="text-gray-700">
                            خوارنا ماسییا سەلەمون د دەمێ دووگییانیێدا گەلەک مفا هەنە. یا زەنگینە ب ئومێگا-٣ ب تایبەتی
                            DHA، کو دگرنگن بو گەشا مێشکی چاڤێ زاروکی. هەروەسا سەرچاوەکێ باش یێ پروتینی هەیە. و گەلەک
                            ڤیتامین یێت دی یێت وەک D, B12.
                        </p>
                    </div>

                </div>


                <!-- Food Item 5 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/meat.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> گۆشت</h3>
                        <p class="text-gray-700">
                            گوشتی ئاسن یێ د ناڤدا کو ساناهیترین جورێ ئاسنییە کو ب هێتە هالمژین ژ لایێ جەستەی
                            ڤە، گوشتێ گای بەرزترین سەرچاوێ گوشتییە ژ لایێ برا گشتی و بەردەستیێ ڤە.
                        </p>
                    </div>

                </div>

                <!-- Food Item 6 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/seeds.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2">گوێز و دەندک </h3>
                        <p class="text-gray-700">
                            گیز و دەندک د دەمێ دووگیانیێ دا سلامەت و ب مفانە گەلەک جورێن خوراکێ پێدڤی بو دەیکێ و زاروکی
                            دابین دکەن. ئەو سەرچاوەکێ باشن بو چەوریێ تەندروست، پروتین، و ڤیتامینان و کانزایان. د گەل
                            هندێ پێدڤییە یا ئاگەهدار بی ئەگەر تە حەساسی ژ خارنا وان هەبن. ژنێت دووگیان گەلەک جاران هەست
                            ب برسێ دکەن و حەزدکەن خارنەکا سڤک ب خون ئاموژگاری بو وان کو ئەو داکو تەندروستییا وان یا
                            پاراستی بت گیزان ب خون نەکو خارنێت بێ مفا
                        </p>
                    </div>

                </div>


                <!-- Food Item 7 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/yougort.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> ماست </h3>
                        <p class="text-gray-700">
                            خوارنا ماستی د دەمێ دووگیانیێدا سادەترین و گونجاوترین رێکە بو ب دەستڤەئینانا پروبییوتیکی.
                            گەلەک مفا هەنە ژ خارنا ماستی ددەمێ دووگیانیێدا، بو کێشا ئاوسانێ د دەمێ دووگیانیێدا و بو وان
                            کەسێت کو بەرهەنگارییا لاکتوزی ناگرن یا ب مفایە. خوارنا بەردەوام یا ماستی د دەمێ دووگیانیێدا
                            مەترسییا بلندبوونا فشارا خوینێ کێم دکت.
                        </p>
                    </div>

                </div>


                <!-- Food Item 8 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/bean.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> فاسۆلیا </h3>
                        <p class="text-gray-700">
                            ئەو خارنێت کو ئاسن د ناڤ دا وەک فاسۆلیا، نیسک، گوشت، سپیناخ هاریکارییا دەیکێ دکەن خوینێ
                            زێدەتر بو خوە و زاروکێ خوە بەرهەم بینت. خارنا فاسولیا یا ب مفایە ژبەر کو فولات، ئاسن،
                            فایبەر، پروتین ییت دناڤدا.
                        </p>
                    </div>
                </div>


                <!-- Food Item 9 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/letin.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> نیسک </h3>
                        <p class="text-gray-700">
                            نیسک سەرچاوەکێ باشە بو فولات، کو رولەکێ گرنگ د بینت د گەشا کورپەلەیدا . هندەک ژێدەران دایە
                            دیارکرن کو خارنا ئەو خارنێت کو فولات د ناڤدا زوور بت ددەمێ دووگیانیێدا مەترسییا تووشبون ب
                            کێمو کاسیێت دلی و کوئەندامێ میزێ، بورییا دەماری کێم دکەت.
                        </p>
                    </div>

                </div>

                <!-- Food Item 10 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/dried_fruit.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> فێقیێ حشک </h3>
                        <p class="text-gray-700">
                            فێقیێ حشک ب شێوەکێ ئاسای رێژا کالورییان بلندە تێدا، دگەل ریشالان، ڤیتامینان و کانزایان. ئێک
                            پارچا فێقیێ حشک هەمان ئەو خوراکێن پێدڤی تێدانە یێن کو دناڤ فێقیێ نوی دا. بەلێ ئاڤا وێ کێمترە
                            و قەبارێ وێ ژی بچوویک ترە.
                        </p>
                    </div>

                </div>
            </div>
    </section>


</body>

</html>
