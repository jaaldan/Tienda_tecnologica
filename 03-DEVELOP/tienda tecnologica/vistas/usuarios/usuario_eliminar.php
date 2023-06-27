<?php
 include "../../conexion/conectar.php";
 include "../../controlador/usuariocontrolador.php";

 $obj = new Usuarios();
 if ($_POST) {

    $obj->id_usuario = $_POST['id_usuario'];
    $obj->id_rol_usuario = $_POST['id_rol_usuario'];
    $obj->nombres_usuario = $_POST['nombres_usuario'];
    $obj->apellidos_usuario = $_POST['apellidos_usuario'];
    $obj->id_tipo_documento_usuario = $_POST['id_tipo_documento_usuario'];
    $obj->numero_documento_usuario = $_POST['numero_documento_usuario'];
    $obj->correo_usuario = $_POST['correo_usuario'];
    $obj->numero_celular_usuario = $_POST['numero_celular_usuario'];
    $obj->direccion_usuario = $_POST['direccion_usuario'];
    $obj->clave_usuario = $_POST['clave_usuario'];
    $obj->estado_usuario = $_POST['estado_usuario'];
    $obj->imagen_usuario = $_POST['imagen_usuario'];
}
 $key = $_GET['key'];
 if ($key > 0) {

    $cone = new conexion();
    $c = $cone->conectando();
    $query2 = "select * from categorias where id_categoria = '$key' ";
    $ejecuta2 = mysqli_query($c, $query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    $obj->id_usuario = $arreglo2[0];
    $obj->id_rol_usuario = $arreglo2[1];
    $obj->nombres_usuario = $arreglo2[2];
    $obj->apellidos_usuario = $arreglo2[3];
    $obj->id_tipo_documento_usuario = $arreglo2[4];
    $obj->numero_documento_usuario = $arreglo2[5];
    $obj->correo_usuario = $arreglo2[6];
    $obj->numero_celular_usuario = $arreglo2[7];
    $obj->direccion_usuario = $arreglo2[8];
    $obj->clave_usuario = $arreglo2[9];
    $obj->estado_usuario = $arreglo2[10];
    $obj->imagen_usuario = $arreglo2[11];
 }
 else {
    $obj->id_usuario = "";
    $obj->id_rol_usuario = "";
    $obj->nombres_usuario = "";
    $obj->apellidos_usuario = "";;
    $obj->id_tipo_documento_usuario = "";
    $obj->numero_documento_usuario = "";
    $obj->correo_usuario = "";
    $obj->numero_celular_usuario = "";
    $obj->direccion_usuario = "";
    $obj->clave_usuario = "";
    $obj->estado_usuario = "";
    $obj->imagen_usuario = "";
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
         <h2>Eliminar Usuario</h2>
        </div>
        <form action="" name="eliminar_usuario" method="POST">
            <center>
                <table class="table table-striped table-hover table table-bordered table-sm shadow">
                        <tr class="text-center align-middle">
                            <th class="text-center">
                            Código
                            </th>
                            <td class="text-center">
                            <input type="number" name="id_usuario" id="id_usuario" 
                            value="<?php echo $obj->id_usuario ?>" readOnly >
                            </td>
                        </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Cargo
                        </th>
                        <td class="text-center">
                            <input type="text" name="id_rol_usuario" id="id_rol_usuario" 
                            value="<?php echo $obj->id_rol_usuario?>" readOnly>
                        </td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre
                        </th>
                        <td class="text-center">
                          <input type="text" name="nombres_usuario" id="nombres_usuario" 
                          value="<?php echo $obj->nombres_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Nombre
                        </th>
                        <td class="text-center">
                          <input type="text" name="nombres_usuario" id="nombres_usuario" 
                          value="<?php echo $obj->nombres_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Apellidos
                        </th>
                        <td class="text-center">
                          <input type="text" name="apellidos_usuario" id="apellidos_usuario" 
                          value="<?php echo $obj->apellidos_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Tipo De Documento
                        </th>
                        <td class="text-center">
                          <input type="text" name="id_tipo_documento_usuario" id="id_tipo_documento_usuario" 
                          value="<?php echo $obj->id_tipo_documento_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Numero De Documento
                        </th>
                        <td class="text-center">
                          <input type="text" name="numero_documento_usuario" id="numero_documento_usuario" 
                          value="<?php echo $obj->numero_documento_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Correo 
                        </th>
                        <td class="text-center">
                          <input type="text" name="correo_usuario" id="correo_usuario" 
                          value="<?php echo $obj->correo_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Numero Celular
                        </th>
                        <td class="text-center">
                          <input type="text" name="numero_celular_usuario" id="numero_celular_usuario" 
                          value="<?php echo $obj->numero_celular_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Direccion
                        </th>
                        <td class="text-center">
                          <input type="text" name="direccion_usuario" id="direccion_usuario" 
                          value="<?php echo $obj->direccion_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Contraseña 
                        </th>
                        <td class="text-center">
                          <input type="text" name="clave_usuario" id="clave_usuario" 
                          value="<?php echo $obj->clave_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Estado 
                        </th>
                        <td class="text-center">
                          <input type="text" name="estado_usuario" id="estado_usuario" 
                          value="<?php echo $obj->estado_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                    <tr class="text-center align-middle">
                        <th class="text-center">
                            Imagen
                        </th>
                        <td class="text-center">
                          <input type="text" name="imagen_usuario" id="imagen_usuario" 
                          value="<?php echo $obj->imagen_usuario ?>" readonly maxlength="50" size="20">
                        </td>            
                    </tr>
                </table>
            </center>
                <a href="usuarios.php" target="marco">
                    <P align="right"> <button type="button" class="btn btn-secondary"><i class="fa fa-times" aria-hidden="true">Cerrar</i></button>
                </a>
                <a href="usuarios.php">
                    <button type="submit" class="btn btn-primary" name="elimina">Eliminar</button>
                </a>
                </P>
        </form>
    </div>
</body>
</html>