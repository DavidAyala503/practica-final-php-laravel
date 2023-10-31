<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Proyectos</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

     <style>
        @page {
            size: letter landscape;
        }

        body {
            font-family: Arial, Helvetica, Verdana;
        }

        .cabecera{
            background-color: #00304E;
            color: white;
        }

        h2,h3{
            text-align: center;
            color: #00304E;
            font-family: Arial, Helvetica, Verdana;
        }
    </style>

</head>
<body>
    <center><img src="assets/img1.png" alt="" width="120px"></center>
    <h2>GOBIERNO DE EL SALVADOR</h2>
    <h3>REPORTE DE PROYECTOS</h3>
    <table class="table" style="text-align: center">
        <thead class="cabecera">
            <tr>
                <th>#</th>
                
                <th>Nombre Proyecto</th>
                <th>Fuente Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Fatrocinado</th>
                <th>Monto Fondos Propios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->NombreProyecto }}</td>
                    <td>{{ $proyecto->fuenteFondos }}</td>
                    <td>${{ $proyecto->MontoPlanificado }}</td>
                    <td>${{ $proyecto->MontoPatrocinado }}</td>
                    <td>${{ $proyecto->MontoFondosPropios }}</td>
            @endforeach
        </tbody>
    </table>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>