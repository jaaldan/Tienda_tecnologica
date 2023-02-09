<?php
     class imagenes{
    
                         public $id_imagen;
                         public $id_producto;
                         public $url;

                         function agregar(){
                                             $conet = new conexion();
                                             $c = $conet->conectando();
                                             $query= "select * from imagenes where id_imagen = '$this->id_imagen'";
                                             $ejecuta = mysqli_query($c,$query);
                                             if(mysqli_fetch_array($ejecuta)){
                                                 echo "<script> alert('El codigo de la imagen ya existe en el sistema')</script>";
                                             }else{
                                                 $ruta = '../../imagenes/'.$_FILES['url']['name'];
                                                 move_uploaded_file($_FILES['url']['tmp_name'],$ruta);
                                                 $insertar = "insert into imagenes values(
                                                                                         '$this->id_imagen',
                                                                                         '$this->id_producto',
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
                                           $query = "select * from imagenes where id_producto = '$this->id_producto' and url = '$this->url'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('No se ha realizado ninguna modificación en el sistema')</script>";
                                            }else{
                                               $ruta = '../imagenes/'.$_FILES['url']['name'];
                                               move_uploaded_file($_FILES['url']['tmp_name'],$ruta);
                                               $update = "update imagenes set id_imagen='$this->id_imagen',
                                                          id_producto='$this->id_producto',
                                                          url='$ruta'where id_imagen='$this->id_imagen'";
                                               echo $update;
                                               mysqli_query($c,$update);
                                               echo "<script> alert('La imagen fue modificada en el sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from imagenes where id_imagen='$this->id_imagen'";
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