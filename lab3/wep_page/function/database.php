<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 30.12.2015
 * Time: 17:31
 */
error_reporting(0);

function db_connect(){
    //$mysqli = new mysqli("mysql4.000webhost.com","a5440718_test","a123456","a5440718_test") or die("Error: ".mysqli_error($mysqli));
    $mysqli = mysqli_connect("localhost","id1433533_root","258456","id1433533_users") or die("Error: 500345"/*.mysqli_connect_error()*/);
    //$mysqli = mysqli_connect("127.0.0.1","root","","a5440718_test") or die("Error: 500345"/*.mysqli_connect_error()*/);
    $mysqli -> query("SET NAMES 'utf8'") or die(print_r("Error: 500346"/*.mysqli_error($mysqli)*/));
    $mysqli -> query("SET CHARACTER SET utf8") or die(print_r("Error: 500347"/*.mysqli_error($mysqli)*/));
    return $mysqli;
}

//Проверка уже сушествуешего мыла
function email_check($mysqli,$user_email=''){
    $id = $mysqli -> query("SELECT `id` FROM `users` WHERE `email`='$user_email'");
    $id = $id -> fetch_assoc();
    if(isset($id['id']))
        return $id['id'];
    else
        return null;
}
function find_data($mysqli,$user_email='',$user_password=''){
    $data = $mysqli -> query("SELECT * FROM `users` WHERE `email`='$user_email' AND `password`='$user_password'");
    $data = $data -> fetch_assoc();
    if(isset($data))
        return $data;
    else
        return null;
}