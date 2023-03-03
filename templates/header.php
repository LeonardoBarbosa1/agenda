<?php
    include_once("config/url.php");
    include_once("config/process.php");

    //limpa a mensagem
    if (isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FONT-AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/show/styles.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/home/styles.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/create/styles.css">
   
    <title>Agenda de Contatos  <?= " - ", titulo()?></title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link " id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                <a class="nav-link" id="add" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
            </div>
           
        </div>
    </nav>
</header>