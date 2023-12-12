<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/todo_view.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Todo list</title>
    @LivewireStyles
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
        <h1>ToDo List</h1>
        <h2>タスクの一覧</h2>
        <a href="/todo_create-page">タスクを追加</a>
        
        @foreach($todos as $todo)
        <div class="KanbanCard">
            <h4>{{$todo->task_name}}</h4>
            <p>{{$todo->task_description}}</p>
            <p>{{$todo->assing_person_name}}</p>
            <p>{{$todo->estimate_hour}}</p>
            <a href="/todo_update-page/{{$todo->id}}">編集</a>
            <a href="/todo_delete-page/{{$todo->id}}">削除</a>
        </div>
        @endforeach
    </div>
    <a href="/home">ホームへ</a>
</body>
</html>
