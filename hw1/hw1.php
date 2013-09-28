<!DOCTYPE html>
<head>
	<title>HW1</title>
	<meta charset="UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Bigelow+Rules' rel='stylesheet' type='text/css'>
	<?php
		//Sets time zone to Pacific
		date_default_timezone_set('America/Los_Angeles');
		
		//$timeofday is being calcuated by date()
		$timeofday = date('G');
		
		
		if ($timeofday <= 6) {
				$background_color = '#00246B'; $imageinthesky = 'images/moon.jpg'; $font_color = '#99CCFF';
		}
		else if ($timeofday > 6 & $timeofday < 20) {
				$background_color = '#FFE9BF'; $imageinthesky = 'images/sun.jpg';
		}
		
		else {
				$background_color = '#00246B'; $imageinthesky = 'images/moon.jpg'; $font_color = '#99CCFF';
		}
	?>
	<style type='text/css'>
	
	body {
	font-family: 'Bigelow Rules', cursive;	
	background-color:<?=$background_color?>;
	color:<?=$font_color?>;

	}
	p#main {
	font-size:36px;
	width:800px;
	margin-right:auto; 
	margin-left:auto;
	}
	h1#main {
	font-size:56pt;
	
	}
	</style>
</head>
<body>
	<h1 id='main'>Homework One - Day Turns to Night</h1>
	<p id='main'><?php echo 'There are twenty four hours in the day, and this is hour number '?><strong><?= $timeofday?></strong><?= '.'?></p>
	<p id='main'><img src="<?=$imageinthesky?>" alt="Sky photo" width="800px"></p>
	
</body>
</html>