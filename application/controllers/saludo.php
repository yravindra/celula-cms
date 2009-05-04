<?php
class Saludo extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
	function index()
	{
		// $enemigos= $this->load->module('enemigos');
		// $load['enemigos']= $enemigos->listar();
		$load['enemigos']=  modules::run('enemigos/enemigos/listar','Amigos');
		$this->load->view('saludo',$load);
		
	}
}
?>