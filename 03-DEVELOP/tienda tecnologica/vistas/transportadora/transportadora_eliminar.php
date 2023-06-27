<?php
 include "../../conexion/conectar.php";
 include "../../controlador/transportadoracontrolador.php";

 $obj = new Transportadoras();
 if ($_POST) {

    $obj->id_transportadora = $_POST['id_transportadora'];
    $obj->nombre_transportadora = $_POST['nombre_transportadora'];
    $obj->numero_telefono_transportadora = $_POST['numero_telefono_transportadora'];
    $obj->estado_transportadora = $_POST['estado_transportadora'];
 }
 $key = $_GET['key'];
 if ($key > 0) {

    $cone = new conexion();
    $c = $cone->conectando();
    $query2 = "select * from categorias where id_categoria = '$key' ";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    $obj->id_transportadora = $arreglo2[0];
    $obj->nombre_transportadora = $arreglo2[1];
    $obj->numero_telefono_transportadora = $arreglo2[2];
    $obj->estado_transportadora = $arreglo2[3];
 }
 else {
    $obj->id_transportadora = "";
    $obj->nombre_transportadora = "";
    $obj->numero_telefono_transportadora = "";
    $obj->estado_transportadora = "";

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
    <title>Eliminar Transportadora</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Transportadora</h2>
        </div>
        <form action="" name="eliminar_categoria" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                        <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_transportadora" id="id_transportadora" 
                            value="<?php echo $obj->id_transportadora ?>" readOnly >
                            </td>
                        </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombre_transportadora" id="nombre_transportadora" 
                            value="<?php echo $obj->nombre_transportadora?>" readOnly>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Numero De Telefono
                        </th>
                        <td class="text-center">
                          <input type="text" name="numero_telefono_transportadora" id="numero_telefono_transportadora" 
                          value="<?php echo $obj->numero_telefono_transportadora ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                          <input type="text" name="estado_transportadora" id="estado_transportadora" 
                          value="<?php echo $obj->estado_transportadora ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                </table>
            </center>
                <a href="transportadora.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="transportadora.php">
                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
                </a>
                </P>
        </form>
    </div>
</body>
</html>