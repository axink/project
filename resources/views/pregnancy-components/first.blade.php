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

        .grov {
            width: 400px;
            height: 400px;
            background: #6dd1f8;
            border-radius: 100%;
            position: absolute;
            right: -100px;
            bottom: 0;
            z-index: -1;
        }

        .content-box {
            margin-top: 4rem;
            padding: 2rem;
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #4f46e5;
        }

        .back-button {
            position: fixed;
            top: 2rem;
            left: 1rem;
            z-index: 10000;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            transform: translateX(-5px);
        }
    </style>
    {{-- @include('layouts.navbar') --}}
</head>


<body class="bg-gray-50">
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

    <div class="container mx-auto px-4 py-8">
        <div class="w-full overflow-hidden flex justify-between flex-wrap relative z-10">
            <div class="text-right p-6 max-w-4xl flex-1">
                <h1
                    class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 animate-fade-in">
                    نیشانێت دەستپێکێ
                </h1>
                <p class="text-gray-800 text-xl mt-4 leading-relaxed">
                    نیشانێت دەستپێکێ یێن دووگیانیێ، ژنێن دووگیان د ماوەێ ١-٢ حەفتیێن دەستپێکێ دا ڤان نیشانا د بینن. ژ
                    وان ژی نازکیا سینگی، ماندیبین ۆ نەخۆشیێت سپێدەهیان، ب شێوەکێ اسای بلنبوونا ئاستێ هۆرموونێت دووگیانیێ
                    ڤان نیشانا درووست دکەت. چێدبیت هێشتا نیشان هەبن وەک زێدەبوونا دەرچوونا زێ، گەلەک میزتن، گۆهۆرینا
                    مەزاجی. نیشانێت دووگیانیێ ژ کەسەکی بو ئێکێ دی د هێنە گۆهۆرین، هندەک تووشی نەخۆشیێت سپێدەهیان دبن
                    ددەمەکی دا کۆ هندەکێت دی چ گۆهۆرینێت جەستەی نابینن. ئەو کەسێن کو ڤان نیشانا د بینن پێدڤییە هەر زیکا
                    سەرەدانا نووژداری بکەن داکو د بەرهەڤ بن بۆ هەر گۆهۆرینەکێ و هەروەسا پتر بزانن سەبارەت ب ڤێ گەشتێ.
                </p>
            </div>
            <div class="flex justify-center items-center mt-6 flex-shrink-0 relative">
                <img src="assets/preg/s-preg.png" class="w-90 lg:w-95 animate-slide-in" style="z-index: 100"
                    alt="">
                <div class="grov"></div>
            </div>
        </div>

        <div class="flex justify-center items-center my-12">
            <img src="assets/preg/baby1.jpeg" class="rounded-lg shadow-xl w-64 md:w-80" alt="">
        </div>


        {{-- box 1 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-img order-2 md:order-1">
                    <img src="assets/preg/perCal.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>

                <div class="b1-text order-1 md:order-2 max-w-2xl">
                    <h1 class="section-title">ژ دەستدانا سۆرا هەیڤانە</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        ژ دەستدانا سوورا هەیڤانە ئێکە ژ نیشانێت دەستپێکی بو ئەوان کەسان یێت ب دووگیان دکەڤن ئەڤە دەمەکی
                        رووددەت کو پیتاندن د ناڤبەرا هێکێ و سپێرمێ دا تەمام دبت و جەستە دەست ب بەرهەم ئینانا هورمونێ HCG
                        دکەت، هورمونەکە کو د زاروکاندا د هێتە بەرهەم ئينان ٨-١٠ رووژان پشتی زکپربوونێ داکو کورپەلە گەشێ
                        بکەت. د ئەنجام دا جەستەێ هەلکەدانێ د راوەستت و د ئەنجام دا بو ماوەکێ کورت زڤروکا هەیڤانە نامینت.
                        هەرچاوابت، ژ دەستد دانا زڤروڤا هەیڤانە چێدبیت ژ بەر سترێس و نە هەڤسەنگییا هورمونا بت، گەلەک رجێم
                        کرن. ئەو کەسێن ڤان دەمادا گوومانێ د بەن کو ب دووگیانن پێدڤییە ئەو رابن ب ئەنجام دانا تێستا
                        دووگیانیێ
                        داکو پشتراستبن.
                    </p>
                </div>
            </div>
        </div>


        {{-- box 2 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-text max-w-2xl">
                    <h1 class="section-title">نەخوشیێت سپێدەهییان و دل ڕابوون</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        نەخوشیێت سپێدەهییان ئێکە ژ نیشانێت سەرەتای کو ٢-٨ ‌حەفتییان پشتی زکپریێ روویددان و ژ نیشانێت
                        گەلەک
                        بەربەلاڤە د ناڤ ژنێت دووگیان دا. نەخووشیێت سپێدەهییان وەکی دل رابوون بێ زەوقی و سەرئێش و
                        گێژبوون،
                        پتر ئەڤ نیشانێت هە ل سپێدەهییان دیار دبن. ئەڤ نیشانێت هە د بیت ل حەفتییا ١٢ یا دووگییانیێ نەمینن
                        و ل
                        حەفتییا ٣٢ ژ بەری ژ دایک بوونێ دووبارە دەدکەڤنڤە. ئەڤ نیشانێت هە د بیتە ئەگەرێ تێکچوون و دل
                        رابوونێ
                        کوو دبنە ئەگەرێ هشکبوونێ، و ماندیبوونەکا زێدە و ژ هشچوونێ. ئەڤ کەسێت ڤان نیشانا د بینن پێدڤییە
                        هەر
                        زیکا سەرەدانا نوژداری بکەن داکو نوژدار ب کارێ پێدڤی رابت. د گەل هندێ ژیدا بتنێ هندەک ژنێت کێم ژ
                        ژنێت
                        دووگیان چ نیشانا نابینن، ئەڤە ژی ل دیڤ بارێ جەستەی یێ هەر ژنەکێ د مینت.
                    </p>
                </div>

                <div class="b2-img">
                    <img src="assets/preg/vomit.jpeg" class="rounded-lg shadow-md w-64 md:w-96" alt="">
                </div>
            </div>
        </div>


        {{-- box 3 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-img order-2 md:order-1">
                    <img src="assets/preg/bCan.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>

                <div class="b1-text order-1 md:order-2 max-w-2xl">
                    <h1 class="section-title">نازکییا سینگی یان گۆهۆرینا سینگی مەمک</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        نازکییا سینگی یان گۆهۆرینا سینگی ژ نیشانێت دەستپێکینە کو ٢-٣ روژ پشتی زکپریێ دەردکەڤن. کو سینگ
                        مەزندبت، پیستێ دەورووبەرێ بازنا سینگی رەنگێ وی تاریتر لێ د هێت. پیستێ سینگی ب هێز تر لێ د هێت،
                        دەمارێت خوینێ زێدەتر د هێن دیتن. ب شێوەک ئاسای سینگ نازک دبت. ئەڤ نیشانێت هە هێدی هێدی کێم دبن
                        پشتی
                        جەستە هێدی هێدی خوە د گونجینت دگەل چالاکیێت هورمونیێت دووگیانیێ.
                    </p>
                </div>
            </div>
        </div>


        {{-- box 4 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-text max-w-2xl">
                    <h1 class="section-title"> گەلەک میزتن</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        گەلەک میزتن ئێکە ژ نیشانێن دەستپێکی کو روویددەن پشتی نەمانا زڤروکا هەیڤانه دیاردبیتن. د دەمێ
                        دووگیانیێ جەسته خوین و شلەمەنییا زێدەتر بەرهەم د ئینت داکو کورپەلە گەشە بکەت. گولچیسک زێدەتر
                        کاردکن
                        بو پاڵاوتنا بڕا زێدەتر یا خوینێ بو دەردانا پاشماوەیان بو ناڤ میزێ. میز رەنگێ وێ توختر دیاردبیت.
                        وەک
                        پرتەقالییەکی یان قەهواییەکی. د گەل مەزنبوونا کورپەلەی مالبچویک مەزنتر لێ دهێت و زێدەتر فشارێ د
                        ئێختە
                        سەر میزلدانکێ ئەڤە ژی د بته ئەگەرێ گەلەک میزتنێ ب تایبەت ل شەڤێ.
                    </p>
                </div>

                <div class="b2-img">
                    <img src="assets/preg/FreUn.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>
            </div>
        </div>


        {{-- box 5 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-img order-2 md:order-1">
                    <img src="assets/preg/fatig.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>

                <div class="b1-text order-1 md:order-2 max-w-2xl">
                    <h1 class="section-title">مانديبوون</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        مانديبوون ز نيشانێت دەستپێکینه ددەمێ زکپڕیێ دا، ددەمێ دووگیانیێ دا جەسته ڕێژەکا بلند یا
                        پروجسترونی
                        بەرهەم د ئینت بو بەردەوامییا گەشا کورپەلەی. ژ لایەکێ دیڤەبلند بوونا هورموونان چێدبیت پروسا
                        میتابولیزم هێدی بکەت، د ئەنجامدا جەسته زێدەتر هئزێ و تاقەتێ خەرج دکەت د پروسا هەرسکرنێدا. و ئەڤە
                        د
                        بیته ئەگەر کو ژن پتد هەست ب ماندیبوونێ بکەت و بەردەوام ئازار هەبن.
                    </p>
                </div>
            </div>
        </div>


        {{-- box 6 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-text max-w-2xl">
                    <h1 class="section-title"> خوینبەربوونا زێ</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        خوینبەربوونا زێ نیشانەکا زووی یا دووگییانیێ یە کو ل ٣ هەیڤێت دەستپێکی دا دیار دبیت. پشتی
                        پیتاندنێ،
                        کورپەلە د دیوارێ مالبچوویکی دا دهێتە چاندن و ددەمێ دووگیانیێ دا خال یان خوینبەربوونا زێ روویددەت
                        بێ
                        ئازارا زکی یان گرژبوونێ. دگەل ڤێ چەندێ ژی هەمی ژن توشی ئەڤێ خوینبەربوونا هە نابن. ئەو کەسێت کو
                        خوینبەربوون و گرژبوون هەی بەلکی بەلکی ب بێ ئاگەهی دوگیان بن(دووگیانیا دەرەکی)، زوور یا گرنگە
                        سەرەدانا نوژداری بهێت کرن.
                    </p>
                </div>

                <div class="b2-img">
                    <img src="assets/preg/b.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>
            </div>
        </div>


        {{-- box 7 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-img order-2 md:order-1">
                    <img src="assets/preg/diz.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>

                <div class="b1-text order-1 md:order-2 max-w-2xl">
                    <h1 class="section-title">سەرئێشی و سەرگێژبوون</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        سەرئێشی و سەرگێژبوون ئەڤە ژی ژ نیشانێت دەستپێکینە یێن دووگیانیێ کو ب ئەگەرێ گوهورینا هورمەنێت
                        لەشی و
                        هەروەسا زێدەبوونا سورا خوینێ درووست د بیت. سەرئێشی و سەرگێژبوون د دەمێ دووگیانیێ دا ل دیف هەر
                        حالەتەکێ جەستەی زێدەتر یان کێمتر نەیەکسان دەردکەڤن. ژ هوکارێت وێ ئەوژی گوهورینا هورمونان، سترێس،
                        کێم
                        خەوی یان دەستبەردان ژ کافاینی. ئەو ژنێت کو ئەڤ سەرئێشیە بەردەوام هەی پێدڤی سەرەدانا نەژداری بکەن
                        بو
                        پتر پشکنینا و پشتراستیێ ژ بارێ دووگیانیەکا ساخلەم.
                    </p>
                </div>
            </div>
        </div>


        {{-- box 8 --}}
        <div class="content-box">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 text-right">
                <div class="b1-text max-w-2xl">
                    <h1 class="section-title"> ئاوسان</h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        هەلئاوسان نیشانەیەکا بەربەلاڤە کو ژنێت دووگیان تووش دبن ژ ئەگەرێ بلندبوونا هورمونێ پرۆجسترونی کو
                        کاریگەریێ لسەر کوئەندامێ هەرسێ دکەت. ئەڤ گوهورینکاریێت هەنێ د بنە ئەگەرێ زێدەبوونا گازێ د گەدەی
                        دا و
                        دبیتە ئەگەرێ هەلئاوسانێ و هەست ب تێربوونێ. ژ نیشانێت وێ ئەوژی پربوونا سکی، نە ئارامی و ئاوسان.
                    </p>
                </div>

                <div class="b2-img">
                    <img src="assets/preg/blo.jpeg" class="rounded-lg shadow-md w-64 md:w-80" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>
