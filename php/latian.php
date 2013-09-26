<html>
	<form action="" method="post">
		<input type="text" name="kata" value="">
		<input type="submit" >
	</form>
</html>

<?php

// function tambah($a){
// 	$a = $_POST['kata'];
// 	$b = 20;
// 	echo $a+$b;
// }

// $z = 20;
// tambah($z);

// for($i=0;$i<5;$i++){
// 	$a = ($i + 7)- 1  ;
// 	echo  $a ;
// 	echo "\n";
// }

/**
* 
*/
class alfath {
	
	var $ichan = 'asd';

	function __construct(){
		parent::__construct();
	}

	function xdebug($x){
		echo "<pre>";
		print_r($x);
		echo "</pre>";
	}

	function kerja(){
		$this->ichan = 'direktor';
		// xdebug($this->ichan);
	}

}

kerja()
?>