<?php

// for ($x = 1; $x <= 100; $x++) {

// 	if (($x % 3 == 0) && ($x % 5 == 0)) {
// 		echo $x . 'fizzbuz' . '<br>';
// 	} elseif($x % 5 == 0) {
// 		echo $x  . 'fizz' . '<br>';
// 	} elseif ($x % 3 == 0) {
// 		echo $x . 'buzz' . '<br>' ;

// 	} else {
// 		echo $x .'<br>';
// 	}
// }

// echo date("D , d-M-Y"), "\n";

// $array = array('lastname', 'email', 'phone');
// $comma_separated = implode("", $array);

// echo $comma_separated;
// $datan = 5;

// for($data = 1 ;$data <= ($datan / 2) ;$i++){
// 	echo "\n";
// 	for($y=1;$y <=($in / 2);$y++){
// 	echo " " ;
// 	}
// 	echo "*";
// }echo "\n";
// for ($i=1; $i <=($in / 2) ; $i++) { 
// 	echo "*";
// } echo str_repeat("*", $i);
// for($i = 1 ;$i <= ($in / 2);$i++){
// 	echo "\n";
// 	for($y=1;$y <=($in / 2);$y++){
// 	echo " " ;
// 	}
// 	echo "*";}


// $kata = str_split("kaskus");
// $z='';
// foreach ($input as $r){
// 	echo $z .= $r  ;
// echo "\n";
// } 

// $data = array(4,7,2,3,5,1,6);

// for ($o=0;$o < count($data);$o++){
// 	for ($x=0;$x < count($data);$x++){
// 		if($data[$o] < $data[$x]){
// 			$hold =  $data[$o];
// 			$data[$o] = $data[$x];
// 			$data[$x] = $hold;
// 		}
// 	}
// }
function xlog($value){
	echo "<pre>";
	print_r($value);
	echo "<pre>";
}



// $mhs =array(1,2,2,23);
//  for($a = 0;$a < count($mhs);$a++){
//  	for($b = 0;$b < count($mhs);$b++){
//  	echo "*";
//  }
//  echo "<br>";
// }

// $data = array('alfath','adul','alam','farid','putra','ichan');

// for($i = 0;$i < count($data);$i++){
// 	if($i % 2 == 0) {
// 		echo $data[$i] ;
// 	}
// 	echo $i . "<br>" ;
// }

// for ($i = 0;$i < 50;$i++){
// 	for ($iz = 0;$iz < 50;$iz++){

// 	}
// 	echo $i += $i;
// }


// 1 2 3 4 5 6 7 8
// 0 1 1 2 3 5 8 13

$fibonacci[0] = 0;
$fibonacci[1] = 1;

for ($i=count($fibonacci); $i <= 5;$i++) { 
	$fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];

	// 2 = 2-1 + 2-2 
	// 	1 + 0 = [1] = 1
	// 3 = 3-1 + 3-2
	// 	2 + 1 = [3] = // 
	// 4 = 4-1 + 4-2 
	// 	3 + 2 = [5] =
	// 5 = 5-1 + 5-2 
}

foreach ($fibonacci as $val) {
	echo $val . "\n";
}


// $aw[0] = 0;
// $aw[1] = 3;

// for ($i=2; $i < 6; $i++) { 
// 	// $aw[$i] = $aw[$i-1] + $aw[$i-2];
// 	xdebug($aw[$i],1);
// }

// $date = '2013-07-09T04:58:23.075Z';
// $seconds = strtotime($date);

// echo date('Y-m-d [H:i:s]', $seconds);

// $nilai = array();
// $nilai[0] = 10;
// $nilai[1] = 90;
// $nilai[0] = 10;

// for ($i=0 ; $i < 8 ; $i++) { 
// 	$nilai[] = ($nilai[$i]*($nilai[0]-$i))-$nilai[$i] ;
// }
// // print_r($nilai);
// $z = 10;
// foreach ($nilai as $key) {
// 	echo "rekursif dengan hasil : ".$key ." nilai ".$z . "\n";
// $z--;
// }


	$stasiun = array("depok" => 1 , "debar" => 2 , "pocin" => 3 , "ui" => 4, "up" => 5, "la" => 6 , "tanjung barat" => 7, "pasar minggu" => 8, "pasming baru" => 9, "kalibata" => 10, "cawang" => 11, "tebet" =>12,"manggarai" =>13,"sudirman" => 14 , "tanah abang" =>15,"karet" => 16);

	$duit = 2000;

	if($_POST){
			// $kota = explode('-', $_POST['kota']);
		$kota[0] = $_POST['kota1'];
		$kota[1] = $_POST['kota2'];


		$keys = array_values($stasiun);
		$values = array_keys($stasiun);

		$stPertama = $keys[$stasiun[$kota[0]]-1];

		// xlog($stPertama);
		$stKedua = $keys[$stasiun[$kota[1]]-1];

	// if($stKedua > )


		
		if($stKedua > $stPertama){
			for ($i=$stPertama; $i < $stKedua; $i++) { 
				$ar[] = $values[$i] ;
			}

			if(count($ar) <= 5 ){
				$result = $duit;
			} else {
				$tot = ceil((count($ar)-5) / 3);
				$result = ($tot*500) + $duit;
			}
		} else {
			for ($i=$stPertama-2; $i > $stKedua-2; $i--) { 
				$ar[] = $values[$i] ;
			}
			if(count($ar) <= 5 ){
				$result = $duit;
			} else {
				$tot = ceil((count($ar)-5) / 3);
				$result = ($tot*500) + $duit;
			}
		}
		echo $result;
	}



?>

<form action="" method="post">
	<select name="kota1" id="">
		<?php foreach ($stasiun as $z => $s): ?>
		<option value="<?php echo $z ?>"><?php echo $z ?></option>
	<?php endforeach ?>
</select> >
	<select name="kota2" id="">
		<?php foreach ($stasiun as $kex => $valx): ?>
		<option value="<?php echo $kex ?>"><?php echo $kex ?></option>
	<?php endforeach ?>
</select>
<input type="submit">
</form>
