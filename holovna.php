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
			<div id="marchrut"><form action="" method="post">
				<h1>Оберіть маршрут</h1>
					<div>Звідки:</div>
						<p><input type="text" maxlength="25" size="25" name="from"></p>
					<div>Куди:</div>
						<p><input type="text" maxlength="25" size="25" name="where"></p>
					<div>Дата відправки:</div> 
						<p><input type="date" name="calendar" size="25"></p>
					<h1><input type="submit" value="Знайти"></h1>
			</form></div>	
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
	</body>
</html>