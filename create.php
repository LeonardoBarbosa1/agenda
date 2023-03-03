<?php
include_once("templates/header.php");
?>

<div class="container">

    <?php include_once("templates/backbtn.php"); ?>

    <h1 id="main-title">Criar Contatos</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

        <input type="hidden" name="type" value="create">

        <div class="form-grounp mt-3">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome" required>
        </div>

        <div class="form-grounp mt-3">
            <label for="fone">Telefone do contato:</label>
            <input type="text" class="form-control" id="fone" name="fone" placeholder="Digite o Telefone" required>
        </div>

        <div class="form-grounp mt-3">
            <label for="observation">Observações:</label>
            <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Insira as Observação" rows="3" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
    </form>
</div>

<?php
include_once("templates/footer.php");
?>