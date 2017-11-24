<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        @include('layouts.default.header')
    </header>

    <main>
        <section>
            @yield('content')
        </section>
    </main>

    @include('layouts.default.footer')
    @component('layouts.default.body_scripts')
        @yield('scripts')
    @endcomponent
</body>
</html>