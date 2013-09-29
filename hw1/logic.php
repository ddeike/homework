<?php
		//Sets time zone to Pacific
		date_default_timezone_set('America/Los_Angeles');

		//$timeofday is being calcuated by date()
		//$timeofday = date('G');
		$timeofday = 21;

		// here's the logic. shifting styling to css. keeping php here.
		if ($timeofday < 6 OR $timeofday > 20) {
		$class = 'night'; $imageinthesky = 'images/moon.jpg';
		}
		else {
		$class = 'day'; $imageinthesky = 'images/sun.jpg'; 
		}
?>