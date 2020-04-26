<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Todo List</title>
</head>
<body>
<h1>Todo List</h1>
<ul>
    @foreach($todos as $todo)
    <li>{{$todo->task}}</li>
    @endforeach
</ul>
</body>
</html>
