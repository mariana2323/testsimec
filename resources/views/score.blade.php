@extends('principal')
@extends('navbar')
@section('seccion')
    <div class="flex-center position-ref full-height">
        <table class="table" id="scoret">
            <tr>
                <th>Nick</th>
                <th>Sheldon´s game Score</th>
                <th>Mastermind Score</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td>{{$d->nick}}</td>
                    <td>{{$d->puntuation_sheldon}}</td>
                    <td>{{$d->puntuation_master}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


