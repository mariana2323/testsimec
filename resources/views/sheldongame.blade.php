@extends('principal')
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

        <div class="content">
            <img class="title m-b-md">
            <h3>Sheldon says: Choose your option now!</h3><br>
            <img src="{{asset('img/sheldon.jfif')}}" height="200px"/>
        </div>

        <form method="post" action="/sheldongame/play/">
            {{csrf_field()}}
            <fieldset>
                @foreach($data as $op)
                    <input type="radio" required name="sheloption" value="{{$op["id_sheldongame"]}}">{{$op["opcion"]}}
                    <img class="sheldonimgs" src="{{asset($op["image"])}}"/><br>
                @endforeach
                <br>
                <input class="btn btn-success" type="submit" value="PLAY"/>
            </fieldset>
        </form>
    </div>
@endsection


