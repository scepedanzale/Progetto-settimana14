
@extends('templates.layout')

@section('title', 'Progetti')


@section('content')

    <a href="/projects/create" class="btn btn-primary my-3">Crea Progetto</a>

    @if($projects)
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Utente</th>
                <th></th>
            </tr>

            @foreach($projects as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->user_id}}</td>
                    <td>
                        <a href="/projects/{{$p->id}}" class="btn btn-primary my-3">INFO</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection