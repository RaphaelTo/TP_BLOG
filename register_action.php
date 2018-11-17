<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 15/11/2018
 * Time: 00:36
 */
include_once('function/function.php');
addAccount($_POST['pseudo'], $_POST['pwd'], $_POST['pwd2']);
header('location: index.php');
