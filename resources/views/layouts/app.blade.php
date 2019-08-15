<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/zoom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customContainerFluid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customContainer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customJumbotron.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customScrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cardProfile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuButton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/zoom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cursor.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.navbar')
        
        @include('inc.menuButton')

        <div class="container" style="zoom: 90%; cursor:url('{{ asset('img/mouse0.png') }}'), auto;">
            @include('inc.messages')

            <main class="py-3">
                @yield('content')

                @yield('commentForum')
                
            </main>
        </div>
    </div>

    <script src="/MyBlog/public/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
