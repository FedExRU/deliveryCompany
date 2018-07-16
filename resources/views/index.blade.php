<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name').': '.$title }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <header>
            @include('layout.part.navbar', [
                    'brandName' => config('app.name'), 
                    'brandUrl'  => route('home')
                ]
            )
            @if (\Request::route()->getName() == 'home')
                @include('layout.part.header-welcome', [
                    'name' => config('app.name'),
                    'text' => $title,
                ]
            );
            @endif
        </header>
        
        <main id="app">
            @yield('content')
        </main>

        <footer>
            @include('layout.part.footer')
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
