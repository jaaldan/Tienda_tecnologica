<?php
 include "../../conexion/conectar.php";
 include "../../controlador/envioscontrolador.php";

 $obj = new Envios();
 if ($_POST) {

    $obj->id_envio = $_POST['id_envio'];
    $obj->id_transportadora_envio = $_POST['id_transportadora_envio'];
    $obj->direccion_envio = $_POST['direccion_envio'];
    $obj->estado_envio = $_POST['estado_envio'];
 }
 $key = $_GET['key'];
 if ($key > 0) {

    $cone = new conexion();
    $c = $cone->conectando();
    $query2 = "select * from categorias where id_categoria = '$key' ";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    $obj->id_envio = $arreglo2[0];
    $obj->id_transportadora_envio = $arreglo2[1];
    $obj->direccion_envio = $arreglo2[2];
    $obj->estado_envio = $arreglo2[3];
 }
 else {
    $obj->id_envio = "";
    $obj->id_transportadora_envio = "";
    $obj->direccion_envio = "";
    $obj->estado_envio = "";
 }

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
    <title>Eliminar Envio</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Envio</h2>
        </div>
        <form action="" name="eliminar_categoria" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                        <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_envio" id="id_envio" 
                            value="<?php echo $obj->id_envio ?>" readOnly >
                            </td>
                        </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Codigo Transportadora
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_transportadora_envio" id="id_transportadora_envio" 
                            value="<?php echo $obj->id_transportadora_envio?>" readOnly>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                           Direccion
                        </th>
                        <td class="text-center">
                          <input type="text" name="direccion_envio" id="direccion_envio" 
                          value="<?php echo $obj->direccion_envio ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                           Estado
                        </th>
                        <td class="text-center">
                          <input type="text" name="estado_envio" id="estado_envio" 
                          value="<?php echo $obj->estado_envio ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                </table>
            </center>
                <a href="envios.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="envios.php">
                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
                </a>
                </P>
        </form>
    </div>
</body>
</html>