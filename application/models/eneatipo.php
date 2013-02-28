<?php

class Eneatipo extends CI_Model {
    /* function __construct() {
      $this->load->database();
      } */

    function userenea() {
        $this->db->where('Id_Usuario', $this->session->userdata['id']);
        $query = $this->db->get('Usuarios');
        $row = $query->row();
        $data = array(
            'uen' => $row->eneatipo
        );
        return($data);
    }

    public function get_eneatipo($id) {
        $this->db->where("Id_Eneagrama", $id);
        $query = $this->db->get("Eneatipos");
        $row = $query->row();
        $data = array(
            'ide' => $row->Id_Eneagrama,
            'inomb' => $row->Nombre,
            'idescc' => $row->Desc_Corta,
            'idesc' => $row->Desc,
            'icen' => $row->Centro,
            'ipas' => $row->Pasion,
            'ifij' => $row->Fijacion,
            'ivis' => $row->Vision,
            'item' => $row->Temor,
            'ides' => $row->Deseo,
            'itra' => $row->Trampa,
            'idescr' => $row->Descript,
            'iest' => $row->Est,
            'iseg' => $row->Seg,
            'ifun' => $row->Funcion
        );
        return $data;
    }

}

?>