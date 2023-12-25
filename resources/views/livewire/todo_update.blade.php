@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">ToDo Update</div>
            <div class="panel-body">
            <form wire:submit.prevent="update">
                <input type="hidden" name="id" wire:model="todo.id" value="{{$todo->id}}">
                <div class="form-group">
                    <label class="control-label">タスク名</label>
                    <input class="form-control" type="text" wire:model="todo.task_name" value="{{$todo->task_name}}">
                </div>
                <div class="form-group">
                    <label class="control-label">タスク説明</label>
                    <input class="form-control" type="text" wire:model="todo.task_description" value="{{$todo->task_description}}">
                </div>
                <div class="form-group">
                    <label class="control-label">担当者</label>
                    <input class="form-control" type="text" wire:model="todo.assing_person_name" value="{{$todo->assing_person_name}}">
                </div>
                <div class="form-group">
                    <label class="control-label">見積時間(h)</label>
                    <input class="form-control" type="text" wire:model="todo.estimate_hour" value="{{$todo->estimete_hour}}">
                </div>
                <button class="btn btn-default" type="submit" name="create">更新</button>
            </form>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop