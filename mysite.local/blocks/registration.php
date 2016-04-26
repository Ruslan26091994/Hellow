<?php
	if(!empty($_POST["button_reg"]))
	{
		$email = htmlspecialchars($_POST["email"]);
		$password_1 = htmlspecialchars($_POST["password_1"]);
		$password_2 = htmlspecialchars($_POST["password_2"]);
		if(strlen($email) < 3) $success = false;
		elseif(strlen(password_1) < 3) $success = false;
		elseif(password_1 != password_2) $success = false;
		if ($success) $alter = "Ошибка при регистрации";
		else $alter = "Вы успешно заригестрировались";
	}
?>
<div class="otstup" />
<h2> Регистрация </h2>
<form action="registration.php" method="post" name="registration" >
	<table id="right">
		<tr>
			<td> E-mail: </td>
			<td> <input type="text" name="email" /> </td>
		</tr>
		<tr>
			<td> Пароль: </td>
			<td> 
				<input type="text" name="password_1" /> 
			</td>
		</tr>
		<tr>
			<td>Подтвердите пароль: </td>
			<td> 
				<input type="text" name="password_2" /> 
			</td>
		</tr>
		<tr>
			<td colspan="2"> 
				<input type="submit" name="button_reg" value="Зарегистрироватся!" /> 
			</td>
		</tr>
	</table>
</form>
