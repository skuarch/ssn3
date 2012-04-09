<?php
class Escucharadio extends CI_Controller{

	//================================================================================
	function __construct(){
		parent::__construct();
		$this->load->model('template_model');	
	} // end __controller

	//================================================================================
	function index(){		
		
		$data = $this->template_model->getTemplate();
		$this->load->view('index2',$data[0]);
		
	} // end index	

} // end class
?>