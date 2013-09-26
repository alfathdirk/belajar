<?php
function xlog($data = null){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
// // output a 10 b 10 c 10 d 10  
// $one = array("10", "20", "30", "40");
// $two = array("a", "b", "c", "d");

// $w = 0 ;
// for($i = 0;$i < count($one) ;$i++ ){
// 	echo $two[$i] . ' ' . $one[$i] . ' ';
// }

// if($_POST){

// 	$x = str_split($_POST['duit']);

// 	for ($i=count($x); $i > 0; $i--) { 

// // xlog($i);
// 		// xlog($x[count($x)-$i]);
// 		if($i % 3 == 0){
// 			// if(count($i) % 3 )
// 			$z[] =  '.';
// 		}


// 		$z[] = $x[count($x)-$i];
// 	}

// 	for ($l=0; $l < count($z); $l++) { 
// 		if($z[0] == '.'){
// 			echo @$z[$l+1];
// 		}else {
// 			echo $z[$l];
// 		}
// 	}

// }

if ($_POST['kata']) {
	$now = strtotime('now');

	$tgl = strtotime($_POST['kata']);
	$dateThn = ($now - $tgl)/31536000;

	$dateBulan = $dateThn / fa43200;

	$dateHari = $dateBulan /30;

	// $dateHari = $dateBulan / 86400;
	xlog(floor($dateThn). 'tahun' );
	xlog($dateBulan . 'bulan');
	xlog(floor($dateHari). 'Hari');

}

?>

<form action="" method="post">
	<input type="text" name="kata">
	<input type="submit">
</form>


