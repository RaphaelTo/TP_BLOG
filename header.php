<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 10/11/2018
 * Time: 01:53
 */
include_once('function/function.php');
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devoir_IPSSI</title>
    <!-- Bootstrap core CSS -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Blog IPSSI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="article.php">Article</a>
                </li>
                <?php if (isset($_SESSION['pseudo']) && isset($_SESSION['pwd'])): ?>
                <li class="nav-item">
                    <a class="btn btn-success" href="logout.php">Deconnexion</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="btn btn-success" href="login.php">Connexion</a>
                    <?php session_destroy(); ?>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>