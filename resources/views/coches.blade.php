<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Coches</title>
</head>

<body>
    <h1>Todos los coches:</h1>
    {{ session('success') }}
    <form action="{{ route('listacoches') }}" method="GET">
        <input type="text" name="marca" placeholder="Filtrar por marca">
        <input type="submit" value="Filtrar">
    </form>
    <ul>
        @forelse($coches as $coche)
        <li>
            <a href="{{ route('mostrarcoche', $coche->id) }}">{{ $coche->marca }}</a> - {{ $coche->modelo }}
            <a href="{{ route('editarcoche', $coche->id) }}">Editar</a>

            <form action="{{ route('eliminarcoche', $coche->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este coche?')">
            </form>
        </li>
        @empty
        <li>No se encontraron coches</li>
        @endforelse
    </ul>

    <a href="{{ route('crearcoche')}}">Crear Nuevo Coche</a>
</body>

</html>