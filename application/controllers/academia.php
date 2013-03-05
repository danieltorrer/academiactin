<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academia extends CI_Controller {

    public function index() {
        if ($this->isValidated()) {
            if ($this->session->userdata['activo'] == 1) {
                redirect("academia/dashboard");
            } else {
                redirect("academia/registro");
            }
        } else {
            redirect("academia/login");
        }
    }

    public function login() {
        $this->load->model('login');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        } else {

            $cons = $this->login->getLogin($this->security->xss_clean($this->input->post('email')), sha1($this->security->xss_clean($this->input->post('pass'))));

            if ($cons) {
                $sesion_data = array(
                    'id' => $cons[0]['Id_Usuario'],
                    "activo" => $cons[0]["Activo"]
                );
                //redirect("academia/index");
                $this->session->set_userdata($sesion_data);
                $data['id'] = $this->session->userdata['id'];
                if ($cons[0]['Activo'] == 0) {
                    redirect("academia/registro");
                }
                else
                    redirect("academia/dashboard");
            } else {
                $this->load->view('login_view');
            }
        }
    }

    public function registro() {
        $this->load->view("registro_view");
    }

    public function registrar() {
        $this->load->model('usuarios');

        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('AP', 'Apellpat', 'required');
        $this->form_validation->set_rules('AM', 'Apellmat', 'required');
        $this->form_validation->set_rules('FN', 'Fecha de Nacimiento', 'required');
        $this->form_validation->set_rules('nac', 'Nacionalidad', 'required');
        $this->form_validation->set_rules('gen', 'Genero', 'required');
        $this->form_validation->set_rules('dir', 'Direccion', 'required');
        $this->form_validation->set_rules('lada', 'Lada', 'required');
        $this->form_validation->set_rules('tel', 'Telefono', 'required');
        $this->form_validation->set_rules('cel', 'Celular', 'required');
        $this->form_validation->set_rules('mov', 'Moviles', 'required');
        $this->form_validation->set_rules('web', 'Sitios Web', 'required');
        $this->form_validation->set_rules('cd', 'Contenidos', 'required');
        $this->form_validation->set_rules('ultproy', 'Ultimo proyecto', 'required');
        $this->form_validation->set_rules('ctin', 'Como te enteraste', 'required');
        $this->form_validation->set_rules('porque', 'Porque', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registro_view');
        } else {
            $update = $this->usuarios->registro($this->security->xss_clean($this->input->post('Nombre')), $this->security->xss_clean($this->input->post('AP')), $this->security->xss_clean($this->input->post('AM')), $this->security->xss_clean($this->input->post('FN')), $this->security->xss_clean($this->input->post('EDAD')), $this->security->xss_clean($this->input->post('est')), $this->security->xss_clean($this->input->post('nac')), $this->security->xss_clean($this->input->post('gen')), $this->security->xss_clean($this->input->post('dir')), $this->security->xss_clean($this->input->post('tel')), $this->security->xss_clean($this->input->post('cel')), $this->security->xss_clean($this->input->post('mov')), $this->security->xss_clean($this->input->post('web')), $this->security->xss_clean($this->input->post('cd')), $this->security->xss_clean($this->input->post('ultproy')), $this->security->xss_clean($this->input->post('ctin')), $this->security->xss_clean($this->input->post('porque'))
            );
            if (isset($update)) {
                $this->session->set_userdata('activo', 1);
                redirect("academia/dashboard");
            }
            else
                $this->load->view('registro_view');
        }
    }

    public function dashboard() {
        if ($this->isValidated())
            $this->load->view("dashboard_view");
        else {
            redirect("academia");
        }
    }

    public function cartas() {

        if ($this->isValidated()) {

            $data['base'] = base_url();
            $this->load->model('tarjetas');
            $tarjetas = $this->tarjetas->getTarjetas();
            $data['tarjetas'] = $tarjetas;
            $this->load->view("card_view", $data, $tarjetas);
        } else {
            redirect("academia");
        }
    }

    public function salir() {
        $this->load->model('login');
        $this->login->salir();
        redirect("academia/index");
        $this->load->view('login_view');
    }

    public function eneagrama() {
        $this->load->model("usuarios");
        //contar
        $eneatipos = $this->security->xss_clean($this->input->post("enearesult"));
        $nombres = $this->security->xss_clean($this->input->post("enenombres"));
        $idcartas = $this->security->xss_clean($this->input->post("eneid"));

        $eneatiposarray = explode(",", $eneatipos);
        $nombresarray = explode(",", $nombres);
        $idcartasarray = explode(",", $idcartas);

        $numeros = array();
        for ($i = 1; $i < 10; $i++) {
            $numeros[$i] = substr_count($eneatipos, $i);
        }

        //obtener eneatipo con mas ocurrencias (mayor)

        $mayor = 0;
        $eneatipo = 0;
        for ($i = 1; $i < 10; $i++) {
            if ($numeros[$i] > $mayor) {
                $mayor = $numeros[$i];
                $eneatipo = $i;
            }
        }


        //comprobar mayor//

        $mayores = array(); //cuales se encontraron
        $cont = 0;  //cuantos se encontraron
        for ($i = 1; $i < 10; $i++) {
            if ($numeros[$i] == $mayor) {
                $mayores[$cont] = $i;
                $cont++;
            }
        }

        //hay $cont repetidos
        if (count($mayores) > 1) {
            $sustituir = array(); //se guardaran las cartas
            $cuenta = 0;

            //obtener las eneatipos, ids y nombres de los numeros que tienen mas
            for ($i = 1; $i < 10; $i++) {
                for ($j = 0; $j < $cont; $j++) {
                    if ($eneatiposarray[$i] == $mayores[$j]) {
                        $sustituir[$cuenta]["numero"] = $eneatiposarray[$i];
                        $sustituir[$cuenta]["nombre"] = $nombresarray[$i];
                        $sustituir[$cuenta]["id"] = $idcartasarray[$i];
                        $cuenta++;
                    }
                }
            }
            $datos = array("resultado" => $sustituir);
            $this->load->view("borrarcartas_view.php", $datos);
        } else {
            //insertar numero de eneagrama a usuario
            $this->usuarios->seteneatipo($eneatipo);
            redirect("academia/mostrareneatipo");
        }

        $consulta = $this->usuarios->evaluar($mayor);
        //$consulta = $this->usuario->evaluar($mayor);
    }

    public function isValidated() {
        return isset($this->session->userdata['id']);
    }

    public function mostrareneatipo() {
        $this->load->model("eneatipo");
        $uen = $this->eneatipo->userenea();
        $data["eneatipo"] = $this->eneatipo->get_eneatipo($uen['uen']);
        $this->load->view("eneatipo_view", $data);
    }

    public function gestalt() {
        $this->load->view('tgp');
    }

    public function revisar() {
        $data["rt"] = $this->input->post("q11") + $this->input->post("q12") + $this->input->post("q13") + $this->input->post("q14");
        $data["ds"] = $this->input->post("q21") + $this->input->post("q22") + $this->input->post("q23") + $this->input->post("q24");
        $data["pr"] = $this->input->post("q31") + $this->input->post("q32") + $this->input->post("q33") + $this->input->post("q34");
        $data["in"] = $this->input->post("q41") + $this->input->post("q42") + $this->input->post("q43") + $this->input->post("q44");
        $data["rf"] = $this->input->post("q51") + $this->input->post("q52") + $this->input->post("q53") + $this->input->post("q54");
        $data["df"] = $this->input->post("q61") + $this->input->post("q62") + $this->input->post("q63") + $this->input->post("q64");
        $data["cf"] = $this->input->post("q71") + $this->input->post("q72") + $this->input->post("q73") + $this->input->post("q74");
        $data["fi"] = $this->input->post("q81") + $this->input->post("q82") + $this->input->post("q83") + $this->input->post("q84");
        switch ($data["rt"]) {
            case 0: $data["rtest"] = "desbloqueado";
                break;
            case 2:$data["rtest"] = "funcional";
                break;
            case 4:$data["rtest"] = "ambivalencia";
                break;
            case 6:$data["rtest"] = "disfuncional";
                break;
            case 8:$data["rtest"] = "bloqueado";
                break;
        }
        switch ($data["ds"]) {
            case 0: $data["dsest"] = "desbloqueado";
                break;
            case 2:$data["dsest"] = "funcional";
                break;
            case 4:$data["dsest"] = "ambivalencia";
                break;
            case 6:$data["dsest"] = "disfuncional";
                break;
            case 8:$data["dsest"] = "bloqueado";
                break;
        }
        switch ($data["pr"]) {
            case 0: $data["prest"] = "desbloqueado";
                break;
            case 2:$data["prest"] = "funcional";
                break;
            case 4:$data["prest"] = "ambivalencia";
                break;
            case 6:$data["prest"] = "disfuncional";
                break;
            case 8:$data["prest"] = "bloqueado";
                break;
        }
        switch ($data["in"]) {
            case 0: $data["inest"] = "desbloqueado";
                break;
            case 2:$data["inest"] = "funcional";
                break;
            case 4:$data["inest"] = "ambivalencia";
                break;
            case 6:$data["inest"] = "disfuncional";
                break;
            case 8:$data["inest"] = "bloqueado";
                break;
        }
        switch ($data["rf"]) {
            case 0: $data["rfest"] = "desbloqueado";
                break;
            case 2:$data["rfest"] = "funcional";
                break;
            case 4:$data["rfest"] = "ambivalencia";
                break;
            case 6:$data["rfest"] = "disfuncional";
                break;
            case 8:$data["rfest"] = "bloqueado";
                break;
        }
        switch ($data["df"]) {
            case 0: $data["dfest"] = "desbloqueado";
                break;
            case 2:$data["dfest"] = "funcional";
                break;
            case 4:$data["dfest"] = "ambivalencia";
                break;
            case 6:$data["dfest"] = "disfuncional";
                break;
            case 8:$data["dfest"] = "bloqueado";
                break;
        }
        switch ($data["cf"]) {
            case 0: $data["cfest"] = "desbloqueado";
                break;
            case 2:$data["cfest"] = "funcional";
                break;
            case 4:$data["cfest"] = "ambivalencia";
                break;
            case 6:$data["cfest"] = "disfuncional";
                break;
            case 8:$data["cfest"] = "bloqueado";
                break;
        }
        switch ($data["fi"]) {
            case 0: $data["fiest"] = "desbloqueado";
                break;
            case 2:$data["fiest"] = "funcional";
                break;
            case 4:$data["fiest"] = "ambivalencia";
                break;
            case 6:$data["fiest"] = "disfuncional";
                break;
            case 8:$data["fiest"] = "bloqueado";
                break;
        }

        $this->load->view('perfiltgp', $data);
    }

}

?>