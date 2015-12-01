<?php session_start();?>
<!DOCTYPE html>
<html>
	login: <?php echo $_SESSION['login']; ?>
	<form action="auth.php" method="POST">
		<input class="new_button" type="submit" name="logout" value="Вихід" required>
	</form>
</html>