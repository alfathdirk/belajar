<?php
/*
 * general.php
 * 
 * Copyright 2011 winda <winda@localhost>
 * 
 */
 
	//	general function used in system wide
	
	function __($str)
	{
		//	simplify the way you wrote things :p
		return print($str);
	}
	
	
	function load_res($type, $name)
	{
		switch($type)
		{
			case "css":
				$path="<link rel=\"stylesheet\" href=\"addons/style/".$name.".css\" type=\"text/css\" media=\"screen\" />";
				break;
			case "js":
				$path="<script src=\"addons/js/".$name.".js\" type=\"text/javascript\"></script>";
				break;
			default:
				$path="";
		}
		print $path;
	}
	
	function redir($sleep, $page)
	{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		print "<meta http-equiv=\"refresh\" content=\"$sleep;url=http://$host$uri/$page\" />";
	}
	
	function cleanInput($input)
	{
		$search = array (
			'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
			'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
			'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
			'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);

		$output = preg_replace($search, '', $input);
		return $output;
	}
  
	function sanitize($input)
	{
		if (is_array($input)) {
			foreach($input as $var=>$val) {
				$output[$var] = sanitize($val);
			}
		}
		else {
			if (get_magic_quotes_gpc()) {
				$input = stripslashes($input);
			}
			$input  = cleanInput($input);
			$output = mysql_real_escape_string($input);
		}
		return $output;
	}
		
	//	$c_date = date('d-m-Y',strtotime($row1['commencement_date']));  
	function dateDiff($start, $end) {
		$start_ts = strtotime($start);
		$end_ts = strtotime($end);
		$diff = $end_ts - $start_ts;
		return round($diff / 86400);
	}

	function getCarName($oid)
	{
		$id = sanitize($oid);
		$a = "Select * from `object` where `objectid` = '$id';";
		$b = mysql_fetch_row(mysql_query($a));
		return $b[3]; 
	}
	
	function getUsername($uid)
	{
		$id = sanitize($uid);
		$a = "Select * from `user` where `id` = '$id';";
		$b = mysql_fetch_row(mysql_query($a));
		return $b[1]; 
	}
	
	function getUserDetail($uid)
	{
		$id = sanitize($uid);
		$a = "Select * from `user` where `id` = '$id';";
		$b = mysql_fetch_row(mysql_query($a));
		return $b; 
	}
	
?>
