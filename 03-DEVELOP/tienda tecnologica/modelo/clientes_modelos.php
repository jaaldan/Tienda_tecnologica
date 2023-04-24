<?php
 class Clientes
 {
    public $id_cliente;
    public $id_rol_cliente;
    public $nombres_cliente;
    public $apellidos_cliente;
    public $id_tipo_documento_cliente;
    public $numero_documento_cliente;
    public $correo_cliente;
    public $numero_celular_cliente;
    public $direccion_cliente;
    public $clave_cliente;
    public $estado_cliente;
    public $imagen_cliente;

 function agregar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query = "select * from  clientes where numero_documento_cliente = '$this->numero_documento_cliente'";
        $ejecuta = mysqli_query($c, $query);
        if(mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El documento ya existe en el sistema')</script>";
        }else{
            $ruta ='../../imagenes/'.$_FILES['imagen_cliente']['name'];
            move_uploaded_file($_FILES['imagen_cliente']['tmp_name'],$ruta);
            $insertar = "insert into cliente values(
                                                    '$this->id_cliente',
                                                    '$this->id_rol_cliente',
                                                    '$this->nombres_cliente',
                                                    '$this->apellidos_cliente',
                                                    '$this->id_tipo_documento_cliente',
                                                    '$this->numero_documento_cliente',
                                                    '$this->correo_cliente',
                                                    '$this->numero_celular_cliente',
                                                    '$this->direccion_cliente',
                                                    '$this->clave_cliente',
                                                    '$this->estado_cliente',
                                                    '$ruta'
                           )";
            echo $insertar;
            mysqli_query($c, $insertar);
            echo "<script> alert('El cliente fue creado en el sistema')</script>";
        }
    }

    public function modificar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query = "select * from clientes where numero_documento_cliente = '$this->numero_documento_cliente'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El cliente ya Existe en el Sistema')</script>";
        } else {
            $update = "update clientes set id_cliente='$this->id_cliente',
            id_rol_cliente='$this->id_rol_cliente',
            nombres_cliente='$this->nombres_cliente',
            apellidos_cliente='$this->apellidos_cliente',
            id_tipo_documento_cliente='$this->id_tipo_documento_cliente',
            numero_documento_cliente='$this->numero_documento_cliente',
            correo_cliente='$this->correo_cliente',
            numero_celular_cliente='$this->numero_celular_cliente',
            direccion_cliente='$this->direccion_cliente',
            clave_cliente='$this->clave_cliente',
            estado_cliente='$this->estado_cliente',
            imagen_cliente='$this->imagen_cliente' where id_cliente='$this->id_cliente'";
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('el cliente fue Modificada en el Sistema')</script>";

        }

    }

    public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from clientes where id_cliente='$this->id_cliente'";
        $d = mysqli_query($c, $delete);

        if (mysqli_errno() == 1451) {
            echo "<script> alert('el Cliente No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
        } else {
            echo "<script> alert('el Cliente fue Eliminada en el Sistema')</script>";
        }

    }

    public function limpiar()
    {

    }

 }
?>
