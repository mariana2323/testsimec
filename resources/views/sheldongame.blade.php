@extends('principal')
@extends('navbar')
@section('seccion')
    <div class="flex-center position-ref full-height">

        <div class="jumbotron">
            <img class="title m-b-md">
            <p>This expanded version of the classic rock-paper-scissors game has this new rules:</p>
            <ul>
                <li>The scissors cut paper</li>
                <li>The paper covers the rock</li>
                <li>The rock crushes the lizard</li>
                <li>The spock crushes the scissors</li>
                <li>The scissors behead the lizard</li>
                <li>The lizard eats the paper</li>
                <li>The paper refutes the spock</li>
                <li>The spock vanishes the rock</li>
                <li>The rock crushes the scissors</li>
            </ul>
            <h3 class="h3centered">Sheldon says: Choose your option now!</h3><br>
            <img class="imgcentered" src="{{asset('img/sheldon.jfif')}}" height="200px"/>
        </div>

        <form style="padding-left: 30px;" method="post" action="/sheldongame/play/">
            @csrf
            <fieldset>
                <label>Insert your nick name here:</label>
                <input type="text" required name="alias"/><br>
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


