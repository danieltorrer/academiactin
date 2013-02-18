<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academia extends CI_Controller {

    public function index() {
        if ($this->isValidated())
            redirect("academia/registro");
        else
            redirect("academia/login");
//agregar si ya lleno registro redireccionar a dashboard
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
                );

                $this->session->set_userdata($sesion_data);
                $data['id'] = $this->session->userdata['id'];
                redirect("academia/registro");
//$this->load->view('registro_view');
            } else {
                $this->load->view('login_view');
            }
        }
    }

    public function registro() {
        $this->load->view("registro_view");
    }

    public function registrar() {
        $this->load->model('usuario');
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
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
            $this->load->view('dashboard_view');
        } else {
            
        }
    }

    public function dashboard() {
        
    }

    public function cartas() {
        $data['base'] = base_url();
        $this->load->model('tarjetas');
        $tarjetas = $this->tarjetas->getTarjetas();
        $data['tarjetas'] = $tarjetas;


        $this->load->view("card_view", $data, $tarjetas);
    }

    public function salir() {
        $this->load->model('login_model');
        $this->login_model->salir();
        $this->load->view('login');
    }

    public function isValidated() {
        return isset($this->session->userdata['id']);
    }

}

?>