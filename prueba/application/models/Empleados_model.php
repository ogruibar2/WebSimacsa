<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_model extends CI_model{
// Funcion para listar tabla empleados activos
    public function getEmpleados(){
        //$this->db->where("status","0");
        $this->db->get("empleados");
        $resultados = $this->db->get("empleados");
        return $resultados->result();
    }

    // Funcion para salvar informacion empleados
    public function save($data){
        return $this->db->insert("empleados", $data);
    }

	public function getEmpleado($id){
		$this->db->where("idEmpleado", $id);
		$resultado = $this->db->get("empleados");
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where("idEmpleado",$id);
		return $this->db->update("empleados",$data);
    }

    function getVarios(){
		$varios['genero'] = array(
			'Hombre' => 'Hombre',
			'Mujer' => 'Mujer'
		);

        $varios['Sangres'] = array(
            'No Asignado' => 'Seccionar un tipo de Sangre',
			'O+' => 'O+',
			'O-' => 'O-'
        );
        $varios['eciviles'] = array(
            '0' => 'Seccionar un tipo de Sangre',
			'1' => 'Soltero',
            '2' => 'Casado',
            '3' => 'Divorciado',
            '4' => 'Union Libre',
            '5' => 'Viudo'
		);
        return $varios;
    }


}