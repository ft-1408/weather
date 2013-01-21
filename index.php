<?php 
	header('Content-Type: text/html; charset=utf-8');

	require_once "services/sinoptic.php";
	require_once "services/yandex.php";
	require_once "engine/get_weather.php";

	echo "Погоды в Коростене на разных сайтах <br><br><br>";
	echo "Sinoptic ".getWeather($pathSinoptic,$regSinoptik,$regSinoptikW)."<br><br>";
	echo "Yandex ".getWeather($pathYa,$regYa,$regYaW)."<br><br>";
	
