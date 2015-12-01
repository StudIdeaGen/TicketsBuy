<?php
session_start();
include 'db_con.php';
?>
<html>
 	<head>
 		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<?php 
			$sql = "SELECT name FROM cities";
			$result = mysql_query($sql);
				if (mysql_num_rows($result) > 0) {
				$i=0;$cityArray=array();
				while($row = mysql_fetch_array($result)) {
					$cityArray[$i]=(string)$row['name'];
					$i=$i+1;
					}
					} else {
						echo "0 results";
							}
			class City
				{
					 var $cityList;
					 function init($list){
						 $this->cityList=$list;
					 }
						function makeList()
						{
							echo json_encode($this->cityList);
						}											
				}
			$city1= new City;
			$city2= new City;
			$city1->init($cityArray);
			$city2->init($cityArray);
		
		?>
		<script>
		  $(function() {
    var availableTags1 = <?php  echo $city1->makeList();?>;
	var availableTags2 = <?php  echo $city2->makeList();?>;
    $("#myForm input[name='from']").autocomplete({
      source: availableTags1
    });
	$("#myForm input[name='where']").autocomplete({
      source: availableTags2
    });
  });
		</script>
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
			<div id="marchrut"><form action="b.php" method="post" id="myForm">
				<h1>Оберіть маршрут</h1>
					<div>Звідки:</div>
						<p><input type="text" maxlength="25" size="25" name="from" ></p>
					<div>Куди:</div>
						<p><input type="text" maxlength="25" size="25" name="where" ></p>
					<div>Дата відправки:</div> 
						<p><input type="date" name="calendar" size="25"></p>
					<h1><input type="submit" value="Знайти" style="margin-top:10px;"></h1>
			</form></div>	
        </main> 
    
        <footer>
			<div>(c)2015 traintick</div>
			<div>"TrainTick" -сервіс онлайн бронювання.</div>
			<div>Ми прагнемо бути №1 в обслуговуванні пасажирів.</div>
        </footer></div>
</div>
	</body>
</html>