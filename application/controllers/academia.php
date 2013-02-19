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
            $update = $this->usuarios->registro
                    ($this->security->xss_clean($this->input->post('Nombre')), $this->security->xss_clean($this->input->post('AP')), $this->security->xss_clean($this->input->post('AM')), $this->security->xss_clean($this->input->post('FN')), $this->security->xss_clean($this->input->post('EDAD')), $this->security->xss_clean($this->input->post('est')), $this->security->xss_clean($this->input->post('nac')), $this->security->xss_clean($this->input->post('gen')), $this->security->xss_clean($this->input->post('dir')), $this->security->xss_clean($this->input->post('tel')), $this->security->xss_clean($this->input->post('cel')), $this->security->xss_clean($this->input->post('mov')), $this->security->xss_clean($this->input->post('web')), $this->security->xss_clean($this->input->post('cd')), $this->security->xss_clean($this->input->post('ultproy')), $this->security->xss_clean($this->input->post('ctin')), $this->security->xss_clean($this->input->post('porque'))
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

    public function eneagrama() {
        $this->load->model("usuarios");

        //contar

        $cartas = $this->security->xss_clean($this->input->post(enearesult));
        $numeros = array();
        for ($i = 1; $i < 10; $i++) {
            $numeros[$i] = substr_count($cartas, $i);
        }

        //obtener mayor

        $mayor = 0;
        for ($i = 1; $i < 10; $i++) {
            $mayor = $numeros[$i] > $mayor ? $numeros[$i] : $mayor;
        }

        //comprobar mayor
        $mayores = array();
        $cont= 0;
        for ($i = 1; $i < 10; $i++) {
            if($numeros[$i] == $mayor)
                $mayores[$cont] = $i;
                
        }


        $consulta = $this->usuario->evaluar($mayor);
    }

    public function isValidated() {
        return isset($this->session->userdata['id']);
    }

}

?>