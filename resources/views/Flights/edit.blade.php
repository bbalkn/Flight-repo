<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>

    <h1 class="id">Edit Flight</h1>

    <form method="POST" action="/flights/{{$flight->id}}">

        {{ method_field('PATCH')  }}
        {{ csrf_field() }}

        <div class="field">

            <label class="label" for="id">ID</label>

            <div class="control">
                <textarea name="id" class="textarea">{{$flight->id}}</textarea>
            </div>


        </div>

        <div class="field">

            <label class="label" for="number">NUMBER</label>

            <div class="control">
                <input type="number" class="input" name="number" placeholder="NUMBER" value="{{$flight->number}}">
            </div>


        </div>

        <div class="field">

            <label class="label" for="From">FROM</label>

            <div class="control">
                <input type="text" class="input" name="from" placeholder="FROM" value="{{$flight->from}}">
            </div>


        </div>

        <div class="field">

            <label class="label" for="destination">DESTINATION</label>

            <div class="control">
                <input type="text" class="input" name="destination" placeholder="DESTINATION" value="{{$flight->destination}}">
            </div>


        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">UPDATE FLIGHT</button>
            </div>

        </div>

    </form>


    <form method="POST" action="/flights/{{$flight->id}}">

        {{ method_field('DELETE')  }}
        {{ csrf_field() }}

        <div class="field">

            <div class="control">
                <button type="submit" class="button">DELETE FLIGHT</button>
            </div>

        </div>

    </form>





</body>
</html>
