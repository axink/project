@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <!-- Header with animated baby icon -->
    <div class="text-center mb-10 animate__animated animate__fadeIn">
        <div class="inline-block bg-pink-100 p-4 rounded-full shadow-lg mb-4">
            <span class="text-4xl">👶</span>
        </div>
        <h1 class=" text-2xl text-gray-500 mt-2">هەڵبژارتنا ناڤەکێ تایبەت ۆ کۆردی بۆ زارۆکێ تە </h1>
    </div>

 

    <!-- Girl Names Section -->
    <div class="mb-12 bg-pink-50 rounded-2xl p-6 shadow-inner">
        <div class="flex items-center mb-6">
            <div class="bg-pink-100 p-3 rounded-full mr-4">
                <span class="text-xl text-pink-600">👧</span>
            </div>
            <h2 class="text-2xl font-bold text-pink-600">ناڤێن کچان</h2>
        </div>
        
        <div id="girlNamesContainer" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Kurdish Girl Names -->
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌸</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">ئارین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌺</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">ڤیان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌷</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">لینا</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">💐</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">سارا</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌼</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">یارا</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🏵️</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">نارین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌹</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">روژان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">💮</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">هێڤی</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🦋</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">دلان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🧚</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">پریا</h3>
            </div>

            <!-- More Kurdish Girl Names -->
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌙</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">هێلین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">✨</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">شیلان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🏵️</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">گولان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌺</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">ژیان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌸</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">ژینان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌷</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">سارینا</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">💐</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">دلڤین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌼</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">ئالین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌹</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">شرین</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🦋</span>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">پەری</h3>
            </div>
        </div>
    </div>

    <!-- Boy Names Section -->
    <div class="mb-12 bg-blue-50 rounded-2xl p-6 shadow-inner">
        <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                <span class="text-xl text-blue-600">👦</span>
            </div>
            <h2 class="text-2xl font-bold text-blue-600">ناڤێن کۆران</h2>
        </div>
        
        <div id="boyNamesContainer" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Kurdish Boy Names -->
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">⚔️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">کارزان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🦁</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">شێرکۆ</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌄</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">هێمن</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌠</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">ڕۆستەم</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">⚡</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">زیاد</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🛡️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">سەربەست</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌊</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">ئادەم</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌌</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">ڕابوون</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌳</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">دارا</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🏹</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">دیرزان</h3>
            </div>

            <!-- More Kurdish Boy Names -->
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🗡️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">دلۆڤان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🏔️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">کەمال</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌅</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">روونی</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">⚓</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">دڵشاد</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🦅</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">شەهێن</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌠</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">ستار</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">⚔️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">مەردان</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🏹</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">نەوزاد</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🛡️</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">ئازاد</h3>
            </div>
            
            <div class="baby-card bg-white p-4 rounded-xl shadow hover:shadow-md transition-all text-center">
                <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-2">
                    <span class="text-xl">🌋</span>
                </div>
                <h3 class="text-lg font-semibold text-blue-700">کاوە</h3>
            </div>
        </div>
    </div>

   

<!-- Search Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const babyCards = document.querySelectorAll('.baby-card');

        searchInput.addEventListener('input', function() {
            const keyword = this.value.toLowerCase();
            
            babyCards.forEach(card => {
                const name = card.querySelector('h3').textContent.toLowerCase();
                card.style.display = name.includes(keyword) ? '' : 'none';
            });
        });
    });
</script>

<style>
    .baby-card:hover {
        transform: translateY(-3px);
    }
</style>
@endsection