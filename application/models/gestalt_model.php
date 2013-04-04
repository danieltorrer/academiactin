<?php

class Gestalt_model extends CI_Model {

    function insertar($data) {

        $data = array(
            "id_usuario" => $this->session->userdata['id'],
            "retencion" => $data["rt"],
            "desensibilizacion" => $data["ds"],
            "proyeccion" => $data["pr"],
            "introyeccion" => $data["in"],
            "retroflexion" => $data["rf"],
            "deflexion" => $data["df"],
            "cofluencia" => $data["cf"],
            "fijacion" => $data["fi"]
        );

        $this->db->insert('gestalt', $data);
    }

}
?>
