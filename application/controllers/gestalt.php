<?php
class Gestalt extends CI_Controller {
	public function index(){		
		$this->load->view('tgp');
	}
	public function revisar(){		
		$data["rt"] = $this->input->post("q11")+$this->input->post("q12")+$this->input->post("q13")+$this->input->post("q14");
		$data["ds"] = $this->input->post("q21")+$this->input->post("q22")+$this->input->post("q23")+$this->input->post("q24");
		$data["pr"] = $this->input->post("q31")+$this->input->post("q32")+$this->input->post("q33")+$this->input->post("q34");
		$data["in"] = $this->input->post("q41")+$this->input->post("q42")+$this->input->post("q43")+$this->input->post("q44");
		$data["rf"] = $this->input->post("q51")+$this->input->post("q52")+$this->input->post("q53")+$this->input->post("q54");
		$data["df"] = $this->input->post("q61")+$this->input->post("q62")+$this->input->post("q63")+$this->input->post("q64");
		$data["cf"] = $this->input->post("q71")+$this->input->post("q72")+$this->input->post("q73")+$this->input->post("q74");
		$data["fi"] = $this->input->post("q81")+$this->input->post("q82")+$this->input->post("q83")+$this->input->post("q84");
		switch($data["rt"]){
			case 0: $data["rtest"]="desbloqueado";
					break;
			case 2:$data["rtest"]="funcional";
					break;
			case 4:$data["rtest"]="ambivalencia";
					break;
			case 6:$data["rtest"]="disfuncional";
					break;
			case 8:$data["rtest"]="bloqueado";
					break;
				}
		switch($data["ds"]){
			case 0: $data["dsest"]="desbloqueado";
					break;
			case 2:$data["dsest"]="funcional";
					break;
			case 4:$data["dsest"]="ambivalencia";
					break;
			case 6:$data["dsest"]="disfuncional";
					break;
			case 8:$data["dsest"]="bloqueado";
					break;
				}
		switch($data["pr"]){
			case 0: $data["prest"]="desbloqueado";
					break;
			case 2:$data["prest"]="funcional";
					break;
			case 4:$data["prest"]="ambivalencia";
					break;
			case 6:$data["prest"]="disfuncional";
					break;
			case 8:$data["prest"]="bloqueado";
					break;
				}
		switch($data["in"]){
			case 0: $data["inest"]="desbloqueado";
					break;
			case 2:$data["inest"]="funcional";
					break;
			case 4:$data["inest"]="ambivalencia";
					break;
			case 6:$data["inest"]="disfuncional";
					break;
			case 8:$data["inest"]="bloqueado";
					break;
				}
		switch($data["rf"]){
			case 0: $data["rfest"]="desbloqueado";
					break;
			case 2:$data["rfest"]="funcional";
					break;
			case 4:$data["rfest"]="ambivalencia";
					break;
			case 6:$data["rfest"]="disfuncional";
					break;
			case 8:$data["rfest"]="bloqueado";
					break;
				}
		switch($data["df"]){
			case 0: $data["dfest"]="desbloqueado";
					break;
			case 2:$data["dfest"]="funcional";
					break;
			case 4:$data["dfest"]="ambivalencia";
					break;
			case 6:$data["dfest"]="disfuncional";
					break;
			case 8:$data["dfest"]="bloqueado";
					break;
				}
		switch($data["cf"]){
			case 0: $data["cfest"]="desbloqueado";
					break;
			case 2:$data["cfest"]="funcional";
					break;
			case 4:$data["cfest"]="ambivalencia";
					break;
			case 6:$data["cfest"]="disfuncional";
					break;
			case 8:$data["cfest"]="bloqueado";
					break;
				}
		switch($data["fi"]){
			case 0: $data["fiest"]="desbloqueado";
					break;
			case 2:$data["fiest"]="funcional";
					break;
			case 4:$data["fiest"]="ambivalencia";
					break;
			case 6:$data["fiest"]="disfuncional";
					break;
			case 8:$data["fiest"]="bloqueado";
					break;
				}

		$this->load->view('perfiltgp',$data);
		
	}
}


?>