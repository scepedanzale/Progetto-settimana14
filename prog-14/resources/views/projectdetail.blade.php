
@extends('templates.layout')

@section('title', $project->name)


@section('content')

<ul class="list-group">
  <li class="list-group-item">
    <b>Nome: </b>{{$project->name}}
  </li>
  <li class="list-group-item">
    <b>Descrizione: </b>{{$project->description}}
  </li>
  <li class="list-group-item">
    <b>User ID: </b>{{$project->user_id}}
  </li>
</ul>



@endsection