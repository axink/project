@extends('layouts.app')

@section('title', 'Heart Monitor - Pregnancy')

@section('content')

<a href="{{ route('pregnancystage') }}" style="position: sticky; top: 2rem; left: 1rem; z-index: 10000;">
    <button class="bg-blue-500 text-white px-6 py-3 m-5 rounded-full shadow-lg hover:shadow-xl transition-transform transform hover:bg-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
</a>
<br>

<!-- Hero Section -->
<section class="text-center py-12 bg-gradient-to-r from-rose-100 via-pink-50 to-rose-50">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-pink-700 mb-3">💓 چاندنی دڵی منداڵەکە</h1>
        <p class="text-gray-700 text-sm md:text-base">
            زانیاریە گرنگەکان لەسەر نرخی دڵی منداڵ، کەی دەستی بەتێقڵ دەکات و چۆن دەچێت پشکنین
        </p>
        <div class="mt-4 flex justify-center">
            <div class="animate-pulse text-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="max-w-4xl mx-auto px-4 py-10 space-y-8">

    <!-- Heartbeat Timeline -->
    <div class="bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-xl font-semibold text-rose-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
            </svg>
            ⏱️ گەشەکردنی دڵی منداڵ لە ماوەی حەمڵەیدا
        </h2>
        
        <div class="relative mt-6">
            <!-- Timeline -->
            <div class="border-l-2 border-pink-300 absolute h-full left-4 top-0"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-8">
                <!-- Week 5-6 -->
                <div class="relative pl-10">
                    <div class="absolute w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center -left-4" style="top: 2px;">
                        <span class="text-white text-xs font-bold">5-6</span>
                    </div>
                    <div class="bg-pink-50 rounded-lg p-4">
                        <h4 class="font-medium text-pink-800">هەفتەی ٥-٦</h4>
                        <p class="text-gray-600 text-sm mt-1">دڵ دەست بە پەرەسەندن دەکات، بەڵام هێشتا ناتوانرێت بیستری</p>
                    </div>
                </div>
                
                <!-- Week 6 -->
                <div class="relative pl-10">
                    <div class="absolute w-8 h-8 bg-pink-600 rounded-full flex items-center justify-center -left-4" style="top: 2px;">
                        <span class="text-white text-xs font-bold">6</span>
                    </div>
                    <div class="bg-pink-50 rounded-lg p-4">
                        <h4 class="font-medium text-pink-800">هەفتەی ٦</h4>
                        <p class="text-gray-600 text-sm mt-1">یەکەم تێقڵەکانی دڵ دەستپێدەکات (١٠٠-١٢٠ BPM)</p>
                    </div>
                </div>
                
                <!-- Week 9 -->
                <div class="relative pl-10">
                    <div class="absolute w-8 h-8 bg-rose-600 rounded-full flex items-center justify-center -left-4" style="top: 2px;">
                        <span class="text-white text-xs font-bold">9</span>
                    </div>
                    <div class="bg-pink-50 rounded-lg p-4">
                        <h4 class="font-medium text-pink-800">هەفتەی ٩</h4>
                        <p class="text-gray-600 text-sm mt-1">نرخی دڵ بەرز دەبێتەوە (١٤٠-١٧٠ BPM)</p>
                    </div>
                </div>
                
                <!-- Week 12 -->
                <div class="relative pl-10">
                    <div class="absolute w-8 h-8 bg-rose-700 rounded-full flex items-center justify-center -left-4" style="top: 2px;">
                        <span class="text-white text-xs font-bold">12</span>
                    </div>
                    <div class="bg-pink-50 rounded-lg p-4">
                        <h4 class="font-medium text-pink-800">هەفتەی ١٢</h4>
                        <p class="text-gray-600 text-sm mt-1">نرخی دڵ دەگاتە ئاستێکی جێگیر (١١٠-١٦٠ BPM)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monitoring Methods -->
    <div class="bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-xl font-semibold text-rose-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
            </svg>
            🧑‍⚕️ چۆن دڵی منداڵ پشکنین دەکرێت؟
        </h2>
        
        <div class="grid md:grid-cols-3 gap-4 mt-4">
            <!-- Ultrasound -->
            <div class="bg-white border border-pink-100 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="font-medium text-pink-800">ئەلتراساوند</h3>
                <p class="text-gray-600 text-xs mt-1">بینینی دڵ لە هەفتەی ٦ی حەمڵەوە</p>
            </div>
            
            <!-- Doppler -->
            <div class="bg-white border border-pink-100 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="font-medium text-pink-800">دۆپلەر</h3>
                <p class="text-gray-600 text-xs mt-1">بیستنەوەی دەنگی دڵ لە هەفتەی ١٢ی حەمڵەوە</p>
            </div>
            
            <!-- Fetoscope -->
            <div class="bg-white border border-pink-100 rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                <div class="bg-pink-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                </div>
                <h3 class="font-medium text-pink-800">فیتۆسکۆپ</h3>
                <p class="text-gray-600 text-xs mt-1">بیستنەوەی دەنگی دڵ لە هەفتەی ٢٠ی حەمڵەوە</p>
            </div>
        </div>
    </div>

    <!-- Heart Rate Information -->
    <div class="bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-xl font-semibold text-rose-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            📊 نیشانی نرخی دڵی منداڵ
        </h2>
        
        <div class="flex flex-col md:flex-row gap-6 items-center">
            <div class="flex-1">
                <img src="https://media.istockphoto.com/id/901046184/vector/baby-on-heart-concept-linear-design-vector-heart-beat-graph-of-a-pregnant-woman.jpg?s=612x612&w=0&k=20&c=_e5EGTpkR4gfH2eT24XyZbZJ0QCe2VYZAyEw7YKyxiY=" 
                     alt="Heartbeat GIF" class="w-full rounded-lg shadow">
            </div>
            
            <div class="flex-1">
                <div class="space-y-4">
                    <div>
                        <h4 class="font-medium text-pink-800">نرخی ئاسایی دڵ</h4>
                        <div class="mt-1 bg-green-50 border border-green-100 rounded p-3">
                            <p class="text-green-800 text-sm">١١٠–١٦٠ تێقڵ لە خولەک (BPM)</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-medium text-pink-800">نرخی خێرای دڵ</h4>
                        <div class="mt-1 bg-yellow-50 border border-yellow-100 rounded p-3">
                            <p class="text-yellow-800 text-sm">زیاتر لە ١٦٠ BPM (تاکاردیای جنین)</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-medium text-pink-800">نرخی هێواش دڵ</h4>
                        <div class="mt-1 bg-red-50 border border-red-100 rounded p-3">
                            <p class="text-red-800 text-sm">کەمتر لە ١١٠ BPM (برادیکاردیای جنین)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- When to Worry -->
    <div class="bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-xl font-semibold text-rose-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            ⚠️ کەی دەبێت نیگەران بیت؟
        </h2>
        
        <div class="mt-4 space-y-3">
            <div class="flex items-start">
                <div class="flex-shrink-0 text-red-500 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="ml-2 text-gray-600 text-sm">ئەگەر نرخی دڵ کەمتر بێت لە ١١٠ BPM یان زیاتر لە ١٦٠ BPM بۆ ماوەیەکی درێژ</p>
            </div>
            
            <div class="flex items-start">
                <div class="flex-shrink-0 text-red-500 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="ml-2 text-gray-600 text-sm">ئەگەر نرخی دڵ ناڕێک بێت یان بێ ئەندازە خێرا یان هێواش بێت</p>
            </div>
            
            <div class="flex items-start">
                <div class="flex-shrink-0 text-red-500 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="ml-2 text-gray-600 text-sm">ئەگەر لە هەفتەی ٧ی حەمڵەوە هیچ تێقڵێکی دڵ نەبیسترێت</p>
            </div>
        </div>
        
        <div class="mt-6 bg-blue-50 border border-blue-100 rounded-lg p-4">
            <p class="text-blue-800 text-sm">
                <span class="font-medium">ئامۆژگاری:</span> ئەگەر نیگەرانی هەبوو دەربارەی نرخی دڵی منداڵەکەت، یەکسەر پەیوەندی بە پزیشکەکەتەوە بکە.
            </p>
        </div>
    </div>

    <!-- Additional Tips -->
    <div class="bg-white shadow-lg rounded-xl p-6">
        <h2 class="text-xl font-semibold text-rose-700 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
            </svg>
            💡 ڕێنمایییە گرنگەکان
        </h2>
        
        <div class="mt-4 grid md:grid-cols-2 gap-4">
            <div class="bg-pink-50 rounded-lg p-4 flex items-start">
                <div class="bg-pink-100 p-2 rounded-full mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-gray-700 text-sm">لە کاتی پشکنیندا دەبێت ئارام بیت و لە دۆخی ئارامدا بخەویتە سەر پشت</p>
            </div>
            
            <div class="bg-pink-50 rounded-lg p-4 flex items-start">
                <div class="bg-pink-100 p-2 rounded-full mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-gray-700 text-sm">نرخی دڵ لە کاتی جوڵەی منداڵدا دەتوانێت کەمێک خێراتر بێت</p>
            </div>
            
            <div class="bg-pink-50 rounded-lg p-4 flex items-start">
                <div class="bg-pink-100 p-2 rounded-full mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-gray-700 text-sm">نرخی دڵ لە هەفتە جیاوازەکاندا جیاوازی هەیە</p>
            </div>
            
            <div class="bg-pink-50 rounded-lg p-4 flex items-start">
                <div class="bg-pink-100 p-2 rounded-full mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <p class="text-gray-700 text-sm">خواردنەوەی ئاو بە پێی پێویست بۆ پاراستنی نرخی دڵی منداڵ</p>
            </div>
        </div>
    </div>

</section>
@endsection