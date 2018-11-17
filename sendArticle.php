<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 11/11/2018
 * Time: 02:15
 */
session_start();
include_once('function/function.php');

if(isset($_POST['title']) && isset($_POST['content'])) {

    if(isset($_FILES['avatar']))
    {
        $dossier = 'img/';
        $fichier = basename($_FILES['avatar']['name']);
        if($_FILES['avatar']['type'] == 'image/jpg' || $_FILES['avatar']['type'] == 'image/png' || $_FILES['avatar']['type'] == 'image/jpeg') {
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                echo 'Upload effectué avec succès !';
            } else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }
        }
    }
    var_dump($_SESSION['id']);
    $title = $_POST['title'];
    $uploadImage = $_FILES['avatar']['name'];
    $content = $_POST['content'];
    addArticle($title, $content, $uploadImage, $_SESSION['id'] );
    var_dump($title . " " . $uploadImage . " " . $content. " ". $_SESSION['id']);





}

