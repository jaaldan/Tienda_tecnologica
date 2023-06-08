<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <title>Modificar Ventas</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
        <h2>Modificar Ventas</h2>
        <br>
        <br>
        <br>
        <center>
            <table class="table table-striped table table-bordered border-success table table-hover">
                <tr class="table-striped table table-bordered border-success table table-hover">
                <tr>
                    <th>
                        <center>Id venta</center>
                    </th>
                    <td>
                        <center><input type="text" maxlength="50" size="20"></center>
                    </td>
                </tr>
                <tr>
                    <th>
                        <center>Id pago</center>
                    </th>
                    <td>
                        <center><input type="number" maxlength="50" size="20"></center>
                    </td>
                <tr>
                    <th>
                        <center>Id pedido</center>
                    </th>
                    <td>
                        <center><input type="text" maxlength="50" size="20"></center>
                    </td>
                </tr>
                <tr>
                    <th>
                        <center>Fecha </center>
                    </th>
                    <td>
                        <center><input type="tel" maxlength="50" size="20"></center>
                    </td>
                </tr>
                <tr>
                    <th>
                        <center>Hora </center>
                    </th>
                    <td>
                        <center><input type="tel" maxlength="50" size="20"></center>
                    </td>
                </tr>
                <tr>
                    <th>
                        <center>Valor Total </center>
                    </th>
                    <td>
                        <center><input type="tel" maxlength="50" size="20"></center>
                    </td>
                </tr>
                <tr>
                    <th>
                        <center>Estado </center>
                    </th>
                    <td>
                        <center><input type="tel" maxlength="50" size="20"></center>
                    </td>
                </tr>
                </tr>
            </table>
            <br>
            <a href="ventas.php">
                <P align="center"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                    <button type="button" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true">Modificar</i></button>
            </a>
            </P>
        </center>
    </div>
</body>

</html>