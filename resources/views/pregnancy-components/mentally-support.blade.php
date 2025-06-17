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
    @include('layouts.navbar')
</head>

<body>
    <a href="{{ route('pregnancystage') }}" style="position: sticky; top: 6rem; left: 1rem; z-index: 10000;">
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
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> دڵەڕاوکێ
                        </h3>
                        <p class="text-gray-700">
                            دڵەڕاوکێ کێشەیەکی باوی تەندروستی دەروونییە لە کاتی دووگیانیدا کە بە نیگەرانی زۆر سەبارەت بە
                            تەندروستی، منداڵبوون و توانای دایک و باوکی دەناسرێتەوە. نیشانەکانی بریتین لە بێئارامی، قورسی
                            تەرکیز کردن، خێرایی لێدانی دڵ و کێشەی خەوتن. ئەم هەستانە دەشێت لە گۆڕانی هۆرمۆنەکان،
                            ئەزموونی دووگیانی ڕابردوو، یان ترس لە نەزانراو سەرچاوە بگرێت. بۆ کۆنتڕۆڵکردنی دڵەڕاوکێ،
                            گرنگە گرنگی بە خۆبەخشین بدرێت لە ڕێگەی تەکنیکەکانی پشوودان وەک هەناسەدانی قووڵ، تێڕامان یان
                            یۆگای سەلامەتی دووگیانی. هەروەها کەمکردنەوەی فشارەکان، چالاک مانەوە بە وەرزشی نەرم وەک
                            ڕۆیشتن و پاراستنی خۆراکێکی هاوسەنگ یارمەتیدەر دەبێت. پشتگیری خێزان، هاوڕێ یان ڕاهێنەر
                            دەتوانێت دڵنیایی دابین بکات، لە کاتێکدا پەیوەندی کراوە لەگەڵ دابینکەری تەندروستی ڕێنمایی
                            گونجاو دەستەبەر دەکات. بە ستراتیجی دروست، دەتوانرێت دڵەڕاوکێ بە شێوەیەکی کاریگەر کۆنترۆڵ
                            بکرێت بۆ ئەزموونێکی دووگیانی تەندروستتر و ئارامتر. </p>
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
                            دڵەڕاوکێ کێشەیەکی باوی تەندروستی دەروونییە لە کاتی دووگیانیدا کە بە نیگەرانی زۆر سەبارەت بە
                            تەندروستی، منداڵبوون و توانای دایک و باوکی دەناسرێتەوە. نیشانەکانی بریتین لە بێئارامی، قورسی
                            تەرکیز کردن، خێرایی لێدانی دڵ و کێشەی خەوتن. ئەم هەستانە دەشێت لە گۆڕانی هۆرمۆنەکان،
                            ئەزموونی دووگیانی ڕابردوو، یان ترس لە نەزانراو سەرچاوە بگرێت. بۆ کۆنتڕۆڵکردنی دڵەڕاوکێ،
                            گرنگە گرنگی بە خۆبەخشین بدرێت لە ڕێگەی تەکنیکەکانی پشوودان وەک هەناسەدانی قووڵ، تێڕامان یان
                            یۆگای سەلامەتی دووگیانی. هەروەها کەمکردنەوەی فشارەکان، چالاک مانەوە بە وەرزشی نەرم وەک
                            ڕۆیشتن و پاراستنی خۆراکێکی هاوسەنگ یارمەتیدەر دەبێت. پشتگیری خێزان، هاوڕێ یان ڕاهێنەر
                            دەتوانێت دڵنیایی دابین بکات، لە کاتێکدا پەیوەندی کراوە لەگەڵ دابینکەری تەندروستی ڕێنمایی
                            گونجاو دەستەبەر دەکات. بە ستراتیجی دروست، دەتوانرێت دڵەڕاوکێ بە شێوەیەکی کاریگەر کۆنترۆڵ
                            بکرێت بۆ ئەزموونێکی دووگیانی تەندروستتر و ئارامتر. </p>
                    </div>
                </div>


                {{-- Item 3 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/ocd.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> OCD لە کاتی لەدایکبوون
                            (Obsessive-Compulsive Disorder)
                        </h3>
                        <p class="text-gray-700">
                            OCD جۆرێکە لە نەخۆشی دڵەڕاوکێ کە لە کاتی دووگیانی یان دوای لەدایک بوونی منداڵ ڕوودەدات. ئەمە
                            دەبێتە هۆی بیرکردنەوەی بێزارکەر سەبارەت بە سەلامەتی منداڵ (وەک نیگەرانی ڕوودانی شتێکی خراپ)
                            و دەبێتە هۆی کرداری دووبارە، وەک پشکنینی زۆر بۆ منداڵەکە یان زۆر خاوێنکردنەوە. کۆنتڕۆڵکردنی
                            ئەم بیرکردنەوە و کردارانە قورسە و دەبێتە هۆی فشارێکی زۆر. هەواڵی خۆش ئەوەیە کە یارمەتی
                            بەردەستە. قسەکردن لەگەڵ دەرمانسازێک، بەتایبەتی ئەو کەسەی کە لە بواری چارەسەری ڕەفتاری
                            مەعریفی (CBT) ڕاهێنراوە، دەتوانێ زۆر کاریگەر بێت. لە هەندێک حاڵەتدا، پزیشکان لەوانەیە
                            دەرمانی سەلامەت بۆ کۆنترۆڵکردنی نیشانەکان پێشنیار بکەن. بە پاڵپشتی گونجاو، زۆربەی ئەو
                            کەسانەی کە OCD ی کاتی لەدایکبوونیان هەیە دەتوانن هەست بە باشتری بکەن و چێژ لە دایک و
                            باوکایەتی وەربگرن.</p>
                    </div>
                </div>


                {{-- Item 4 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/pstd.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> نەخۆشی دڵەڕاوکێی پاش شۆک (PTSD) </h3>
                        <p class="text-gray-700">
                            نەخۆشی دڵەڕاوکێی پاش شۆک لە کاتی دووگیانی یان پاش دووگیانیدا دەشێت ڕووبدات ئەگەر کەسێک تووشی
                            ڕووداوێکی ناخۆش بووبێت، وەک لەدایکبوونی سەخت، لەبارچوون یان ئازارێکی شەخسی وەک
                            دەستدرێژیکردن. دەبێتە هۆی هەستی ترس و دڵەڕاوکێی توند کە لەناوناچێت. نیشانەکانی لەوانەیە
                            بریتین لە گەڕانەوە یان کابوس دەربارەی ڕووداوەکە، خۆلادان لە بیرهێنانەوەی، هەستکردن بە
                            بەردەوامی بێزاری، یان کێشە لە پەیوەندی لەگەڵ منداڵەکەدا. PTSD لەوانەیە زۆر ناخۆش بێت، بەڵام
                            چارەسەری کاریگەر هەیە. قسەکردن لەگەڵ ڕاهێنەرەکە، بەتایبەتی ئەو کەسەی کە لە چارەسەری جەخت
                            لەسەر تراوما ڕاهێنراوە، دەتوانێت یارمەتیدەر بێت. گروپەکانی پاڵپشتی و دەرمانی سەلامەت پێشنیار
                            دەکرێن. بە چاودێری گونجاو، زۆربەی خەڵک دەتوانن چاک ببنەوە و بە تێپەڕبوونی کات هەست بە باشی
                            بکەن.
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
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> گۆڕانی مەزاج </h3>
                        <p class="text-gray-700">
                            گۆڕانی مەزاج لە کاتی دووگیانیدا زۆر ئاساییە بەهۆی گۆڕانی هۆرمۆنەکان، ناڕەحەتی جەستەیی و
                            فشاری دەروونی لە کاتی ئامادەکاری بۆ منداڵبوون. ئەوان دەبنە هۆی گۆڕانی خێرا لە مەزاجدا، وەک
                            هەست کردن بە دڵخۆشی ساتێک و توڕەیی یان خەمباری ساتێکی تر. کەمی خەو و نیگەرانی لە داهاتوو
                            دەبێتە هۆی خراپتربوونی باری دەروونی. بۆ بەڕێوەبردنیان یارمەتیدەرە بۆ ڕاهێنانی چاودێری خۆ،
                            وەک پشوودانی تەواو، خواردنی تەندروست و چالاک مانەوە بە وەرزشە نەرمەکانی وەک ڕۆیشتن یان یۆگای
                            پێش لەدایکبوون. قسەکردن دەربارەی هەستەکانت لەگەڵ کەسێکی باوەڕپێکراو یان بەشداری کردن لە
                            گروپێکی پشتگیری هەروەها دەتوانێ ئارامی ببەخشێت. ئەگەر گۆڕانی مەزاج زۆر بوو یان زۆر بەردەوام
                            بوو، زۆر گرنگە لەگەڵ پزیشک یان دەرمانساز قسە بکەیت بۆ بەدەستهێنانی پشتگیری زیاتر.
                        </p>
                    </div>
                </div>


                {{-- Item 6 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/eat.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> وێنەی جەستە و ناڕێکی خواردن </h3>
                        <p class="text-gray-700">
                            نیگەرانییەکانی وێنەی جەستە و ناڕێکی خواردن لە کاتی دووگیانیدا بەهۆی گۆڕانی کێش و شێوە و
                            فشاری کۆمەڵایەتیەوە سەرهەڵدەدەن یان خراپتر دەبن. هەندێک کەس لەوانەیە هەست بە نیگەرانی بکەن
                            لە زیادبوونی کێش، دەبێتە هۆی سنوردارکردنی خواردن، زۆر خواردن یان پاککردنەوە. ئەمە کاریگەری
                            لەسەر تەندروستی دایک و گەشەی منداڵ هەیە. بەڕێوەبردنی ئەم هەستانە بە گفتوگۆی کراوە لەگەڵ
                            دابینکەری تەندروستی دەست پێدەکات کە دەتوانێت ڕێنمایی و پشتگیری پێشکەش بکات. چارەسەرکردن،
                            بەتایبەتی لەگەڵ کەسێک کە تووشی ناڕێکی خواردن بووە، دەتوانێت یارمەتیدەر بێت بۆ دروستکردنی
                            پەیوەندییەکی تەندروستتر لەگەڵ خواردن و جەستە. بەشداری کردن لە گروپی پشتگیری بۆ ئەو کەسانەی
                            دووگیانن کە هەمان نیگەرانیان هەیە، دەتوانێ ئاسوودەیی بێت. تەرکیز کردن لەسەر ئەو کارە
                            سەرسوڕهێنەرە کە جەستەت دەیکات – گەشەپێدانی ژیانێکی نوێ – دەتوانێت یارمەتیدەر بێت لە گۆڕینی
                            سەرنج بۆ قبووڵکردنی خود و تەندروستی.
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
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> تێکچوونی خەو
                        </h3>
                        <p class="text-gray-700">
                            ناڕێکی خەو لە کاتی دووگیانیدا بەربڵاوە و دەشێت بریتین لە کێشەی خەوتن (بێخەوی)، بەخەبەرهێنان،
                            یان هەستکردن بە نائارامی پاش خەوتن. ناڕەحەتی جەستەیی وەک پشت ئێش، چوونە گەرماو، یان گۆڕانی
                            هۆرمۆنەکان دەبێتە هۆی تێکدانی خەو. دڵەڕاوکێ و دڵەڕاوکێ سەبارەت بە دووگیانی یان دایک و باوک
                            هەروەها پشوودان قورستر دەکات. بۆ باشترکردنی خەو، هەوڵ بدە ڕۆتینێکی ئارام پێش خەوتن دروست
                            بکەیت، وەک خوێندنەوە، بیرکردنەوە یان خۆشوشتنی گەرم. بەکارهێنانی سەرین بۆ پاڵپشتی پشت یان
                            نێوان ئەژنۆکان دەبێتە هۆی ئاسوودەیی خەوتن. لە درەنگانی ڕۆژدا خۆت لە کافاین دوور بگرە و ژووری
                            نوستنەکەت ئارام و تاریک بهێڵەوە. ئەگەر کێشەی خەو بەردەوام بوو یان بووە هۆی ماندووبوونێکی
                            زۆر، لەگەڵ پزیشکەکەت قسە بکە، کە لەوانەیە چارەسەری سەلامەت یان ڕێنمایی پێشنیار بکات بۆ
                            یارمەتیدانی باشتر پشوودان.
                        </p>
                    </div>
                </div>


                {{-- Item 8 --}}
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                    <div class="md:w-1/3">
                        <img width="250px" src="assets/preg/pret.jpeg" alt="Leafy Greens"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />
                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-2"> ناڕێکی دووجەمسەری پێش لەدایکبوون
                        </h3>
                        <p class="text-gray-700">
                            ناڕێکی دووجەمسەری پێش لەدایک بوون ناڕێکی مەزاجییە کە گۆڕانی مەزاجی زۆر لەخۆ دەگرێت، لەوانە
                            ئەڵقەکانی شێتی (وزەی بەرز، جۆش و خرۆش) و خەمۆکی (خەمباری بەردەوام، ماندووبوون یان نائومێدی).
                            دووگیانی دەبێتە هۆی گۆڕانکاری هۆرمۆنەکان، سترێس و گرفتی جەستەیی. ئەگەر چارەسەر نەکرێت،
                            کاریگەری لەسەر تەندروستی دایک و منداڵەکە دەبێت. بەڕێوەبردنی نەخۆشی دووجەمسەری پێش لەدایکبوون
                            زۆرجار پەیوەندی بە کارکردن لەگەڵ دابینکارێکی تەندروستی هەیە. چارەسەر بریتییە لە چارەسەرکردن،
                            گۆڕینی شێوازی ژیان وەک پاراستنی خشتەی خەوتن و لە هەندێک حاڵەتدا دەرمانی سەلامەت بۆ دووگیانی.
                            پشتگیری خێزان، هاوڕێ یان گروپەکانی پشتگیری هەروەها دەتوانێت جیاوازییەکی بەرچاو دروست بکات.
                            دەستێوەردانی پێشوەخت یارمەتیدەرە بۆ دڵنیابوون لە دووگیانی تەندروستتر و ئەزموونی پاش
                            منداڵبوون.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
