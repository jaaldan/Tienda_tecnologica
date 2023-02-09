<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Agregar Pedido</title>
</head>
<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">
            <center><img src="../../img/logo_2_T_T.jpg" width="400" height="150" alt=""></center>
            <br>
            <br>
            <h2>Agregar Pedido</h2>
            <br>
            <br>
        <form action="" name="agregar_pedido" method="POST">
        <table class="table-light table table-striped table table-bordered border-success table table-hover">
            <tr>
            <th>
            <center>Id Pedido</center>
            </th>
            <td>
            <center><input class="form-control form-control-sm" type="number" name="id_pedido" id="id_pedido" placerholder="El Codigo es Asignado por el Sistema" aria-label=".form-control-sm example"></center>
            </td>
            </tr>
            <tr>
            <th>
            <center>Id Cliente</center>
            </th>
            <td>
            <center><input class="form-control form-control-sm" type="number" name="id_cliente" id="id_cliente" placerholder="Digite el id del cliente" aria-label=".form-control-sm example"></center>
            </td>
            </tr>
            <tr>
            <th>
             <center>Direccion</center>
             </th>
             <td>
             <center><input class="form-control form-control-sm" type="text" name="direccion" id="direccion" placerholder="Digite la direccion del domicilio" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th>
             <center>Fecha</center>            
             </th>
             <td>
             <center><input class="form-control form-control-sm" type="date" name="fecha" id="fecha" placerholder="Digite la fecha del pedido" aria-label=".form-control-sm example"></center>
             </td>
             </tr>
             <tr>
             <th><center>Estado</center></th>
             <td><center><select name="estado" id="estado">
             <option value="Activo">Activo</option>
             <option value="Inactivo">Inactivo</option>
             </tr>
             </table>
        <P align="right"><a href="pedidos.php"><button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button></a>
        <button type="submit" class="btn btn-success" name="guarda"><i class="fa fa-check" aria-hidden="true">Guardar</i></button></P>
        </form>
    </div>
</body>
</html>