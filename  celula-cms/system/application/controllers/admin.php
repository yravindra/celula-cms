<?php
class Admin extends Controller {
	var $datos= Array();

	function __construct()
	{
		parent::Controller();
		$this->load->helper('url');
	}	
	function index()
	{
		$seg1= $this->uri->segment(3);
		$seg2= ($this->uri->segment(4))? $this->uri->segment(4) : 'index';		
		$modulo= $this->load->module($this->uri->segment(3).'/mod_admin');
		eval('$modulo->'.$seg2.'();');		
	}
	function editar()
	{
		$seg1= $this->uri->segment(3);
		$seg2= ($this->uri->segment(4))? $this->uri->segment(4) : 'index';		
		$modulo= $this->load->module($this->uri->segment(3).'/mod_admin');
		eval('$modulo->'.$seg2.'();');		
	}
}
?>