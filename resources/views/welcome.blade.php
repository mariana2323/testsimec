@extends('principal')
@section('seccion')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                PRUEBA SIMEC
            </div>

            <div class="links">
                <a href="{{ url('/sheldongame') }}">Sheldons Game</a>
                <a href="{{ url('/mastermind') }}">The Mastermind</a>
            </div>
        </div>
    </div>
@endsection