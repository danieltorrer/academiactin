<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Academia extends CI_Controller {

    public function index() {
        $this->load->model('login');
        if (isset($this->session->userdata['id'])) {
            $this->load->view('registro_view');
        } elseif (!isset($_POST['email'])) {
            $this->load->view('login_view');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('pass', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('login_view');
            } else {

                $cons = $this->login->getLogin($_POST['email'], $_POST['pass']);

                if ($cons) {

                    $sesion_data = array(
                        'id' => $cons[0]['Id_Usuario'],
                    );

                    $this->session->set_userdata($sesion_data);
                    $data['id'] = $this->session->userdata['id'];
                    $this->load->view('registro_view');
                } else {

                    $this->load->view('login_view');
                }
            }
        }
    }

    public function registro() {
        $this->load->view("registro_view");
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

}

?>