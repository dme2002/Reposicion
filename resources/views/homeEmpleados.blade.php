<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="{{ route('empleado.crear') }}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Ingreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleado as $tipo)
            <tr>   
                <td>{{ $tipo->idEmpleado}}</td>
                <td>{{ $tipo->Nombre }}</td>
                <td>{{ $tipo->Apellido }}</td>
                <td>{{ $tipo->fechaingreso }}</td>
                <td>{{ $tipo->salario }}</td>
                <td>
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
</body>
</html>