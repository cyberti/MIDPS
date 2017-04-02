<?php @session_start(); ?>
<header id="main_header">
		<div class="esential_block">
			<div class="head_block">
				<!-- Site logo -->
				<div class="logo_style_block">
					<h1> <a class="logo_style_text" href="index.php" title="Go to home page">Learn&amp;do</a></h1>
				</div>

					<ul class="menu_bar">
					  <li><a href="index.php" class="active_link menu_button">Home</a></li>
						<li><a href="#" class="active_link">Magazin</a></li>
						<?php if(!$_SESSION['user_data']):?><li><a href="registration.php" class="active_link">Inregistrare</a></li><?php endif?>
						<li><a href="#" class="active_link">Termeni si conditii</a></li>
					</ul>
				
				<!-- Login -->
					<div class="log_menu" style="">
						<?php if(!$_SESSION['user_data']):?>
							<form action="login/login.php" method="post">
								<table cellspacing="0" role="presentation">
									<tbody>
										<tr>
										<td class="log_menu_text"> <label for="email">Nume utilizator</label></td>
											<td class="log_menu_text"> <label for="pass">Parolă</label></td>
										</tr>
										<tr>
											<td><input autofocus type="email" class="inputtext" name="email_check" id="email" tabindex="1" required placeholder="test@mail.ru"></td>
											<td><input type="password" class="inputtext" name="password_check" id="pass" tabindex="2"></td>
											<td><label class="uiButton" id="loginbutton" for="u_0_v"><input value="LOG IN" tabindex="4" type="submit" id="u_0_v"></label></td>
										</tr>
										<tr>
											<td class="login_form_label_field">
											 <div>
												<div class="uiInputLabel clearfix uiInputLabelLegacy">
													<input id="persist_box" type="checkbox" name="persistent" value="1" tabindex="3" class="uiInputLabelInput uiInputLabelCheckbox">
													<label for="persist_box" class="uiInputLabelLabel">memorizează-mă</label>
												</div>
											<!--<input type="hidden" name="default_persistent" value="0">-->
											 </div>
											</td>
											<td class="login_form_label_field"><a href="#">Ai uitat parola?</a></td>
										</tr>
									</tbody>
								</table>
							</form>
						<?php endif ?>
                        <!--User menu and exit-->
						<?php if(isset($_SESSION['user_data'])):?>
						<div id="user_menu">
							<ul style="float: left; list-style: none; padding: 0; margin: 0;">
                                <li><a class="active_link" href="user_information.php" title="Setari pentru profil"><?php echo $_SESSION['user_data']['first_name']; //surname ?></a></li>
                                <li><a class="active_link" href="#">Coș</a></li>
                                <li>
                                    <form action="login/logout.php" method="post">
										<input type="hidden" value="<?= $_SERVER['HTTP_REFERER']?>" name="referer_link">
                                        <input value="Exit"  type="submit" class="active_link" style="padding: 0; border: 0; background:0;">
                                    </form>
                                </li>
							</ul>

                            <span class="user_menu_logo">
                                <img style="height: 65px; float:right;" src="img/user_api_man_male_profile.png" alt="user image" >
                            </span>
						</div>
						<?php endif?>
					</div>
			</div>
		</div>
    <?php if(@$_SESSION['error_mess']==true):?>
    <div id="error_mess"><?php echo $_SESSION['error_mess']; ?>
    </div>
    <?php unset($_SESSION['error_mess']); endif?>
</header>