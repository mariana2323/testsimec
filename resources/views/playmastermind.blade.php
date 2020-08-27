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
        <div class="jumbotron">
            <h3>Attempt number: {{$attempt}}</h3>
            <p>You must not repeat any color please.</p>
        </div>
        <div class="divhorizontal">
            <img height="220px" src="{{asset('img/4dotsnum.jpeg')}}"/>
            <form method="post" action="/mastermind/play/">
                @csrf
                <fieldset>
                    <div class="innerdifhor">
                        @foreach($data as $op)
                            <input type="radio" required name="masteroption1"
                                   value="{{$op["id_mastermind"]}}">{{$op["color"]}}
                            <img class="sheldonimgs" src="{{asset($op["image"])}}"/><br>
                        @endforeach
                    </div>
                    <div class="innerdifhor">
                        @foreach($data as $op)
                            <input type="radio" required name="masteroption2"
                                   value="{{$op["id_mastermind"]}}">{{$op["color"]}}
                            <img class="sheldonimgs" src="{{asset($op["image"])}}"/><br>
                        @endforeach
                    </div>
                    <div class="innerdifhor">
                        @foreach($data as $op)
                            <input type="radio" required name="masteroption3"
                                   value="{{$op["id_mastermind"]}}">{{$op["color"]}}
                            <img class="sheldonimgs" src="{{asset($op["image"])}}"/><br>
                        @endforeach
                    </div>
                    <div class="innerdifhor">
                        @foreach($data as $op)
                            <input type="radio" required name="masteroption4"
                                   value="{{$op["id_mastermind"]}}">{{$op["color"]}}
                            <img class="sheldonimgs" src="{{asset($op["image"])}}"/><br>
                        @endforeach
                    </div>
                    <br>
                    <input class="btn btn-success" type="submit" value="PLAY"/>
                </fieldset>
            </form>
        </div>
        <div>
            @if(isset($result))
                @foreach($result as $r)
                    <img width="50px" src="{{asset($r)}}"/>
                @endforeach
            @endif
        </div>
    </div>
@endsection


