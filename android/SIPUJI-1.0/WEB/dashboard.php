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
    <link href="includes/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="includes/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="includes/css/charisma-app.css" rel="stylesheet">
	<link href="includes/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='includes/css/fullcalendar.css' rel='stylesheet'>
	<link href='includes/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='includes/css/chosen.css' rel='stylesheet'>
	<link href='includes/css/uniform.default.css' rel='stylesheet'>
	<link href='includes/css/colorbox.css' rel='stylesheet'>
	<link href='includes/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='includes/css/jquery.noty.css' rel='stylesheet'>
	<link href='includes/css/noty_theme_default.css' rel='stylesheet'>
	<link href='includes/css/elfinder.min.css' rel='stylesheet'>
	<link href='includes/css/elfinder.theme.css' rel='stylesheet'>
	<link href='includes/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='includes/css/opa-icons.css' rel='stylesheet'>
	<link href='includes/css/uploadify.css' rel='stylesheet'>
</head>
<body>
<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="SIPUJI" src="includes/img/sipuji.png" /></a>
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.php?logoff=1">
						<i class="icon-user"></i><span class="hidden-phone"> Keluar</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Dasbor</li>
						<li><a class="ajax-link" href="dashboard.php"><i class="icon-user"></i><span class="hidden-tablet"> Petugas</span></a></li>
						<li><a class="ajax-link" href="prauji.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Prauji</span></a></li>
						<li><a class="ajax-link" href="uji.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Uji</span></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Dasbor</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Petugas</a>
					</li>
				</ul>
			</div>
			<p class="text-right">
            <a class="btn btn-large btn-primary" href="signup.php">
            	<i class="icon-plus icon-white"></i>
                	Tambah Petugas
              	</a>
            </p>
			<div class="row-fluid sortable">		
				<div class="box span12">
                    <div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Petugas</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Nama Petugas</th>
								  <th>Nama Pengguna</th>
								  <th>Tugas</th>
								  <th>Status</th>
								  <th>Tindakan</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							require_once 'includes/DB_Functions.php';
    						$db = new DB_Functions();
							$user = $db->listUser();
							if ($user != false) {
							for ($i=0; $i<count($user); $i++) {
							?>
                            <tr>
								<td><?php echo $user[$i]["name"]; ?></td>
								<td class="center"><?php echo $user[$i]["username"]; ?></td>
								<td class="center">Prauji/Uji</td>
								<td class="center">
									<span class="label label-success">Aktif</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
										Lihat                                            
									</a>
									<a class="btn btn-info" href="#">
										<i class="icon-edit icon-white"></i>  
										Ubah                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Hapus
									</a>
								</td>
							</tr>
                            <?php
							}
							}
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; SIPUJI 2013</p>
			<p class="pull-right"><!--Powered by: iThreads--></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="includes/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="includes/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="includes/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="includes/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="includes/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="includes/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="includes/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="includes/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="includes/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="includes/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="includes/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="includes/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="includes/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='includes/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='includes/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="includes/js/excanvas.js"></script>
	<script src="includes/js/jquery.flot.min.js"></script>
	<script src="includes/js/jquery.flot.pie.min.js"></script>
	<script src="includes/js/jquery.flot.stack.js"></script>
	<script src="includes/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="includes/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="includes/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="includes/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="includes/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="includes/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="includes/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="includes/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="includes/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="includes/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="includes/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="includes/js/charisma.js"></script>
</body>
</html>