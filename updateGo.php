<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 17/11/2018
 * Time: 02:53
 */
include_once('header.php');
include_once('function/function.php');

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

var_dump($_GET['id']." ".$_POST['title']." ".$_POST['content']." ".$_FILES['avatar']['name']."".$_GET['img']);

updateArticle($_GET['id'],$_POST['title'], $_POST['content'], $_FILES['avatar']['name'], $_GET['img']);