<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise for Mothers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <!-- Tailwind Animations -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>

<body class="bg-gray-100">

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

    <header class="py-3 shadow-md">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold">پتر بزانە دەربارەی گەشتا خۆ</h1>
            <p class="mt-2 text-lg"> بحەفتی ب حەفتی پێداچوونا گەشا زارۆکێ خۆ بکە،ژ دووگیانیێ  هەتا ژدایکبوونێ
                .</p>
        </div>
    </header>

    <section>
        @foreach ($weeksInfo as $week)
            <div class="text-center p-6 max-w-md mx-auto animate-fade-in">
                <div class="relative w-70 h-70 mx-auto mb-6">
                    <img src="{{$week['img']}}"
                        alt="Fertilization illustration"
                        class="rounded-full shadow-md transform hover:scale-105 transition-transform duration-500">
                </div>

                <h2 class="text-2xl font-semibold mb-4">{{$week['num']}}</h2>

                <p class="text-gray-600 leading-relaxed mb-6">
                    {{$week['description']}}
                </p>

                <div class="text-gray-500 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        @endforeach
    </section>

</body>

</html>
