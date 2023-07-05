<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - @yield('Title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/posts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="/">
                <img src="{{ asset('img/logo.png') }}" width="160" height="160" alt="Logo" loading="lazy" style="background-color: #5f8ea011; border-radius: 50%;">
            </a>
        </div>
    </nav>
    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1>Blog de Alquiler de Coches</h1>
            <p>Descubre por qué es mejor alquilar un coche</p>
        </div>
    </header>

    <!--Content -->
    @yield('content')  @section('content')

    <!-- Footer -->
    <footer class="container-fluid bg-main">
    <div class="row text-center p-4">
        <div class="col-md-10">
            <p class="mt-3">Copyright © 2023 LuisFer, Blog para Wiber. <br> Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
