<?php
 class Ventas
{
    public $id_venta;
    public $id_pago_venta;
    public $id_pedido_venta;
    public $fecha_venta;
    public $hora_venta;
    public $valor_total_venta;
    public $estado_venta;

    public function agregar()
    {
        $conet = new Conexion();
        $c = $conet->conectando();
        $query5 = "select * from  ventas where id_venta = '$this->id_venta'";
        $ejecuta5 = mysqli_query($c, $query5);
        if (mysqli_fetch_array($ejecuta5)) {
            echo "<script> alert('La venta ya existe en el sistema')</script>";
        } else {
            $insertar = "insert into ventas values(
                                                                      '$this->id_venta',
                                                                      '$this->id_pago_venta',
                                                                      '$this->id_pedido_venta',
                                                                      '$this->fecha_venta',
                                                                      '$this->hora_venta',
                                                                      '$this->valor_total_venta',
                                                                      '$this->estado_venta'
                           )";
            echo $insertar;
            mysqli_query($c, $insertar);
            echo "<script> alert('la venta ya fue creado en el sistema')</script>";
        }
    }

    public function modificar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $query5 = "select * from ventas where '' = '$this->id_pago_venta'";
        $ejecuta5 = mysqli_query($c, $query5);
        if (mysqli_fetch_array($ejecuta5)) {
            echo "<script> alert('El id no puede estar vacio')</script>";
        } else {
            $update = "update ventas set id_venta='$this->id_venta',
            id_pago_venta='$this->id_pago_venta',
            id_pedido_venta='$this->id_pedido_venta',
            fecha_venta='$this->fecha_venta',
            hora_venta='$this->hora_venta ',
            valor_total_venta='$this->valor_total_venta',
            estado_venta='$this->estado_venta'
            where id_venta='$this->id_venta'";

            
            echo $update;
            mysqli_query($c, $update);
            echo "<script> alert('La venta fue Modificada en el Sistema')</script>";
        }
    }

    

    /*
   public function eliminar()
    {
        $conet = new conexion();
        $c = $conet->conectando();
        $delete = "delete from ventas where id_venta='$this->id_venta'";
        $d = mysqli_query($c, $delete);

        if (mysqli_errno() == 1451) {
            echo "<script> alert('el documento No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
        } else {
            echo "<script> alert('el documento fue Eliminada en el Sistema')</script>";
        }

    }

    function limpiar()
    {

    }
    */

}
?>
