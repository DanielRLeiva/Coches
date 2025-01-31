<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Crear Coche</title>
</head>

<body>
    <h1>Editor de Coches:</h1>
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form class="edit" method="POST" action="{{ route('actualizarcoche', $coche->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" value="{{ old('marca', $coche->marca) }}">
            @error('marca')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="modelo">Modelo:</label>
            <textarea type="text" name="modelo" id="modelo">{{ old('modelo', $coche->modelo) }}</textarea>
        </div>
        <div>
            <input type="submit" value="Actualizar Coche">
        </div>
        <div>
            <a href="{{ route('listacoches') }}">Ir a coches</a>
        </div>
    </form>
</body>

</html>
