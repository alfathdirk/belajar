<?php

$kata = "kaskus";

$str = str_split($kata);

// $w = array_reverse($str);
// print_r($str);

echo $kata . "\n";
// for ($i=1; $i < count($str)-1; $i++) { 
// 	echo $str[$i] ;
// 	echo str_repeat('-',count($str)-2);
// 	echo  $w[$i]. "\n";
// }
// for ($x=0; $x < count($str); $x++) { 
// 	echo $w[$x];
// } 
// echo "\n";

	# code...

for ($i=1; $i < count($str)-1; $i++) { 
	echo $str[$i];
	for($x = 1;$x < count($str)-1;$x++){
		echo "-";
	}
		echo $str[count($str) - ($i+1)];

	echo "\n";
}
for ($l=count($str); $l > -1 ; $l--) { 
	echo $str[$l];
}echo "\n";

?>