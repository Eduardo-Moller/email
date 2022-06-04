<?php
require_once "config.php";
require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;   
use PHPMailer\PHPMailer\Exception;

$destinario = $_POST["nomeRemetente"];
$assunto = $_POST["assuntoEmail"];
$mensagem = $_POST["email"];
function email($assunto, $mensagem){

try{
    $mail = new PHPMailer(true);
    $mail -> SMTPDebug = 0;
    $mail -> isSMTP();
    $mail -> SMTPAuth = true;
    $mail -> Host = "tls://smtp.gmail.com";
    $mail -> Username = MEUEMAIL;
    $mail -> Password = SENHA;
    $mail -> SMTPSecure = "tls";
    $mail -> Port = 587;
    $mail -> setFrom(MEUEMAIL);
    $mail -> addReplyTo(MEUEMAIL);
    $mail -> addAddress(MEUEMAIL);
    $mail -> isHTML(true);
    $mail -> CharSet = "UTF-8";
    $mail -> Subject = $assunto;
    $mail -> Body = $mensagem;
    $mail -> send();
    echo "enviamos sua mensagem";
}
catch(Exception $e){
    echo "ERRO NO ENVIO";
}
}
