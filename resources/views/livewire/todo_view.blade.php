@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ToDo List</h1>
@stop

@section('content')
    <a href="/admin/create">タスク追加</a>

    <div class="container">
        <div class="row">
            @foreach($todos as $todo)
            <div class="col-sm border border-dark rounded"  wire:key="products-{{ $todo }}">
                <h4>{{$todo->task_name}}</h4>
                <p>{{$todo->task_description}}</p>
                <p>{{$todo->assing_person_name}}</p>
                <p>{{$todo->estimate_hour}}</p>
                <button wire:click="">編集</button>
                <button onclick="confirm('削除しますか？') || event.stopImmediatePropagation()" wire:click="dellTodo({{ $todo->id }})">削除</button>
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
