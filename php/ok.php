<?php 

// $player = array(
// 	'player_1' => array(
// 		'lines' => 30,
// 		'ko' => 2,
// 		),
// 	'player_2' => array(
// 		'lines' => 40,
// 		'ko' =>4,
// 		),
// 	// 'player_3' => array(
// 	// 	'lines' => 40,
// 	// 	'ko' =>4,
// 	// 	),
// 	// 'player_4' => array(
// 	// 	'lines' => 40,
// 	// 	'ko' =>4,
// 	// 	),
// 	// 'player_5' => array(
// 	// 	'lines' => 40,
// 	// 	'ko' =>4,
// 	// 	),
// 	);

$player_1 = array(
	'name' => 'alfath',
	'lines' => 61,
	'ko' =>0,
	'height' => 0
	);

$player_2 = array(
	'name' => 'farid',
	'lines' => 51,
	'ko' => 2, //farid ko in alfath
	'height' => 0
	);

//ceritanya dilayar farid
if($player_1['ko'] > $player_2['ko'] ){
	echo "you're win " . $player_1['name'];
} else {
	if ($player_1['lines'] > $player_2['lines']) {
		echo "you're win " . $player_1['name'];
	} else {
		// echo "you're LOSE "  . $player_1['name']; ;
		if($player_1['lines'] == $player_2['lines']){
			if($player_1['height'] > $player_2['height']){
				echo "you're win " . $player_1['name'];
			} else {
				echo "DRAW";
			}
		} 
	}
	echo "you lose " .$player_1['name'];
}


// $name = array('alfath','thariq','edow','syahrul','thomas','bejo');
// // $last = array('teas','asd','hoyy','kirpa','kriuk','oww');



// for ($i=0; $i < 5; $i++) { 
// 	# code...
// $ran = array_rand($name) ;
// $las = array_rand($last);

// echo $name[$ran] . " " . $last[$las] . "<br>";
// }


//$text = "asdasxdasdxs";

//$split = str_split($text);
//for ($i=0; $i < count($split); $i++) { 
//	if ($split[$i] == 'x'){
//		$send[]  = "ada x" . "<br>";
//		echo "send email to x" . "<br>";
//	} else {
//		echo "nothing" . "<br>";
//	}

//}


//print_r($send);


?>





