<?php

// session_start();

// if(!isset($_SESSION['user_name']) and !isset($_SESSION['user_pass'])){
// 	echo "halaman ini belum bisa diakses coy";
// } else {
// 	echo "<input type='text'> udah masuk ke session coy ";
// }

// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = 'password';
// $conn = mysql_connect($dbhost, $dbuser, $dbpass);

// $a = "alfath ganteng";
// $sql = "INSERT INTO user (username) VALUES ('$a')";
// mysql_select_db('test');
// // mysql_query( $sql, $conn );
// function xdebug($data = null){
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// }

// $kota = "semua kebutuhan ada di jakarta dan sekitarnya despok";

// $w = explode(' ',$kota);

// $city = array('jakarta','depok');

// for($i = 0;$i < count($city);$i++){
// 	if(in_array($city[$i], $w)){
// 		echo $w[$i];
// 	} 
// }


		// $str = str_split("alfath");
		// $as = array_reverse($str);
		// echo "alfath" . '<br>';

		// for ($z=1; $z < count($str)-1; $z++) { 
		// 	echo $str[$z] ;
		// 	for ($l=count($str)-2; $l > 0; $l--) { 
		// 		echo ' ';
		// 	}
		// 	echo $str[(count($str)-1) - $z];
		// 	echo '<br>';
		// }
		// for ($i=5; $i >= 0; $i--) { 
		// 	echo $str[$i];
		// }

		// echo "<br>";
		// echo "<br>";
		// echo "<br>";
		// echo "======================";

		// $nama= array("alfath","andi","reeko","sumeneh","farid"); 
		// $lnama= array("Thariq","susilo","heek","puri","hidayat"); 

		// echo '<br>';
		// for ($i=0; $i < count($nama); $i++) { 
		// 	echo $nama[rand(0,4)] . '.' .$lnama[rand(0,4)] . "<br>";
		// }



$str = "12345";
$string = str_split($str);

echo $str . "\n";
for ($z=1; $z < count($string)-1; $z++) { 
	echo $string[$z] ;
	for ($x=0; $x < count($string)-2 ; $x++) { 
		echo " ";
	}
	echo $string[(count($string)-1)-$z] ;
	echo "\n";
}
for ($l=count($string)-1; $l > -1  ; $l--) { 
	echo $string[$l];
}
	echo "\n";




?>
