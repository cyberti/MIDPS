<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 16.12.2015
 * Time: 22:49
 */
$link=$_SERVER['HTTP_REFERER'];
error_reporting(0);
session_start();
unset($_SESSION['user_data']);
if(isset($_SERVER['HTTP_REFERER'])) {
    header("Location: $link");
    exit;
}
header('Location: ../index.php'); // redirectionam
exit;