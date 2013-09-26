<form method="post" />
<input type="text" name="kata" />
<input type="text" name="menit" />
<!--        <input type="text" name="detik" />
<select name ="jenis" />
    <option value ="dollar" >  dolar</option>
    <option value ="yen" >yen</option>-->
    <input type="submit" value="KLIK" />


  </form>





  <?php
  error_reporting(E_ALL ^ E_NOTICE);

// if  ($_POST){
//    for ($a = 1 ;$a <= $_POST['kata'];$a++){
// 	echo  '<br>';
// 	for ($x=1 ;$x <= $a - 1;$x++ ) {
// 	    echo '&nbsp' ;
// 	}
// 	for ($xy = 1 ;$xy <= $_POST['kata'];$xy++){
// 	    echo '*';
// 	}
//    }
// }



//if ($_POST) {
//    $z = ' ';
//    $x = str_split($_POST['kata']);
//    foreach ($x as $r) {
//	$z  .= $r ;
//	
//	echo $z . '<br/>';
//    }
//    
//    }
//    


//    for ($x=0;$x <= count($a);$x++) {
//	for ($y = 0 ;$y <= $x;$y++){
//	    echo $a[$y-1];   
//	}
//	echo '<br>';
//    
//    }
//}
//if ($_POST){
//  for ($x=1 ;$x<=$_POST['kata'];$x++){
//      for ($y=1;$y <= ($x - 1) ;$y++) {
//	  echo '&nbsp';
//	}
//	for($y=1;$y <= $_POST['kata'];$y++){
//	    echo '*';
//	}echo '<br>';
//  } 
//  
//  
//    
//    
//}

  $kata = "alfath";
  $strSplit = str_split($kata);
  $w = array_reverse($strSplit);
  echo $kata . "\n";
  for($i= 1 ; $i < count($strSplit) -1;$i++) {

   echo $strSplit[$i] ;
   echo str_repeat(' ', count($strSplit)-2) ;
   echo $w[$i] . "\n";
 }
 
 
 $result = array_reverse($strSplit);
 foreach ($result as $value) {
   echo $value;
 } echo "\n" . "\n";

//menghitung menjadi detik
//if($_POST){
//    
//    $jam = $_POST['jam'];
//    $menit = $_POST['menit'];
//    $detik = $_POST['detik'];
//    
//    $convJamkeDetik = $jam * 3600;
//    $convMenitkeDetik =  $menit * 60;
//    
//    echo $convJamkeDetik + $convMenitkeDetik + $detik;
//    
//	
//}
//if($_POST){
//    $a = explode(' ', $_POST['kata']);
//    
//    foreach ($a as $x)  {
//	$h = str_split($x) ;
//	echo $h[0] .  ' ';
//    }
//}
//$x = $_POST['kata'];
//$test = str_split($x);
//   
//echo $x . '<br>';
//   for ($a = 1;$a <= count($test) ;$a++) {
// echo $test[$a] . '<br>'  ; 
//}
//for ($i = 1; $i <= $_POST['kata']; ++$i) { 
//    for ($j = 1; $j <= $_POST['kata']; ++$j) { 
//        echo (($j - ($j & 1)) * $_POST['kata']) - $i + 1 + ((($j & 1) * $i * 2) - ($j & 1)), ' '; 
//    }
//     
//    echo "<br />"; 
//}  
//$bintang = '*';
//
//
//for ($x = 1; $x <= $_POST['kata'];$x++){
//    echo  '<br>';
//           for ($y = 1;$y <= $_POST['kata'];$y++) {
//    echo $bintang  ;
//}
//}
//$angka = $_POST['kata'];
//
//for ($x = 1 ; $x <= $angka ;$x++){
//    echo $x . '<br>';
//} for ($a = $x - 2  ;$a <= $x  ;$a--){
//     
//    echo $a . '<br>';
//     if ($a == 1) {
//        break;
//    }
//    
//    } 
//$kata = str_split($_POST['kata']);
//
// for($i = 0; $i < count($kata);$i++){

//    for($j = 0; $j < (count($kata) - $i);$j++){
//        echo $kata[$j];
//    }
//    echo '<br/>';
// }   
//$input = $_POST['kata'];
//
//$haha = explode(' ', $input);
//
//$result = array_reverse($haha);
//foreach ($result as $x) {
//    echo $x.' ';
//}
//$array = str_split($_POST['kata']);
//$spaci= '&nbsp;';
//
//foreach ($array as $row) {
//    echo $row . ' ';
//    
//}
//
//echo '<br>';
//
//for ($i=1;$i < count($array)-1;$i++){
//    echo $array[$i] ;
//    
//    echo str_repeat('_.', count($array) - 2);
//    
//    echo $array[count($array) - ($i + 1)];
//    
//    echo '<br>';
//} 
//       
// 
//
//$result = array_reverse($array);
//
//
//foreach ($result as $h) {
//    echo $h . ' ';
//}
//function copyData() {
//
//
//	if ($_POST) {
//
//
//	    $sql = "SELECT * FROM finance_authority WHERE business_unit_id = ?";
//	    $result = $this->db->query($sql, array($_POST['business_unit_id']))->result_array(); //3 >>nothing
//	    if ($result) {
//		foreach ($result as $r) {
//		    unset($r['id']);
//		    $r['business_unit_id'] = $_POST['business_unit_id2'];
//		    $this->db->insert('finance_authority', $r);
//		}
//	    } else {
//		echo "<script>alert('No Database Cant Copy')</script>  ";
//	    }
//	}
//
//
//	$business_units = $this->db->query('SELECT id,name,code FROM business_unit ORDER BY code ASC')->result_array();
//	$this->_data['business_unit_options'] = array(
//	    '' => '(please select)',
//	);
//	
//	foreach ($business_units as $business_unit) {
//
//	    $data = $this->_data['business_unit_options'][$business_unit['id']] = $business_unit['code'] . ' ' . $business_unit['name'];
//
//	}
//    }


 ?>
