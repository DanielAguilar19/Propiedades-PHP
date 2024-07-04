<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades del Dueño</title>
</head>
<body>
    <h1>Propiedades de {{ $duenio->nombre }} {{ $duenio->apellido }}</h1>
    <ul>
        @foreach ($propiedades as $propiedad)
            <li>{{ $propiedad->color }} en el piso {{ $propiedad->piso }} con un área de {{ $propiedad->area }} m²</li>
        @endforeach
    </ul>
</body>
</html>