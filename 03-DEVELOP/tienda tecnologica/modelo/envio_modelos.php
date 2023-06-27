<?php
     class Envios{
                        public $id_envio;
                        public $id_transportadora_envio;
                        public $direccion_envio;
                        public $estado_envio;

                         Public function agregar(){
                          $cone= new Conexion();
                          $c = $cone->conectando();
                          $query= "select * from  envios where '' = '$this->id_envio'";
                          $ejecuta = mysqli_query($c,$query);
                          if(mysqli_fetch_array($ejecuta)){
                              echo "<script> alert('El envio ya existe en el sistema')</script>";
                          }else{
                              $insertar = "insert into envios values(
                                                                      '$this->id_envio',
                                                                      '$this->id_transportadora_envio',
                                                                      '$this->direccion_envio',
                                                                      '$this->estado_envio'
                           )";
                           echo $insertar;
                           mysqli_query($c,$insertar);
                           echo "<script> alert('El envio fue creado en el sistema')</script>";
                          }
     }

    public function modificar(){
                        $conet = new conexion();
                        $c = $conet->conectando();
                        $query = "select * from envios where '' = '$this->id_envio'";
                        $ejecuta = mysqli_query($c, $query);
                        if(mysqli_fetch_array($ejecuta)){
                           echo "<script> alert('El envio ya Existe en el Sistema')</script>";
                         }else{
                            $update = "update envios set id_envio='$this->id_envio',
                                                        id_transportadora_envio='$this->id_transportadora_envio',
                                                        direccion_envio='$this->direccion_envio'
                                                        where estado_envio='$this->estado_envio'";
                            echo $update;
                            mysqli_query($c,$update);
                            echo "<script> alert('El envio fue Modificada en el Sistema')</script>";
                       
                         }

     }

     /*
     function eliminar(){
                        $conet = new conexion();
                        $c = $conet->conectando();
                        $delete = "delete from transportadora where id_transportadora_envio='$this->id_transportadora_envio'";
                        $d=mysqli_query($c,$delete);
                     
                    
                     
                        if(mysqli_errno()==1451){
                           echo "<script> alert('La Categoria No fue Eliminada en el Sistema porque tiene Registros Asociados')</script>";
                         }else{
                            echo "<script> alert('La Categoria fue Eliminada en el Sistema')</script>";
                         }

     }
     
     function limpiar(){

      }
      */
                        

     }
?>
