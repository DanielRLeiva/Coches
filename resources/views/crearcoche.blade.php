<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Crear Coche</title>
</head>

<body>
    <h1>Crear un Coche:</h1>
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form class="create" method="POST" action="{{ route('guardarcoche') }}">
        @csrf
        <div>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') }}" placeholder="Marca del Coche">
            @error('marca')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        
        <div>
            <label for="modelo">Modelo:</label>
            <textarea type="text" name="modelo" placeholder="Modelo del Coche"></textarea>
        </div>        

        <div>
            <label for="anio">Año:</label>
            <input type="number" name="anio" value="{{ old('anio') }}" placeholder="Año del Coche">
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="{{ old('precio') }}" placeholder="Preciod del Coche">
        </div>

        <div>
            <input type="submit" value="Guardar">
        </div> 

        <div>
            <a href="{{ route('listacoches') }}">Ir a coches</a>
        </div>
    </form>
</body>

</html>
