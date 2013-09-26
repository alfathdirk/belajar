<html>
<head>
	<script type="text/javascript">
// 		  var person = "";
// person = prompt("What is your name?"); 
// alert(person + ' ,are you sure for learning javascipt??');

// function diklik(){
// 	var	people = prompt("Hey How old you are?");

// 	if (people < 15) {
// 		document.write("hey very young your age "+people) 
// 	} else {
// 		document.write("hey very oldest your age "+people) 
// 	}
// }

// function diklik(){
// 	var x = window.confirm("are you sure for open the window?")
// 		if (x == false){
// 			document.write("false");
// 		} else {
// 			document.write("trues");
// 		}
// 	window.open("http://google.com",'google','width=300,height=300')
// }

// var mobil = new Array()
// mobil[0]= "bmw";
// mobil[1]= "mercy";
// mobil[2]= "ferari";
// for(i=0;i<mobil.length - 1;i++){
// 	document.write(mobil[i] + " ")
// }

var text = "alfath";
var panjang = text.length;
var tampilBesar = text.toUpperCase();
var eko = document;

	// document.write(panjang)

	eko.write(text.substr(0,panjang));
	eko.write("<br>");
	for (i = 1;i < panjang-1;i++){
		document.write(text.charAt(i));
		for (x = 1;x < panjang-1;x++){
			document.write(' ');
		}
		document.write(text.charAt((panjang-1)-i));
		document.write('<br>');
	}
	for (z = panjang;z > 0 ;z--){
		eko.write(text.charAt(z-1));
	}

	</script>
	<body>

		<br>
		<br>
		<br>
		


		<form action="" method="post">

			<input type="text" name="kata">
			<input type="text" name="ke">
			<input type="submit">
		</form>
	</body>

	<?php 
	$data = array('a' => 1, 'b' => 2, 'c' => 3 ,'d' => 4);


	if($_POST){

		$ex = explode(' ',$_POST['kata']);

		$ar = array_keys($data);
		for ($i=0; $i < count($ex); $i++) { 
			$hasil = $data[$ex[$i]]+$_POST['ke'] ;

			if($hasil > count($data)){

				$xx = $hasil - count($data) ;

				echo $ar[$xx - 1];
			} 
			echo $ar[$hasil - 1];
		}
	}


	?>