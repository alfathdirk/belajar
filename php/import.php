<HTML>
	<HEAD>
		<TITLE> New Document </TITLE>
		<META NAME="Generator" CONTENT="EditPlus">
			<META NAME="Author" CONTENT="">
				<META NAME="Keywords" CONTENT="">
					<META NAME="Description" CONTENT="">
					</HEAD>

					<BODY>
						<form enctype='multipart/form-data' action="<?php echo $PHP_SELF ?>" method='post'>
							<font face=arial size=2>Type file name to import:</font><br>
							<input type='file' name='filename' size='20'><br>
							<input type='submit' name='submit' value='submit'></form>
							<?php
							if(isset($_POST['submit']))
							{
								// $target_path = "D:/xampp/htdocs/myweb/excell/"; // ini alamat untuk tempat copy file CSV

								$target_path = $target_path . basename( $_FILES['filename']['name']);

								if(move_uploaded_file($_FILES['filename']['tmp_name'], $target_path)) {
									echo "<font face=arial size=2>The file ". basename( $_FILES['filename']['name']). " berhasil di upload</font><br>";
								} else{
									echo "<font face=arial size=2>upload data gagal, silahkan ulangi lagi</font><br>";
								} // ini untuk mengupload file CSV ke alamat tadi
// ini script untuk mengimport data CSV ke MySQL
								$filename=$target_path;
								$handle = fopen("$filename", "r");
								while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
								{

									$import="INSERT into data values('$data[0]','$data[1]','$data[2]')";
									mysql_query($import) or die(mysql_error());
								}
								fclose($handle);
								print "<font face=arial size=2>Order data berhasil</font>";

							}
							else
							{

								print "";
							}
							
							?>
						</BODY>
					</HTML>