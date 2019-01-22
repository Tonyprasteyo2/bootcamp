<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width,intial-scale=1.0">
<meta name="viewport"content="width=device-width,intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="a">
<table class="table table-hover table-bordered">
	<td>persion_id</td>
	<td>name</td>
	<td>person_hobbies</td>
	<tr>
	<?php
	include 'config.php';
	$a = mysqli_query($db,"SELECT * FROM bot")or die(mysql_error());
	while($data = mysqli_fetch_array($a)){
	?>
	<tr>
		<td><?php echo $data['person_id']; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['person_hobbies'];?></td>
		<?php
	}
	?>
</body>
</html>