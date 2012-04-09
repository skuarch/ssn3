<?php

class Template_model extends CI_Model {	
	//================================================================================
	function __construct(){
		parent::__construct();			
		$this->load->database();
	} // end construct
	
	
	//================================================================================
	function getTemplate(){
		$query = $this->db->get('template');
		return $query->result_array();
	} // end getTemplate
	
} // end class

?>