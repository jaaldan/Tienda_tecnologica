<?php
     class productos{
    
                         public $id_producto;
                         public $nombre_producto;
                         public $id_categoria;
                         public $marca;
                         public $color;
                         public $pvp_con_iva;
                         public $salidas;
                         public $cantidad_stock;

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
                                                                                         '$this->id_categoria',
                                                                                         '$this->marca',
                                                                                         '$this->color',
                                                                                         '$this->pvp_con_iva',
                                                                                         '$this->salidas',
                                                                                         '$this->cantidad_stock'
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
                                           and id_categoria  = '$this->id_categoria' and marca  = '$this->marca' and color  = '$this->color'
                                           and pvp_con_iva  = '$this->pvp_con_iva' and salidas  = '$this->salidas' and cantidad_stock  = '$this->cantidad_stock'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('No se ha realizado una modificación en el producto')</script>";
                                            }else{
                                               $update = "update productos set id_producto='$this->id_producto',
                                               nombre_producto='$this->nombre_producto', 
                                               id_categoria ='$this->id_categoria',
                                               marca ='$this->marca', 
                                               color ='$this->color', 
                                               pvp_con_iva ='$this->pvp_con_iva', 
                                               salidas ='$this->salidas', 
                                               cantidad_stock ='$this->cantidad_stock'  
                                               where id_producto='$this->id_producto'";
                                               echo $update;
                                               mysqli_query($c,$update);
                                               echo "<script> alert('El producto fue modificado exitosamente en el Sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from productos where id_producto='$this->id_producto'";
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