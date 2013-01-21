<?php
	function mySqlInsert($temp,$weather){
	$cuurTime=date('Y-m-d H:s:y');

	$conn=mysql_connect("localhost","root","toor") OR DIE("Не могу создать соединение ");
	mysql_set_charset("utf8");

	mysql_select_db("weather") or die(mysql_error());
	$query = "INSERT INTO weather_bouth (temp,weather,time)
		VALUES('$temp','$weather', '$cuurTime')"; 

	mysql_query($query) or die(mysql_error());

	mysql_close($conn); 
	}
