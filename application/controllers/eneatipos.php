<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Eneatipos extends CI_Controller {

    public function desc() {
        $this->load->model('eneagrama');
        $data["eneatipo"] = $this->eneagrama->get_eneatipo($this->uri->segment(3));
        $this->load->view('eneatipo', $data);
    }

}

?>