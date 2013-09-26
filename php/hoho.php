<html>
<form method="post" action="">
	<input type="text" name="kata" >
	<input type="text" name="ke" >
	<input type="submit" value="Click" >

</form>
</html>


<?php
function xdebug($data = null){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}







// if($_POST){
// 	$str = str_split($_POST['kata']);

// 	for($i=0;$i < count($str);$i++){
// 		for($x=0 ;$x < count($str) - $i ;$x++){
// 			echo $str[$x];
// 		}
// 		echo "<br>";
// 	}

// }


 // if($_POST){
 // 	$max = 5;
 // 	$w = $_POST['kata'] + $_POST['ke'];
 // 	if($w > $max){
 // 		echo $w - $max;
 // 	} else {
 // 		echo 'bisa';
 // 	}
 // }

// $kunci = array('A' => 1,'B' => 2,'C' => 3,'D' => 4,'E' => 5,'F' => 6,'G' => 7 ); 

// if($_POST){
// 	echo $_POST['kata'] . "<br>";
// 	$ex = explode(',', $_POST['kata']);

// 	$ar = array_keys($kunci);
// 	$i = 0;
// 	foreach ($ex as $key => $value) {
// 		$x = $kunci[$ex[$i]]; //a,b,c,d

// 		@$m = $x + $_POST['ke'][$key[$i]]; //a , b .c ,d + 2 == d , e, f

// 		if($m > count($kunci)){
// 			$bi = $m - count($kunci);
// 			echo $ar[$bi-1] . " " ;
// 		} else {
// 			echo $ar[$m-1] . ' ' ;
// 		}
// 		$i++;
// 	}
// }


// for ($i=1 ; $i<=100 ; $i++) {

// 	if ($i % 3 == 0 && $i % 5 == 0) {
// 		echo $i . ".fizzbuzz\n" ;
// 		} elseif ($i % 3 == 0) {
// 		echo $i . ".buzz\n";	
// 		} elseif ($i % 5 == 0) {
// 		echo $i . ".fizz\n";
// 		} else {
//              echo $i . "\n";    
//            }
// }


// $exp = str_split($_POST['kata']);

// if(count($exp)-1 == 6){
// 	echo "juta";
// } elseif(count($exp)-1 == 5){
// 	echo "ratus ribu";
// }elseif(count($exp)-1 == 4){
// 	echo "puluh ribu";
// }elseif(count($exp)-1 == 3){
// echo "ribu";
// }
//



// $huruf = array('satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan');
// if($_POST){
// 	$exp = str_split($_POST['kata']);
// 	$countExp = count($exp);
// 	if($countExp == 4){

// 	}
// }


?>
