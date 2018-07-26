<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
    <head>
        @yield('head')
        
    </head>
    <body>
        @yield('top_menu')
        <div id="contentFrame">
            @yield('thread')
            @yield('post_Form')
        </div>
        @yield('footer')
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>