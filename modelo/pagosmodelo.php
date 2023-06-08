<?php
     class pago{
    
                         public $id_pago;
                         public $metodo_pago;
                         public $estado_pago;

                         function agregar(){
                                             $conet = new conexion();
                                             $c = $conet->conectando();
                                             $query= "select * from pagos where metodo_pago = '$this->metodo_pago'";
                                             $ejecuta = mysqli_query($c,$query);
                                             if(mysqli_fetch_array($ejecuta)){
                                                 echo "<script> alert('El metodo de pago ya existe en el sistema')</script>";
                                             }else{
                                                 $insertar = "insert into pagos values(
                                                                                         '$this->id_pago',
                                                                                         '$this->metodo_pago',
                                                                                         '$this->estado_pago'
                                              )";
                                              echo $insertar;
                                              mysqli_query($c,$insertar);
                                              echo "<script> alert('El metodo de pago fue creado en el sistema')</script>";
                                             }
                        }

                        function modificar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $query = "select * from pagos where metodo_pago = '$this->metodo_pago' and estado_pago = '$this->estado_pago'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('El metodo de pago ya existe en el sistema')</script>";
                                            }else{
                                               $update = "update pagos set id_pago='$this->id_pago',
                                               metodo_pago='$this->metodo_pago', estado_pago='$this->estado_pago' where id_pago='$this->id_pago'";
                                               echo $update;
                                               mysqli_query($c,$update);
                                               echo "<script> alert('El metodo de pago fue modificado en el sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from pagos where id_pago='$this->id_pago'";
                                           $d = mysqli_query($c,$delete);

                                           if($d){
                                              header("Location: pagos.php");
                                            }else{
                                              echo "<script> alert('El metodo de pago no se puede eliminar')</script>";

                                          }
                        }
                        function limpiar(){

                         }

     }
?>