<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>

    <h1>About us</h1>

    <ul>
        @foreach ($tasks as $task)
            <a href="tasks/{{ $task->id }}">
                <li>{{ $task->body }}</li>
            </a>
        @endforeach
    </ul>

<p>created_at</p>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->created_at }}</li>
        @endforeach
    </ul>

</body>
</html>