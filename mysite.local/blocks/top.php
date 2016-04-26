<tr>
	<td colspan="2" id="header">
		<h1>Сайт об автомобилях</h1>
		<p>
			<img src="images/header.png" alt="Шапка" />
		</p>
	</td>
</tr>
<tr>
	<td colspan="2">
			<hr />
		</td>
	</tr>
	<tr>
		<td>
			<table id="topmenu">
				<tr>
					<td>
						<a href="index.php"> Главная </a>
					</td>
					<td>
						<a href="registration_structure.php"> Регистрация </a>
					</td>
					<td>
						<a href="articles_structure.php"> Статьи </a>
					</td>
					<td>
						<a href="guest_book.php"> Гостевая книга </a>
					</td>
				</tr>
			</table>
		</td>
		<td class="right">
			<form name="auth" action="auth.php" method="post">
				<table>
					<tr>
						<td> E-mail:</td>
						<td>
							<input type="text" name="email" />
						</td>
						<td> Пароль:</td>
						<td>
							<input type="password" name="password" />
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="submit" name="button_auth" value="Войти" />
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
<tr>
		<td colspan="2">
			<hr />
		</td>
	</tr>
	