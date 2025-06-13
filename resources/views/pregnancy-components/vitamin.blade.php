<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitamins for Mothers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</head>
<body class="bg-gray-100 font-sans leading-relaxed">

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

    <div class="max-w-6xl mx-auto p-8">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-pink-500">گرنگی ڤیتامین و خۆراکی بۆ ژنێن دووگیان
            </h1>
            <p class="mt-4 text-lg text-gray-600">ڕێبەرێک بۆ ڤیتامین و کانزایێن پێتڤی بۆ دووگیانیەکا ساخلەم.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Vitamin List Item 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/preg/folic_acid.webp') }}" alt="Folic Acid" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Folic Acid (Vitamin B9)  فۆلید ئەسید</h3>
                <p class="text-gray-600 mt-2">ڕێگریێ ل کێماسیێن بۆریا دەمارى دکەت و پاڵپشتیا گەشەکرن و پێشکەفتنا خانەیان دکەت.</p>
            </div>

            <!-- Vitamin List Item 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/preg/vitamin c.png') }}" alt="Vitamin D" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">(Vitamin D) ڤیتامین د </h3>
                <p class="text-gray-600 mt-2">پاڵپشتیا ساخلەمیا هەستیان و وەرگرتنا کالسیۆمێ دکەت، یارمەتیا ڕێگرتنا شەکرێ دووگیانیێ ددەت.</p>
            </div>

            <!-- Vitamin List Item 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('assets/preg/iron.jpg') }}" alt="Iron" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Iron ئیرون</h3>
                <p class="text-gray-600 mt-2">خوینەرا کەمیێ پێشگیری دکەت ب ڕێکا هاریکاریکرنا بەرهەمهێنانا خروکێن خوینێ سۆر، هاریکاریا چوونا ئۆکسجینێ دکەت بۆ زارۆکی.</p>
            </div>

            <!-- Vitamin List Item 4 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="700">
                <img src="{{ asset('assets/preg/calcium-foods.jpg') }}" alt="Calcium" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Calcium کالسیوم</h3>
                <p class="text-gray-600 mt-2">بۆ گەشەکردنا ئێسک و ددانێت زارۆکی و پاراستنا تەندروستییا ئێسکێن دایکێ گەلەک گرنگە.</p>
            </div>

            <!-- Vitamin List Item 5 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="900">
                <img src="{{ asset('assets/preg/Omega-3.jpeg') }}" alt="Omega-3" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Omega-3 Fatty Acids  ئومێگا ٣</h3>
                <p class="text-gray-600 mt-2">گرنگە بۆ مەژی چاڤان.</p>
            </div>

            <!-- Vitamin List Item 6 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="1100">
                <img src="{{ asset('assets/preg/b12.jpg') }}" alt="Vitamin B12" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Vitamin B12 ڤیتامین ١٢</h3>
                <p class="text-gray-600 mt-2">پشتگیری لە کارکردنا دەماران و بەرهەمهێنانا خانەیێن سۆر یێن خوینێ دکەت.</p>
            </div>

            <!-- Vitamin List Item 7 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="1300">
                <img src="{{ asset('assets/preg/vitamin c.png') }}" alt="Vitamin C" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Vitamin C  ڤیتامین س</h3>
                <p class="text-gray-600 mt-2">بەهێزکردنا سیستەمێ بەرگریێ، هاریکاریا هەڵمژینا ئاسن دکەت، و پشتگیریا گەشەکردنا شانان دکەت.</p>
            </div>

            <!-- Vitamin List Item 8 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="1500">
                <img src="{{ asset('assets/preg/idonie.jpg') }}" alt="Iodine" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Iodine ئیدونیا</h3>
                <p class="text-gray-600 mt-2">گەلەک گرنگە بۆ  گەشەیا مێشکی زارۆکی.</p>
            </div>

            <!-- Vitamin List Item 9 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="1700">
                <img src="{{ asset('assets/preg/magnesium.jpg') }}" alt="Magnesium" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Magnesium مەگنیسیوم</h3>
                <p class="text-gray-600 mt-2"> هاریکاریا کاری ماسولکەیان و دەماران ددەت، شەکرا خوینێ ڕێکدێخت و پاڵپشتی فشارا خوێنی تەندروست دکەت.</p>
            </div>

            <!-- Vitamin List Item 10 -->
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center" data-aos="fade-up" data-aos-delay="1000">
                <img src="{{ asset('assets/preg/zinc.jpg') }}" alt="Zinc" class="w-40 h-40 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-gray-800 text-center">Zinc زینگ (ئاسن)</h3>
                <p class="text-gray-600 mt-2">گرنگە بۆ کارێ بەرگری، دابەشبوونا خانەیان و گەشەیا کۆرپەلەی.</p>
            </div>
        </div>
    </div>



    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 500, // Animation duration
            once: true, // Only animate once when scrolling into view
        });
    </script>



    <!-- Fixed Vitamin Info Section with Warning Icon -->
    <div class="fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-white p-4 rounded-lg shadow-lg z-50 max-w-3xl">
        <div class="flex items-center space-x-4">
            <!-- Warning Icon -->
            <i class="fas fa-exclamation-triangle text-yellow-500 text-3xl"></i>
            <!-- Text Content -->
            <h1 class="text-lg font-semibold text-gray-800 leading-relaxed">
                ئەگەر گەلەک پێدڤی ڤیتامینان بۆی پێدڤییە سەرەدانادکتۆرا بسپۆر بکەی
            </h1>
        </div>
    </div>


</body>
</html>
