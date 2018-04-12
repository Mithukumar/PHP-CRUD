<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<?php 

		$connect = mysql_connect('localhost','root','');
		mysql_select_db('newdatabase',$connect);

		$roll = $_GET['roll'];

		$query 	= mysql_query("select * from prac20 where id = '$roll'");
		$row 	= mysql_fetch_array($query);

		$hidden_id 	= $row['id'];
		$sorow 		= $row['sorow'];
		$romi 		= $row['romi'];
		$mithu 		= $row['mithu'];
		
	 ?>

	<form method="post" action="update.php">
		<input type="hidden" name="hidden_id" value="<?php echo $hidden_id ?>">
		<input type="text" placeholder="sorow" name="sorow" value="<?php echo $sorow ?>">
		<input type="text" placeholder="romi" name="romi" value="<?php echo $romi ?>">
		<input type="text" placeholder="mithu" name="mithu" value="<?php echo $mithu ?>">
		<button>save</button>
	</form>
</body>
</html>