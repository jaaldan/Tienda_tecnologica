<?php
class pedidos{
  public $id_pedido;
  public $id_cliente_pedido;
  public $direccion_pedido;
  public $fecha_pedido;
  public $estado_pedido;
  public $id_producto_detalle_pedido;
  public $cantidad_producto_detalle_pedido;
  public $valor_iva_detalle_pedido;
  public $precio_venta_detalle_pedido;
                       
  function agregar(){
      $conet = new conexion();
      $c = $conet->conectando();
      $query = "SELECT * FROM pedidos WHERE id_pedido = ?";
      $stmtVerificar = mysqli_prepare($c, $query);
      mysqli_stmt_bind_param($stmtVerificar, 'i', $this->id_pedido);
      mysqli_stmt_execute($stmtVerificar);
      mysqli_stmt_store_result($stmtVerificar);
      $numFilas = mysqli_stmt_num_rows($stmtVerificar);
      if ($numFilas > 0) {
          echo "<script> alert('El Id pedido ya existe en el sistema')</script>";
      } else {
          $insertar = "INSERT INTO pedidos VALUES (
              '$this->id_pedido',
              '$this->id_cliente_pedido',
              '$this->direccion_pedido',
              '$this->fecha_pedido',
              '$this->estado_pedido'
          )";
          $stmtPedido = mysqli_prepare($c, $insertar);
          mysqli_stmt_execute($stmtPedido);
  
          $insertar2 = "INSERT INTO detalle_pedidos VALUES (
              '$this->id_pedido',
              '$this->id_producto_detalle_pedido',
              '$this->cantidad_producto_detalle_pedido',
              '$this->valor_iva_detalle_pedido',
              '$this->precio_venta_detalle_pedido'
          )";
          $stmtDetalle = mysqli_prepare($c, $insertar2);
          mysqli_stmt_execute($stmtDetalle);
  
          echo "<script> alert('El pedido fue creado exitosamente en el sistema')</script>";
      }
  
      // Cerrar las consultas preparadas y la conexión a la base de datos
      mysqli_stmt_close($stmtVerificar);
      mysqli_stmt_close($stmtPedido);
      mysqli_stmt_close($stmtDetalle);
      mysqli_close($c);
  }
                        function modificar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $query = "select * from pedidos where id_cliente_pedido = '$this->id_cliente_pedido' and
                                           direccion_pedido = '$this->direccion_pedido' and fecha_pedido = '$this->fecha_pedido' and estado_pedido = '$this->estado_pedido'";
                                           $ejecuta = mysqli_query($c, $query);
                                           if(mysqli_fetch_array($ejecuta)){
                                              echo "<script> alert('El pedido ya existe en el sistema')</script>";
                                            }else{
                                              $update = "update pedidos set id_pedido='$this->id_pedido',
                                              id_cliente_pedido='$this->id_cliente_pedido', 
                                              direccion_pedido ='$this->direccion_pedido',
                                              fecha_pedido ='$this->fecha_pedido', 
                                              estado_pedido ='$this->estado_pedido'  
                                              where id_pedido ='$this->id_pedido'";
                                              echo $update;
                                              mysqli_query($c,$update);
                                              echo "<script> alert('El pedido fue modificado en el sistema')</script>";
                                          
                                            }

                        }
                        function eliminar(){
                                           $conet = new conexion();
                                           $c = $conet->conectando();
                                           $delete = "delete from pedidos where id_pedido='$this->id_pedido'";
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