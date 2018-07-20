<!DOCTYPE HTML>
<html lang="ja">
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
</html>