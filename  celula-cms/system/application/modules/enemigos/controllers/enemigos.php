<?php
class Enemigos extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('lista_enemigos');
	}
	function listar($titulo='Enemigos'){
		$datos['titulo'] = $titulo;
		return $this->load->view('lista_enemigos',$datos,true);
	}
}
?>