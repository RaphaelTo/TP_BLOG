<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 15/11/2018
 * Time: 19:02
 */
include_once('function/function.php');
include_once('header.php');
deleteArticle($_GET['id'], $_GET['image']);
header('location: article.php');
