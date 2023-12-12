<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>ToDo delete</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ToDo</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>タスク削除</h2>
        <form action="/delete/{{$todo->id}}" method="post">
            @csrf
            <p>
                タスク名:{{$todo->task_name}}
            </p>
            <p>
                タスクの説明:{{$todo->task_description}}
            </p>
            <p>
                担当者の名前:{{$todo->assing_person_name}}
            </p>
            <p>
                見積時間(h):{{$todo->estimate_hour}}
            </p>
            <input type="submit" name="delete" value="削除">
        </form>
        <a href="/todo_view-page">戻る</a>
    </div>
</body>
</html>
