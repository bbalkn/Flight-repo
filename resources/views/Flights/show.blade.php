<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

</head>
<body>

    <h1 class="title"> {{ $flight->id }}</h1>

    <div class="content">{{ $flight->from }} <img src="https://bilisimbilgi.com/wp-content/uploads/ucak-modunun-ucaklar-disinda-yaradigi-farkli-alanlar.jpg" alt="plane" width="25" height="15"> {{ $flight->destination }}</div>


    <p>

        <a href="/flights/{{ $flight->id }}/edit">Edit</a>
        
    </p>

    @if($flight->tasks->count())
    <div class="box">

        @foreach($flight->tasks as $task)
        <div>
            <form method="POST" action="/completed-tasks/{{ $task->id }}">
                @if($task->completed)
                    @method('DELETE')
                @endif

                @csrf

                <label class="checkbox" {{ $task->completed ? 'is-complete' : '' }} for="completed">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->transmission }}
                </label>
            </form>
        </div>

        @endforeach

    </div>
    @endif


    <form method="POST" action="/flights/{{ $flight->id }}/tasks" class="box">
        @csrf

        <div class="field">
        <label class="label" for="transmission" >New transmission</label>
        <div class="control">
            <input type="text" class="input" name="transmission" placeholder="New transmission">
        </div>

        </div>

        <div class="field">

            <div class="control">

                <button type="submit" class="button-is-link">Add transmission</button>

            </div>

        </div>

        @include('errors')

    </form>


</body>
</html>
