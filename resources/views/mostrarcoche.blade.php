<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Mostrar Coches</title>
</head>

<body>
    <h1>Mi coche con id {{ $coche->id }}</h1>
    <p><b>{{ $coche->marca }}</b> -
        {{ $coche->modelo }}
    <p>

    <a href="{{ route('listacoches') }}">Ir a coches</a>
</body>

</html>
