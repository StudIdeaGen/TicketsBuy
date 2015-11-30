<?php
$servername = '127.0.0.1';
$username = 'root';
$password = "";

// Create connection
$conn = mysql_connect($servername,$username,$password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_select_db('ticketbuy') or die(mysql_error());
?> 