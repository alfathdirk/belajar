<form action="" method="post">
	<input type="text" name="username">
	<input type="submit">
</form>

<?php 

function xdebug($val){
	echo "<pre>";
	print_r($val);
	echo "</pre>";
}

session_start();
$user = "admin";




if(!isset($_SESSION['user_name'])){
	if($_POST){
		if($_POST['username'] == $user){
			$_SESSION['user_name'] = $user;
		} else {
			echo "SESSION user isn't set.<br>";
		}
		
	}
	echo "input your session username ";
} else {
	echo  "Youve got Session " . $_SESSION['user_name'];
}

?>