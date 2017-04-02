<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 19.12.2015
 * Time: 23:37
 */
//функцию для очистки данных от HTML і PHP тегов:
/*
Функция trim для удаления пробелов из начала и конца строки.
Функция stripslashes нужна для удаляет экранирование символов ("Ваc зовут O\'reilly?" => "Вас зовут O'reilly?").
Функция strip_tags нужна для удаления HTML и PHP тегов. Последня функция - htmlspecialchars преобразует специальные символы в HTML-сущности ('&' преобразуется в '&amp;' и т.д.)
*/
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}


//функцию для проверки длинны строки:
//Если длинна строки будет удовлетворительна, то функция вернет TRUE иначе FALSE
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}




//Проверка уже сушествуешего мыла
/*
function email_check($user_email=""){
    $open_file = file('users_data.txt');
    foreach($open_file as $key => $value){
        // echo "$key =>> " . $value .'<br>';
        $launch[$key] = explode('|',$open_file[$key]);
    }
    for($i=0; $i<count($launch); $i++){
        for($j=0;$j<1;$j++){
            if($launch[$i][$j]==$user_email){
                return $launch[$i][$j];
            }
        }
    }
    return false;
}
*/

//Cauta dete in fisier (".txt" cu delimitator) dupa coincidenta al primului element sau si al doilea element
/*
function find_data($route = "",$name,$pass){
    if(!$arr_open = file($route)) return null;

    if(isset($name) && isset($pass)) {
        foreach ($arr_open as $key => $value) {
            if (explode('|', $arr_open[$key])[0] == $name && explode('|', $arr_open[$key])[1] == $pass) {
                return explode('|', $arr_open[$key]);
            }
        }
    }elseif(isset($name)){
        foreach ($arr_open as $key => $value) {
            if (explode('|', $arr_open[$key])[0] == $name) {
                return explode('|', $arr_open[$key]);
            }
        }
    }

    return null;
}
*/