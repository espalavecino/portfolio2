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
            <section id="contacto-envio">
                <div class="row">
                    <div class="col-12 py-5">
                        <h1>Gracias por</br> contactarte,</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-12">
                        <h2>te responderé a la brevedad.</h2>                          
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