<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Good Sleeping for Mothers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans leading-relaxed">
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

    <header class="bg-pink-400 text-white py-3 shadow-md">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold">خەوەکا باشتر ل دەمێ دۆگیانیێ</h1>
            <p class="mt-2 text-lg">
                هەیڤ ب هەیف شیرەتێن خەوەکا تەندروستر بۆ دایکان
            </p>
        </div>
    </header>

    <div class="max-w-3xl mx-auto p-4 text-center">
        <p class="text-gray-700 text-lg leading-relaxed">
            Good sleep is essential for overall well-being, especially for pregnant women.
            Establishing a consistent sleep routine can help improve the quality of rest.
            It's recommended to sleep on the left side to increase blood flow to the baby
            and reduce pressure on the organs. Avoiding heavy meals, caffeine, and sugary
            drinks close to bedtime can also enhance sleep. Creating a calming sleep environment,
            such as dimming the lights and using comfortable pillows, can promote relaxation.
            Regular physical activity during the day, like light walking, may also contribute
            to better sleep at night. Prioritizing these habits can help ensure a restful night
            for both mother and baby.
            <i class="fas fa-moon text-3xl text-blue-500"></i>
        </p>
    </div>



    {{-- image --}}
    <div class="relative bg-gray-300 rounded-lg p-4 m-12 shadow-lg overflow-hidden max-w-4xl h-104 mx-auto">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-50 z-10"></div>

        <!-- Text Content -->
        <div class="absolute bottom-0 p-4 text-white z-20">
            <h2 class="text-lg font-semibold">گرنگیا دایکێ</h2>
            <p class="text-sm">پشتگیریکرنا دایکێ ب حەژێکرن ۆ ڤیان</p>
        </div>

        <!-- Image -->
        <img src="assets/preg/m.webp" alt="Mothers" class="w-full h-full object-cover rounded-lg z-0">
    </div>





    <main class="container mx-auto px-4 py-10">
        <!-- First Trimester -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-pink-500 mb-4 flex items-center">
                <i class="fas fa-bed mr-3 text-xl"></i>
               هەیڤێن دەستپێکێ (هەیڤا 1–3)
            </h2>

            <ul class="space-y-4">
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Prioritize Comfort</h3>
                    <p class="mt-2 text-gray-700">Start sleeping on your side early. This helps form a habit that will
                        benefit you later in pregnancy. Use a soft pillow for head and neck support.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Manage Nausea</h3>
                    <p class="mt-2 text-gray-700">Keep snacks by your bed (e.g., crackers) to help with morning sickness
                        that might disturb your sleep. Avoid strong smells or spicy foods before bedtime.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Take Naps if Needed</h3>
                    <p class="mt-2 text-gray-700">Increased fatigue is normal. Short daytime naps (20–30 minutes) can
                        help.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Stay Hydrated but Plan</h3>
                    <p class="mt-2 text-gray-700">Drink fluids throughout the day but reduce intake 1–2 hours before bed
                        to avoid frequent bathroom trips.</p>
                </li>
            </ul>
        </section>



        <!-- Second Trimester -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-pink-500 mb-4 flex items-center">
                <i class="fas fa-heartbeat mr-3 text-xl"></i>
                هەیڤێن ناڤەند (هەیڤا 4–6)
            </h2>
            <ul class="space-y-4">
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Switch to Side Sleeping</h3>
                    <p class="mt-2 text-gray-700">Sleep on your left side to improve blood flow to your baby and avoid
                        putting pressure on the inferior vena cava. Use a pregnancy pillow to support your belly and
                        legs.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Address Back Pain</h3>
                    <p class="mt-2 text-gray-700">Place a small pillow under your lower back for support if needed.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Prevent Heartburn</h3>
                    <p class="mt-2 text-gray-700">Sleep with your upper body slightly elevated by using an extra pillow.
                        Avoid eating heavy meals or acidic foods 2–3 hours before bed.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Stay Active During the Day</h3>
                    <p class="mt-2 text-gray-700">Regular light exercises like walking can help regulate your sleep.</p>
                </li>
            </ul>
        </section>

        <!-- Third Trimester -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-pink-500 mb-4 flex items-center">
                <i class="fas fa-baby mr-3 text-xl"></i>
                هەیڤێن دۆماهیێ (هەیڤا 7–9)
            </h2>
            <ul class="space-y-4">
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Enhance Support</h3>
                    <p class="mt-2 text-gray-700">Use a full-length pregnancy pillow to support your back, belly, and
                        hips. Sleep on your left side as much as possible.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Reduce Leg Cramps</h3>
                    <p class="mt-2 text-gray-700">Stretch your legs gently before bedtime. Stay hydrated and ensure you
                        get enough calcium and magnesium in your diet.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Combat Frequent Bathroom Trips</h3>
                    <p class="mt-2 text-gray-700">Limit fluid intake closer to bedtime but stay hydrated during the day.
                    </p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Manage Swelling</h3>
                    <p class="mt-2 text-gray-700">Elevate your feet during the day to reduce swelling and improve
                        circulation.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Overcome Anxiety and Stress</h3>
                    <p class="mt-2 text-gray-700">Practice relaxation techniques such as deep breathing, meditation, or
                        light prenatal yoga before bed.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Avoid Sleeping on Your Back</h3>
                    <p class="mt-2 text-gray-700">Sleeping on your back can compress major blood vessels, leading to
                        reduced circulation. Use pillows to prevent rolling onto your back.</p>
                </li>
            </ul>
        </section>

        <!-- Final Weeks -->
        <section>
            <h2 class="text-2xl font-bold text-pink-500 mb-4 flex items-center">
                <i class="fas fa-clock mr-3 text-xl"></i>
                هەیڤا دۆماهیێ (Month 9)
            </h2>
            <ul class="space-y-4">
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Find the Right Position</h3>
                    <p class="mt-2 text-gray-700">Use pillows creatively to prop yourself into a semi-reclined position
                        if side sleeping becomes too uncomfortable.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Prepare for Night Wakings</h3>
                    <p class="mt-2 text-gray-700">Accept that your body is adjusting for nighttime feedings. Rest when
                        you can during the day.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Prevent Shortness of Breath</h3>
                    <p class="mt-2 text-gray-700">Sleep propped up with extra pillows if you experience difficulty
                        breathing.</p>
                </li>
                <li class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold">Focus on Relaxation</h3>
                    <p class="mt-2 text-gray-700">Listen to calming music, take a warm bath, or practice mindfulness to
                        ease into sleep.</p>
                </li>
            </ul>
        </section>
    </main>

</body>

</html>
