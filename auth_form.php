<html>
	<form method="post" action="auth.php">
			<h1>Ваші дані</h1>
				<p>Логін:</p>
					<div><input type="text" maxlength="25" size="20" name="login"></div>
				<p>Пароль:</p>
					<div><input type="password" maxlength="25" size="20" name="password"></div>
				<p><input  name="submit" type="submit" value="Ввійти" required></p>
				<div><input type="button" value="Зареєструватися" onClick="location.href='regist.php';"/></div>
			</form>
</html>

