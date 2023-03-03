<?php
     class pedidos{
    
                         public $id_pedido;
                         public $id_cliente;
                         public $direccion;
                         public $fecha;
                         public $estado;

                         function agregar(){
                                             $conet = new conexion();
                                             $c = $conet->conectando();
                                             $query= "select * from pedido where id_pedido = '$this->id_pedido'";
                                             $ejecuta = mysqli_query($c,$query);
                                             if(mysqli_fetch_array($ejecuta)){
                                                 echo "<script> alert('El Id pedido ya existe en el sistema')</script>";
                                             }else{
                                                 $insertar = "insert into pedido values(
                                                                                         '$this->id_pedido',
                                                                                         '$this->id_cliente',
                                                                                         '$this->direccion',
                                                                                         '$this->fecha',
                                                                                         '$this->estado'
                                              )";
                                              echo $insertar;
                                              mysqli_query($c,$insertar);
                                              echo "<script> alert('El pedido fue creado en el sistema')</script>";
                                             }
                        }

                        function modificar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $query = "select * from pedido where id_cliente = '$this->id_cliente' and
                                           direccion = '$this->direccion' and fecha = '$this->fecha' and estado = '$this->estado'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('El pedido ya existe en el sistema')</script>";
                                            }else{
                                              $update = "update pedido set id_pedido='$this->id_pedido',
                                              id_cliente='$this->id_cliente', 
                                              direccion ='$this->direccion',
                                              fecha ='$this->fecha', 
                                              estado ='$this->estado'  
                                              where id_pedido ='$this->id_pedido'";
                                              echo $update;
                                              mysqli_query($c,$update);
                                              echo "<script> alert('El pedido fue modificado en el sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from pedido where id_pedido='$this->id_pedido'";
                                           $d=mysqli_query($c,$delete);
                                           if(mysqli_errno()==1451){
                                              echo "<script> alert('El pedido no fue eliminado en el sistema porque tiene registros asociados')</script>";
                                            }else{
                                               echo "<script> alert('El pedido fue eliminado exitosamente del sistema')</script>";
                                            }

                        }

                        function limpiar(){

                         }

     }
?>