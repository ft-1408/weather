<?php 
	header('Content-Type: text/html; charset=utf-8');

	function getWeather($path,$reg,$regW){
		$content=file_get_contents($path);
		preg_match($reg, $content, $matches);
		$temp=$matches[1];
		preg_match($regW, $content, $matches);
		$w=$matches[1];

		$res=$temp." ".$w;
		return ($res)? $res : "Error!";	
	}

	$pathSinoptic="http://sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D0%BA%D0%BE%D1%80%D0%BE%D1%81%D1%82%D0%B5%D0%BD%D1%8C";
	$regSinoptik="/<p class=\"today-temp[^>]*?\">(.?\d[^<]*)/";
	$regSinoptikW="/<img width=\"188\" height=\"150\" src=\"[^\"]*..[^\"]*.([^\"]*)/";

	$pathYa="http://pogoda.yandex.ua/korosten/?ncrnd=1512";
	$regYa="/<div class=\"[a-z]?-thermometer__now\">(\D?\d[^<]*)/";
	$regYaW="/<div class=\"b-info-item b-info-item_type_fact-big\">([^<]*)/";
	
	echo "Погоды в Коростене на разных сайтах <br><br><br>";
	echo "Sinoptic ".getWeather($pathSinoptic,$regSinoptik,$regSinoptikW)."<br><br>";
	echo "Yandex ".getWeather($pathYa,$regYa,$regYaW);

	$c=file_get_contents('http://vk.com/promer1');
	file_put_contents(bbb, $c);
