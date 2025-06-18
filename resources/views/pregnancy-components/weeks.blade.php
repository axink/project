<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Pregnancy Week Info</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Custom Animation -->
  <style>
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-up {
      animation: fadeInUp 1s ease-out;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-pink-50 via-blue-50 to-purple-100 min-h-screen font-sans">

  <!-- Back Button -->
  <div class="sticky top-6 left-6 z-50 ml-4">
    <a href="{{ route('pregnancystage') }}">
      <button class="flex items-center bg-blue-500 text-white px-5 py-2 rounded-full shadow-md hover:bg-blue-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        زڤرین
      </button>
    </a>
  </div>

  <!-- Header -->
  <header class="text-center py-10">
    <h1 class="text-4xl font-bold text-purple-700">هەفتانە گەشەی منداڵەکەت</h1>
    <p class="mt-3 text-lg text-gray-600 max-w-xl mx-auto">
      ب حەفتی پێداچوونا گەشا زارۆکێ خۆ بکە، ژ دووگیانیێ هەتا ژدایکبوونێ.
    </p>
  </header>

  <!-- Weekly Info Cards -->
  <section class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-12">
    @foreach ($weeksInfo as $week)
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-6 text-center animate-fade-in-up">
        <div class="mb-4">
          <img src="{{ $week['img'] }}" alt="Week image" class="w-40 h-40 mx-auto object-cover rounded-full shadow-md hover:scale-105 transform transition duration-300">
        </div>

        <h2 class="text-xl font-semibold text-purple-700 mb-2">{{ $week['num'] }}</h2>
        <p class="text-gray-600 text-sm mb-4">{{ $week['description'] }}</p>

        <div class="text-purple-400 animate-bounce">
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
