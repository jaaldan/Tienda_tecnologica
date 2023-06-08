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
 if ($key > 0) {

    $cone = new conexion();
    $c = $cone->conectando();
    $query2 = "select * from categorias where id_categoria = '$key' ";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    $obj->id_categoria = $arreglo2[0];
    $obj->nombre_categoria = $arreglo2[1];
    $obj->estado_categoria = $arreglo2[2];
 }
 else {
    $obj->id_categoria = "";
    $obj->nombre_categoria = "";
    $obj->estado_categoria = "";
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
    <title>Eliminar Categoria</title>
</head>

<body>
    <div class="container-fluid p-3 mb-5 bg-body rounded container shadow">
        <div>
           <center><img src="../../img/logo_3_T_T.jpg" width="550px" height="110px" alt=""></center>
         <br>
         <br>
         <h2>Eliminar Categoria</h2>
        </div>
        <form action="" name="eliminar_categoria" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                        <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_categoria" id="id_categoria" 
                            value="<?php echo $obj->id_categoria ?>" readOnly >
                            </td>
                        </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre Categoria
                        </th>
                        <td class="text-center">
                            <input type="text" name="nombre_categoria" id="nombre_categoria" 
                            value="<?php echo $obj->nombre_categoria?>" readOnly>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado
                        </th>
                        <td class="text-center">
                          <input type="text" name="estado_categoria" id="estado_categoria" 
                          value="<?php echo $obj->estado_categoria ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                </table>
            </center>
                <a href="categorias.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="categorias.php">
                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
                </a>
                </P>
        </form>
    </div>
</body>
</html>