<?php 
	header('Content-Type: text/html; charset=utf-8');

	require_once "services/sinoptic.php";
	require_once "services/yandex.php";
	require_once "engine/get_weather.php";
?>
<html>
	<head>
		<title>test</title>
	</head>	
	<body>
		<h1>Погоды в Коростене на разных сайтах</h1>
		<div><?="Sinoptic ".getWeather($pathSinoptic,$regSinoptik,$regSinoptikW)?></div>
		<div><?="Yandex ".getWeather($pathYa,$regYa,$regYaW).""?></div>
	</body>	
</html>
	
