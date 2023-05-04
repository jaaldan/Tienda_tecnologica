<?php
 class Documentos
 {
    public $id_tipo_documento;
    public $nombre_documento;
    public $acronimo_documento;
    public $estado_documento;

    public function agregar()
    {
        $conet = new Conexion();
        $c = $conet->conectando();
        $query5 = "select * from  tipo_documentos where nombre_documento = '$this->nombre_documento'";
        $ejecuta5 = mysqli_query($c, $query5);
        if (mysqli_fetch_array($ejecuta5)) {
            echo "<script> alert('El documento ya existe en el sistema')</script>";
        } else {
            $insertar = "insert into tipo_documentos values(
                                                                      '$this->id_tipo_documento',
                                                                      '$this->nombre_documento',
                                                                      '$this->acronimo_documento',
                                                                      '$this->estado_documento'
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
        $query5 = "select * from tipo_documentos where nombre_documento = '$this->nombre_documento'";
        $ejecuta5 = mysqli_query($c, $query5);
        if (mysqli_fetch_array($ejecuta5)) {
            echo "<script> alert('El documento ya Existe en el Sistema')</script>";
        } else {
            $update = "update tipo_documentos set id_tipo_documento='$this->id_tipo_documento',
                                                        nombre_documento='$this->nombre_documento',
                                                        acronimo_documento='$this->acronimo_documento',
                                                        estado_documento='$this->estado_documento' where id_tipo_documento='$this->id_tipo_documento'";
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('el documento fue Modificada en el Sistema')</script>";

        }

    }

    public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from tipo_documentos where id_tipo_documento='$this->id_tipo_documento'";
        $d = mysqli_query($c, $delete);

        if (mysqli_errno() == 1451) {
            echo "<script> alert('el documento No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
        } else {
            echo "<script> alert('el documento fue Eliminada en el Sistema')</script>";
        }

    }

    public function limpiar()
    {

    }

 }
?>
