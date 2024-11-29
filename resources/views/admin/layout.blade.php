<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ - @yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('mortgages.index') }}">Ипотеки</a></li>
                <li><a href="{{ route('mortgages.create') }}">Добавить ипотеку</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
