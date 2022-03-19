<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estados_model extends CI_Model {
    public function getEstados(){
		$resultados = $this->db->get("estados");
		return $resultados->result();
	}

	public function getEstadoCivil(){
		$resultados2 = $this->db->get("estadoC");
		return $resultados2->result();
	}

	public function getTipoSangre(){
		$resultados3 = $this->db->get("tipoSangre");
		return $resultados3->result();
	}
}