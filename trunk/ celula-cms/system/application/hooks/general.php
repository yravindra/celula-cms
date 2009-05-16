<?php
if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class General
{
	function idioma()
	{
		$CI =& get_instance();
		$CI->lang->load('global', $CI->config->item('language'));
                
	}
}
?>