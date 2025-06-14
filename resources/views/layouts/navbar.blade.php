<!DOCTYPE html>
<html lang="ku" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ژبۆ دایکان </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Flip icons for RTL */
        .rtl-flip {
            transform: scaleX(-1);
        }

        .nav-gradient {
            background: linear-gradient(90deg, #ebf8ff 0%, #ebf4ff 100%);
        }
    </style>
</head>
<body class="text-right">
    <nav class="nav-gradient backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-blue-200">  
              <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Mobile menu button (left side) -->
                <div class="flex items-center sm:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-pink-600 hover:bg-pink-100 focus:outline-none focus:ring-2 focus:ring-pink-200">
                        <span class="sr-only">Open main menu</span>
                        <svg id="menu-icon" class="block h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="3" y1="6" x2="21" y2="6"/>
                            <line x1="3" y1="12" x2="21" y2="12"/>
                            <line x1="3" y1="18" x2="21" y2="18"/>
                        </svg>
                        <svg id="close-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Menu (right side) -->
                <div class="hidden sm:flex sm:space-x-4 sm:space-x-reverse items-center ml-4"> <!-- ml-4 for spacing -->
                    <a href="{{route ('home')}}" class="rounded-lg bg-pink-200 px-4 py-2 text-sm font-semibold text-pink-900 shadow-sm hover:bg-pink-300 transition flex items-center">
                        <svg class="w-4 h-4 ml-1 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        دەستپێک
                    </a>
                    <a href="{{ route ('pregnancystage') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                        <svg class="w-4 h-4 ml-1 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        گەشتا دۆگیانیێ
                    </a>
                    <a href="{{ route ('babynames') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                        <svg class="w-4 h-4 ml-1 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        ناڤێن زارۆکان
                    </a>
                    <a href="{{ route ('mother-notes') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                        <svg class="w-4 h-4 ml-1 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        نڤیسینا تێبینیان
                    </a>
                    
                
                </div>

                <!-- Logo/Brand (left side) -->
                <a href="{{ route('home') }}">
                <div class="flex items-center mr-auto"> <!-- mr-auto pushes it to the left -->
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a8 8 0 018 8c0 4.42-3.58 8-8 8s-8-3.58-8-8 3.58-8 8-8zm0 2a6 6 0 00-6 6c0 3.31 2.69 6 6 6s6-2.69 6-6-2.69-6-6-6zm-1 3h2v6h-2zm0 8h2v2h-2z"/>
                        </svg>

                        <span class="ml-2 text-lg font-bold text-pink-800 hidden md:block"> ژ بۆ دایکان</span>
                    </div>
                </div>
            </a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden sm:hidden px-4 pt-4 pb-3 space-y-2 bg-pink-50">
            <a href="{{route ('home')}}" class="block rounded-lg bg-pink-200 px-4 py-2 text-base font-semibold text-pink-900 shadow-sm hover:bg-pink-300 transition flex items-center">
                <svg class="w-5 h-5 ml-2 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                دەستپێک
            </a>
            <a href="{{ route ('pregnancystage') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                <svg class="w-5 h-5 ml-2 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                گەشتا دۆگیانیێ
            </a>
            <a href="{{ route ('babynames') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                <svg class="w-5 h-5 ml-2 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                ناڤێن زارۆکان
            </a>
            <a href="{{ route ('mother-notes') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-pink-800 hover:bg-pink-100 transition flex items-center">
                <svg class="w-5 h-5 ml-2 rtl-flip" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                نڤیسینا تێبینیان
            </a>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuButton.addEventListener('click', function() {
                const isOpen = mobileMenu.classList.contains('hidden');

                if (isOpen) {
                    mobileMenu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when clicking on a link (for single page applications)
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        });
    </script>
</body>
</html>