<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <style>
        @yield('style')
    </style>

    <div class="upper">
        <header>
            <h1>@yield('headerTitle')</h1>
        </header>
        <main>@yield('main')</main>
    </div>
    <footer>@yield('footer')</footer>
</body>

</html>
