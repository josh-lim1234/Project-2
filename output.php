<?php
$symbolno = $_GET['nochar'] ?? null;
$newstr = $_GET['description'] ?? null;
$syms = $_GET['syms'] ?? null;
for ($i=0; $i<$symbolno; $i++){
	if ($syms) {
		if ($i < sizeof($syms)) {
			$newstr = substr_replace($newstr, $syms[$i], rand(0,strlen($newstr)),1);
		}
	}
}
echo 'YOUR MESSAGE IS: ', $newstr;
