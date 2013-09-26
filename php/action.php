<?php
	$server = "localhost";
	$user = "root";
	$pass = "winda";
	$db = "boi";
	
	$a = mysql_connect($server, $user, $pass);
	if($a){
		$b = mysql_select_db($db);
		if(!$b){
			echo  mysql_error();
		}
	} else {
		echo mysql_error();
	}
	if(isset($_POST['nama']))
	{
		$nama = $_POST['nama'];
		$tlahir = $_POST['tempat_lahir'];
		$tgl = $_POST['tgl'];
		$bln = $_POST['bulan'];
		$thn = $_POST['tahun'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$type = $_POST['member_type'];
		$type_id = $_POST['type_id'];
		$numberid = $_POST['idnumber'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$kdpos = $_POST['postcode'];
		if($_POST['pernah'] == "ya" ) {
			$keterangan = $_POST['keterangan'];
		} else {
			$keterangan = "Belum Pernah Daftar Sebelumnya";
		}
		$birthdate  = sprintf ("%04d-%02d-%02d", $thn, $bln, $tgl);
		echo $birthdate;
		$query = "INSERT INTO `boi` (`nama`, `jk`, `tmpat_lahir`, `tgl_lahir`, `email`, `member_type`, `type_id`, `idnumber`, `alamat`, `kota`, `poscode`, `keterangan`) 
		VALUE ('$nama','$gender','$tlahir','$birthdate','$email','$type','$type_id','$numberid','$alamat','$kota','$kdpos','$keterangan' ); ";
		$masuk = mysql_query($query);
		if($masuk){
			echo "berhasil";
		} else {
			echo "gagal". mysql_error();
		}
		
	} else {
		print "asu";
	}
?>
