	<?php
		function getWeather($path,$reg,$regW){
			
			$content=file_get_contents($path);

			preg_match($reg,$content,$matches);
			$temp=$matches[1];

			preg_match($regW, $content, $matches);
			$w=$matches[1];

			$res=$temp." ".$w;
			return ($res)? $res : "Error!";	
	}
