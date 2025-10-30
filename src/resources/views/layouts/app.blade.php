<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Портал документов')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background: #2c3e50; }
        .navbar-brand { color: white !important; font-weight: bold; }
        .footer { background: #34495e; color: white; padding: 20px 0; margin-top: 50px; }
    </style>
    @stack('styles') <!-- Для дополнительных стилей -->
</head>
<body>
    <!-- ХЕДЕР -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">📁 Портал документов</a>
            
            <div class="navbar-nav">
                <a class="nav-link" href="/">Главная</a>
                <a class="nav-link" href="/documents">Документы</a>
                <a class="nav-link" href="/merop">Мероприятия</a>
                <a class="nav-link" href="/about">О нас</a>
            </div>
        </div>
    </nav>

    <!-- ОСНОВНОЕ СОДЕРЖИМОЕ -->
    <main class="container my-4">
        @yield('content') <!-- Сюда подставляется контент страниц -->
    </main>

    <!-- ФУТЕР -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Портал документов. Все права защищены.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Для дополнительных скриптов -->
</body>
</html>