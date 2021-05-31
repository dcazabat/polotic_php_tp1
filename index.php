<?php
    if(isset($_POST['email'])) {

        $email_to = "dacazabat@gmail.com";
        $email_subject = "Contacto desde el Sitio Web";

        if(!isset($_POST['firstName']) || !isset($_POST['lastName']) || !isset($_POST['email']) || !isset($_POST['comments'])) {
            echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
            echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
            die();
        }

        $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= "Nombre: " . $_POST['firstName'] . "\n";
        $email_message .= "Apellido: " . $_POST['lastName'] . "\n";
        $email_message .= "E-mail: " . $_POST['email'] . "\n";
        $email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";

        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        echo "¡El formulario se ha enviado con éxito!";
    }
?>