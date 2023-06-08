<?php
     class productos{
    
                         public $id_producto;
                         public $nombre_producto;
                         public $id_categoria_producto;
                         public $marca_producto;
                         public $color_producto;
                         public $pvp_con_iva_producto;
                         public $salidas_producto;
                         public $cantidad_stock_producto;
                         public $descripcion_producto;

                         function agregar(){
                                             $conet = new conexion();
                                             $c = $conet->conectando();
                                             $query= "select * from productos where nombre_producto = '$this->nombre_producto'";
                                             $ejecuta = mysqli_query($c,$query);
                                             if(mysqli_fetch_array($ejecuta)){
                                                 echo "<script> alert('El Producto ya existe en el sistema')</script>";
                                             }else{
                                                 $insertar = "insert into productos values(
                                                                                         '$this->id_producto',
                                                                                         '$this->nombre_producto',
                                                                                         '$this->id_categoria_producto',
                                                                                         '$this->marca_producto',
                                                                                         '$this->color_producto',
                                                                                         '$this->pvp_con_iva_producto',
                                                                                         '$this->salidas_producto',
                                                                                         '$this->cantidad_stock_producto',
                                                                                         '$this->descripcion_producto'
                                                                                         
                                              )";
                                              echo $insertar;
                                              mysqli_query($c,$insertar);
                                              echo "<script> alert('El Producto fue creado en el sistema')</script>";
                                             }
                        }

                        function modificar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $query = "select * from productos where nombre_producto = '$this->nombre_producto' 
                                           and id_categoria_producto = '$this->id_categoria_producto' 
                                           and marca_producto = '$this->marca_producto' 
                                           and color_producto = '$this->color_producto' 
                                           and pvp_con_iva_producto = '$this->pvp_con_iva_producto' 
                                           and salidas_producto = '$this->salidas_producto' 
                                           and cantidad_stock_producto = '$this->cantidad_stock_producto' 
                                           and descripcion_producto = '$this->descripcion_producto'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('No se ha realizado una modificación en el producto')</script>";
                                            }else{
                                               $update = "update productos set id_producto='$this->id_producto', 
                                               nombre_producto='$this->nombre_producto', 
                                               id_categoria_producto='$this->id_categoria_producto', 
                                               marca_producto='$this->marca_producto', 
                                               color_producto='$this->color_producto', 
                                               pvp_con_iva_producto='$this->pvp_con_iva_producto', 
                                               salidas_producto='$this->salidas_producto', 
                                               cantidad_stock_producto='$this->cantidad_stock_producto'  
                                               descripcion_producto= '$this->descripcion_producto'
                                               where id_producto='$this->id_producto'";
                                               echo $update;
                                               mysqli_query($c,$update);
                                               echo "<script> alert('El producto fue modificado exitosamente en el Sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           try{  
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from productos where id_producto='$this->id_producto'";
                                           $d=mysqli_query($c,$delete);
                                           echo "<script> alert('El producto fue eliminado en el Sistema')</script>"; 
                                          }
                                           catch(Exception $e){
                                           
                                                                                    
                                           //if(mysqli_errno()==1451){
                                                      echo "<script> alert('El producto no fue eliminado en el sistema porque tiene registros asociados')</script>";
                                            //}else{
                                               
                                           // }
                                          }

                        }

                        function limpiar(){

                         }

     }
?>