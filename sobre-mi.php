<?php $pg = "sobre-mi"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre mí</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
        <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="container">
            <header>
                <?php       
                include_once("menu.php")          
                ?>
            </header>
            <section id="sobre-mi">
                <div class="row mt-5">
                    <div class="col-sm-7 col-12">
                        <h1>Sobre mí</h1>
                        <h2>Analista de administración y emprendedor, enfocado en el logro de objetivos en el corto y mediano plazo. Soy una persona motivadora, que busca en todo momento los métodos óptimos para trabajar en equipo.</h2>
                        <a href="" class="btn my-4" target="_blank">Descargar CV</a>
                    </div>
                    <div class="col-sm-3 col-9 mx-5">
                        <img src="images/fotocv.jpg" alt="Esteban Palavecino" title="Esteban Palavecino" class="img-fluid img-circle">
                    </div>
                </div>
                <div class="row my-sm-4 my-3">
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-chart-line"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>ADMINISTRACIÓN</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>Análisis contable, Liquidación de impuestos, Implementación de circuitos administrativos, Pago a proveedores, Facturación, Liquidación de sueldos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2 pb-10">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-handshake"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3 class="hab-com">HABILIDADES COMERCIALES</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>Atención al cliente, Fidelización, Resolución de conflictos, Marketing digital .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-code"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>PROGRAMACIÓN</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>HTML, CSS, Javascript, Bootstrap, PHP, POO, MVC, Framework Laravel, Rest.api, jquery, Ajax, React.js.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-database"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>BASE DE DATOS</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>MySQL/MariaDB.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-language"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>IDIOMAS</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>INGLES - Intermedio<br>ESPAÑOL - Nativo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-window-restore"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>SOFTWARE</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>Tango, Bejerman, Waldbott, GIT, GitHub, Visual Code, Google Docs, MS Office, MS Windows.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 my-2">
                        <div class="bg-white">
                            <div class="p-3"><i class="fas fa-puzzle-piece"></i></div>
                            <div class="row px-3">
                                <div class="col-12">
                                    <h3>HOBBIES</h3>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-12">
                                    <p>Cocina, Música, Fútbol.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section id="experiencia">
            <div class="container py-sm-5 py-4">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2>Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2018 – 2020 - Drugstore Propio</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Encargado de local</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Venta al público, Compras a través de distintos canales, Pago a Proveedores,  Control de Stock, Análisis de costos y precio de venta, Emisión de facturas, Liquidación, control y pago de impuestos.</h4>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2015 – 2018 - Marketing One Argentina S.A</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Responsable coordinador de administración y finanzas.</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Coordinación, soporte y filtro para la gerencia, del equipo de administración y finanzas. Análisis de cuentas, Conciliaciones bancarias, Facturación, Cobranzas, Liquidación de impuestos, Reportes de gestión</h4>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2013 – 2015 - SYAR SAIC</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Administrativo contable</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Análisis de cuentas, Imputaciones contables, Conciliaciones bancarias, Liquidación de impuestos, Pago a proveedores, Liquidación de sueldos.</h4>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2012 – 2013 - Pague Por Celular S.A</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Administrativo contable</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Conciliaciones bancarias, Análisis de cuentas, Armado de cash flow, Liquidación de impuestos, Liquidación de sueldos y actualización de novedades, Reportes por puntos de venta.</h4>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2010 – 2011 - Sertec S.A</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Auxiliar de tesorería</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Pago a proveedores, Imputaciones contables, Confeccion de cheques y órdenes de pago, Control de cajas chicas, fondos fijos y adelantos a rendir, Operaciones bancarias.</h4>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 col-sm-2">
                        <h3>2007 – 2009 - Taval S.A</h3>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3>Cadete administrativo</h3>
                    </div>
                    <div class="col-12 col-sm-8">
                        <h4>Trámites bancarios, IGJ, AFIP,  ANSES; Cobranzas, Confección de recibos, Atención telefónica, Archivo, Trámites judiciales, Asistencia del sector Pago a proveedores.</h4>
                    </div>
                </div>
            </div>
        </section>
        <?php       
            include_once("footer.php")      
            ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>