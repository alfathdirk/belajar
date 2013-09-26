<html>
<body>
    <form method="post" />
    <input type="text" name="kata" />
    <!-- <select name ="jenis" > -->
    <!-- <option value ="dolar" > $ </option> -->
    <!-- <option value ="yen" >yen</option> -->
    <input type="submit" value="KLIK" />


</form>


</body>
</html>



<?php

// 1.234.567 
// 12.345.678
// 1.23
// 123.456.789
// $str = str_split($_POST['kata']);

// for($i = 0 ;$i < count($str);$i++){
//     if(count($str) && ($i % 3 == 1)){
//         echo '.';
//     } else {
//         if (count($str) && ($i % 3 == 2)){
//             echo '*';
//         }
//     }
//     echo $str[$i];

// }
// print_r($str);


//if ($_POST['kata']){
//    if($_POST['jenis'] == 'dolar') {
//        echo $_POST['kata'] * 100;
//    } elseif ($_POST['jenis'] == 'yen') {
//        echo $_POST['kata'] * 2;
//    }
//}
//switch ($_POST['jenis']) {
//    case 'dolar' :
//      echo  $_POST['kata'] * 1000;
//        break;
//    case 'yen':
//        echo $_POST['kata'] * 2;
//        break;
//}

// phpinfo();

// $data = array(6, 12, 2, 1, 3, 8, 7, 9, 12);

// for ($x = 0; $x < count($data); $x++) {
//     for ($y = 0; $y < count($data); $y++) {
//         if ($data[$x] < $data[$y]) {
//             $hold = $data[$x];
//         $data[$x] = $data[$y];
//             $data[$y] = $hold;
//         }
//     }
// }

// echo 'Sort: ';

// foreach ($data as &$value) {
//     echo $value . ' ';
// }


?>