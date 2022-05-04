<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Comics -</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    @yield('head-scrips')
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @include('partials.jumbotron')
        
        @yield('main-content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    @yield('body-scripts')
</body>
</html>