<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 12.12.2015
 * Time: 14:09
 */
error_reporting(0);
$title="Learn&amp;YOU";
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=@$title?></title>
<!--    <link href="http://allfont.net/allfont.css?fonts=matura-mt-script-capitals" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="style.css">

</head>


<body>
<?php require_once("views/header.php"); ?>

<?php require_once("views/baner/baner.php"); ?>
<div>
    <div class="show_border" style="margin: 0 auto; width: 1200px"">
        dsadasd
    </div>
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

