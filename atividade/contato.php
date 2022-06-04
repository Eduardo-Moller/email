<?php
include "./config.php";
include DIR_PATH . "/template/header.php";
include DIR_PATH . "/template/nav.php";

?>

<main>
    <body>
        
    
    <h2>Contato</h2>

    
    <div id="cont">
    <h3>Mande um email para nós</h3>
    <form action="processarMail" method="post">
        <input type="text" name="nomeRemetente" placeholder="Seu nome" class="info" required>
        <br>
        <input type="text" name="assuntoEmail" placeholder="Assunto do email" class="info" required>
        <br>
        <p>Digite seu email abaixo:</p>
        <textarea name="email" id="texto" cols="80" required></textarea>
        <br>
        <input value="Mande" type="submit" class="botao" >
    </div>
    </body>
</main>
<?php require DIR_PATH . "/template/footer.php"; ?>