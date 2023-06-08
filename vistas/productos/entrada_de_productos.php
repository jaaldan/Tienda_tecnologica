<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <title>Entrada De Prodcutos</title>
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-body rounded">

        <head>
            <center><img src="../../img/logo_3_T_T.jpg" width="1000" height="150" alt=""></center>
            <br>
            <br>
            <h2>Entrada De Productos</h2>
        </head>
        <br>
        <div class="campo" id="filtropro">
            <center>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Digite el Nombre o Código del producto"
                        aria-label="Search">
                    <button type="submit" id="buscar" class="btn btn-primary"><i class="fa fa-search"
                            aria-hidden="true">Buscar</i></button>
                </form>
            </center>
        </div>
        <div class="marco" align="left">
            <button type="button" class="btn btn-success"> <i class="fa fa-list-ul" aria-hidden="true"></i>
                Listar</button>
        </div>
        <section>
            <table class="table-light table table-striped table table-bordered border-success table table-hover">
                <tr class="table-info table table-striped table table-bordered border-success table table-hover">
                    <th>
                        <center>Id Entrada</center>
                    </th>
                    <th>
                        <center>Id Producto</center>
                    </th>
                    <th>
                        <center>Proveedor</center>
                    </th>
                    <th>
                        <center>Cantidad Entrada</center>
                    </th>
                    <th>
                        <center>Acciones</center>
                    </th>
                </tr>
                <tr>
                    <td>
                        <center>123</center>
                    </td>
                    <td>
                        <center>FGR35534</center>
                    </td>
                    <td>
                        <center>003</center>
                    </td>
                    <td>
                        <center>01</center>
                    </td>

                    <td>
                        <center><button name="ver" class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fa fa-eye" aria-hidden="true">Ver</i></button>
                            <button name="modificar" class="btn btn-warning" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal3"><i class="fa fa-pencil"
                                    aria-hidden="true">Modificar</i></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>111</center>
                    </td>
                    <td>
                        <center>GHFBF6565</center>
                    </td>
                    <td>
                        <center>004</center>
                    </td>
                    <td>
                        <center>01</center>
                    </td>

                    <td>
                        <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye"
                                    aria-hidden="true">Ver</i></button>
                            <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil"
                                    aria-hidden="true">Modificar</i></button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>222</center>
                    </td>
                    <td>
                        <center>JGFTR65767</center>
                    </td>
                    <td>
                        <center>005</center>
                    </td>
                    <td>
                        <center>01</center>
                    </td>
                    <td>
                        <center><button name="ver" class="btn btn-primary" type="button"><i class="fa fa-eye"
                                    aria-hidden="true">Ver</i></button>
                            <button name="modificar" class="btn btn-warning" type="button"><i class="fa fa-pencil"
                                    aria-hidden="true">Modificar</i></button>
                        </center>
                    </td>
                </tr>
            </table>
            <!-- Modal ver -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="Entrada Prodcuto" id="exampleModalLabel">Entrada Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <table
                                    class="table table-striped table table-bordered border-success table table-hover">
                                    <tr class="table-striped table table-bordered border-success table table-hover">
                                    <tr>
                                        <th>
                                            <center>Id Entrada</center>
                                            <center>
                                        <td>123</td>
                            </center>
                            </tr>
                            <tr>
                                <th>
                                    <center>Id Producto</center>
                                    <center>
                                <td>FDJFD45465</td>
                                </center>
                                </th>

                            </tr>
                            <tr>
                                <th>
                                    <center>Proveedor</center>
                                    <center>
                                <td>003</td>
                                </center>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <center>Cantidad Entrada</center>
                                    <center>
                                <td>01</td>
                                </center>
                                </th>
                            </tr>
                            </table>
                            <P align="right">
                            <P align="right"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fa fa-times" aria-hidden="true">Cerrar</i></button></P>
                            </P>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal Modificar -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modificar Entrada Prodcuto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <section>
                                <br>
                                <center>
                                    <table
                                        class="table table-striped table table-bordered border-success table table-hover">
                                        <tr class="table-striped table table-bordered border-success table table-hover">
                                        <tr>
                                            <th>
                                                <center>Id transportadora</center>
                                            </th>
                                            <td>
                                                <center><input type="text" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <center>Id envio</center>
                                            </th>
                                            <td>
                                                <center><input type="number" maxlength="50" size="20"></center>
                                            </td>
                                        <tr>
                                            <th>
                                                <center>Nombre empresa transportadora</center>
                                            </th>
                                            <td>
                                                <center><input type="text" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <center>Telefono</center>
                                            </th>
                                            <td>
                                                <center><input type="tel" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        </tr>
                                    </table>
                                    <P align="right"> <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal"><i class="fa fa-times"
                                                aria-hidden="true">Cerrar</i></button>
                                        <button type="button" class="btn btn-success"><i class="fa fa-pencil"
                                                aria-hidden="true">Modificar</i></button>
                                    </P>
                                </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agrega Pedido</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <section>
                                <br>
                                <center>
                                    <table
                                        class="table table-striped table table-bordered border-success table table-hover">
                                        <tr class="table-striped table table-bordered border-success table table-hover">
                                        <tr>
                                            <th>
                                                <center>Id transportadora</center>
                                            </th>
                                            <td>
                                                <center><input type="number" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <center>Id envio</center>
                                            </th>
                                            <td>
                                                <center><input type="number" maxlength="50" size="20"></center>
                                            </td>
                                        <tr>
                                            <th>
                                                <center>Nombre empresa transportadora</center>
                                            </th>
                                            <td>
                                                <center><input type="text" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <center>Telefono</center>
                                            </th>
                                            <td>
                                                <center><input type="tel" maxlength="50" size="20"></center>
                                            </td>
                                        </tr>
                                        </tr>
                                    </table>
                                    <P align="right"> <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal"><i class="fa fa-times"
                                                aria-hidden="true">Cerrar</i></button>
                                        <button type="button" class="btn btn-success"><i class="fa fa-truck"
                                                aria-hidden="true">Agregar</i></button>
                                    </P>
                                </center>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
            </div>
            <br>
            <P align="right"><button name="atras" class="btn btn-primary" type="button"><i class="fa fa-arrow-left"
                        aria-hidden="true">Atras</i></button>
                <a href="entradas.php"><button name="agregar" class="btn btn-success" type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal4"><i class="fa fa-address-book-o"
                            aria-hidden="true">Agregar Pedido</i></button></a>
            </P>
            <br>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-arrow-left"
                                aria-hidden="true">Anterior</i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-arrow-right" aria-hidden="true">Siguiente</i></a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>
</body>

</html>
