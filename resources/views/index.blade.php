<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>

<body>
    <h1>Productos</h1>

    <br>

    {{-- table list products --}}
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->name }}</td>
                    <td>{{ $producto->price }}</td>
                    <td>{{ $producto->status }}</td>
                    <td>{{ $producto->created_at }}</td>
                    <td>{{ $producto->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
