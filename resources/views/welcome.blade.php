@extends('principal')
@section('seccion')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

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