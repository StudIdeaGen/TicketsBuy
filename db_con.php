<?php
$db = "ticketbuy";
$link = mysql_pconnect ("localhost", " ", "") ;
if ( !$link )  die ("��������� ����������� ��  MySQL");
{
mysql_select_db ( $db ) or die ("��������� ������� $db");
}
?>
