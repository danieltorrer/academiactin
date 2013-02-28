<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author America Movil
 */
class eneagrama extends CI_Model {

    public function get_tarjetas() {
        $query = $this->db->get('c2_usuarios');
        return $query;
    }
    public function get_eneatipo($id){
        $this->db->where("Id_Eneagrama",$id);
        $query=$this->db->get("Eneatipos");
        $row=$query->row();        
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
            'idescr'=>$row->Descript,
            'iest'=>$row->Est,
            'iseg'=>$row->Seg,
            'ifun'=>$row->Funcion

        );
        return $data;
    }

}

?>
