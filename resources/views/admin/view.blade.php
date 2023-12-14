<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/todo_view.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Livewire</title>
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<livewire:todo_view>
    @livewireScripts
</body<
</html>