<?php

function counts ($array) {
	$newArray = [];
	foreach($array as $element){
		$newArray = [$element => $newArray[$element] + 1];
	}
	return $newArray;
}
$origArray = [1, 1, 1, 2, 2, 3, 4, 5, 4];
var_dump(counts($origArray));