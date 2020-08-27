@extends('principal')
@section('js')
    <script>alert('{{$message}}')</script>
@endsection
@extends('navbar')
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