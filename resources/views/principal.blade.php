<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Test SIMEC by Ana Acosta</title>
    <link rel="stylesheet" href = "{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <section>
        @yield('js')
    </section>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        @yield('navegacion')
    </nav>
</header>

<section id="seccion1">
    @yield('seccion')
</section>

<footer class="footer">
    <p>       2020, Ing. Ana Acosta Irigoyen - anaacostairigoyen@gmail.com</p>
</footer>
</body>
</html>