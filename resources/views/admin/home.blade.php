@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>laravel practiceだ。作ったものを反映していくよ。</p>
    <p>使用ライブラリ</p>
    <ul>
        <li>livewire</li>
        <li>bootstrap</li>
        <li>laravel ui</li>
        <li>adminLTE</li>
    </ul>
    
    <p>作ったもの</p>
    <ul>
        <li><a href="{{url('/admin/view')}}">ToDo</a></li>
    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop