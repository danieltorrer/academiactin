<?php

class Login extends CI_Model {

    public function __construct() {
        
    }

    public function getLogin($email, $password) {
        $data = array(
            'Correo' => $email,
            'Pass' => $password
        );

        $query = $this->db->get_where('Usuarios', $data);
        return $query->result_array();
    }

    public function salir() {
        return $this->session->sess_destroy();
    }

}

?>