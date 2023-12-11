<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Todo list</title>
</head>
<body>
    <div class="container">
        <h1>ToDo List</h1>                                                                                                 
        
        <h2>タスクの一覧</h2>
        <a href="/todo_create-page">タスクを追加</a>
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

<!-- //modalにtitleとURLのデータを渡すにはJSが必要 -->
<script>
    window.onload = function() {
        $('#SampleModal').on('shown.bs.modal', function (event) {
            var button = $(event.relatedTarget);//モーダルを呼び出すときに使われたボタンを取得
            var title = button.data('title');//data-titleの値を取得
            var url = button.data('url');//data-urlの値を取得
            var modal = $(this);//モーダルを取得

            //Ajaxの処理はここに
            //modal-bodyのpタグにtextメソッド内を表示
            modal.find('.modal-body p').eq(0).text("本当に"+title+"を削除しますか?");
            //formタグのaction属性にurlのデータ渡す
            modal.find('form').attr('action',url);
        });
    }
</script>

</body>
</html>