<?php $pg = "proyectos"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyectos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
        <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="container">
            <?php       
            include_once("menu.php")           
            ?>
            <section id="proyectos">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12">
                            <h1>Mis proyectos</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2>Estos son algunos de los trabajos que he realizado:</h2>
                        </div>
                    </div>
                    <div class="row my-sm-4 my-3">
                        <div class="col-sm-6 col-12 px-2 mt-4 mt-sm-0">
                            <div class="bg-white">
                                <img src="images/abmclientes.png" alt="ABM Ventas" class="img-fluid">
                                <div class="row p-3">
                                    <div class="col-12">
                                        <h3>ABM Clientes</h3>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-12">
                                        <p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6">
                                        <a href="sistema/abmclientes/" class="btn" target="_blank">Ver online</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="https://github.com/depcsuite/abmclientes" target="_blank">Código fuente</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 px-2 mt-4 mt-sm-0">
                            <div class="bg-white">
                                <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                                <div class="row p-3">
                                    <div class="col-12">
                                        <h3>Sistema de Gestión de ventas</h3>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-12">
                                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6">
                                        <a href="sistema/login" class="btn" target="_blank">Ver online</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="https://github.com/depcsuite/abmventas" target="_blank">Código fuente</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 px-2 mt-4 mt-sm-0">
                            <div class="bg-white">
                                <img src="images/sistema-admin.png" alt="ABM Ventas" class="img-fluid">
                                <div class="row p-3">
                                    <div class="col-12">
                                        <h3>Proyecto integrador</h3>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-12">
                                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines. </p>
                                    </div>
                                </div>
                                <div class="row p-3 mt-4">
                                    <div class="col-6">
                                        <a href="sistema/abmventas/abmcliente.php" class="btn" target="_blank">Ver online</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="https://github.com" target="_blank">Código fuente</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>        
        <?php       
            include_once("footer.php")        
            ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>