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
			<h2>"TrainTick" - онлайн сервіс по бронюванню і замовленню квитків на потяг.</h2>
			<h3>Використовуючи сервіс "TrainTick", Ви можете дізнатися:</h3>
			<p>- про розклад руху поїздів;</p>
			<p>- про наявність місць на поїзд по маршруту, який Вас цікавить;</p>
			<p>- про вартість зд квитка(-ів);</p]>
			<p>- про кількість вільних місць на поїзді;</p>
			<p>- про правила посадки на потяг провезенні багажу;</p>
			<p>- і багато іншого;</p>
			<h3>Інтернет-замовлення:</h3>
			<p>- місць(з наступним викупом проїзних документів у квиткові касі);</p>
			<p>- проїзних(перевізних документів) з наступним друком та отримання проїзних(перевізних документів у квитковій касі).</p>
				
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
	</body>
</html>