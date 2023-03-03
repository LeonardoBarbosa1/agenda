<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-conteiner">

    <?php include_once("templates/backbtn.php"); ?>

    <h1 id="main-title"><?= $contact["name"] ?></h1>

    <p class="bold">Telefone</p>
    <p><?= $contact["fone"] ?></p>

    <p class="bold">Observação:</p>
    <p><?= $contact["observetion"] ?></p>
</div>

<?php
include_once("templates/footer.php");
?>
