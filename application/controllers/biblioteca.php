<?php
	
	class Biblioteca extends CI_Controller{

		public function index(){
			$this->load->view("biblioteca_view");
		}

		public function eneatipo($enea){
			$this->load->model("eneatipo");
			$eneatipo = $this->eneatipo->obtenEneatipo($enea);
			if (isset($eneatipo) && !($eneatipo == "Error")) {
				$data['eneatipo']=$eneatipo;
				$this->load->view("eneatipo_view",$data);
			}
			else
				$this->load->view("index.html");
		}

	}

?>