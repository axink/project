
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<nav class="bg-gradient-to-r from-blue-200 via-blue-100 to-blue-50 shadow-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Mobile menu button -->
        <div class="flex items-center sm:hidden">
          <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-blue-600 hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
          </button>
        </div>
        <div class="flex flex-shrink-0 items-center">
          <img class="h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=500" alt="Logo" />
        </div>
  
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center">
          <div class="hidden sm:ml-8 sm:flex sm:space-x-6">
            <a  href="{{route ('home')}}" class="rounded-lg bg-blue-300 px-4 py-2 text-sm font-semibold text-blue-900 shadow-sm hover:bg-blue-400 transition">home</a>
            <a href=" {{ route ('pregnancystage') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">PregnancyStage</a>
            <a href="#" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">babyNames</a>
            <a href=" {{ route ('mother-notes') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">note</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu -->
    <div class="sm:hidden px-4 pt-4 pb-3 space-y-1 bg-blue-50">
      <a  href="#" class="block rounded-lg bg-blue-300 px-4 py-2 text-base font-semibold text-blue-900 shadow-sm hover:bg-blue-400 transition">home</a>
      <a href="#" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">PregnancyStage</a>
      <a href="#" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">checklist</a>
      <a href="#" class="block rounded-lg px-4 py-2 text-base font-medium text-blue-700 hover:bg-blue-200 hover:text-blue-900 transition">note</a>
    </div>
  </nav>
  