<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('xdebug'))
{
	function xdebug($data = null,$to_false=false)
	{
		if($to_false){
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
		
	}
}