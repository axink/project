{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>

    <!-- Include Tailwind CSS and Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <style>
        .gradient {
            background: linear-gradient(90deg, #83b7e1 0%, #3f7bc9 100%);
        }
    </style>

    @include('layouts.navbar')
</head>

<body class="leading-normal tracking-normal text-white gradient">
    <!-- Hero Section with Background Image -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('assets/mother.jpg');">
        <div class="w-full h-full bg-white/50">
            <div class="container mx-auto px-12 py-35 flex items-center justify-center">
                <div class="text-center max-w-2xl">
                    <p class="uppercase tracking-widest text-gray-700 mb-2">What business are you?</p>
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 leading-tight mb-4">
                        Main Hero Message to sell yourself!
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-800 mb-8">
                        Sub-hero message, not too long and not too short. Make it just right!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SVG Decorative Section -->
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2,44)" fill="#FFFFFF" fill-rule="nonzero" opacity="0.1">
                    <path d="M0,0 C90.728,0.928 147.913,27.188 291.910,59.912 C387.908,81.728 543.605,89.335 759,82.733
                        C469.336,156.254 216.336,153.668 0,74.973"/>
                    <path d="M100,104.708 C277.413,72.235 426.148,52.525 546.204,45.579 C666.259,38.633 810.525,41.798 979,55.074
                        C931.07,56.123 810.303,74.846 616.7,111.243 C423.097,147.641 250.863,145.463 100,104.708 Z"/>
                </g>
                <g transform="translate(-4,76)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459
                        C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596
                        622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532
                        856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387
                        C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354
                        L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"/>
                </g>
            </g>
        </svg>
    </div>

    <!-- Topics Section -->
    <section class="bg-white text-gray-800 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Explore Helpful Topics</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Pregnancy Stages</h3>
                    <p class="text-sm">Learn about each trimester and how to take care of yourself and your baby.</p>
                </div>
                <div class="bg-pink-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Baby Names</h3>
                    <p class="text-sm">Find beautiful boy and girl names with meanings.</p>
                </div>
                <div class="bg-yellow-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold mb-2">Tips</h3>
                    <p class="text-sm">Discover what to eat for a healthy pregnancy journey.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> دەستپێک</title>

    <!-- Include Tailwind CSS and Google Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <style>
      
        .gradient {
            background: linear-gradient(135deg, #f5f7fa 0%, #f8d7ee 50%, #b8c6db 100%);
        }
        .hero-bg {
            background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),url('assets/mother.jpg');
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
        .heartbeat {
            animation: heartbeat 1.5s ease-in-out infinite both;
        }
        @keyframes heartbeat {
            from {
                transform: scale(1);
            }
            15% {
                transform: scale(1.1);
            }
            30% {
                transform: scale(1);
            }
            45% {
                transform: scale(1.2);
            }
            60% {
                transform: scale(1);
            }
        }
    </style>

    @include('layouts.navbar')
</head>

<body class="leading-normal tracking-normal text-gray-800">
    <!-- Hero Section -->
    <div class="min-h-screen flex items-center justify-center hero-bg bg-cover bg-center bg-no-repeat">
        <div class="w-full h-full">
            <div class="container mx-auto px-4 py-24 flex items-center justify-center animate__animated animate__fadeIn">
                <div class="text-center max-w-3xl">
                    <p class="text-3xl tracking-widest text-pink-600 mb-4 animate__animated animate__fadeInUp">بخێربهێن بۆ  ماڵپەڕێ دۆگیانیێ</p>
                    <h1 class="text-6xl md:text-6xl font-bold text-gray-800 leading-tight mb-6 animate__animated animate__fadeInUp animate__delay-1s">
                        تەندروستیا دایکێ لدەمێ دۆگیانیێ ل ڤێرێ جێگیرترە
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-700 mb-8 animate__animated animate__fadeInUp animate__delay-2s">
                        زانیاریێن پێدڤی و ڕێنمایێن گرنگ بۆ چاڤدێری گەشەکرنا زارۆکێ تە   
                    </p>
                    <a href="{{ route('pregnancystage') }}">
                    <button  class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 animate__animated animate__fadeInUp animate__delay-3s">
                        دەستپێکردن
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2,44)" fill="#FFFFFF" fill-rule="nonzero" opacity="0.1">
                    <path d="M0,0 C90.728,0.928 147.913,27.188 291.910,59.912 C387.908,81.728 543.605,89.335 759,82.733
                        C469.336,156.254 216.336,153.668 0,74.973"/>
                    <path d="M100,104.708 C277.413,72.235 426.148,52.525 546.204,45.579 C666.259,38.633 810.525,41.798 979,55.074
                        C931.07,56.123 810.303,74.846 616.7,111.243 C423.097,147.641 250.863,145.463 100,104.708 Z"/>
                </g>
                <g transform="translate(-4,76)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459
                        C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596
                        622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532
                        856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387
                        C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354
                        L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"/>
                </g>
            </g>
        </svg>
    </div>

    <!-- Topics Section -->
    <section class="bg-white text-gray-800 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center animate__animated animate__fadeIn">بابەتی یارمەتیدەر</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Pregnancy Stages -->
                <div class="bg-blue-50 rounded-2xl p-6 shadow-lg card-hover animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-center">قۆناغەکانی حەمڵەیی</h3>
                    <p class="text-sm text-gray-600 text-center">
                        زانیاری دەربارەی هەر سێ قۆناغی حەمڵەیی و چۆن چاودێری خۆت و منداڵەکەت بکەیت
                    </p>
                  
                </div>
                
                <!-- Baby Names -->
                <div class="bg-pink-50 rounded-2xl p-6 shadow-lg card-hover animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-center">ناوی منداڵان</h3>
                    <p class="text-sm text-gray-600 text-center">
                        ناوە جوانەکان بۆ کور و کچ بە مانای خۆیان و هەڵبژاردنی ناوی گونجاو
                    </p>
                 
                </div>
                
                <!-- Health Tips -->
                <div class="bg-yellow-50 rounded-2xl p-6 shadow-lg card-hover animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-center">ڕێنمایی تەندروستی</h3>
                    <p class="text-sm text-gray-600 text-center">
                        چی بخۆیت بۆ پاراستنی تەندروستی خۆت و منداڵەکەت لە ماوەی حەمڵەییدا
                    </p>
                  
                </div>
            </div>
        </div>
    </section>

    <!-- Heart Monitor Section -->
    <section class="gradient py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 animate__animated animate__fadeInLeft">
                    <h2 class="text-3xl font-bold mb-4">چاودێری دڵی منداڵەکەت</h2>
                    <p class="text-lg mb-6">
                        پشکنینی نرخی دڵی منداڵ لە ناو سکدا بە یارمەتی تەکنەلۆژیای مۆدێرن
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600 mt-1 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>پشکنینی نرخی دڵ لە هەفتەی ٦ی حەمڵەییەوە</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600 mt-1 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>نیشاندانی گۆڕانکارییەکانی نرخی دڵ بە شێوەی گرافیک</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600 mt-1 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>ئاگادارکردنەوە لە کاتی نائاسایی بوونی نرخی دڵ</span>
                        </li>
                    </ul>
              
                </div>
                <div class="md:w-1/2 animate__animated animate__fadeInRight">
                    <img src="https://cdn-icons-png.flaticon.com/512/4359/4359975.png" alt="Heart Monitor" class="w-64 h-64 mx-auto heartbeat">
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        // Simple animation trigger on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate__animated');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(entry.target.dataset.animation);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>