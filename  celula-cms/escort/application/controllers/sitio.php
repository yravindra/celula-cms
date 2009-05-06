<?php
class Sitio extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$seg1= $this->uri->segment(3);
		$seg2= ($this->uri->segment(4))? $this->uri->segment(4) : 'index';
		// $enemigos= $this->load->module('enemigos');
		// $load['enemigos']= $enemigos->listar();
		$load['enemigos']=  modules::run('$seg1/$seg1/$seg2');
		$this->load->view('saludo',$load);
		
	}
}
?>