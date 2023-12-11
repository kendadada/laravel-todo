<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/todo_view.css') }}" rel="stylesheet">
    <title>Todo list</title>
    @LivewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/index.js', 'resources/css/index.css'])
</head>
<body>
    <div class="container">
        <h1>ToDo List</h1>                                                                                                 
        
        <h2>タスクの一覧</h2>
        <a href="/todo_create-page">タスクを追加</a>
        @foreach($todos as $todo)
        <div style="mini-container">
            
            <h4>{{$todo->task_name}}</h4>
            
        </div>
        @endforeach
        <table border="1">
            <tr>
                <th>タスクの名前</th>
                <th>タスクの説明</th>
                <th>担当者の名前</th>
                <th>見積時間(h)</th>
                <th colspan="2">操作</th>
            </tr>
            @foreach($todos as $todo)
            <tr>
                <td>{{$todo->task_name}}</td>
                <td>{{$todo->task_description}}</td>
                <td>{{$todo->assing_person_name}}</td>
                <td>{{$todo->estimate_hour}}</td>
                <td><a href="/todo_update-page/{{$todo->id}}">編集</a></td>
                <td><a href="/todo_delete-page/{{$todo->id}}">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <a href="/home">ホームへ</a>
</body>
</html>