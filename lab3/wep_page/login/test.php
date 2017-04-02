<?php
require_once("../function/database.php");

function print_result($result_set){
    echo " NR de utilizatori este de : ".$result_set->num_rows.'<br>';
    echo '<pre>';
    while( ($row = $result_set-> fetch_assoc()) != false ){
        print_r($row);
    }
    echo'</pre>'.'______________________'.'<br>';
}
function gets_result($result_set){
    while( ($row = $result_set-> fetch_assoc()) != false ){
        print_r($row);
    }
    echo'</pre>'.'______________________'.'<br>';
}

//    $mysqli = new mysqli("mysql4.000webhost.com","a5440718_test","a123456","a5440718_test");
//    $mysqli->query("SET NAMES 'utf8'");
    $mysqli = db_connect();
    echo '>>' . mysqli_error($mysqli) . '<br>';
    echo '>>' . mysqli_stat($mysqli) . '<br>';


    $user_email = 'alisa@email.ru';
    //$result_set = $mysqli -> query("SELECT `id` FROM `users` WHERE `email` = 'alisa@email.ru'");
    var_dump(email_check($mysqli,'alisa@email.ru'));
if(email_check($mysqli,'alisa@email.ru')){
    echo "ESSSSS";
}else{
    echo "NUUUUU";
}
    //print_result(email_check($mysqli,'alisa@email.ru'));

    $mysqli-> close();

$birthday_year = 2000;
    $birthday_month = 12;
        $birthday_day = 1;

$bright_day = "$birthday_year".'-'."$birthday_month".'-'."$birthday_day";
echo '<br>'.$bright_day;
var_dump($bright_day);
echo  phpversion();

/*
$start = microtime(true);

echo time();
echo microtime(true);

echo date("Y-m-d H:i:s").'<br>';
$fp=file('users_data.txt');
print_r($_SERVER);
*/

//echo checkdate(2/*luna*/,28/*ziua*/,2012/*anul*/);
//echo "Время выполнения скрипта:" . (microtime(true) - $start).' sec';
/*
UPDATE `a5440718_test`.`users` SET `login` = 'alisami@email.ru',
`first_name` = 'Adriana',
`sex` = 'Female',
`bright_day` = '2015-12-31',
`country` = 'Moldova',
`phone_number` = '3881818986',
`reg_data` = '1451483644',
`last_access_data` = '1451483644',
`ip` = '95.65.102.153'
WHERE `users`.`id` =7
LIMIT 1 ;
*/
