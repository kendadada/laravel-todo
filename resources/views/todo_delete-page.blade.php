<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo delete</title>
</head>
<body>
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
        <a href="/todo">戻る</a>
    </div>
</body>
</html>