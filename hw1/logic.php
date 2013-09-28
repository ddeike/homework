<?php

	//Sets time zone to Pacific
	date_default_timezone_set('America/Los_Angeles');
	
	//$timeofday is being calcuated by date()
	$timeofday = date(G);
	
	//this may be overly complex to calculate
	if( $timeofday <= 6) {
			$background_color = '#00246B';
	}

	else if( $timeofday > 6) {
			$background_color = '#FFE9BF';
	}
	
	else( $timeofday <= 20) {
			$background_color = '#00246B';
	}

?>	