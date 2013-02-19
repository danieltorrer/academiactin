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

            $cons = $this->login->getLogin($_POST['email'], sha1($_POST['pass']));

            if ($cons) {
                $sesion_data = array(
                    'id' => $cons[0]['Id_Usuario'],
                    "activo" => $cons[0]["Activo"]
                );

                $this->session->set_userdata($sesion_data);
                $data['id'] = $this->session->userdata['id'];
                if ($cons[0]['Tipo_Usuario'] == 0) {
                    redirect("academia/registro");
                }
                else
                    $this->load->view("plantilla_view");
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
            $update = $this->usuarios->registro($_POST['Nombre'], $_POST['AP'], $_POST['AM'], $_POST['FN'], $_POST['EDAD'], $_POST['est'], $_POST['nac'], $_POST['gen'], $_POST['dir'], $_POST['tel'], $_POST['cel'], $_POST['mov'], $_POST['web'], $_POST['cd'], $_POST['ultproy'], $_POST['ctin'], $_POST['porque']);
            if (isset($update)) {
                $this->load->view('plantilla_view');
            }
            else
                $this->load->view('registro_view');
        }
    }

    public function dashboard() {
        $this->load->view("dashboard_view");
    }

    public function cartas() {
        $data['base'] = base_url();
        $this->load->model('tarjetas');
        $tarjetas = $this->tarjetas->getTarjetas();
        $data['tarjetas'] = $tarjetas;
        $this->load->view("card_view", $data, $tarjetas);
    }

    public function salir() {
        $this->load->model('login');
        $this->login->salir();
        redirect("academia/index");
        $this->load->view('login_view');
    }

    public function isValidated() {
        return isset($this->session->userdata['id']);
    }

}

?>