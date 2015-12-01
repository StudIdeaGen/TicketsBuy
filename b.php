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
				<li><a href="holovna.php"><span>Головна</span></a></li>
				<li><a href="kabinet.php"><span>Особистий кабінет</span></a></li>
				<li><a href="inform.php"><span>Інформація про нас</span></a></li>
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
					<div>Ціна квитка:</div>
					 <p><?php  echo $price;?></p>
					<h1><input type="submit" value="Підтвердити вибір" name="submit"></h1><p><input type="button" value="Відміна" onClick="location.href='holovna.php';"></p>
					<?php
					if(isset($_POST['submit']))
					{
						$route_id=mysql_query("select rout_id from routes where city1_id='$id1' and city2_id='$id2'");
						$route_id=$route_id['rout_id'];
						echo $route_id;
						$user_id=mysql_query("select user_id from user where login='".$_SESSION['login']."'");
						
						if($user_id=0){header("Location: kabinet.php");	}	
						
						$user_id=$user_id['user_id'];
						echo $user_id;
						$rr=$_POST['calendar'];
						$resylt=mysql_query("INSERT INTO orders VALUES('','$route_id','$user_id','2015-12-01','K',20)") or die (mysql_error());
						
					}
					?>
					</div>
			</form></div>		 
        </main> 
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer>
	</body>
</html>