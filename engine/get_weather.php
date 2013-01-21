	<?php
		function getWeather($path,$reg,$regW){

			$content=file_get_contents($path);

			preg_match($reg,$content,$matches);
			$temp=$matches[1];

			preg_match($regW, $content, $matches);
			$w=$matches[1];

			$cuurTime=date('Y-m-d H:s:y');

			mysql_connect("localhost","root","toor") OR DIE("Не могу создать соединение ");
			mysql_set_charset("utf8");
			mysql_select_db("weather") or die(mysql_error());
			$query = "INSERT INTO weather_bouth (temp,weather,time)
			VALUES('$temp','$w', '$cuurTime')"; 

			mysql_query($query) or die(mysql_error()); 

			$res=$temp." ".$w;
			return ($res)? $res : "Error!";	
	}

