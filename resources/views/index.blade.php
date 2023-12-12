<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel practice</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
<div class="title m-b-md">
    <h1>Laravel practice</h1>
</div>

    <div class="">
        <p>Laravel practiceだ。作ったものを反映していくよ。</p>
        <a href="{{url('/todo_view-page')}}">ToDo</a>
    </div>
</body>
</html>
