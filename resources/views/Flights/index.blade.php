<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

</head>
<body>


<p> FLIGHTS </p>
@foreach($flights as $flight)
    <li>

        <a href="flights/{{ $flight->id }}"> {{ $flight->from }} - {{ $flight->destination }} </a>

    </li>
@endforeach

@section('title')
    INFO
@endsection



</body>
</html>
