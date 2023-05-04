<?php
class Usuarios
{

    public $id_usuario;
    public $id_rol_usuario;
    public $nombres_usuario;
    public $apellidos_usuario;
    public $id_tipo_documento_usuario;
    public $numero_documento_usuario;
    public $correo_usuario;
    public $numero_celular_usuario;
    public $direccion_usuario;
    public $clave_usuario;
    public $estado_usuario;
    public $imagen_usuario;

    public function agregar()
    {

        $cone = new conexion();
        $c = $cone->conectando();
        $query = "select * from  usuarios where nombres_usuario = '$this->nombres_usuario'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El documento ya existe en el sistema')</script>";
        } else {
            $insertar = "insert into usuario values(
                                                 '$this->id_usuario',
                                                 '$this->id_rol_usuario',
                                                 '$this->nombres_usuario',
                                                 '$this->apellidos_usuario',
                                                 '$this->id_tipo_documento_usuario',
                                                 '$this->numero_documento_usuario',
                                                 '$this->correo_usuario',
                                                 '$this->numero_celular_usuario',
                                                 '$this->direccion_usuario',
                                                 '$this->clave_usuario',
                                                 '$this->estado_usuario',
                                                 '$this->imagen_usuario'
         )";
            echo $insertar;
            mysqli_query($c, $insertar);
            echo "<script> alert('El documento fue creado en el sistema')</script>";
        }
    }

    public function modificar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query = "select * from usuario where nombres = '$this->nombres'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('el usuario ya Existe en el Sistema')</script>";
        } else {
            $update = "update usuario set id_usuario='$this->id_usuario',
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
                            imagen_usuario='$this->imagen_usuario' where id_usuario='$this->id_usuario'";

            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('El usuario fue Modificada en el Sistema')</script>";
        }
    }

}
