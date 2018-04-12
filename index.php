<!DOCTYPE html>
<html>
<head>
	<title>prac20</title>
</head>
<body>
<form method="post" action="save.php">
	<input type="text" placeholder="sorow" name="sorow">
	<input type="text" placeholder="romi" name="romi">
	<input type="text" placeholder="mithu" name="mithu">
	<button>save</button>
</form>
<br>
<table border="1" width="450">
	<tr>
		<th>serial</th>
		<th>sorow</th>
		<th>romi</th>
		<th>mithu</th>
		<th>action</th>
	</tr>
	<?php

	$connect = mysql_connect('localhost','root','' );
	mysql_select_db('newdatabase',$connect);

	$query = mysql_query("select * from prac20");

	while ($data = mysql_fetch_array($query)):

		$sorow = $data['sorow'];
		$romi = $data['romi'];
		$mithu = $data['mithu'];
		$id = $data['id'];

	?>
	<tr>
		<td><?php echo $id?></td>
		<td><?php echo $sorow?></td>
		<td><?php echo $romi?></td>
		<td><?php echo $mithu?></td>
		<td>
			<a href="edit.php? roll=<?php echo $id?>">edit</a>
			<a href="delete.php? roll=<?php echo $id?>">delete</a>
		</td>
	</tr>
<?php endwhile?>
</table>
</body>
</html>