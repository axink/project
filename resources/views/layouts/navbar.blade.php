<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-white/35 backdrop-blur-md sticky top-0 z-50 shadow-sm border-b border-rose-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-blue-600 hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <span class="sr-only">Open main menu</span>
                        <svg id="menu-icon" class="block h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                        <svg id="close-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
                

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center">
                    <div class="hidden sm:ml-8 sm:flex sm:space-x-6">
                        <a href="{{route ('home')}}" class="rounded-lg bg-blue-300 px-4 py-2 text-sm font-semibold text-blue-900 shadow-sm hover:bg-blue-400 transition">دەستپێک</a>
                        <a href="{{ route ('pregnancystage') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">گەشتا دۆگیانیێ</a>
                        <a href="{{ route ('babynames') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">ناڤێن زارۆکان</a>
                        <a href="{{ route ('mother-notes') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">نڤیسینا تێبینیان</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu (hidden by default) -->
        <div id="mobile-menu" class="hidden sm:hidden px-4 pt-4 pb-3 space-y-1 bg-blue-50">
            <a href="{{route ('home')}}" class="block rounded-lg bg-blue-300 px-4 py-2 text-base font-semibold text-blue-900 shadow-sm hover:bg-blue-400 transition">دەستپێک</a>
            <a href="{{ route ('pregnancystage') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">گەشتا دۆگیانیێ</a>
            <a href="{{ route ('babynames') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">ناڤێن زارۆکان</a>
            <a href="{{ route ('mother-notes') }}" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">نڤیسینا تێبینیان</a>
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
