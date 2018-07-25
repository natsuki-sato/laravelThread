<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Laravel + Vue.js</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>

    <script>
      window.Laravel = {
          csrfToken: "{{ csrf_token() }}"
      };
    </script>
  </head>
<body>
  <div> [before] </div>
  <div id="app">
 
      
<!--      <div class="container">
          <router-view></router-view>
      </div>-->
  </div>
  <div> [after] </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
    