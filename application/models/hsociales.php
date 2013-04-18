<?php

class HSociales extends CI_Model {

	public function Obt_Caso($id_caso) {
		$this->db->where("Id_Caso", $id_caso);
		$query = $this->db->get("casohsoc");
		$row = $query->row();
		$data = array(
			'inum' => $row->Id_Caso,
			'ihist' => $row->Historia
		);
		return $data;
	}

	public function Obt_Casos() {
		$data =  $this->db->count_all_results("casohsoc");
		return $data;
	}


	public function Obt_Pers($id_caso) {
		$aux = 0;
		$res = mysql_query("Select * from Perhsoc Where Id_His=".$id_caso);
		$query=$this->db->where("Id_His",$id_caso);

		while ($fila = mysql_fetch_array($res)) {
			$aux++;
			$personajes[$aux]['Id_Per'] = $fila['Id_Per'];
			$personajes[$aux]['Nombre'] = $fila['Nombre'];
			$personajes[$aux]['Valor'] = $fila['Valor'];
			$personajes[$aux]['P_Vista'] = $fila['P_Vista'];
			$personajes[$aux]['Solucion'] = $fila['Solucion'];
			$personajes[$aux]['Silueta'] = $fila['Silueta'];
			$personajes[$aux]['Imagen'] = $fila['Imagen'];
		}
		return $personajes;
	}

}

?>