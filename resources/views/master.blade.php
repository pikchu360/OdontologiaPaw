<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>
      
        <!-- Enlace a archivo bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}"/>

        <!-- Enlaces de los js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}"></script>

        <!-- style for page -->
        <<style>
            html, body{
                background-color:  #bddee9;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header" style="width: 18rem;">
                    @include('shared.navbar')
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    </body>
</html>