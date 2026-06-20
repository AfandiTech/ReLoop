<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ReLoop | By Mahmoud Afandi Technology FZCO')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes zoom { 0% { transform: scale(1); } 50% { transform: scale(1.05); } 100% { transform: scale(1); } }
        .animate-slow-zoom { animation: zoom 20s ease-in-out infinite; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">

    <!-- استدعاء الهيدر -->
    @include('partials.header')

    <!-- محتوى الصفحة المتغير -->
    <main>
        @yield('content')
    </main>

    <!-- استدعاء الفوتر -->
    @include('partials.footer')

</body>
</html>