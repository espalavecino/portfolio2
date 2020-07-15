<?php $pg = "contacto"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
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
            </header>
            <section id="contacto">
                <div class="row">
                    <div class="col-12 py-5">
                        <h1>¡Trabajemos juntos!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-12">
                        <h2>Para más detalles sobre mi<br> trabajo podés ver mi
                            <a href="https://www.linkedin.com/in/esteban-palavecino-06354a120/" target="_blank">
                            Linkedin,</a><br> descargar mi CV o mandarme<br> un mensaje.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-10">
                        <form action=" " method="post">
                            <div class="row">
                                <div class="col-sm-6 col-12 py-2">
                                    <input type="text" placeholder="NOMBRE" class="form-control">
                                </div>
                                <div class="col-sm-6 col-12 py-2">
                                    <input type="email" placeholder="CORREO" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-12 py-2">
                                    <input type="text" placeholder="ASUNTO" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 py-2">
                                    <textarea placeholder="MENSAJE" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="my-2 mx-auto">
                                    <button type="submit" class="btn">ENVIAR</button>
                                </div>
                            </div>
                        </form>
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