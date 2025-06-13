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
                    بۆچی لەکاتی دووگیانیدا جیاواز نان دەخۆن؟
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6 animate-slide-in">
                    خواردنی جیاواز لە کاتی دووگیانیدا زۆر گرنگە چونکە جەستە پێویستی بە خۆراکی تایبەتی هەیە بۆ پاڵپشتی
                    تەندروستی و گەشەی منداڵەکەت. منداڵێکی گەورە پێویستی بە خۆراکی سەرەکی هەیە وەک ترشی فۆلیک، ئاسن،
                    کالسیۆم و ترشە چەوری ئۆمیگا 3 بۆ گەشەی مێشک، ئەندام و ئێسک. دووگیانی هەروەها پێویستی بە کالۆری زیاد
                    دەکات، بەتایبەتی لە سێ مانگی دووەم و سێیەمدا، بەڵام ئەم کالۆریە زیادانە دەبێت لە خواردنی دەوڵەمەند
                    بە خۆراکەوە بێت نەک کالۆری بەتاڵ. خۆراکی گونجاو یارمەتیدەرە بۆ ڕێگرتن لە کەمیی نەخۆشی، وەک کەمخوێنی
                    بەهۆی کەمی ئاستی ئاسن یان کەموکوڕییەکانی بۆری دەماری بەهۆی کەمی ترشی فۆلیک. سەرەڕای ئەوەش، خۆراکی
                    هاوسەنگ دەتوانێت نیشانەکانی دووگیانی وەک دڵ شێواندن، قەبزی و دڵ سوتان چارەسەر بکات و مەترسی
                    ئاڵۆزییەکانی وەک شەکرەی دووگیانی یان دووگیانی کەم بکاتەوە. گەشەپێدانی خووی خواردنی تەندروست لە کاتی
                    دووگیانیدا نەک تەنها یارمەتی گەشەی خێرای منداڵەکەت دەدات بەڵکو کاریگەری لەسەر تەندروستی درێژخایەنی
                    منداڵ دەبێت و جەستەت ئامادە دەکات بۆ چاکبوونەوەیەکی نەرمتر دوای منداڵبوون.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2">سەوزەی تازە (بەتایبەتی سەوزە گەڵادارەکان)
                        </h3>
                        <p class="text-gray-700">
                            سەوزە بەشێکی گرنگە لە خۆراکی دووگیانی چونکە خۆراکی چڕی و ڕیشاڵیان تێدایە و کاربۆهیدرات و
                            کالۆری کەمترە . سەوزە گەڵادارەکان بەتایبەتی سوودبەخشن چونکە پڕن لە ئاسن، کالسیۆم و ڤیتامین K
                            کە سێ خۆراکی گرنگن بۆ ژنانی دووگیان. سەوزە گەڵادارەکانی وەک سپێناخ، کەلەرم، جەرجیر، ڕۆمان،
                            بۆک چۆی، کەلەرم، خەردەل سەوزە و شێلم بۆ ژەمەکانتان زیاد بکە.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2">میوەی تازە</h3>
                        <p class="text-gray-700">
                            خواردنی میوەی تازە لە ماوەی دووگیانیدا دڵنیایی دەدات لەوەی خۆراکی وەک ڤیتامین K، ڤیتامین C،
                            ڤیتامین A، ڤیتامین E و ڕیشاڵ وەردەگریت. کۆمەڵێک میوەی وەک تووتڕک، تووڕک، تووتڕک، گێلاس،
                            مانگو، پاپایا، قۆخ، ترێ، سێو، هەرمێ، لالەنگی و ئەناناس بخۆ.
                            میوەی تازە دەتوانرێت بۆ نانی بەیانی ماست یان شۆفان زیاد بکرێت، بۆ دروستکردنی شەربەتی میوە و
                            سەوزە بەکار بهێنرێت، بۆ نانی نیوەڕۆ و ئێوارە بۆ زەڵاتە زیاد بکرێت، یان لە نێوان ژەمەکاندا
                            بخورێت. </p>
                    </div>
                </div>


                <!-- Food Item 3 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/egg.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> هێلکەی ئازادی ئەندامی</h3>
                        <p class="text-gray-700">
                            هێلکە، بەتایبەتی زەردێنەی هێلکە، سەرچاوەیەکی زۆر باشە بۆ کۆلین، کە زۆر گرنگە بۆ گەشەی
                            کۆرپەلە. توێژینەوەکان دەریدەخەن ئەو ئافرەتانەی کە ڕێژەی کۆلینیان کەمترە مەترسی منداڵبوونیان
                            زیاترە بە بەراورد لەگەڵ ئەو ئافرەتانەی کە ڕێژەی کۆلین زیاتریان هەیە.
                            هێلکەی ئەندامی چەوری تەندروست، ڤیتامین E، بێتا کارۆتین و یۆدی تێدایە. خواردنی خۆراکی
                            دەوڵەمەند بە یۆد لە کاتی دووگیانیدا زۆر گرنگە چونکە یۆد ڕۆڵی سەرەکی لە گەشەی تەندروستی و
                            گەشەی مێشکی منداڵاندا هەیە.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> ماسی سەلەمونی کێوی </h3>
                        <p class="text-gray-700">
                            خواردنی ترشە چەورییەکانی ئۆمیگا 3 DHA و EPA زۆر گرنگن بۆ گەشەی دەماری و جەستەیی کۆرپەلە.
                            خۆراکی سەلەمون ئەم ئۆمیگا 3 و زۆر خۆراکی گرنگی تری دووگیانی لەخۆ دەگرێت، لەوانە ڤیتامین
                            D، یۆد، کۆلین، ڤیتامین B، سیلینیۆم و پرۆتین.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> گۆشتی ئەندامی </h3>
                        <p class="text-gray-700">
                            ترشە ئەمینی پرۆتین بۆ گەشەی منداڵەکەت زۆر گرنگە، بۆیە خواردنی بڕێکی زۆر پرۆتینی ئەندامی
                            کوالیتی زۆر گرنگە. هەوڵ بدە ڕۆژانە لانی کەم 3 ژەم یان 75 گرام پرۆتین بخۆ.
                            هەندێک لە باشترین بژاردەکان بریتین لە سنگی مریشکی ئەندامی، قەلی ئەندامی و گۆشتی گا. ئەم
                            خۆراکانە L-glutamine و چەندین سوودی دووگیانی L-glutamine هەیە.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> گوێز و تۆو </h3>
                        <p class="text-gray-700">
                            گوێزەکان وەک بادەم پرۆتین، ڕیشاڵ، کالسیۆم، مەگنیسیۆم و ئاسن تێدایە. گوێز ترشە چەوری ئۆمیگا 3
                            و فۆلات و مس تێدایە و گوێزی بەرازیلی سیلینیۆم، فۆسفۆر و ڤیتامین E تێدایە. خواردنی کۆمەڵێک
                            گوێز لە کاتی دووگیانیدا دەبێتە هۆی زیادبوونی خۆراک.
                            تۆوەکان سەرچاوەیەکی باشن بۆ پرۆتین و ڕیشاڵ، کە پاڵپشتی کۆلۆن و کۆئەندامی هەرس دەکەن لە کاتی
                            دووگیانیدا. تۆوی کەتان و تۆوی چیا سەرچاوەیەکی زۆر باشن بۆ ترشە چەورییەکانی ئۆمیگا 3 کە لە
                            ماسیدا نییە. ئەم خۆراکانەی ئۆمیگا 3 سوود بە پێست، قژ و نینۆک لە کاتی دووگیانیدا دەگەیەنن.
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
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> ماست یان کەفیری یۆنانی </h3>
                        <p class="text-gray-700">
                            ماست یۆنانی پرۆبیوتیک، پرۆتین، ڤیتامین D، ترشە چەوری ئۆمیگا 3، کالسیۆم و ڤیتامین K2 ی
                            تێدایە. هەروەها سەرچاوەیەکی باشە بۆ یۆد، کە لە کاتی دووگیانیدا گرنگە بۆ دوورکەوتنەوە لە
                            کەموکوڕی و نەخۆشی دەماری.
                            کەفیر جۆرێکی تری شیرەمەنی کشتوکاڵییە کە بەکتریای باشی تێدایە کە بۆ هەرس کردن و تەندروستی
                            گشتی پێویستن.
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
                            پاقلەی لیما دەوڵەمەندە بە یۆد. گاربانزۆ، گورچیلە و پاقلەی پینتۆ ڕێژەیەکی زۆریان لە فۆلات
                            هەیە. پاقلەی ئاسنی تێدایە، زینک، مس و ڤیتامین K. هەندێک پاقلەی خۆراکی تر بریتین لە فاسۆلیای
                            کانیلینی، پاقلەی ئادزوکی، فاسۆلیای ڕەش و فاسۆلیای ئاناسازی. خواردنی کۆمەڵێک پاقلە لە کاتی
                            دووگیانیدا سوودبەخشە چونکە تێر و پڕ لە خۆراکن.
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
                            نیسک سەرچاوەیەکی زۆر باشە بۆ فۆلات، کە ڕۆڵێکی گرنگ لە گەشەی کۆرپەلەدا دەگێڕێت. توێژینەوەکان
                            دەریدەخەن خواردنی ئەو خۆراکانەی کە فۆلات زۆرن لە کاتی دووگیانیدا مەترسی تووشبوون بە
                            کەموکوڕییەکانی دڵ و کۆئەندامی میز و کەموکوڕییەکانی بۆری دەماری و قڵیشانی لێو کەم دەکاتەوە.
                        </p>
                    </div>

                </div>

                <!-- Food Item 10 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/3">
                        <img width="300px" src="assets/preg/grain.jpeg" alt="Berries"
                            class="rounded-lg shadow-md transform transition-transform hover:scale-105" />

                    </div>
                    <div class="w-full md:w-2/3 md:pl-8 mt-6 md:mt-0 text-right">
                        <h3 class="text-2xl font-semibold text-green-600 mb-2"> دانەوێڵە </h3>
                        <p class="text-gray-700">
                            دانەوێڵە تەواوەکانی وەک شۆفان و کینوا و برنجی قاوەیی و جۆ کاربۆهیدراتی ئاڵۆز دابین دەکەن کە
                            لە کاتی دووگیانیدا پێویستن. هەروەها دانەوێڵە ڤیتامین B تێدایە کە بۆ گەشەی منداڵەکەت گرنگە و
                            کانزاکانی وەک زینک، سیلینیۆم و کرۆم.
                        </p>
                    </div>

                </div>
            </div>
    </section>


</body>

</html>
