<?php 
session_start();
?>
<html>
 	<head>
		<title>TrainTick</title>
		<link rel="stylesheet" type="text/css" href="text.css">
	</head>
	<body>
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
				<?
					if(isset($_SESSION['login']))
					{
						require_once("userdata.php");
						//echo "jhfbvjh";
					}
					else
					{
						require_once("auth_form.php");
						//echo "456789";
					}
				?>
			</div>
				
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
		</div>
		</div>
	</body>
</html>