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
<div class="row">
	<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<img alt="SIPUJI" src="includes/img/sipuji1.0.png" />
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						<?php echo((isset($_GET['error']) && $_GET['error'] == 1)?'Error: nama pengguna dan/atau kata sandi salah':'Silahkan masukan nama pengguna dan kata sandi'); ?>
					</div>
					<form class="form-horizontal" action="index.php" method="post">
						<input type="hidden" name="tag" value="login" />
                        <input type="hidden" name="device" value="web" />
                        <fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" placeholder="Nama pengguna" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Kata sandi" />
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Masuk</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/fluid-row-->
		
	</div>
</div>
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