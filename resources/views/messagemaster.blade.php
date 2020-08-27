@extends('principal')
@section('js')
    <script>alert('{{$message}}')</script>
@endsection
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
        <div class="alert alert-info" role="alert">{{$message}}</div>
        <div>
            <h3>El código de colores era: </h3>
            @foreach($data as $d)
                <img width="50px" src="{{asset($d)}}"/>
            @endforeach
        </div>
    </div>
@endsection