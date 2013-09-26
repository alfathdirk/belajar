<?php

//$NUM = 1;
//
//for ($y = 1; $y <= $NUM; $y++) {
//    echo "* " ;
//} echo "\n";
//for ($w=1 ;$w <= $NUM;$w++){
//    for ($x=2;$x <= $NUM;$x++){
//    echo " ";
//    }
//    echo "*" . "\n" ;
//    
//}


//for ($a = 1; $a <= 5; $a++) {
    
  //  for ($y = $a + 1; $y <= 5; $y++) {
//	echo ' ';
  //  }
    
    //for ($bintang = 1; $bintang <= $a; $bintang++) {
//	echo '* ';
  //  }
    //echo "\n";
//}

//for ($a = 1; $a <= 5; $a++) {
  //  for ($b = 1; $b <= $a; $b++) {
//	echo ' ';
  //  } 
    
    //for ($w = 1; $w <= 5 - $a; $w++) {
//	echo '* ';
  //  }
    //echo "\n";
//}


// for($q=1;$q<=5;$q++){
// 	echo "*" ;
//  } 
//  echo " " . "\n";
  
// for ($f=1;$f <= 4 ;$f++){
	
//     for ($i=1;$i <= 4 ;$i++){
//     	echo ' ';
//     } echo "*" . "\n";
	
// }


// for ($x=1;$x <= 4;$x++){
//    echo "\n";
//  //   for ($y=$x ;$y<=4-1;$y++)  {
// 	// echo " ";
//  //   } 
//    for ($bintang = 1 ;$bintang <= $x;$bintang++) {
// 	echo '*';
//    } echo "\n"; 
//  }

// 0 1 2 3 4 5 6
// 0 1 1 2 3 5 8
 
$fib[0] = 0 ;
$fib[1] = 1 ;
for($i = count($fib);$i < 6;$i++){
  $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

echo "<pre>";
print_r($fib);
echo "</pre>";



?>
