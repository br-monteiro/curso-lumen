<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Agenda</title>
    </head>

    <body>
        <h3>Teste de view</h3>
        <ul>
        @foreach (range('A', 'Z') as $letra)
        <li>{{ $letra }}</li>
        @endforeach
        </ul>
    </body>
</html>

