<?php

class Usuarios extends CI_Model {

    public function __construct() {
        
    }

    public function registro($nom,$pat,$mat,$fech,$edad,$lug,$nac,$gen,$dir,$tel,$cel,$mov,$web,$dig,$ult,$como,$por){
        $data = array(
            'Nombre' => 'madre',
            'Ap_Mat' => $mat,
            'Ap_Pat' => $pat,
            'Fecha_Nac' => $fech,
            'Edad' => $edad,
            'Lu_Nac' => $lug,
            'Nac' => $nac,
            'Gen' => $gen,
            'Direccion' => $dir,
            'Tel_Casa' => $tel,
            'Cel' => $cel,
            'Movil' => $mov,
            'Web' => $web,
            'Co_Dig' => $dig,
            'Ult_Proy' => $ult,
            'Co_Ent' => $como,
            'Po_Que' => $por
            );
        
        $query = $this->db->update('Usuarios',$data,array('Id_Usuario'=>3));
        return true;
    }

    

}

?>