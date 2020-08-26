@extends('principal')
@section('js')
    <script>alert('{{$message}}')</script>
@endsection
@section('navegacion')
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li width="200px" class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Inicio </a>
            </li>
            <li width="100px" class="nav-item">
                <a class="nav-link" href="{{ url('/sheldongame') }}">Sheldon game </a>
            </li>
            <li width="100px" class="nav-item">
                <a class="nav-link" href="{{ url('/mastermind') }}">Mastermind </a>
            </li>
        </ul>
    </div>
@endsection
@section('seccion')
    <div class="flex-center position-ref full-height">
        <div>
            <h3>Sheldons choice:</h3>
            <img width="100px" src="{{asset($pc[0]->image)}}"/>
        </div>
        <div class="alert alert-info" role="alert">{{$message}}</div>
        @if($success == 'tie')
            <img width="100px" src="../../img/tie.jpg"/>
        @elseif($success)
            <img width="100px" src="../../img/youwin.jpg"/>
        @else
            <img width="100px" src="../../img/youlose.jpg"/>
        @endif
    </div>
@endsection


