<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Admin
{
  public function ValidarDatos()
  {
    $contador = 0;
    //NOMBRE

      if (isset($_POST['nombre']) && $_POST['nombre'] != '')
      {
        $contador ++;
      }
      else
      {
        echo '<script>error("nombre_text");</script>';
      }
      //CORREO
      if (isset($_POST['correo']) && filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))
      {
        $contador ++;
      }
      else
      {
        echo '<script>error("correo_text");</script>';
      }
      //ASUNTO
      if (isset($_POST['asunto']) && $_POST['asunto'] != '')
      {
        $contador ++;
      }
      else
      {
        echo '<script>error("asunto_text");</script>';
      }
      //MENSAJE
      if (isset($_POST['mensaje']) && $_POST['mensaje'] != '')
      {
        $contador ++;
      }
      else
      {
        echo '<script>error("mensaje_text");</script>';
      }

      //CONTADOR
      if ($contador === 4)
      {
        return true;
      }
  }//Validar
  function GuardarDatos($nombre,$correo,$asunto)
  {
    $_SESSION['nombre'] = $nombre;
    $_SESSION['correo'] = $correo;
    $_SESSION['asunto'] = $asunto;
  }
  function Enviar()
  {
    //Variables
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    //Datos guardados
    $this->GuardarDatos($nombre,$correo,$asunto,$mensaje);
    //Inicio de verificacion y envio de datos
    if (isset($_POST['btn_enviar']))
    {
      $validos = $this->ValidarDatos();
      if ($validos)
      {
        $mensajeCompleto = "nombre: $nombre \n, correo: $correo \n, mensaje: $mensaje";
        //Enviar correo
              $mail = new PHPMailer(true);
              try {
                  //Server settings
                  $mail->SMTPDebug = 0;                      //ver errores
                  $mail->isSMTP();                                            //Send using SMTP
                  $mail->Host       = 'smtp.gmail.com';                     //servicio de correo
                  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                  $mail->Username   = 'lunatobias2406@gmail.com';                     //SMTP username
                  $mail->Password   = 'TobiyDami2406';                               //SMTP password
                  $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                  $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                  $mail->SMTPOptions = array(
                    'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                    )
                  );
                  //Recipients
                  $mail->setFrom('lunatobias2406@gmail.com', 'Contacto'); //Desde donde se envia
                  $mail->addAddress('tobias-luna@hotmail.com', 'Yo');     //Quien resive

                  //Content
                  $mail->isHTML(true);                                  //Acepta HTML
                  $mail->Subject = $asunto; //Asunto
                  $mail->Body    = $mensajeCompleto; //Mensaje

                  $mail->send();
                  echo
                  "<script>
                  Swal.fire(
                  'Mensaje enviado',
                  'Gracias por su mensaje.',
                  'success'
                  )
                  </script>";
              } catch (Exception $e)
              {
                  echo
                  '<script>
                    swal("UPPS!!", "Hubo un error en el envio.", "error");
                    </script>;', $mail->ErrorInfo;
              }
              $nombre  = "";
              $correo = "";
              $asunto = "";
              $mensaje = "";
      }//validos
    }//Enviar
  }
}

 ?>
