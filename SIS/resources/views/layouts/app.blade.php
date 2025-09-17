<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS Cloud - Student Information System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen bg-gray-100">
        @include('partials.sidebar')
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('partials.topbar')
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>