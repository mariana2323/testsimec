@extends('principal')
@extends('navbar')
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


