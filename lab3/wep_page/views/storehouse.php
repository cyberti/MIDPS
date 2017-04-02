<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 16.12.2015
 * Time: 13:43
 */
require_once("views/header.php");
?>
<?php
$produse = array();
$produse[] = array('denumire' => 'Casti', 'pret' => 100, 'categoria' => 'Electronica');
$produse[] = array('denumire' => 'Boxe', 'pret' => 200, 'categoria' => 'Electronica');
$produse[] = array('denumire' => 'Microfon', 'pret' => 300, 'categoria' => 'Electronica');
$produse[] = array('denumire' => 'Microfon', 'pret' => 400, 'categoria' => 'Electronica');
$produse[] = array('denumire' => 'Scaun', 'pret' => 400, 'categoria' => 'Imobil');
$produse[] = array('denumire' => 'Masa', 'pret' => 600, 'categoria' => 'Imobil');
$produse[] = array('denumire' => 'Fotoliu', 'pret' => 1000, 'categoria' => 'Imobil');
$produse[] = array('denumire' => 'Brinza', 'pret' => 100, 'categoria' => 'Alimente');
$produse[] = array('denumire' => 'Brinza', 'pret' => 200, 'categoria' => 'Alimente');
$produse[] = array('denumire' => 'Brinza', 'pret' => 100, 'categoria' => 'Alimente');
$produse[] = array('denumire' => 'Piine', 'pret' => 100, 'categoria' => 'Alimente');
$produse[] = array('denumire' => 'Bomboane', 'pret' => 100, 'categoria' => 'Dulciuri');
$produse[] = array('denumire' => 'Bomboane', 'pret' => 200, 'categoria' => 'Dulciuri');
$produse[] = array('denumire' => 'Biscuiti', 'pret' => 200, 'categoria' => 'Dulciuri');
$produse[] = array('denumire' => 'Papusa', 'pret' => 200, 'categoria' => 'Jucarii');
$produse[] = array('denumire' => 'Minge', 'pret' => 300, 'categoria' => 'Jucarii');
foreach($produse as $key => $value){
    echo "Produsul :";
    echo "<ul>";
    foreach($value as $key => $value1){
        echo "<li> $key : $value1 ; </li>";
    }
    echo "</ul>";
}
$categoria = array();
$categoria_only = array();

for($i=0; $i < count($produse); $i++){
    if($produse[$i]['categoria'] !== $produse[$i+1]['categoria']){
        $categoria_only[]=$produse[$i]['categoria'];
    }
}

for($i=0; $i < count($produse); $i++){
    if($produse[$i]['categoria'] !== ''){
        $categoria[$produse[$i]['categoria']][]=$produse[$i]['pret'];
    }
}
echo '<pre>'; print_r($categoria);
echo "<br><br>";

$sum = 0;
foreach($categoria as $key => $value){
    for($i = 0; $i < count($produse); $i++) {
        if($produse[$i]['categoria'] == $key) {
            $sum += $produse[$i]['pret'];
        }
    }

    echo 'In categoria '."<b>$key</b>".' avem '.count($categoria["$key"]).' produse, cu suma totala: '.$sum.' ; <br>';
    $sum = 0;
}
echo "<br><br>";
echo '<pre>'; print_r($categoria_only);
?>