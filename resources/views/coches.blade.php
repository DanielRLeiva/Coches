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
        <div>
            <label for="marca">Filtrado por marca:</label>
            <input type="text" name="marca" placeholder="Filtrar por marca">
        </div>

        <div>
            <label for="marca">Filtrado por año superiore a:</label>
            <input type="text" name="anio" placeholder="Filtrar por año">
        </div>

        <div>
            <label for="marca">Filtrado por precio minimo:</label>
            <input type="text" name="precio" placeholder="Filtrar por precio">
        </div>

        <div>
            <input type="submit" value="Filtrar">
        </div>

    </form>

    <a href="{{ route('crearcoche') }}">Crear Nuevo Coche</a>
    <table class="fichaCoche">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Edición</th>
            <th>Eliminar</th>
        </tr>

            @forelse($coches as $coche)
        <tr>
            <td><a href="{{ route('mostrarcoche', $coche->id) }}">{{ $coche->marca }}</a>

            <td>{{ $coche->modelo }}</td>

            <td>{{ $coche->anio }}</td>
            <td>{{ $coche->precio }} €</td>

            <td><a href="{{ route('editarcoche', $coche->id) }}">Editar Coche</a></td>

            <td>
                <form action="{{ route('eliminarcoche', $coche->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar"
                        onclick="return confirm('¿Estás seguro de que deseas eliminar este coche?')">
                </form>
            </td>
        </tr>
    @empty
        <li>No se encontraron coches</li>
        @endforelse
        <table>
</body>

</html>
