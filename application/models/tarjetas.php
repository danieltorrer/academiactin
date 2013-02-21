<?php

class Tarjetas extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    function getTarjetas() {
        $aux = 0;
        $res = mysql_query("Select * from Tarjetas");
        while ($fila = mysql_fetch_array($res)) {
            $aux++;
            $tarjetas[$aux]['id'] = $fila['ID_Tarjeta'];
            $tarjetas[$aux]['palabra'] = $fila['Palabra'];
            $tarjetas[$aux]['desc'] = $fila['Desc'];
            $tarjetas[$aux]['color'] = $fila['Color'];
            $tarjetas[$aux]['tipo'] = $fila['Eneatipo'];
        }
        return $tarjetas;
    }
    
    

}

?>