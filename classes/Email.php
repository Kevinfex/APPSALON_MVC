<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $nombre;
    public $email;
    public $token;

    public function __construct($nombre, $email, $token){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }
    
    public function enviarConfirmacion() {

        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'a254d307850306';
        $mail->Password = 'cc34d9f4f7651f';

        $mail->setFrom('kevinlepoma@gmail.com');
        $mail->addAddress('ienriquelopezalbujar@gmail.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido.= "<p><strong>Hola ". $this->nombre ."</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace: </p>";
        $contenido.= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=". $this->token ."'>Confirmar Cuenta</a></p>";
        $contenido.= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido.= "</html>";
        $mail->Body = $contenido;

        // Enviar el mail
        $mail->send();
    }
   
    public function enviarInstrucciones() {

        // create a new object
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = 'a254d307850306';
         $mail->Password = 'cc34d9f4f7651f';
 
         $mail->setFrom('kevinlepoma@gmail.com');
         $mail->addAddress('ienriquelopezalbujar@gmail.com', 'AppSalon.com');
         $mail->Subject = 'Reestablece tu password';
 
         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';
 
         $contenido = "<html>";
         $contenido.= "<p><strong>Hola ". $this->nombre ."</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo. </p>";
         $contenido.= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=". $this->token ."'>Reestablecer Password</a></p>";
         $contenido.= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
         $contenido.= "</html>";
         $mail->Body = $contenido;
 
         // Enviar el mail
         $mail->send();
    }
} 