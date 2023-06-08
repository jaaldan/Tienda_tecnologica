<?php
 class Entradas
 {
    public $id_entrada_producto;
    public $id_producto_entrada;
    public $proveedor_producto_entrada;
    public $cantidad_entrada_producto;
    public $valor_proveedor_entrada_producto;

    public function agregar()
    {
        $conet = new Conexion();
        $c = $conet->conectando();
        $query = "select * from entradas_productos where proveedor_producto_entrada = '$this->proveedor_producto_entrada'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('El proveedor ya existe en el sistema')</script>";
        } else {
            $insertar = "insert into entradas_productos value(
                                                                      '$this->id_entrada_producto',
                                                                      '$this->id_producto_entrada',
                                                                      '$this->proveedor_producto_entrada',
                                                                      '$this->cantidad_entrada_producto',
                                                                      '$this->valor_proveedor_entrada_producto'
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
        $query = "select * from entradas_productos where proveedor_producto_entrada = '$this->proveedor_producto_entrada'";
        $ejecuta = mysqli_query($c, $query);
        if (mysqli_fetch_array($ejecuta)) {
            echo "<script> alert('La entrada ya Existe en el Sistema')</script>";
        } else {
            $update = "update entradas_productos set id_entrada_producto='$this->id_entrada_producto',
                                                        
            proveedor_producto_entrada='$this->proveedor_producto_entrada',
            cantidad_entrada_producto='$this->cantidad_entrada_producto',
            valor_proveedor_entrada_producto='$this->valor_proveedor_entrada_producto' where id_entrada_producto='$this->id_entrada_producto'";
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('el proveedor fue Modificado en el Sistema')</script>";

        }

    }

    public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from entradas_productos where id_categoria='$this->id_categoria'";
        $d = mysqli_query($c, $delete);

        if (mysqli_errno() == 1451) {
            echo "<script> alert('el proveedor No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
        } else {
            echo "<script> alert('el proveedor fue Eliminada en el Sistema')</script>";
        }

    }

    public function limpiar()
    {

    }

 }
?>
