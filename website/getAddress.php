<?php
	//$key="AIzaSyA_UkE6q_QQMpUiM9FbFht_MKTir0-gzJ0";
	
	
	$lat=$_REQUEST['lat'];
	$lng=$_REQUEST['lng'];
	
	$url="http://maps.googleapis.com/maps/api/geocode/json?latlng=".trim($lat).",".trim($lng)."&sensor=false";
	$json = file_get_contents($url);
	$obj = json_decode($json);
	$data=$obj->results[0]->formatted_address;
	echo $data;
?>