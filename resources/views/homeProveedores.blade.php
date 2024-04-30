<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="{{ route('proveedor.crear') }}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Proveedor</th>
                <th>Nombre</th>
                <th>Fecha Registro</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedor as $tipo)
            <tr>   
                <td>{{ $tipo->idProveedor}}</td>
                <td>{{ $tipo->nombre }}</td>
                <td>{{ $tipo->fechaRegistro}}</td>
                <td>{{ $tipo->Telefono }}</td>
                <td>{{ $tipo->Correo}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
</body>
</html>