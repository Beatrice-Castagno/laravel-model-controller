<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo libri con db Laravel</title>
</head>
<body>
    <h1>Libri disponibili</h1>
        @foreach ($lista_libri as $libro) 
            <h2>&middot; {{$libro->title}}</h2>
            <h4>di: {{$libro->author}}</h4>
            <a href="{{route('books.show', $libro->id)}}">Dettagli</a>
        @endforeach 
</body>
</html>