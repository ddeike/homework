<!DOCTYPE html>
<head>
	<title>HW1</title>
	<meta charset="UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Bigelow+Rules' rel='stylesheet' type='text/css'>
		
	<?php
	require('logic.php');
	?>
		
	<link rel='stylesheet' href='css/main.css' type='text/css' >
			
</head>
<body class='<?=$class?>'>
		<h1 id='main'>Homework One - Day Turns to Night</h1>
		<p id='main'><?php echo 'There are twenty four hours in the day, and this is hour number '?><strong><?=$timeofday?></strong><?= '.'?></p>
		<p id='main'><img src="<?=$imageinthesky?>" alt="Sky photo" width="800px"></p>
			
</body>
	</html>