<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 12.12.2015
 * Time: 14:09
 */
error_reporting(0);
$title="Shop online";
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=@$title?></title>
    <link rel="stylesheet" href="/views/baner/slider_style.css">
    <link href="//allfont.net/allfont.css?fonts=matura-mt-script-capitals" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">



</head>


<body>
<?php require_once("views/header.php"); ?>

<?php require_once("views/baner/baner.php"); ?>
<div>
    <div class="show_border"
         style="
         margin: 0 auto;
         width: 1200px;
         height: 35px;
         border-top: 2px solid;
         border-bottom: 2px solid;
         margin-top: 10px;
         margin-bottom: 10px;"
    >

    </div>
</div>
<div class="" style="margin: 0 auto; width: 1200px;">
    <img style="width: 1200px; " src="temp2.png">
</div>
<?php
require_once ("views/footer.php");

?>

<script>
    window.onload = function () {
        var remember_pass = document.getElementById('queri_12');

        remember_pass.onclick = function () {
            alert('Adati aminte!');
            console.log(this);
        }
    }
</script>


</body>
</html>

