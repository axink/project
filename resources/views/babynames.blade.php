@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-6">👶 Baby Names</h1>

    <!-- Search Bar -->
    <div class="mb-6">
        <input type="text" id="searchInput" placeholder="Search name or meaning..." 
               class="w-full p-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-300">
    </div>

    <!-- Girl Names Section -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-pink-600 mb-4">👧 Girl Names</h2>
        <div id="girlNamesContainer" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Ava</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Life</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Mia</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Mine; beloved</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Zara</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Princess; flower</span></p>
            </div>


            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Emma</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Whole; universal</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Sophia</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Wisdom</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Isabella</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">God is my oath</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Luna</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Moon</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Ella</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Fairy maiden</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-pink-600">Aria</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Girl</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Air; melody</span></p>
            </div>
            
        </div>
    </div>

    <!-- Boy Names Section -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-blue-600 mb-4">👦 Boy Names</h2>
        <div id="boyNamesContainer" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Liam</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Strong-willed warrior</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Noah</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Rest; comfort</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Ethan</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Strong; firm</span></p>
            </div>

            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">James</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Supplanter</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Oliver</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Olive tree</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Lucas</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Bringer of light</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Henry</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Ruler of the home</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Leo</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Lion</span></p>
            </div>
            <div class="baby-card bg-white p-5 rounded-2xl shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold text-blue-600">Benjamin</h2>
                <p class="text-sm text-gray-500">Gender: <span class="font-medium">Boy</span></p>
                <p class="mt-1 text-gray-600">Meaning: <span class="italic">Son of the right hand</span></p>
            </div>
            
        </div>
    </div>
</div>

<!-- Search Script -->
<script>
    const searchInput = document.getElementById('searchInput');
    const babyCards = document.querySelectorAll('.baby-card');

    searchInput.addEventListener('input', function () {
        const keyword = this.value.toLowerCase();

        babyCards.forEach(card => {
            const text = card.textContent.toLowerCase();
            card.style.display = text.includes(keyword) ? '' : 'none';
        });
    });
</script>
@endsection
