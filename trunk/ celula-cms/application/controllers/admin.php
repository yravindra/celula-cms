<?php
class Admin extends Controller {
	var $datos= Array();

	function __construct()
	{
		parent::Controller();		
		$datos= $this->lang->load('admin');
	}
	
	function index()
	{
		$seg1= $this->uri->segment(3);
		$seg2= ($this->uri->segment(4))? $this->uri->segment(4) : 'index';
		
		//$modulo= $this->load->module($this->uri->segment(3));
		//$modulo= $this->load->module('usuarios','');
		//$modulo->index();
		echo modules::run('usuarios/admin/saludo');
		/*$this->load->view('admin/header',$this->datos);
		// eval("\$modulo->"\$seg2"\()"\ ;");
		// eval('$modulo->'.$seg2.'();');
		$this->load->view('admin/foot',$this->datos);*/
	}
}
?>