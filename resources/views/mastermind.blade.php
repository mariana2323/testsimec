@extends('principal')
@section('navegacion')
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li width="200px" class="active">
                    <a class="nav-link" href="{{ url('/') }}">Inicio </a>
                </li>
                <li width="100px" class="active">
                    <a class="nav-link" href="{{ url('/sheldongame') }}">Sheldon game </a>
                </li>
                <li width="100px" class="active">
                    <a class="nav-link" href="{{ url('/mastermind') }}">Mastermind </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('seccion')
    <div class="flex-center position-ref full-height">
        <form method="post" action="/mastermind/generate/">
            @csrf
            <img src="{{asset('img/4dots.jpeg')}}"/>
            <p>The PC has generated a code. In order to find it you must guess the position of each color. <br>You have 8 chances. Choose the order of the colors and don't repeat them, if you guys the position the PC will mark its checkbox with black. <br>Get the 4 right and you win!</p>
            <p>La PC ha generado un código, para descifrarlo debes adivinar la posición de cada color. <br>Tienes 8 intentos. Elige el orden de los colores y si aciertas su posición la PC marcará su recuadro con negro. Logra los 4 y ganas!</p>
            <input class="btn btn-success" type="submit" value="GENERATE CODE"/>
        </form>
    </div>
@endsection


