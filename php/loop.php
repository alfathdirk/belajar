



<?php

$in = 4;
for($x = 1;$x <= $in;$x++){
	echo $x . "\n";
}
for($i=$in-1;$i >=1;$i--){
	echo $i . "\n";
}


//  *
// ***
//*****
// ***
//  *
// for($f = 0;$f < 6;$f++){
// 	echo " ";
// } echo "*" . "\n";
// for($i=0;$i < 6;$i++){
// 	for($x=$i;$x < 5 ;$x++){
// 		echo " ";
// 	} echo "*";
// 	for($z = 0;$z < $i ;$z++){
// 		echo " ";
// 	}
// 	for($u=-1;$u < $i ;$u++){
// 		echo " ";
// 	}
// 	echo "*" . "\n";
// }
// for($p=1;$p < 6;$p++){
// 	for($m=0;$m < $p;$m++){
// 		echo " ";
// 	} echo "*";

// 	for($l = $m;$l < 6;$l++){
// 		echo " ";
// 	}
// 	for($y = $p;$y < 5;$y++){
// 		echo " ";
// 	}
// 	echo "*"."\n";
// }
// for($f = 0;$f < 6;$f++){
// 	echo " ";
// } echo "*" . "\n";


//ngitung satuan
// $w = str_split($_POST['kata']);
// $panjangSatuan = count($w);


// $angka = array("se","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan");

// print_r($w);

// if($w[0]) {
// 	echo $angka[$w[0]-1] . " " ;
// }  

// if($w[1] === "0" ) {
// 	echo "puluh ";
// }  else {
// 	echo 'puluh ' . $angka[$w[1]-1] ;
// }

// if($w[2] . $w[1] === "00") {
// 	echo $angka[$w[0]-1] . "ratus";
// } elseif($w[2] . $w[1] != null ) {
// 	echo $angka[$w[0]-1] . "ratus" . $angka[$w[1]-1] . "puluh" . $angka[$w[2]-1]  ;
// } elseif(!$w[2]){
// 	echo "puluhan nih";
// }




//  -----*			0 = 1 => (2n) + 1
//      ***			1 = 3
//     *****		2 = 5
//  --*******		3 = 7
//  -*********		4 = 9
//  ***********		5 = 11






// for ($i=1;$i <= 30;$i+=5) {
// 	echo ($i*2)+1 . "\n" ;
// }


// for ($b=0;$b <= 5;$b++){
// 	 for ($z=$b; $z <= 5 ; $z++) { 
// 	 echo ' ';
// 	 }
// }
// for ($i=0; $i <= 5 ; $i++) { 
// 	echo ' ';
// 	for ($x = 0 ;$x <= $i;$x++){
// 		echo '*';
// 	} echo "\n";
// } 

//1 8 15 22 29
// for ($i = 0; $i < 5; $i++) { 
// 	echo (7*$i)+1  . "\n";
// }

// $o = 6;
// for ($i=0; $i < $o; $i++) { 
// 	for($y = $i;$y < $o - 1 ;$y++){
// 		echo " ";
// 	}
// 	for($x= 0 ;$x < $i;$x++){
// 		echo "*";
// 	}
// 	for($z = -1;$z < $i;$z++){
// 		echo "*";
// 	}
// 	echo "\n";
// }

// $t = "dor";
// $q = str_split($t);
// $is = 1;
// for($i=0;$i <= count($q);$i++){
// 	echo $q[$i] ;
// } echo "\n" ;

// for($x=1;$x <= count($q)-2;$x++){
// 	echo $q[$x];
// 	for($z=1;$z <= count($q)-2;$z++){
// 		echo " ";
// 	}
// 	$op = array_reverse($q) ;
// 	echo $op[$is]."\n";
// 	$is++;
// }
// for ($l=count($q); $l >= 0 ; $l--) { 
// 	echo $q[$l] ;
// } echo "\n" . "\n";



?>