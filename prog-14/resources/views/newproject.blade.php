
@extends('templates.layout')

@section('title', 'Crea nuovo progetto')


@section('content')
    <form action="/projects" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="name..." name="name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="description..." name="description">
        </div>
        <button type="submit" class="btn btn-success">CREA</button>
    </form>
@endsection