<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 01.01.2016
 * Time: 18:09
 */
echo  phpversion().'<br>';
echo strpos('cineva a fors cineva este si cineva va fi','a').'<br>';

var_dump(strpos('am ve am fd amdif sam siam foiam amofd','am').'<br>');


$i = 0;
$nr = 0;
echo strpos('trggdgdfgsgaaaaareb yuybukytijhgfatg','a',0).'<br>';


function my_calculator($nr_1,$nr_2,$operation=''){
    if(is_numeric($nr_1) && is_numeric($nr_2) && isset($operation)){
        switch($operation){
            case '*': return $nr_1*$nr_2;
            case '/':
            case ':': return $nr_1/$nr_2;
            case '+': return $nr_1+$nr_2;
            case '-': return $nr_1-$nr_2;
        }
    }
    return null;
}
echo my_calculator(2,2,'*').'<br>';


function media($arr=array()){
    $m=0;
    for($i=0; !empty($arr[$i]); $i++){
        $m+=$arr[$i];
    }
    return $m/$i;
}
echo media(array(50,30,70,95,5));