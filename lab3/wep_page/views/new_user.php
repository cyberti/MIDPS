<?php
/*
 * Created by PhpStorm.
 * User: Cristian Godonoaga
 * Date: 13.12.2015
 * Time: 1:32
 */
error_reporting(0);
?>
<div class="div_form">
	<form style="width: inherit; margin: 0px auto;"  action="login/check_new_user.php" method="post">
		Name:*
		<input type="text" value="<?=$_SESSION['user_data']['first_name']?>" name="name_log" contenteditable="true" spellcheck="false" placeholder="Daniel" maxlength="23" class="underline_input">
		<br />
		Surname:*
		<input type="text" value="<?=$_SESSION['user_data']['last_name']?>" name="surname_log" contenteditable="true" spellcheck="false" placeholder="Blanuta" maxlength="23" class="underline_input">
		<br />
		Email:*
		<input type="email" value="<?=$_SESSION['user_data']['email']?>" name="user_email_log" placeholder="danil@gmail.com" autocomplete="off" class="underline_input">
		<br />
		Login:
		<input type="text" value="<?=$_SESSION['user_data']['login']?>" name="user_login_log" placeholder="danilfromNBS" class="underline_input">
		<br />
		<?php if(isset($_SESSION['user_data'])):?>
		Old_Password:*
		<input type="password" name="old_password_log" maxlength="16" autocomplete="off" class="underline_input">
		<br />
		<?php endif?>
		Password:*
		<input type="password" name="password_log" placeholder="minim 6 caractere" maxlength="16" autocomplete="off" class="underline_input">
		<br />
		Repeat password:*
		<input type="password" name="re_password_log" placeholder="*******" maxlength="16" autocomplete="off" class="underline_input">
		<br />
		Telephone : <input type="number" value="<?=$_SESSION['user_data']['phone_number']?>" name="user_tel_log" maxlength="20" class="underline_input" placeholder="+44 7911 123456">
		<br>
		<lable>Country:
			<select name="country_log" id="county1" class="underline_input">
				<option  value="">Other</option>
				<option <?php if($_SESSION['user_data']['country'] == 'MD') echo 'selected="selected"';?> value="MD">Moldova</option>
				<option <?php if($_SESSION['user_data']['country'] == 'RO') echo 'selected="selected"';?> value="RO">Romania</option>
				<option <?php if($_SESSION['user_data']['country'] == 'RU') echo 'selected="selected"';?> value="RU">Russia</option>
				<option <?php if($_SESSION['user_data']['country'] == 'IT') echo 'selected="selected"';?> value="IT">Italy</option>
				<option <?php if($_SESSION['user_data']['country'] == 'UK') echo 'selected="selected"';?> value="UK">United Kingdom</option>
				<option <?php if($_SESSION['user_data']['country'] == 'USA') echo 'selected="selected"';?> value="USA">USA</option>
			</select>
		</lable><br>
		<label class="sex">Feminin*<input type="radio" value="F" name="sex_log" <?php if($_SESSION['user_data']['sex'] == 'F') echo 'checked';?>></label>
		<label class="sex"> Masculin*<input type="radio" value="M" name="sex_log" <?php if($_SESSION['user_data']['sex'] == 'M') echo 'checked';?>></label>
		<br />
		<?php // HTML cod pentru a selecta data/ziua/anul
		//$birthday_day = explode('-',$_SESSION['user_data']['birthday_day']);
		$birthday_day = preg_split('/-/', $_SESSION['user_data']['birthday_day'] , null, PREG_SPLIT_NO_EMPTY);
		$day = $birthday_day[2] or date("d") ; //day
		$month = $birthday_day[1] or date("n"); //without leading zero(o)
		$year = (date("Y")-10); //four digit format
		$st_year = (date("Y")-70); //Starting Year
		$month_names = array("January", "February", "March","April", "May", "June", "July", "August", "September", "October", "November", "December");
		?>
		<select name="birthday_day_log" id="day">
			<?php
			for ($i=1; $i<=31; $i++) {
				echo "<option ";
				if ($i == $day) {
					echo "selected=\"selected\" ";
				}
				echo "value=\"$i\">", $i, "</option>\n";
			}
			?>
		</select>
		<select name="birthday_month_log" id="month">
			<?php
			for ($i=1; $i<=12; $i++) {
				echo "<option ";
				if ($i == $month) {
					echo "selected=\"selected\" ";
				}
				echo "value=\"$i\">", $month_names[$i-1], "</option>\n";
			}
			?>
		</select>
		<select name="birthday_year_log" id="year">
			<?php
			for ($i=$year; $i>=$st_year; $i--) {
				echo "<option ";
				if ($i == $birthday_day[0]) {
					echo "selected=\"selected\" ";
				}
				echo "value=\"$i\">$i</option>\n";
			}
			unset($birthday_day);
			?>
		</select> <br>
		<label for="agree_v_s" class="sex"><input id="agree_v_s" type="checkbox" value="1" name="agree_log">Am inteles si sunt de acord.*</label><br />
		<input type="submit" value="Save" />
	</form>
</div>