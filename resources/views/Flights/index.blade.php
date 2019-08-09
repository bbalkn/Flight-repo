<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

</head>
<body>



<p> FLIGHT </p>
@foreach($flights as $flight)
    <li>{{ $flight->id}}</li>
@endforeach

@section('title')
    INFO
@endsection



</body>
</html>
