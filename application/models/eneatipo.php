<?php

	class Eneatipo extends CI_Model{

		function __construct(){
			$this->load->database();
		}

		function obtenEneatipo($id){
			$query = $this->db->get_where('Eneatipos',array("Id_Eneagrama"=>$id));
			if ($query->num_rows()==1) {
				return $query->row_array();		
			}
			else
				return "Error";
		}

	} 

?>