<?php

	$connect = mysql_connect('localhost','root','');
	mysql_select_db('newdatabase',$connect);

	$roll = $_GET['roll'];

	$query = mysql_query("delete from prac20 where id = $roll");

	header('location: index.php');
?>