@section('head')
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>
<script>
    window.Laravel = { csrfToken: "{{ csrf_token() }}"};
</script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js"  type="text/javascript"></script>
@yield('styleCss') 
@endsection

