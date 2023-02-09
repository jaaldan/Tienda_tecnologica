<?php
     class envio{
                        public $id_envio;
                        public $id_transportadora;
                        public $direccion;
                        public $estado;

      function agregar(){
                          $cone= new Conexion();
                          $c = $cone->conectando();
                          $query= "select * from  envio where id_envio = '$this->id_envio'";
                          $ejecuta = mysqli_query($c,$query);
                          if(mysqli_fetch_array($ejecuta)){
                              echo "<script> alert('El documento ya existe en el sistema')</script>";
                          }else{
                              $insertar = "insert into envio values(
                                                                      '$this->id_envio',
                                                                      '$this->id_transportadora',
                                                                      '$this->direccion',
                                                                      '$this->estado'
                           )";
                           echo $insertar;
                           mysqli_query($c,$insertar);
                           echo "<script> alert('El documento fue creado en el sistema')</script>";
                          }
     }

     function modificar(){
                        $conet = new conexion();
                        $c = $conet->conectando();
                        $query = "select * from categorias where nombre_Categoria = '$this->nombre_categoria'";
                        $ejecuta = mysqli_query($c, $query);
                        if(mysqli_fetch_array($ejecuta)){
                           echo "<script> alert('La Categoria ya Existe en el Sistema')</script>";
                         }else{
                            $update = "update categorias set id_categoria='$this->id_categoria',
                                                        nombre_categoria='$this->nombre_categoria' where id_categoria='$this->id_categoria'";
                            echo $update;
                            mysqli_query($c,$update);
                            echo "<script> alert('La Categoria fue Modificada en el Sistema')</script>";
                       
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
