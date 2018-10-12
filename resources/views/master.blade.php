<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>
      
        <!-- Enlace a archivo bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            @include('shared.navbar')
        </div>
        <br><br><br>
        <div class="container">
            @yield('content')
        </div>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
    </body>
</html>