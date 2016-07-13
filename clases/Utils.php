<?php

class Utils{
    public function enviarEmail($email,$nickname,$password){
        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "noreply.jukebox@gmail.com";

        //Password to use for SMTP authentication
        $mail->Password = "obligatorio_php";

        //Set who the message is to be sent from
        $mail->setFrom('noreply.jukebox@gmail.com', 'Jukebox Staff');

        //Set an alternative reply-to address
        //$mail->addReplyTo('tipwebphp@gmail.com', 'Jukebox');

        //Set who the message is to be sent to
        $mail->addAddress($email, $nickname);

        //Set the subject line
        $mail->Subject = 'Bienvenido '.$nickname.' a Jukebox!';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $mail->Body    = '<div style="width: 450px;"><div align="center"><img src="http://i.imgur.com/HNIZYP8.png" width="326" height="110"></div><br><br><b>Bienvenido a Jukebox!!</b> <br> Comienza a disfrutar de escuchar musica completamente gratis!! <br> Para poder conectarte usa tu correo y la contraseña que elegiste. Para que no te la olvides, esta es tu contraseña: <b> '.$password.' </b>. <a href="http://localhost:8888/obligatorio_php/home">Inicio</a>';

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //send the message, check for errors
        if (!$mail->send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
            $res=false;
        } else {
            //echo "Message sent!";
            $res=true;
        }   
        return $res;
    }

    public function cambioContra($email,$nickname){
        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "noreply.jukebox@gmail.com";

        //Password to use for SMTP authentication
        $mail->Password = "obligatorio_php";

        //Set who the message is to be sent from
        $mail->setFrom('noreply.jukebox@gmail.com', 'Jukebox Staff');

        //Set an alternative reply-to address
        //$mail->addReplyTo('tipwebphp@gmail.com', 'Jukebox');

        //Set who the message is to be sent to
        $mail->addAddress($email, $nickname);

        //Set the subject line
        $mail->Subject = 'Solicitud cambio de clave para '.$nickname.'.';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $mail->Body    = '<div style="width: 450px;"><div align="center"><img src="http://i.imgur.com/HNIZYP8.png" width="326" height="110"></div><br><br>Has solicitado cambiar tu contraseña. Si no has sido tú quien lo ha solicitado, notifícalo de inmediato a los administradores. <br><br> Para cambiar tu contraseña haz click <a href="http://localhost:8888/obligatorio_php/usuario/change_password/">aquí</a>.</div>';

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //send the message, check for errors
        if (!$mail->send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
            $res=false;
        } else {
            //echo "Message sent!";
            $res=true;
        }   
        return $res;   
    }
}
?>