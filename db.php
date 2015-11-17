<?php
 function CreateTable($name,$tableList,$conn){
	$sql="CREATE TABLE "+$name+" (";
	for(i=0;i<$tableList.length();i++) 
	{
		if(i!=$tableList.length()-1)
			$sql+=$tableList[i]+" , ";
		else
			$sql+=$tableList[i]+");";
	}
	mysql_query($sql,$conn);
 }

	
}
function TicketBuy(){
	$conn = mysql_connect("localhost", "user","password")
	or die("Could not connect : " . mysql_error());
	print "Connected successfully";
	$create = 'CREATE DATABASE db';
	if (mysql_query($create, $conn)) {
		echo "База db успешно создана\n";} 
	else {
		echo 'Ошибка при создании базы данных: ' . mysql_error() . "\n";
	}
	mysql_query("USE db");
	$cities=["city_id int NOT NULL","name varchar(20)","primary key(city_id)"];
	$Orders=["order_id int NOT NULL","FOREIGN KEY (route_id) REFERENCES routers(route_id)","FOREIGN KEY (user_id) REFERENCES users(user_id)","date_serving date","type_wagon varchar(20)","places int","additional_services varchar(20)","primary key(order_id)"];
	$routers=["route_id int NOT NULL primary key","FOREIGN KEY (city1_id) REFERENCES cities(city_id)","FOREIGN KEY (city2_id) REFERENCES cities(city_id)","price int","time1 date","time2 date","primary key(route_id)"];
	$users=["user_id int NOT NULL","name varchar(20)","login varchar(20)","password varchar(20)","phone int","points int","primary key(user_id)"];
	CreateTable("cities",$cities,$conn);
	CreateTable("users",$users,$conn);
	CreateTable("routers",$routers,$conn);
	CreateTable("Orders",$Orders,$conn);
	mysql_close($conn);
};
TicketBuy();

?>