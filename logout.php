<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 14/11/2018
 * Time: 01:06
 */
include_once('function/function.php');
session_start();
session_unset();
session_destroy();


header('location: index.php');