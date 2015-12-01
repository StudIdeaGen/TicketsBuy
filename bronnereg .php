<?php
session_start();
include 'db_con.php'; 
$sql="select city_id from cities where name='".$_POST['from']."'";
$id1=mysql_query($sql);
$id1=mysql_fetch_array($id1);
$id1=$id1['city_id'];
$sql="select city_id from cities where name='".$_POST['where']."'";
$id2=mysql_query($sql);
$id2=mysql_fetch_array($id2);
$id2=$id2['city_id'];
$sql = "SELECT price FROM routes where city1_id ='".$id1."' and city2_id='".$id2."'";
			$result = mysql_query($sql);
				if (mysql_num_rows($result) > 0) {
				while($row = mysql_fetch_array($result)) {
					$price=$row['price'];
					}
					}
?>
<html>
 	<head>
  		<meta charset="utf-8">
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
				<li><a href="holovna.html"><span>Головна</span></a></li>
				<li><a href="kabinet.html"><span>Особистий кабінет</span></a></li>
				<li><a href="inform.html"><span>Інформація про нас</span></a></li>
			</ul>
        </nav>
        <main>
        <div id="reserv1"><form action="" method="post">
					<div>Звідки:</div> 
					  <p><?php echo $_POST['from']." - ".$_POST['where'];?></p>
					<div>Дата:</div>
						<p><?php echo $_POST['calendar'];?></p>
					<div>Тип вагону:</div> 
						<p>К</p>
					<div>Вагон:</div> 
						<p>№2</p>
                    <div>Місце:</div> 
						<p>10</p>
						<div>
					 <div class="squaredTwo">
                    <input type="checkbox" value="None" id="squaredTwo" name="check" checked /></div></div>
					<p>Постільна білизна</p>
					<div>
					 <div class="squaredTwo">
                    <input type="checkbox" value="None" id="squaredTwo" name="check"  /></div></div>
					<p>Чай</p>
					<div>
					 <div class="squaredTwo">
                    <input type="checkbox" value="None" id="squaredTwo" name="check" /></div></div>
					<p>Кава</p>
    	                <div>Прізвище:</div>
						<p><input type="text" maxlength="25" size="25" name="from"></p>
						<div>Ім'я:</div>
						<p><input type="text" maxlength="25" size="25" name="from"></p>
						<div>Номер телефону:</div>
						<p><input type="text" maxlength="25" size="25" name="from"></p>
						<div>Ціна квитка:</div>
						<p><?php  echo $price;?></p>
					<h1><input type="submit" value="Підтвердити вибір"></h1><p><input type="submit" value="Відміна"></p>
			</form></div>		 
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