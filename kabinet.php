<!DOCTYPE html>
<html>
 	<head>
		<title>TrainTick</title>
		<link rel="stylesheet" type="text/css" href="text.css">
	</head>
	<body>
	<?php
				$db = "ticketbuy";
				$link = mysql_pconnect ("localhost", "root", "") ;
				if ( !$link )  die ("Неможливо підключитись до  MySQL");
				{
					mysql_select_db ( $db ) or die ("Неможливо відкрити $db");
				}
				if(isset($_POST['submit'])) {
				
				$login = $_POST['login'];
				$password = $_POST['password'];
				
				
			$query = mysql_query ("SELECT user_id, password FROM user WHERE login='".$login."' ") or die (mysql_error());
		
			$data = mysql_fetch_assoc($query);
			
			if($data['password'] == $_POST['password'])
				{
					echo "hgh";
					
				}
				else echo"Ви ввели неправельні дані";
				
				
  }

					
    ?>
	 <div class="content-bg">
     <div class="content-white">
		<header>
			<div id="name">
				<img src="train.png"></img>TrainTick
				<h2> Сервіс онлайн бронювання квитків на потяг</h2>
			</div>
		</header>
        <nav>
			<ul>
				<li><a href="holovna.php"><span>Головна</span></a></li>
				<li><a href="kabinet.php"><span>Особистий кабінет</span></a></li>
				<li><a href="inform.php"><span>Інформація про нас</span></a></li>
			</ul>
        </nav>
        <main>
		
			<div id="log">
				<form method="post" action="kabinet.php">
			<h1>Ваші дані</h1>
				<p>Логін:</p>
					<div><input type="text" maxlength="25" size="20" name="login"></div>
				<p>Пароль:</p>
					<div><input type="password" maxlength="25" size="20" name="password"></div>
				<p><input  name="submit" type="submit" value="Ввійти"></p>
				<div><input type="button" value="Зареєструватися" onClick="location.href='regist.php';"/></div>
			</form></div>
				
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
	</body>
</html>