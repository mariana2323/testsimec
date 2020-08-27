@extends('principal')
@section('js')
    <script>alert('{{$message}}')</script>
@endsection
@extends('navbar')
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


