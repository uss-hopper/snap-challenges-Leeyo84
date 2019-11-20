<?php

/** martys answer */
function counts ($array) {

	$newArray = [];

	foreach($array as $element){
		if(isset($newArray[$element])){
		$newArray = [$element => $newArray[$element] + 1];
		}else {
			$newArray[$element] = 1;
		};
	};
	return $newArray;
	};


$origArray = [1, 1, 1, 2, 2, 3, 4, 5, 4];
var_dump(counts($origArray));