@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">ToDo Create</div>
            <div class="panel-body">
            <form wire:submit.prevent="create">
                <div class="form-group">
                    <label class="control-label">タスク名</label>
                    <input class="form-control" type="text" wire:model="task_name">
                </div>
                <div class="form-group">
                    <label class="control-label">タスク説明</label>
                    <input class="form-control" type="text" wire:model="task_description">
                </div>
                <div class="form-group">
                    <label class="control-label">担当者</label>
                    <input class="form-control" type="text" wire:model="assing_person_name">
                </div>
                <div class="form-group">
                    <label class="control-label">見積時間(h)</label>
                    <input class="form-control" type="text" wire:model="estimate_hour">
                </div>
                <button class="btn btn-default" type="submit" name="create">追加</button>
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