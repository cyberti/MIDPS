<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 12.12.2015
 * Time: 14:06
 */
error_reporting(0);
session_start();
//echo $_SERVER['HTTP_REFERER'];
$link = $_SERVER['HTTP_REFERER'];
require_once '../function/validate.php';
require_once('../function/database.php');
//echo '<pre>';print_r($_POST);
$user_email = clean($_POST['email_check']);
$password = md5(clean($_POST['password_check']));

//print_r(find_data('users_data.txt',$username,$password)); die;
if ($mysqli = db_connect()) {
    //echo mysqli_stat($mysqli).'<br> <pre>';
    //print_r(find_data($mysqli, $user_email, $password));die;

    if (($_SESSION['user_data'] = find_data($mysqli, $user_email, $password))) {
        //print_r($_SESSION['user_data']);die;
        //print_r(find_data('users_data.txt',$username,$password)); die;
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: $link");
            exit;
        } else {
            header('Location: ../index.php');
            exit;
        }
    }
}


//echo 'user ne logat!!'; die;
if (isset($_SERVER['HTTP_REFERER'])) {
    $_SESSION['error_mess'] = 'Nu egzista utelizator cu astfel de email/password!!!';
    header("Location: $link");
    exit;
}
$_SESSION['error_mess'] = 'Nu egzista utelizator cu astfel de email/password!!!';
header('Location: ../index.php');
exit;



/*
$arr_open = file('users_data.txt');
foreach($arr_open as $key => $value){
    // echo "$key =>> " . $value .'<br>';
    //echo 'Ciclul nr >> '.$key."<br>";
    if(explode('|',$arr_open[$key])[0]==$_POST['email_check'] && explode('|',$arr_open[$key])[1]==$_POST['password_check']){
        $_SESSION['user_data'] = explode('|',$arr_open[$key]);
        header('Location: ../index.php'); // redirectionam utilizatorul pe pagina deja logat
        exit;
    }
    //$launch[$key] = explode('|',$arr_open[$key]);
    //print_r($launch);
}
//echo '<pre>'; print_r($launch);

//control data of user
for($i=0; $i<count($launch); $i++){
    for($j=0;$j<1;$j++){
        if($launch[$i][$j]==$_POST['email_check']  && $launch[$i][$j + 1] == $_POST['password_check']){
            echo "\nUtilizatorul:".$launch[$i][$j]. "\nPass: " .$launch[$i][$j + 1] . ' => a fost LOGAT!!'; die;
            $_SESSION['user_data'] = true;
            $_SESSION['user_name'] = $launch[$i][$j];
            //header('Location: ../index.php'); // redirectionam utilizatorul pe pagina deja logat
            //exit;
        }
    }
}
*/
