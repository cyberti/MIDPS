<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 19.12.2015
 * Time: 19:26
 */
error_reporting(0);
session_start();
$title="Pagina de inregistrare";
$link=$_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=@$title?></title>
    <link href="http://allfont.net/allfont.css?fonts=matura-mt-script-capitals" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/style.css">

</head>


<body>
<?php
if($_SESSION['user_data']){
    $_SESSION['error_mess']='Dumnevoastra sunteti deja inregistrati si nu puteti accesa pagina de inregistrare';
    if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "http://meandyou.net23.net/registration.php"){
        header("Location: $link");
        exit;
    }
    header('Location: index.php');
    exit;
}
?>

<?php
require_once("views/structur.php");
require_once("views/header.php");
require_once("views/new_user.php");
?>


</body>
</html>
