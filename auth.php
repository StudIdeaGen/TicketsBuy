<?php
	session_start();
	require_once("functions.php");
	if(isset($_POST['submit']))
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$user=user($login,$password);
		
		if($user!=0 && $login=="admin")
		{
			$_SESSION['login'] = $login;
			$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
			$_SESSION['admin'] = $admin;
		}
		$_SESSION['login'] = $login;
		header("Location: kabinet.php");
		exit;
	}
	if(isset($_POST["logout"]))
	{
		session_start();
		session_destroy();
		header("Location: kabinet.php");
		exit;
	}
?>