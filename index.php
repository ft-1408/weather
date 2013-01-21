<?php 
	header('Content-Type: text/html; charset=utf-8');

	require_once "services/sinoptic.php";
	require_once "services/yandex.php";


	function getWeather($path,$reg,$regW){
		$content=file_get_contents($path);
		preg_match($reg,$content,$matches);
		$temp=$matches[1];
		preg_match($regW, $content, $matches);
		$w=$matches[1];
		$res=$temp." ".$w;
		return ($res)? $res : "Error!";	
	}

	

	$pathYa="http://pogoda.yandex.ua/korosten/";
	$regYa="/<div class=\"b-thermometer__now\">(\D{3}\d[^<]*)/";
	$regYaW="/<div class=\"b-info-item b-info-item_type_fact-big\">([^<]*)/";
	
	echo "Погоды в Коростене на разных сайтах <br><br><br>";
	echo "Sinoptic ".getWeather($pathSinoptic,$regSinoptik,$regSinoptikW)."<br><br>";
	echo "Yandex ".getWeather($pathYa,$regYa,$regYaW)."<br><br>";
	
