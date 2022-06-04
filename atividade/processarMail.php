<?php
require "mailEnviar.php";
$assunto = $_POST['nomeRemetente'] . " - " . $_POST['assuntoEmail'];
$mensagem = $_POST['email'];
if (email($assunto, $mensagem)) {
    echo "email enviado com sucesso";
} else {
    echo "erro ao enviar o email";
}