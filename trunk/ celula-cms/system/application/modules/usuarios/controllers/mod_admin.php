<?php
class Mod_admin extends Controller {
	var $datos = Array();
	function __construct()
	{
		parent::Controller();
		$this->load->language('usuarios');
		$this->load->model('m_usuarios', 'm');
	}
	
	function index()
	{
		$this->datos['usuarios'] = $this->m->verUsuarios();
		
		$this->load->view('admin/header',$this->datos);
		
		$this->load->view('index',$this->datos);		
		$this->load->view('verUsuarios',$this->datos);
		$this->load->view('admin/foot',$this->datos);
	}
	function editar(){
		echo $this->input->post('nombre');
		echo $this->input->ip_address();
	}
	function eliminar(){
		print_r($_POST);
	}
	function selectNivel($nivel1,$nivel2){
		return ($nivel1==$nivel2)? 'selected="selected"' : '';
	}
}
?>