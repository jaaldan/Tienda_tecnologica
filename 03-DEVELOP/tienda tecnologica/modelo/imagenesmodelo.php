<?php
     class imagenes{
    
                         public $id_imagen;
                         public $id_producto_imagen;
                         public $imagen_producto;

                         function agregar(){
                                             $conet = new conexion();
                                             $c = $conet->conectando();
                                             $query= "select * from imagenes where id_imagen = '$this->id_imagen'";
                                             $ejecuta = mysqli_query($c,$query);
                                             if(mysqli_fetch_array($ejecuta)){
                                                 echo "<script> alert('La imagen ya existe en el sistema')</script>";
                                             }else{
                                                 $ruta = '../../imagenes/'.$_FILES['imagen_producto']['name'];
                                                 move_uploaded_file($_FILES['imagen_producto']['tmp_name'],$ruta);
                                                 $insertar = "insert into imagenes values(
                                                                                         '$this->id_imagen',
                                                                                         '$this->id_producto_imagen',
                                                                                         '$ruta'
                                              )";
                                              echo $insertar;
                                              mysqli_query($c,$insertar);
                                              echo "<script> alert('La imagen ha sido agregada en el sistema')</script>";
                                             }
                        }
                        function modificar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $query= "select * from imagenes where id_producto_imagen = '$this->id_producto_imagen' 
                                           and imagen_producto = '$this->imagen_producto'";
                                           $ejecuta = mysqli_query($c,$query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('No se ha realizado ninguna modificación en el sistema')</script>";
                                            }else{
                                               $ruta = '../../imagenes/'.$_FILES['imagen_producto']['name'];
                                               move_uploaded_file($_FILES['imagen_producto']['tmp_name'],$ruta);
                                               $update = "update imagenes set id_producto_imagen='$this->id_producto_imagen',
                                                          imagen_producto='$ruta' where id_imagen='$this->id_imagen'";
                                               /*echo $update;*/
                                               mysqli_query($c,$update);
                                               echo "<script> alert('La imagen fue modificada en el sistema')</script>";
                                            }
                        }
                        function eliminar(){
                           $conet = new conexion();
                           $c = $conet->conectando();
                           $delete = "delete from imagenes where id_imagen='$this->id_imagen'";
                           $d = mysqli_query($c,$delete);

                           if($d){
                              header("Location: imagenes.php?key=");
                            }else{
                              echo "<script> alert('La imagen no se puede eliminar')</script>";

                          }

                        }

                        function limpiar(){

                         }

     }
?>