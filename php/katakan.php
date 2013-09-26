<body>
	<form action="" method="post" >
		<input type="text" name="kata" />
		<!-- <select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="mod">%</option>
		</select> -->
		<!-- <input type="text" name="kata2" /> -->
		<input type="submit" value="KLIK" />




	</form>

</body>



<?php

function xlog($val){
	echo '<pre>';
	print_r($val);
	echo '</pre>';
}

if ($_POST) {
	

	$ar = array('a'=> 'x','b' => 'o' ,'c'=>"l" );

	$x = explode(' ',$_POST['kata']);

	for ($i=0; $i < count($x) ; $i++) { 
		echo $ar[$x[$i]];
	}		
}
















// // $isi=str_rot13($_POST['isi']);

// // echo $isi ;

// if ($_POST) {
// 	$kata = explode(' ', $_POST['kata']);


// 	foreach ($kata as $val) {
// 		$x = str_split($val);

// 		echo strtoupper($x[0])  ;
// 		for ($i=1; $i < count($x) ; $i++) { 
//  			# code...

// 			echo $x[$i];
// 		}
// 		echo " ";
// 	}

// }



	// $tglLahir = "25-10-1992";
	// $aw = explode('-', $tglLahir);
	// $x = $aw[0] . $aw[1];
	// foreach ($aw as $key) {
	// 	$w = str_split($key);

	// }
	// $z = $w[2] . $w[3];

	// if ($_POST['kata'] == ($x .= $z)) {
	// 	echo "pin tidak aman";
	// } else {
	// 	echo "pin aman";
	// }

// $a = "129192912919.jpg";
// $b = explode(".", $a);
// echo $b[0]."_thumb".".".$b[1];







?>