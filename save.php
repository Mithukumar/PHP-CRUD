<?php

$connect = mysql_connect('localhost','root','');
	mysql_select_db('newdatabase',$connect);

	$sorow = $_POST['sorow'];
	$romi = $_POST['romi'];
	$mithu = $_POST['mithu'];

	$query = mysql_query("insert into prac20 values('','$sorow','$romi','$mithu')");

	header('location: index.php');






?>