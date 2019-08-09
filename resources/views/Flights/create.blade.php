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

            <input type="number" name="id" placeholder="Flight ID"></input>

        </div>

        <div>

            <input type="number" name="number" placeholder="Flight number"></input>

        </div>

        <div>

            <textarea name="from" placeholder="Flight from"></textarea>

        </div>

        <div>

            <textarea name="destination" placeholder="Flight destination"></textarea>

        </div>

        <div>

            <button type="submit ">Create Flight</button>

        </div>


    </form>




</body>
</html>
