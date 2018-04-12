<?php

$connect = mysql_connect('localhost','root','');
	mysql_select_db('newdatabase',$connect);

	$hidden_id = $_POST['hidden_id'];
	$sorow = $_POST['sorow'];
	$romi = $_POST['romi'];
	$mithu = $_POST['mithu'];

	$query = mysql_query("update prac20 set sorow = '$sorow', romi = '$romi', mithu = '$mithu' where id = '$hidden_id'");

	header('location: index.php');






?>