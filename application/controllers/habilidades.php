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
		$this->load->model("hsociales");
        $data["historias"] = $this->hsociales->Obt_Casos();
		$this->load->view("habilidades_view",$data);

	}
	
	public function caso($id){
		$this->load->model("hsociales");
		$data["historia"] = $this->hsociales->Obt_Caso($id);
		$data["personajes"] = $this->hsociales->Obt_Pers($id);
		$this->load->view("historia_view",$data);
	}
}

?>
