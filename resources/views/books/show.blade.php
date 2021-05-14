<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettagli libro</title>
</head>
<body>
    <h1>{{$libro->title}}</h1>
    <p>{{$libro->trama}}</p>
    <span>Edizione: {{$libro->year}}</span>
</body>
</html>