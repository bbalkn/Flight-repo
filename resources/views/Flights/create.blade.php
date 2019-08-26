<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

</head>
<body>

    <form method="POST" action="/flights">
        {{csrf_field()}}

        <div>

            <input type="number" class="input" name="number" placeholder="Flight number">

        </div>

        <div>

            <textarea class="input {{ $errors->has('number') ? 'is-danger' : '' }}" name="from" placeholder="Flight from" required></textarea>

        </div>

        <div>

            <textarea class="input {{ $errors->has('number') ? 'is-danger' : '' }}" name="destination" placeholder="Flight destination" required></textarea>

        </div>

        <div>

            <button type="submit ">Create Flight</button>

        </div>



    </form>




</body>
</html>
