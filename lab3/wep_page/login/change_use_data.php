<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 28.12.2015
 * Time: 2:11
 */
error_reporting();
session_start();
$link=$_SERVER['HTTP_REFERER'];
if(!$_SESSION['user_data']){
    header('Location: ../index.php');
    exit;
}
if(!require_once('../function/validate.php')){
    $_SESSION['error_mess']='ERROR 404!';
    header('Location: index.php');
    exit;
}


 //echo '<pre>';print_r($_SESSION); die;

$name = $_POST['name_log'];
$surname = $_POST['surname_log'];
$user_email = $_POST['user_email_log'];
$password = $_POST['password_log'];
$new_password = $_POST['new_password_log'];
$re_new_password = $_POST['re_new_password_log'];
$age = $_POST['age_log'];
$sex = $_POST['sex_log'];
$tel = $_POST['user_tel_log'];
$country = $_POST['country'];


//Curatim datele (cu functia 'clean' creata de noi):
$name = clean($name);
$surname = clean($surname);
$user_email = clean($user_email);
$password = clean($password);
$new_password = clean($new_password);
$re_new_password = clean($re_new_password);
$age = clean($age);
$sex = clean($sex);
$tel = clean($tel);
$country = clean($country);


if(empty($password) || !find_data('users_data.txt',$_SESSION['user_data'][0],$password)){
    //print_r(find_data('users_data.txt',$username,$password)); die;
    if(isset($_SERVER['HTTP_REFERER'])){
        $_SESSION['error_mess'] = 'Parola curenta incorecta!';
        header("Location: $link");
        exit;
    }else {
        header('Location: ../index.php');
        exit;
    }
}


if(!empty($name) && !empty($surname) && !empty($user_email) && !empty($password) && !empty($age) && !empty($sex)) {
    $email_validate = filter_var($user_email, FILTER_VALIDATE_EMAIL);

    if(check_length($name, 2, 25) && check_length($surname, 2, 25) && check_length($password, 6, 12) && $email_validate){
        if(strlen($new_password)>6 || empty($new_password)) {
            if ($new_password == $re_new_password || empty($new_password)) {
                //echo 'inregistrat'.'<br>';
                if ($user_email == $_SESSION['user_data'][0]|| !email_check($user_email)) {
                    $pass = fopen('users_data.txt', 'a+');
                    if ($pass) {
                        foreach (file($pass) as $key => $value) {
                           // echo    'FUTAI!';
                            if (explode('|', $pass[$key])[0] == $_SESSION['user_data'][0]) {
                                fwrite($pass[$key], $user_email . '|' . $new_password . '|' . $name . '|' . $surname . '|' . $age . '|' . $sex . '|' . $tel .'|' . $country . "\n");
                                fclose($pass);
                                $_SESSION['error_mess'] = 'Date salvate cu succes!';
                                header("Location: $link");
                                exit;
                            }
                        }

                    } else {
                        $_SESSION['error_mess'] = 'Error 404!!!';
                        header('Location: ../index.php');
                        exit;
                    }
                } else {
                    $_SESSION['error_mess'] = 'Email incorect sau egzista utilizator cu acest email';
                    header('Location: ../index.php');
                    exit;
                }

            } else {
                $_SESSION['error_mess'] = 'Parola introdusa nu se repeta corecta';
                header('Location: ../index.php');
                exit;
            }
        }else {
            $_SESSION['error_mess'] = 'Parola este scurta';
            header('Location: ../index.php');
            exit;
        }
    } else { // добавили сообщение
        //echo "Введенные данные некорректные";
        $_SESSION['error_mess']='Datele introduse nu corespund cerintelor';
        header('Location: ../index.php');
        exit;
    }
} else { // добавили сообщение
    //echo "Заполните пустые поля";
    $_SESSION['error_mess']='Toate cimpurile sunt obligatoare!';
    header('Location: ../index.php');
    exit;
}