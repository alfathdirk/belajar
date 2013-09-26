<html>
<form method="post" action="">
  <input type="text" name="kata" > +
  <input type="text" name="ke" >
  <input type="submit" value="Click" >

</form>
</html>



<?php
   //  $angka1 = $_POST['kata'];
   //  $angka = explode(' ', $angka1);

$angka = array(1,2,4,6,12,216,621,23,123);
for($x = 0;$x < count($angka);$x++){
 for ($z = 0 ;$z <count ($angka);$z++){
   if ($angka[$x] < $angka[$z]){
     $tahan = $angka[$x];
     $angka[$x] = $angka[$z];
     $angka[$z] = $tahan;
     // print_r($angka[$z] . ',');
   }
 }
}

   // foreach ($angka as $row) {
   //  echo $row . ',';
   // }


// $huruf = array('a' => 'n',
//       'b' => 'o',
//       'c' => 'c',
//       'd' => 'p',
//       'e' => 'z',
//       'f' => 'k'
//   );

// $huruf1 = str_split($_POST['kata']);
// echo $huruf[$_POST['kata']];

// $huruf = array('n','o','p','q','r','s','t','u','v','w','x','y','a','b','c','d','e','f','g','h','i','j','k','l','m');
// if($_POST){

//   $x = array_values($huruf);
//   $w = array_keys($huruf);
//   $m = $huruf[$_POST['kata']];
//   echo $x[$m];

// }

 // print_r($x);   

  // foreach ($huruf as $key => $value) {
  //     if($_POST['kata'] == $key){
  //       echo $value;
  //       break;
  //     }
  // }

  // echo $huruf[$_POST['kata']];


  // $x = array_reverse(explode(' ',$_POST['kata']));

  // foreach ($x as $key => $value) {
  //   echo $value . ' ';
  // }

// echo implode(',',$huruf);


// $abjad = array('a' => 1,'b' => 2,'c' => 3,'d' => 4,'e' => 5,'f' => 6,'g' => 7);

// // a b + 2 = c d

// if($_POST){
//   $exp = explode(' ',$_POST['kata']);

//   for ($i=0; $i < count($exp) ; $i++) { 
//     $f = $abjad[$exp[$i]]+$_POST['ke'];
//     $z = array_keys($abjad);
//     // print_r($f);
//     if($f > 7){
//       $x = $f-7;
//       echo $z[$x-1];
//     } else {
//       echo $z[$f-1] . ' ';
//     }
//   }
// }

// $lahir = "12 Februari 2013";

// $x = strtotime("25 oct 1992");

// $now = strtotime('now') - $x ;

// // $tgl = date('d m y',$now);

// $tgl = $now / 31536000;

// echo ceil($tgl);










?>