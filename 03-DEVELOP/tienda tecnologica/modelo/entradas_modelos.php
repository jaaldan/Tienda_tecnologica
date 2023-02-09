<?php
class Entradas
{
    public $id_entrada;
    public $id_producto;
    public $proveedor;
    public $cantidad_entrada;
    public $valor_proveedor;

    public function agregar()
    {
        $conet = new Conexion();
        $c = $conet->conectando();
        $query = "select * from entradas where proveedor = '$this->proveedor'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El proveedor ya existe en el sistema')</script>";
        } else {
            $insertar = "insert into categorias value(
                                                                      '$this->id_categoria',
                                                                      '$this->id_producto',
                                                                      '$this->proveedor',
                                                                      '$this->cantidad_entrada',
                                                                      '$this->valor_proveedor'
                           )";
            echo $insertar;
            mysqli_query($c, $insertar);
            echo "<script> alert('El proveedor fue creado en el sistema')</script>";
        }
    }

    public function modificar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query = "select * from entradas where proveedor = '$this->proveedor'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('La entrada ya Existe en el Sistema')</script>";
        } else {
            $update = "update entradas set id_entrada='$this->id_entrada',
                                                        proveedor='$this->proveedor' where id_entrada='$this->id_entrada',
                                                        cantidad_entrada='$this->cantidad_entrada' where id_entrada='$this->id_entrada',
                                                        valor_proveedor='$this->valor_proveedor' where id_entrada='$this->id_entrada'";
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('el proveedor fue Modificado en el Sistema')</script>";

        }

    }

    public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from categorias where id_categoria='$this->id_categoria'";
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
