<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de Post</title>
</head>

<body>
    <h1>Hola desde index Post</h1>
    <ul>
        @forelse ($posts as $post)
            <li>Post numero: {{ $post }}</li>
        @empty
            <h2>No se encontraron registros</h2>
        @endforelse
    </ul>
</body>
</html>
