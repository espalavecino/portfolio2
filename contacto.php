<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

include_once "PHPMailer/src/SMTP.php";
include_once "PHPMailer/src/PHPMailer.php";
$msg = "";

function guardarCorreo($correo)
{
    $archivo = fopen("mails.txt", "a+");
    fwrite($archivo, $correo . ";\n\r");
    fclose($archivo);
}

if ($_POST) { /* es postback */

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != "" && $correo != "") {
        guardarCorreo($correo);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.estebanpalavecino.com.ar"; // SMTP a utilizar. Por ej. mail.dominio.com.ar
        $mail->Username = "info@estebanpalavecino.com.ar"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@estebanpalavecino.com.ar"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = "Esteban Palavecino";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        //Destinatario
        $mail->addAddress($correo);
        //$mail->addBCC("es.palavecino@gmail.com");
        $mail->Subject = "Contacto página web";
        $mail->Body = "Recibimos tu consulta, <br>te responderemos a la brevedad.";
        //  if(!$mail->Send()){
        //     $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        //   }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Nosotros
        $mail->addAddress("es.palavecino@gmail.com");
        $mail->Subject = "Recibiste un mensaje desde tu página web";
        $mail->Body = "Te escribió $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

        if ($mail->Send()) {
        //if (1==1) {
            header('Location: confirmacion-envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
        } else {
        $msg = "Complete todos los campos";
    }

}
 
 ?>

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
            <section id="contacto">
                <?php if (isset($msg) && $msg != ""): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                        <?php echo $msg; ?>
                        </div>
                    </div>
                </div>
                <?php endif;?>
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
                                    <input type="text" placeholder="NOMBRE" name="txtNombre" class="form-control">
                                </div>
                                <div class="col-sm-6 col-12 py-2">
                                    <input type="email" placeholder="CORREO" name="txtCorreo" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-12 py-2">
                                    <input type="text" placeholder="ASUNTO" name="txtAsunto" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 py-2">
                                    <textarea placeholder="MENSAJE" name="txtMensaje" class="form-control"></textarea>
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