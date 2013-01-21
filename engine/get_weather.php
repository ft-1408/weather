	<?php
		function getWeather($path,$reg,$regW){

			$content=file_get_contents($path);

			preg_match($reg,$content,$matches);
			$temp=$matches[1]." °C";

			preg_match($regW, $content, $matches);
			$w=$matches[1];

			mySqlInsert($temp,$w);
			
			$res=$temp." ".$w;
			return ($res)? $res : "Error!";	
	}

