
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>gestion des produits </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
        <body>
        @if(Auth::check())
        @include('navbar')
        @endif
            @yield('scripts')

            @yield('content')
            <script src="{{asset('js/app.js')}}"></script>
        </body>
  
</html>