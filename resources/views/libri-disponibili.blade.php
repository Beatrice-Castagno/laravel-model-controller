<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libri primo db Laravel</title>
</head>
<body>
    <h1>Libri disponibili</h1>
        @foreach ($lista_libri as $libro) 
            <h2>{{$libro->title}}</h2>
            <h4>{{$libro->author}}</h4>
            <p>{{$libro->trama}}</p>
            <span>{{$libro->prezzo}} &euro;</span>
        @endforeach 
</body>
</html>