<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
   	session_unset();
   	session_destroy();
   	header('Location: login.php');
   	exit();
}
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 3600)) {
    session_unset();
    session_destroy();
	header('Location: login.php');
   	exit();
}
$_SESSION['last_activity'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="SIPUJI Administrator">
	<meta name="author" content="iThreads">
    <title>SIPUJI Administrator</title>
	<link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="includes/css/style.css" rel="stylesheet">
    <script src="includes/js/html5.js"></script>
</head>
<body>
<div class="row">
	<div class="dialog">
		<div class="title"></div>
		<div class="block">
		<form id="signup" class="form-horizontal" method="post" action="index.php">
            <input type="hidden" name="tag" value="register">
            <input type="hidden" name="device" value="web">
            <legend>Regiter Petugas</legend>		
            <div class="control-group">
                <label class="control-label">Nama Lengkap</label>
                <div class="controls">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                        <input type="text" class="input-xlarge" id="name" name="name" placeholder="Nama lengkap">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Nama Pengguna</label>
                <div class="controls">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                        <input type="text" class="input-xlarge" id="username" name="username" placeholder="Nama pengguna">
                    </div>
                </div>	
            </div>
            <div class="control-group">
                <label class="control-label">Kata Sandi</label>
                <div class="controls">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span>
                        <input type="Password" id="passwd" class="input-xlarge" name="passwd" placeholder="Kata sandi">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Ulang Kata Sandi</label>
                <div class="controls">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span>
                        <input type="Password" id="conpasswd" class="input-xlarge" name="conpasswd" placeholder="Ketik ulang kata sandi">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01"></label>
                <div class="controls">
                    <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Register</button>
                </div>
        	</div>
	  	</form>
		</div>
	</div>
</div>
<script src="includes/js/jquery-1.10.2.min.js"></script>
<script src="includes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="includes/js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#signup").validate({
		rules:{
			name:"required",
			username:"required",
			passwd:{
				required:true,
				minlength: 8
			},
			conpasswd:{
				required:true,
				equalTo: "#passwd"
			}
		},
		errorClass: "help-inline"
	});
});
</script>
</body>
</html>