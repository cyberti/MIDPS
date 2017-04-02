<?php
/**
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 26.12.2015
 * Time: 21:39
 */
//error_reporting(0);
$title="Profil";
session_start();
if(empty($_SESSION['user_data'])){
    header('Location:index.php');
    exit;
}
?>

<?php
require_once("views/structur.php");
require_once("views/header.php");
require_once("views/new_user.php");
?>

<!--
<div class="div_form">
    <form style="width: inherit; margin: 0px auto;" action="login/change_use_data.php" method="post">
        <lable>Numele:</lable>
        <input type="text" value="<?=$_SESSION['user_data']['first_name'] ?>" name="name_log" class="underline_input"><br>
        Prenumele:
        <input type="text" value="<?=$_SESSION['user_data']['last_name'] ?>" name="surname_log" class="underline_input"><br>
        Virsta:
        <input type="number" value="<?=$_SESSION['user_data'][4] ?>" min="16" max="99" maxlength="2" placeholder="18" class="underline_input" name="age_log"><br>
        Email:
        <input type="email" value="<?=$_SESSION['user_data'][0] ?>" maxlength="32" placeholder="test@email.com" class="underline_input" name="user_email_log"><br>
       <lable>Ţară:
        <select name="country" id="county1" required="country" class="underline_input">
            <option  value="Alta">Alta</option>
            <option  value="Moldova">Moldova</option>
            <option  value="Romania">Romania</option>
            <option  value="Russia">Russia</option>
        </select></lable><br>
        <label class="sex" name="sex">
            Masculin:
            <input type="radio" value="Male" name="sex_log" <?php if(strcmp($_SESSION['user_data'][5],'Male')==1) echo 'checked'; ?> >
        </label>
        <label class="sex" name="sex" style="margin-left:10px;">
            Femenin:
            <input style="margin:0;" type="radio" value="Female" name="sex_log" <?php if(strcmp($_SESSION['user_data'][5],'Female')==1) echo 'checked'; ?>><br>
        </label>
        Telefon: <input type="number" value="<?php ?>" name="user_tel_log" maxlength="23" class="underline_input"><br>
        Parola curenta:<input type="password"  name="password_log" class="underline_input" placeholder="*******"><br>
        Parola noua:<input type="password"  name="new_password_log" class="underline_input" placeholder="Indicati parola noua"><br>
        Parola noua:<input type="password"  name="re_new_password_log" class="underline_input" placeholder="Repetati parola noua"><br>
        <br><input type="submit" value="Salveaza">
        <input type="hidden" value="">
    </form>
</div>
-->
