<?php
$arraychar = str_split($_GET['description']);
$days = $_GET['days'];
$symbolno = $_GET['nochar'];
$newstr = $_GET['description'];
for ($i=0; $i<$symbolno; $i++){
	if ($days) {
		if ($i < sizeof($days)) {
			$newstr = substr_replace($newstr, $days[$i], rand(0,strlen($newstr)),1);
		}
	}
}
echo($newstr);
