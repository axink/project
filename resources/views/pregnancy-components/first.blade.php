<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first information for mothers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-in-out;
        }

        .animate-slide-in {
            animation: slide-in 1s ease-out;
        }

        .animate-bounce {
            animation: bounce 2s infinite;
        }
        .grov{
            width: 400px;
            height: 400px;
            background: #6dd1f8;
            border-radius: 100%;
            position: absolute;
            right: -100px;
            bottom: 0;
        }
    </style>
    @include('layouts.navbar')
</head>


<body>
    <a href="{{ route('pregnancystage') }}" style="position: sticky; top: 2rem; left: 1rem; z-index: 10000;">
        <button class="bg-blue-500 text-white px-6 py-3 m-5 rounded-full shadow-lg hover:shadow-xl transition-transform transform hover:bg-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </a>
    <br>
    <div class="w-full">
        <div class="w-full overflow-hidden flex justify-between flex-wrap relative z-10">
            <div class="text-right p-6 max-w-4xl flex-1">
                <h1
                    class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 animate-fade-in">
                    نیشانێت دەستپێکێ
                </h1>
                <p class="text-gray-800 text-xl mt-4">
                    .نیشانەکانی دووگیانی نیشانەی دووگیانییە. ژنانی دووگیان لە ماوەی 1-2 هەفتەی یەکەمدا نیشانەکانی
                    دووگیانی دەبینن، لەوانە ناسکی مەمک، خاڵی سووک، ماندووبوون و نەخۆشی بەیانیان. بە شێوەیەکی ئاسایی،
                    بەرزبوونەوەی ئاستی هۆرمۆنەکانی دووگیانی ئەم نیشانانە دروست دەکات، کە لەوانەیە نیشانەی تری هەبێت وەک
                    زیادبوونی دەرچوونی زێ، گرژبوونی پچڕپچڕ، میزکردن زۆر، ئاوسان و گۆڕانی مەزاج. نیشانەکانی دووگیانی لە
                    کەسێکەوە بۆ کەسێکی تر جیاوازە. هەندێکیان تووشی نەخۆشی بەیانیان دەبن، لە کاتێکدا هەندێکی تر هیچ
                    گۆڕانکارییەکی جەستەیی نابینن. ئەو کەسانەی کە نیشانەکانی دووگیانییان هەیە پێویستە دەستبەجێ بەدوای
                    پزیشکدا بگەڕێن بۆ پشکنینی دووگیانی و چاودێری پێش لەدایکبوون بۆ دڵنیابوون لە دووگیانی سەلامەت و
                    یارمەتیدان لە ئامادەکاری بۆ ڕۆڵێکی نوێ لە ژیاندا وەک دایکێکی نوێ
                </p>
            </div>
            <div class="flex justify-center items-center mt-6 flex-shrink-0">
                <img src="assets/preg/s-preg.png" class="w-90 lg:w-95 animate-slide-in" style="z-index: 100" alt="">
                <div class="grov">

                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mt-6">
            <img src="assets/preg/baby1.jpeg" width="250px;" alt="">
        </div>


        {{-- box 1 --}}
        <div class="b1 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 4rem">
            <div class="b1-img">
                <img src="assets/preg/perCal.jpeg" width="250px" alt="">
            </div>

            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;">ژ دەستدانا سۆرا هەیڤانە</h1>
                <p class="lg:text-lg italic text-gray-600">لەدەستدانی سووڕی
                    مانگانە یەکێکە لە یەکەم نیشانەکانی دووگیانی بۆ
                    ئەوانەی کە دووگیان دەبن ئەمە کاتێک ڕوودەدات کە پیتاندن لە نێوان هێلکەدا
                    وە سپێرمەکە تەواو دەبێت و جەستە دەست دەکات بە بەرهەمهێنانی هۆرمۆنی ئێچ سی جی
                    (گۆنادۆترۆپینی کۆریۆنی مرۆڤ)، هۆرمۆنێکە کە لە منداڵداندا بەرهەم دەهێنرێت
                    8-10 ڕۆژ پاش سکپڕبوون بۆ ئەوەی کۆرپەلە گەشە بکات. له ئه نجامدا جه سته که ی
                    هێلکەدانەکان دەوەستێت و لە ئەنجامدا بۆ ماوەیەکی کورت سووڕی مانگانە نەماوە. هەرچۆنێک بێت،
                    لەدەستدانی سووڕی مانگانە دەشێت بەهۆی سترێس، ناهاوسەنگیی هۆرمۆنەکان، زۆر
                    ڕێجیمکردن، نیشانەکانی PMS یان وەرزشی زیادەڕەوی. ئەو کەسانەی گومان لە دووگیانی دەکەن
                    لەم قۆناغە سەرەتاییەدا دەبێت تاقیکردنەوەی دووگیانی ئەنجام بدرێت بۆ دۆزینەوەی هەبوونی
                    هۆرمۆنی hCG و دووگیانی پشتڕاست دەکاتەوە
                </p>
            </div>
        </div>


        {{-- box 2 --}}
        <div class="b2 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 12rem">
            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;">نەخۆشی بەیانیان و دڵ شێواندن و ڕشانەوە
                </h1>
                <p class="lg:text-lg italic text-gray-600">
                    نەخۆشی بەیانیان یەکێکە لە یەکەم نیشانەکانی دووگیانی کە 2 تا 8 حەوتە پاش سکپڕی ڕوودەدات و نیشانەیەکی
                    زۆر باوە بۆ زۆربەی ژنانی دووگیان. نەخۆشی بەیانیان بە شێوەی دڵ شێواندن، ڕشانەوە و نەبوونی ئارەزوو و
                    سەرئێشە و سەرگێژبوون دەردەکەوێت و بەزۆری لە بەیانیاندا دەردەکەوێت. نەخۆشی بەیانیان لەوانەیە لە
                    هەفتەی 12 ی دووگیانیدا چاک ببێتەوە و لە هەفتەی 32 پێش منداڵبوون دووبارە دەردەکەوێتەوە. نەخۆشی
                    بەیانیان دەبێتە هۆی دڵ شێواندن و ڕشانەوە کە دەبێتە هۆی وشکبوونەوە، ماندووبوونێکی زۆر و بورانەوە. ئەو
                    کەسانەی تووشی نەخۆشی بەیانیان دەبن دەبێت دەستبەجێ سەردانی پزیشکی بکەن بۆ هەڵسەنگاندنی تەواو. لەگەڵ
                    ئەوەشدا، تەنها ڕێژەیەکی کەم لە ژنانی دووگیان هیچ نیشانەیەکیان نییە، ئەمەش بەگوێرەی باری جەستەیی هەر
                    کەسێک.
                </p>
            </div>

            <div class="b2-img">
                <img src="assets/preg/vomit.jpeg" width="450px" alt="">
            </div>
        </div>


        {{-- box 3 --}}
        <div class="b1 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 8rem">
            <div class="b1-img">
                <img src="assets/preg/bCan.jpeg" width="250px" alt="">
            </div>

            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;">ناسکی مەمک، ئاوساوی مەمک، یان گۆڕانی
                    مەمک</h1>
                <p class="lg:text-lg italic text-gray-600">
                    ناسکی مەمک، ئاوساوی مەمک و گۆڕانی مەمک لە یەکەم نیشانەکانی دووگیانی کە 2 تا 3 ڕۆژ پاش سکپڕی
                    دەردەکەون. نیشانەکانی پێش سوڕی مانگانە هاوشێوەی نیشانەکان دەبن. مەمکەکان گەورە دەبن و دەبێتە هۆی
                    توندتر بوونی ستیانەکە. لەگەڵ ئەوەشدا، هاڵەکە کە پێستی ڕەنگاوڕەنگی دەوری گۆی مەمکەکە دەدات، تاریک
                    دەبێت، پێستی مەمک بەهێز دەبێت و دەمارەکانی خوێن زیاتر دەبینن. بە شێوەیەکی ئاسایی مەمکەکان ناسک،
                    ئاوساوی مەمکەکان یان گۆڕانی مەمک پاش دووگیانی روودەدەن. لە ماوەی 3 مانگدا، نیشانەکانی گۆڕانی مەمک
                    وردە وردە کەم دەبنەوە کاتێک جەستە لەگەڵ چالاکییە هۆرمۆنییەکانی دووگیانی دەگونجێت.
                </p>
            </div>
        </div>


        {{-- box 4 --}}
        <div class="b2 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 12rem">
            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;"> زۆر میزکردن
                </h1>
                <p class="lg:text-lg italic text-gray-600">
                    زۆر میزکردن یەکێکە لە نیشانەکانی سەرەتای دووگیانی کە پاش نەبوونی سووڕی مانگانە تێبینی دەکرێت. لەکاتی
                    دووگیانیدا جەستە خوێن و شلەمەنی زیاتر بەرهەم دەهێنێت بۆ ئەوەی کۆرپەلە گەشە بکات، گورچیلەکان زیاتر
                    کار دەکەن بۆ پاڵاوتنی بڕی زیاتری خوێن بۆ دەردانی پاشماوەکان بۆ ناو میز. میز رەنگی تۆختر دەردەکەوێت و
                    پرتەقاڵی یان قاوەیی دەردەکەوێت. سەرەڕای ئەوەش، لەگەڵ گەورەبوونی کۆرپەلە، منداڵدان گەورە دەبێت و فشار
                    دەخاتە سەر میزڵدان و پێویستی بە میزکردن هەیە، بەتایبەتی لە شەودا.
                </p>
            </div>

            <div class="b2-img">
                <img src="assets/preg/FreUn.jpeg" width="350px" alt="">
            </div>
        </div>



        {{-- box 5 --}}
        <div class="b1 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 8rem">
            <div class="b1-img">
                <img src="assets/preg/fatig.jpeg" width="350px" alt="">
            </div>

            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;">ماندووبوون</h1>
                <p class="lg:text-lg italic text-gray-600">
                    ماندووبوون نیشانەیەکی دووگیانییە کە لە هەفتەی یەکەمی سکپڕیدا دەردەکەوێت. لە کاتی دووگیانیدا جەستە
                    ڕێژەیەکی بەرزی پرۆجێسترۆن بەرهەم دەهێنێت بۆ بەردەوامی گەشەی کۆرپەلە. لە لایەکی ترەوە، بەرزبوونەوەی
                    هۆرمۆنەکان لەوانەیە پرۆسەی مێتابولیزم خاو بکاتەوە. لە ئەنجامدا جەستە وزەی زیاتر لە هەموو پرۆسەی
                    هەرسکردندا خەرج دەکات و وا لە ژنانی دووگیان دەکات هەست بە ماندوویی و ماندوویی بکەن و ئازاری
                    بەردەوامیان هەبێت. هەرچەندە ماندووبوون و ماندووبوون لە کاتی دووگیانیدا دەبێتە هۆی کەمخوێنی دووەمی
                    کەمی ئاسن و خاڵ بوون لە کاتی دووگیانیدا.
                </p>
            </div>
        </div>


        {{-- box 6 --}}
        <div class="b2 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 12rem">
            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;"> مەنجەڵ، خوێنبەربوونی زێی سووک
                </h1>
                <p class="lg:text-lg italic text-gray-600">
                    خوێنبەربوونی زێ نیشانەیەکی زووی دووگیانییە کە لە سێ مانگی یەکەمدا بەدی دەکرێت. پاش پیتاندن، کۆرپەلە
                    لە دیواری منداڵدان دەچێنرێت و لە کاتی دووگیانیدا خاڵ یان خوێنبەربوونی زێ دروست دەبێت بەبێ ئازاری سک
                    یان گرژبوون. لەگەڵ ئەوەشدا، هەموو ژنانی دووگیان تووشی ئەم خاڵە یان خوێنبەربوونێکی سووک نابن. ئەو
                    کەسانەی کە خوێنبەربوون و گرژبوونی سکیان هەیە لەوانەیە بەبێ ئاگایی دووگیان بن (دووگیانی دەرەکی)، خوێن
                    مەینی خوێن لە منداڵی منداڵەکە دەربچن یان لەبارچوونیان هەبێت. زۆر گرنگە بۆ هەڵسەنگاندنی نیشانەکانی
                    پزیشک بگەڕێیت.
                </p>
            </div>

            <div class="b2-img">
                <img src="assets/preg/b.jpeg" width="350px" alt="">
            </div>
        </div>


        {{-- box 7 --}}
        <div class="b1 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 8rem">
            <div class="b1-img">
                <img src="assets/preg/diz.jpeg" width="350px" alt="">
            </div>

            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;">سەرئێشە و سەرگێژبوون</h1>
                <p class="lg:text-lg italic text-gray-600">
                    سەرئێشە و سەرگێژبوون یەکێکن لە نیشانە سەرەتاییەکانی دووگیانی کە بەهۆی گۆڕانکاری هۆرمۆنی لەش و
                    هەروەها زیادبوونی سووڕی خوێن دروست دەبێت. سەرئێشە و سەرگێژبوون لە کاتی دووگیانیدا بە گوێرەی هەر
                    حاڵەتێکی جەستەیی کەمتر یان زیاتر نایەکسان دەردەکەون. هۆکارە یارمەتیدەرەکان بریتین لە گۆڕانکاری
                    هۆرمۆنەکان، سترێس، کەم خەو یان وازهێنان لە کافاین. ئەوانەی لە کاتی دووگیانیدا سەرئێشەی بەردەوامیان
                    هەیە دەبێت ڕاوێژ بە کارمەندی تەندروستی بکەن بۆ پشکنینی ورد. </p>
            </div>
        </div>


        {{-- box 8 --}}
        <div class="b2 w-full p-6 flex justify-center gap-40 flex-wrap text-right relative" style="margin-top: 12rem">
            <div class="b1-text" style="width: 700px">
                <h1 style="font-size: 25px; font-weight: bolder; margin: .1rem;"> ئاوسان
                </h1>
                <p class="lg:text-lg italic text-gray-600">
                    هەڵئاوسان نیشانەیەکی باوە کە دووگیانان تووشی دەبن و بەهۆی بەرزبوونەوەی هۆرمۆنی پرۆجێسترۆن سەرچاوە
                    دەگرێت و کاریگەری لەسەر کۆئەندامی هەرس هەیە. ئەم گۆڕانکارییە دەبێتە هۆی زیادبوونی گاز لە گەدەدا و
                    دەبێتە هۆی هەڵئاوسان و هەست بە تێربوون. نیشانەکانی بریتین لە پڕبوونی سک، ناڕەحەتی و ئاوسان کە
                    نیشانەکانی پێش سووڕی مانگانە بیردەخاتەوە. سەرەڕای ئەوەش، لەوانەیە زۆر جار گاز تێبپەڕێت. </p>
            </div>

            <div class="b2-img">
                <img src="assets/preg/blo.jpeg" width="350px" alt="">
            </div>
        </div>
    </div>

</body>

</html>
