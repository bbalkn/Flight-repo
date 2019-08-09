@extends('layout')

@section('content')

    <h1 text = "bold">A SPACE FILM!!</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }} </li>
        @endforeach
    </ul>

@endsection

@section('title')

    HOME

@endsection