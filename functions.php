<?php
	
	function ConnectDB()
	{
		$db = "ticketbuy";
		$link = mysql_pconnect ("localhost", "root", "") ;
		if ( !$link )  die ("Неможливо підключитись до  MySQL");
		{
			mysql_select_db ( $db ) or die ("Неможливо відкрити $db");
		}
	}
	
	function user($login,$password)
	{
		ConnectDB();
		$sql="select user_id from user 
		Where login = '".$login."' and password =  '".$password."'";
		$num=mysql_query($sql);
		$count_rows=mysql_num_rows($num);
		if($count_rows==0) return 0;
		$data= mysql_fetch_array($num,MYSQL_ASSOC);
		return $data["user_id"];
	}
?>