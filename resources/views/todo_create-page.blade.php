<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/todo_create.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>ToDo create</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/todo_view-page">ToDo</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>todo list</h1>
        @error('task_name')
            <div class="error">タスク名は{{ $message }}</div>
        @enderror
        <h2>タスク追加</h2>
        <form action="/create" method="post">
            @csrf
            <div class="input">
                <label for="">タスク名:</label>
                <input type="text" name="task_name">
            </div>
            <div class="input">
                <label for="">タスクの説明:</label>
                <input type="text" name="task_description">
            </div>
            <div class="input">
                <label for="">担当者の名前:</label>
                <input type="text" name="assing_person_name">
            </div>
            <div class="input">
                <label for="">見積時間(h):</label>
                <input type="number" name="estimate_hour">
            </div>
            <input type="submit" name="create" value="追加">
        </form>
        <a href="/todo_view-page">戻る</a>
    </div>
</body>
</html>
