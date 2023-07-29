<?php
error_reporting(0);
$Server = "127.0.0.1";
$Username = "root";
$Password = "";
$DB = "master";
$Connection = mysqli_connect($Server, $Username, $Password, $DB);

if (!$Connection)
	{
	die("Connection Failed: " . mysqli_connect_error());
	}

?>
