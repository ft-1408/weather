<?php 
	$pathYa="http://pogoda.yandex.ua/korosten/";
	$regYa="/<div class=\"b-thermometer__now\">(\D{3}\d[^<]*)/";
	$regYaW="/<div class=\"b-info-item b-info-item_type_fact-big\">([^<]*)/";
