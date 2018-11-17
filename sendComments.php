<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 16/11/2018
 * Time: 19:35
 */
include_once('function/function.php');
if(isset($_GET['id']) && isset($_POST['username']) && isset($_POST['content'])){
    sendCommentaire($_GET['id'], $_POST['username'], $_POST['content']);
    header('location: viewArticle.php?id='.$_GET['id']);
}