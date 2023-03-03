<?php
 class Clientes
 {
    public $id_cliente;
    public $id_rol;
    public $nombres;
    public $apellidos;
    public $id_tipo_documento;
    public $numero_documento;
    public $correo;
    public $numero_celular;
    public $direccion;
    public $clave;
    public $estado;
    public $imagen_cliente;

 function agregar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query = "select * from  cliente where numero_documento = '$this->numero_documento'";
        $ejecuta = mysqli_query($c, $query);
        if(mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El documento ya existe en el sistema')</script>";
        }else{
            $ruta ='../../imagenes/'.$_FILES['imagen_cliente']['name'];
            move_uploaded_file($_FILES['imagen_cliente']['tmp_name'],$ruta);
            $insertar = "insert into cliente values(
                                                    '$this->id_cliente',
                                                    '$this->id_rol',
                                                    '$this->nombres',
                                                    '$this->apellidos',
                                                    '$this->id_tipo_documento',
                                                    '$this->numero_documento',
                                                    '$this->correo',
                                                    '$this->numero_celular',
                                                    '$this->direccion',
                                                    '$this->clave',
                                                    '$this->estado',
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
        $query = "select * from cliente where numero_documento = '$this->numero_documento'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El cliente ya Existe en el Sistema')</script>";
        } else {
            $update = "update categorias set id_cliente='$this->id_cliente',
                            id_rol='$this->id_rol',
                            nombres='$this->nombres',
                            apellidos='$this->apellidos',
                            id_tipo_documento='$this->id_tipo_documento',
                            numero_documento='$this->numero_documento',
                            correo='$this->correo',
                            numero_celular='$this->numero_celular',
                            direccion='$this->direccion',
                            clave='$this->clave',
                            estado='$this->estado',
                            imagen_usuario='$this->imagen_usuario' where id_cliente='$this->id_cliente'";
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('el cliente fue Modificada en el Sistema')</script>";

        }

    }

    public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from categorias where id_cliente='$this->id_cliente'";
        $d = mysqli_query($c, $delete);

        if (mysqli_errno() == 1451) {
            echo "<script> alert('La Categoria No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
        } else {
            echo "<script> alert('La Categoria fue Eliminada en el Sistema')</script>";
        }

    }

    public function limpiar()
    {

    }

 }
?>
