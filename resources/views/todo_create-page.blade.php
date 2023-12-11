<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo create</title>
</head>
<body>
    <div class="container">
        @error('task_name')
            <div class="error">タスク名は{{ $message }}</div>
        @enderror
        <h2>タスク追加</h2>
        <form action="/create" method="post">
            @csrf
            <p>
                タスク名:<input type="text" name="task_name">
            </p>
            <p>
                タスクの説明:<input type="text" name="task_description">
            </p>
            <p>
                担当者の名前:<input type="text" name="assing_person_name">
            </p>
            <p>
                見積時間(h):<input type="number" name="estimate_hour">
            </p>
            <input type="submit" name="create" value="追加">
        </form>
        <a href="/todo">戻る</a>
    </div>
</body>
</html>