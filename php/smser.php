<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMSER</title>
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:300px;
	padding:14px;
}
/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	
}
	</style> 
</head>

<body>
<?

	switch ($option) {

	case sendsms:
		if ($text == "") { echo "Error!<br>Text not entered<br><a href=\"javascript:history.back(-1)\">Go Back</a>"; die; } else { }
		if ($to == "") { echo "Error!<br>Number not entered<br><a href=\"javascript:history.back(-1)\">Go Back</a>"; die; } else { }

		$url = "http://www.2-waysms.com/sms.php";
		$postfields = array ("text" => "$text", // do not need to change
		"to" => "$to", // do not need to change
		"id" => "*****", // you ID in www.2-waysms.com accout
		"sec" => "****************************"); // your secret code in www.2-waysms.com account
		if (!$curld = curl_init()) {
		echo "Could not initialize cURL session.";
		exit;
		}
		curl_setopt($curld, CURLOPT_POST, true);
		curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
		curl_setopt($curld, CURLOPT_URL, $url);
		curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($curld);
		curl_close ($curld);
		$out = explode('|',$output);

		echo "Message Status: $out[1]"; 

		//Header("Location: $PHP_SELF");
	break;

	default:

	echo "<div id=\"stylized\" class=\"myform\">"
	   ."<h1>Send Sms</h1>"
	   ."<form method=post action=\"$PHP_SELF?option=sendsms\">"
	   ."<table border=\"0\">"
	   ."<tr>"
		 ."<td>Number</td>"
		 ."<td><input type=\"text\" name=\"to\"></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>Message</td>"
		 ."<td><textarea rows=\"4\" cols=\"25\" name=\"text\"></textarea></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>&nbsp;</td>"
		 ."<td><input type=submit name=submit value=Send>"
		 ."<div class=\"spacer\"></div></td>"
	   ."</tr>"
	   ."</table>"
	   ."</form>"
	."</div>";


	}

?>
</body>
</html>