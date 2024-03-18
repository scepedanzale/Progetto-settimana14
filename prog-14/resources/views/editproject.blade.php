
@extends('templates.layout')

@section('title', 'Progetti')


@section('content')
    @if($projects)
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Utente</th>
            </tr>

            @foreach($projects as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->user_id}}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection