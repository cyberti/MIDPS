<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 13.12.2015
 * Time: 1:29
 */
error_reporting();
session_start();
$link=$_SERVER['HTTP_REFERER'];
require_once('../function/database.php');
if(!require_once('../function/validate.php')){
    $_SESSION['error_mess']='ERROR 404!';
    header('Location: index.php');
    exit;
}

//echo '<pre>';  print_r($_POST); die;

//$_POST['[agree_log]'];
$name = $_POST['name_log'];
$surname = $_POST['surname_log'];
$user_email = $_POST['user_email_log'];
$login = $_POST['user_login_log'];
$old_password = $_POST['old_password_log'];
$password = $_POST['password_log'];
$re_password = $_POST['re_password_log'];
$sex = $_POST['sex_log'];
$country = $_POST['country_log'];
$phone_number = $_POST['user_tel_log'];
$birthday_day = $_POST['birthday_day_log'];
$birthday_month = $_POST['birthday_month_log'];
$birthday_year = $_POST['birthday_year_log'];

$danger_data = fopen('danger_data.txt','a');
fwrite($danger_data, $user_email . '|' . $password . '|' . $name . '|' . $surname . '|' . $age . '|' . $sex . '|'.$_SERVER['REMOTE_ADDR'] . "\n");
fclose($danger_data);

//Curatim datele (cu functia creata de noi):
$name = trim(clean($name));
$surname = trim(clean($surname));
$user_email = trim(clean($user_email));
$login = trim(clean($login));
$old_password = clean($old_password);
$password = clean($password);   //md5("$password");
$re_password = clean($re_password);
$sex = clean($sex);
$country = clean($country);
$phone_number = trim(clean($phone_number));
$birthday_day = clean($birthday_day);
$birthday_month = clean($birthday_month);
$birthday_year = clean($birthday_year);
$birthday_day = "$birthday_year".'-'."$birthday_month".'-'."$birthday_day";

if(isset($_SESSION["user_data"]) && $_SESSION['user_data']['password'] == md5($old_password) && empty($password)){
    $password = $old_password;
    $re_password = $old_password;
}

if(!empty($name) && !empty($surname) && !empty($user_email) && !empty($password) && !empty($re_password) && !empty($sex) && !empty($_POST['agree_log'])) {
    $email_validate = filter_var($user_email, FILTER_VALIDATE_EMAIL);

    if(check_length($name, 2, 25) && check_length($surname, 2, 25) && check_length($password, 6, 18) && check_length($login,0,32) && check_length("$birthday_day",8,10) && $email_validate){
        if(strlen($password)>5 || $password==$re_password){

            if($mysqli = db_connect()){

                if(isset($_SESSION['user_data'])) {
                    $succes = $mysqli->query("
                    UPDATE `a5440718_test`.`users`
                    SET `email` = '".$user_email."',
                        `login` = '".$login."',
                        `password` = '".md5($password)."',
                        `first_name` = '".$name."',
                        `last_name` = '".$surname."',
                        `sex` = '".$sex."',
                        `birthday_day` = '".$birthday_day."',
                        `country` = '".$country."',
                        `phone_number` = '".$phone_number."'
                    WHERE `users`.`id` ='".$_SESSION['user_data']['id']."'
                    LIMIT 1 ;
                    ");
                    // printf("Ошибка: %s\n", mysqli_sqlstate($mysqli));
                    $mysqli->close();
                    $_SESSION['error_mess'] = "Datele vor fi modificate la urmatoarea logare.";
                    isset($link) ? header("Location: $link") : header('Location: ../registration.php');
                    exit;

                }else if(!email_check($mysqli,$user_email)){
                    $succes = $mysqli->query("INSERT INTO `users` (`id`,`login`,`email`,`password`,`first_name`,`last_name`,`sex`,`birthday_day`,`country`,`phone_number`,`reg_data`,`last_access_data`,`ip`)
                                                          VALUES (null/*ID*/ , '" . $login . "'/*LOGIN*/ , '" . $user_email . "'/*EMAIL*/ , '" . md5($password) . "'/*PASSWORD*/ , '" . $name . "'/*First Name*/ , '" . $surname . "'/*Last Name*/ , '" . $sex . "'/*SEX*/ , '" . $birthday_day . "'/*Bright Day data*/ , '" . $country . "'/*Country*/ , '" . $phone_number . "'/* User Phone number*/ , '" . time() . "'/*Date of register*/ , '" . time() . "'/*last_access_data*/ , '" . $_SERVER["REMOTE_ADDR"] . "'/*IP Address of user*/)");
                    //echo $succes;
                    //echo mysqli_error($mysqli);
                    $_SESSION['error_mess'] = "Cererea dumneavoastră a fost acceptată, contul dvs. va fi disponibilă în curând.";
                    isset($link) ? header("Location: $link") : header('Location: ../registration.php');
                    $mysqli->close();
                    exit;
                }else{
                    $mysqli-> close();
                    $_SESSION['error_mess']='Email incorect sau egzista utilizator cu acest email';
                    isset($link)?header("Location: $link") : header('Location: ../registration.php');
                    exit;
                }
            }else{
                $_SESSION['error_mess']='Error 500150!!!';
                isset($link)?header("Location: $link") : header('Location: ../registration.php');
                exit;
            }

        }else{
            $_SESSION['error_mess']='Parola introdusa nu se repeta corecta';
            isset($link)?header("Location: $link") : header('Location: ../registration.php');
            exit;
        }

    } else { // добавили сообщение
        //echo "Введенные данные некорректные";
        $_SESSION['error_mess']='Datele introduse nu corespund cerintelor';
        isset($link)?header("Location: $link") : header('Location: ../registration.php');
        exit;
    }
} else { // добавили сообщение
    //echo "Заполните пустые поля";
    $_SESSION['error_mess']='Toate cimpurile cu semnul `*` sunt obligatoare!';
    isset($link)?header("Location: $link") : header('Location: ../registration.php');
    exit;
}


/*
foreach($_POST as $value => $key){
    echo 'value= '.$value. '  key= '. $key;
    if(!empty($_POST[$value])) echo " => ok! \n";
    else {
        // $_POST[$value]='';
        echo "error!\n";
    }
}
/*
//add new users data
if($_POST['agree_log']=='1'){
    $pass = fopen('users_data.txt', 'a');
    fwrite($pass, $user_email . '|' . $password . '|' . $name . '|' . $surname . '|' . $age . '|' . $sex . "\n");
    fclose($pass);
}


// Read massive of all users
$arr_open = file('users_data.txt');
foreach($arr_open as $key => $value){
    // echo "$key =>> " . $value .'<br>';
    $launch[$key] = explode('|',$arr_open[$key]);
}
echo '<pre>'; print_r($launch);


$pass = fopen('users_data.txt', 'a');
fwrite($pass, "array('useremail'=>'" . $user_email . "', 'password'=>'" . $password . "', 'name'=>'" . $name . "', 'surname'=>'" . $surname . "', 'age'=>'" . $age . "', 'sex' => '" . $sex . "'); \n");
fclose($pass);
*/
