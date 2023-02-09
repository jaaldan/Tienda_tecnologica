<?php
     class transportadora{
                        public $id_transportadora;
                        public $nombre_transportadora;
                        public $numero_telefono;
                        public $estado;
      
      
                        function agregar(){
                          $cone = new Conexion();
                          $c = $cone->conectando();
                          $query= "select * from  transportadora where nombre_transportadora = '$this->nombre_transportadora'";
                          $ejecuta = mysqli_query($c,$query);
                          if(mysqli_fetch_array($ejecuta)){
                              echo "<script> alert('El documento ya existe en el sistema')</script>";
                          }else{
                              $insertar = "insert into transportadora values(
                                                                      '$this->id_transportadora',
                                                                      '$this->nombre_transportadora',
                                                                      '$this->numero_telefono',
                                                                      '$this->estado'
                           )";
                           echo $insertar;
                           mysqli_query($c,$insertar);
                           echo "<script> alert('El documento fue creado en el sistema')</script>";
                          }
     }

     function modificar(){
                        $cone = new conexion();
                        $c = $cone->conectando();
                        $query = "select * from transportadora where nombre_transportadora = '$this->nombre_transportadora'";
                        $ejecuta = mysqli_query($c, $query);
                        if(mysqli_fetch_array($ejecuta)){
                           echo "<script> alert('La Categoria ya Existe en el Sistema')</script>";
                         }else{
                            $update = "update transportadora set id_transportadora='$this->id_transportadora',
                                                        nombre_transportadora='$this->nombre_transportadora',
                                                        numero_telefono='$this->numero_telefono',
                                                        estado='$this->estado'
                                                        where id_transportadora='$this->id_transportadora'";
                            echo $update;
                            mysqli_query($c,$update);
                            echo "<script> alert('La Categoria fue Modificada en el Sistema')</script>";
                       
                         }

     }

     function eliminar(){
                        $conet = new conexion();
                        $c = $conet->conectando();
                        $delete = "delete from transportadora where id_transportadora='$this->id_transportadora'";
                        $d=mysqli_query($c,$delete);
                     
                    
                     
                        if(mysqli_errno()==1451){
                           echo "<script> alert('La transportadora No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
                         }else{
                            echo "<script> alert('La Categoria fue Eliminada en el Sistema')</script>";
                         }

     }

     function limpiar(){

      }
                        

     }
