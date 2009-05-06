<?php
class Admin extends Controller {

	function __construct()
	{
		parent::Controller();
		$datos= $this->lang->load('admin');	
	}
	
	function index()
	{
		//$this->load->view('admin');
		
		echo 'admin.php';
	}
	function saludo()
	{
		//$this->load->view('admin');
		echo 'admin.php saludo';
	}
}
?>