<?php
if(isset($_POST['mail'])){
    $mailFrom = $_POST['mail']; // required
    $mensagem = $_POST['mensagem']; // required

    $mailTo = "projeto-saga@yandex.com";
    $subject = "Mensagem de Projeto Saga";

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $headers = "De: ".$mailFrom;
    $txt = "Você recebeu um email de ".$mailFrom.".\n\n".$mensagem;
 
    mail($mailTo, $subject, $txt, $headers);
    header("Location: confirmacao-envio.php");
}
error_reporting(E_ALL);
?>