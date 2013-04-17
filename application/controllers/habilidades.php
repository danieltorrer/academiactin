<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of habilidades
 *
 * @author Daniel
 */
class habilidades extends CI_Controller{
	//put your code here
	public function index(){
		$this->load->view("habilidades_view");
	}
	
	public function caso($id){
		$this->load->model("habilidades_model");
		$data["historia"] = $this->habilidades_model->obtenerhistoria($id);
		$this->load->view("historia_view",$data);
	}
}

?>
