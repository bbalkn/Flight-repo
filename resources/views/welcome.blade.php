@extends('layout')

@section('content')

    <h1 text = "bold">A SPACE FILM!!</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }} </li>
        @endforeach
    </ul>

    <div id="app">
        <example-component></example-component>
        <example-component></example-component>
    </div>

    <script src="{{ asset('js/app.js') }}"/>

@endsection

@section('title')

    HOME

@endsection

