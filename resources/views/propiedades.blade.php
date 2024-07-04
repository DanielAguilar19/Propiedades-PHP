<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apartamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <h1 class="text-center">Gestion de Propiedades</h1>
    <div class="container">
        <table class="text-center">
            <thead class="text-center">
                <th>#</th>
                <th>Piso</th>
                <th>Area</th>
                <th>Dueño</th>
            </thead>
            <tbody>
                @foreach ($propiedades as $prop)
                <tr class="text-center">
                    <td>{{$prop->idPropiedad}}</td>
                    <td>{{$prop->piso}}</td>
                    <td>{{$prop->area}}</td>
                    <td>{{$prop->duenio}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>