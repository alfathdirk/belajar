<?php 

// $x = "22-01-09";
// $a = date("d-M-Y");
// echo $a;
// echo $a;

function xlog($a , $b = 1) {
	echo "<pre>";
	print_r($a);
	echo "</pre>";
}

// for ($i=0; $i < 10; $i++) { 
// 	$f[] = $i;
// }
// xlog($f) ;

// for ($z=0; $z < 10; $z++) { 
// 	$fib[] = $z;
// }

// xlog($fib);

function pertambahan($a , $b){
	$c = $a + $b;
	print $c; 
}

$ini = 20;
$itu = 20;
pertambahan($ini,$itu);
?>