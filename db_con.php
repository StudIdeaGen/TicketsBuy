<?php
$db = "ticketbuy";
$link = mysql_pconnect ("localhost", " ", "") ;
if ( !$link )  die ("Неможливо підключитись до  MySQL");
{
mysql_select_db ( $db ) or die ("Неможливо відкрити $db");
}
?>
