<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo update</title>
</head>
<body>
    <div class="container">
        <h2>タスク修正</h2>
        <form action="/update/{{$todo->id}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$todo->id}}">
            <p>
                タスク名:<input type="text" name="task_name" value="{{$todo->task_name}}">
            </p>
            <p>
                タスクの説明:<input type="text" name="task_description" value="{{$todo->task_description}}">
            </p>
            <p>
                担当者の名前:<input type="text" name="assing_person_name" value="{{$todo->assing_person_name}}">
            </p>
            <p>
                見積時間(h):<input type="number" name="estimate_hour" value="{{$todo->estimate_hour}}">
            </p>
            <input type="submit" name="update" value="更新">
        </form>
        <a href="/todo">戻る</a>
    </div>
</body>
</html>