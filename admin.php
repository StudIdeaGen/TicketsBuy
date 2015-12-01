<?php 
session_start();
?>
<!DOCTYPE html>
<html>
 	<head>
		<title>TrainTick</title>
		<link rel="stylesheet" type="text/css" href="text.css">
	</head>
	<body>
	<?php
		$db = "ticketbuy";
		$link = mysql_connect ("localhost", "root", "") ;
			if ( !$link )  die ("Неможливо підключитись до  MySQL");
				{
					mysql_select_db ( $db ) or die ("Неможливо відкрити $db");
				}	
				
			if(isset($_POST['submit'])) 
			{
				$err = array();
				$city1= $_POST['city1'];
				$city2 = $_POST['city2'];
				$price = $_POST['price'];				
					$numQuery = mysql_query ("SELECT name  FROM cities") or die (mysql_error());
				$a=0;
				while($data=mysql_fetch_array($numQuery,MYSQL_ASSOC))
				{
					foreach($data as $value)
					{
						if ($login==$value)
						{
							$a=1;
						}
					}
				}
				if ($a == 1)
				{
					$err[] = "Користувач з таким логіном вже існує. Введіть інший логін";
				}
				
				if (($_POST['prizv']==null)or($_POST['name']==null)or($_POST['login']==null)or($_POST['password']==null)or($_POST['phone']==null))
				{
				$err[] = "Заповніть всі поля";	
				}
				if(count($err) == 0)
				{
					$query = mysql_query ("INSERT INTO user VALUES ('','$prizv','$name','$login','$password','$phone')") or die (mysql_error());
				}
				else
				{
					print "<b>При регистрации произошли следующие ошибки:</b><br>";
					
					foreach($err AS $error)
					{
						print $error."<br>";
					}
				}
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
		<form method="post" action="regist.php">
			<div id="registration">
			<h1>Додати дані:</h1>
			<p2>Звідки</p2>
			<div><input type="text" maxlength="25" size="20" name="city1"></div>
			<p2>Куди</p2>
			<div><input type="text" maxlength="25" size="20" name="city2"></div>
			<p2>Ціна квитка</p2>
			<div><input type="text" maxlength="25" size="20" name="price"></div>	
			<div><input name="submit" type="submit" value="Додати" required></div>
		</form>
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
	</body>
</html>