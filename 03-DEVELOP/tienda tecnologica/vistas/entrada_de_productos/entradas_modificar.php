<?php
include "../../conexion/conectar.php";
include "../../controlador/categoriascontrolador.php";

$obj = new Categorias();
if ($_POST) {

    $obj->id_categoria = $_POST['id_categoria'];
    $obj->nombre_categoria = $_POST['nombre_categoria'];
    $obj->estado_categoria = $_POST['estado_categoria'];
}
$key = $_GET['key'];
$cone = new conexion();
$c = $cone->conectando();
$query2 = "select * from categorias where id_categoria = '$key' ";
$ejecuta2 = mysqli_query($c, $query2);
$arreglo2 = mysqli_fetch_array($ejecuta2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>entradas modificar</title>
</head>
<body>
   <div class="container shadow p-3 mb-5 bg-body rounded">
        <div>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
        <br>
        <br>
          <h2 class="modal-title" id="exampleModalLabel">Modificar Entrada</h2>
        </div>
                <div>


                    <center>
                        <table
                            class="table table-striped table table-bordered border-success table table-hover">
                            <tr class="table-striped table table-bordered border-success table table-hover">
                            <tr>
                                <th>
                                    <center>Id transportadora</center>
                                </th>
                                <td>
                                    <center><input type="text" maxlength="50" size="20"></center>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                     <center>Id envio</center>
                                 </th>
                                 <td>
                                     <center><input type="number" maxlength="50" size="20"></center>
                                </td>
                            <tr>
                                 <th>
                                     <center>Nombre empresa transportadora</center>
                                 </th>
                                 <td>
                                     <center><input type="text" maxlength="50" size="20"></center>
                                 </td>
                            </tr>
                            <tr>
                                 <th>
                                     <center>Telefono</center>
                                 </th>
                                  <td>
                                     <center><input type="tel" maxlength="50" size="20"></center>
                                 </td>
                            </tr>
                            </tr>
                        </table>
                            <P align="right"><button type="button" class="btn btn-secondary"
                                            ><i class="fa fa-times"
                                                aria-hidden="true">Cerrar</i></button>
                                        <button type="button" class="btn btn-success"><i class="fa fa-pencil"
                                                aria-hidden="true">Modificar</i></button>
                            </P>
                    </center>
                </div>
    </div>
</body>
</html>
