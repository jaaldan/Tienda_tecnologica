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
                                           $query = "select * from pago where metodo_pago = '$this->metodo_pago' and estado = '$this->estado'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('El metodo de pago ya Existe en el Sistema')</script>";
                                            }else{
                                               $update = "update pago set id_pago='$this->id_pago',
                                                          metodo_pago='$this->metodo_pago', estado='$this->estado' where id_pago='$this->id_pago'";
                                               echo $update;
                                               mysqli_query($c,$update);
                                               echo "<script> alert('El metodo de pago fue Modificado en el Sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from categorias where id_categoria='$this->id_categoria'";
                                           $d=mysqli_query($c,$delete);
                                        
                                       
                                        
                                           if(mysqli_errno()==1451){
                                              echo "<script> alert('La Categoria No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
                                            }else{
                                               echo "<script> alert('La Categoria fue Eliminada en el Sistema')</script>";
                                            }

                        }

                        function limpiar(){

                         }

     }
?>