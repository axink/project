

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>

    {{-- @vite('resources/css/app.css') --}}
     <!-- If you're using Tailwind -->


</head>
<body class="bg-gray-100 text-gray-900">

    @include('layouts.navbar')

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>
