<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
    public function __construct(){
		parent:: __construct();
		$this->load->model("Empleados_model");
		$this->load->model("Estados_model");
    }
    public function index(){
        $data = array('empleados' => $this->Empleados_model->getEmpleados(),);
        $this->load->view('layout/header');
        $this->load->view('layout/aside');
        $this->load->view('Empleados/list', $data);
        $this->load->view('layout/footer');
    }

	public function add(){
		$data = array(
			"estados" => $this->Estados_model->getEstados(),
			"estadocivils" => $this->Estados_model->getEstadoCivil(),
			"tiposangres" =>$this->Estados_model->getTipoSangre()
		);
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('Empleados/add', $data);
		$this->load->view('layout/footer');
	}
   
    public function store(){
        $nombres = $this->input->post("nombres");
		$aPaterno = $this->input->post("aPaterno");
        $aMaterno = $this->input->post("aMaterno");
        $fechanacimiento = $this->input->post("fechaNacimiento");
		$profesion = $this->input->post("profesion");
		$rfc = $this->input->post("rfc");
		$curp = $this->input->post("curp");
		$nss = $this->input->post("nss");
		$tsangre = $this->input->post("tSangre");
		$estadoCivil = $this->input->post("estadoCivil");
		$email = $this->input->post("email");
		$celular1 = $this->input->post("celular1");
		$celular2 = $this->input->post("celular2");
		$direccion = $this->input->post("direccion");
		$colonia = $this->input->post("colonia");
		$codigopostal = $this->input->post("codigopostal");
		$entrecalles = $this->input->post("entrecalles");
		$referencia = $this->input->post("referencia");
		$municipio = $this->input->post("municipio");
		$localidad = $this->input->post("localidad");
		$estado = $this->input->post("estado");
		$pais = $this->input->post("pais");
		$nombreE = $this->input->post("nombreE");
		$parentescoE = $this->input->post("parentescoE");
		$telefonoE = $this->input->post("telefonoE");
		$celularE = $this->input->post("celularE");
		
		$data  = array(
			'nombres' => $nombres,
			'aPaterno' => $aPaterno,
			'aMaterno' => $aMaterno,
			'fechaNacimiento' => $fechanacimiento,
			'profesion' => $profesion,
			'rfc' => $rfc,
			'curp' => $curp,
			'nss' => $nss,
			'tSangre' => $tsangre,
			'estadoCivil' => $estadoCivil,
			'email' => $email,
			'celular1' => $celular1,
			'celular2' => $celular2,
			'direccion' => $direccion,
			'colonia' => $colonia,
			'codigoPostal' => $codigopostal,
			'entreCalles' => $entrecalles,
			'referencia' => $referencia,
			'municipio' => $municipio,
			'localidad' => $localidad,
			'estado' => $estado,
			'pais' => $pais,
			'nombreE' => $nombreE,
			'parentescoE' => $parentescoE,
			'telefonoE' => $telefonoE,
			'celularE' => $celularE,
			'status' => "1"
		);

		if ($this->Empleados_model->save($data)) {
			redirect(base_url()."Empleados");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
            redirect(base_url()."empleados/add");
		}
	}

	public function edit($id){
		$data  = array(
			"empleados" => $this->Empleados_model->getEmpleado($id),
			"estados" => $this->Estados_model->getEstados(),
			"estadocivils" => $this->Estados_model->getEstadoCivil(),
			"tiposangres" =>$this->Estados_model->getTipoSangre()
		);
		
		$this->load->view("layout/header");
		$this->load->view("layout/aside");
		$this->load->view("Empleados/edit",$data);
		$this->load->view("layout/footer");
	}

	public function update(){
		$idEmpleados = $this->input->post("idEmpleados");
        $nombres = $this->input->post("nombres");
		$aPaterno = $this->input->post("aPaterno");
        $aMaterno = $this->input->post("aMaterno");
        $fechanacimiento = $this->input->post("fechaNacimiento");
		$profesion = $this->input->post("profesion");
		$rfc = $this->input->post("rfc");
		$curp = $this->input->post("curp");
		$nss = $this->input->post("nss");
		$tsangre = $this->input->post("tSangre");
		$estadoCivil = $this->input->post("estadoCivil");
		$email = $this->input->post("email");
		$celular1 = $this->input->post("celular1");
		$celular2 = $this->input->post("celular2");
		$direccion = $this->input->post("direccion");
		$colonia = $this->input->post("colonia");
		$codigopostal = $this->input->post("codigopostal");
		$entrecalles = $this->input->post("entrecalles");
		$referencia = $this->input->post("referencia");
		$municipio = $this->input->post("municipio");
		$localidad = $this->input->post("localidad");
		$estado = $this->input->post("estado");
		$pais = $this->input->post("pais");
		$nombreE = $this->input->post("nombreE");
		$parentescoE = $this->input->post("parentescoE");
		$telefonoE = $this->input->post("telefonoE");
		$celularE = $this->input->post("celularE");
		$data = array(
			'nombres' => $nombres,
			'aPaterno' => $aPaterno,
			'aMaterno' => $aMaterno,
			'fechaNacimiento' => $fechanacimiento,
			'profesion' => $profesion,
			'rfc' => $rfc,
			'curp' => $curp,
			'nss' => $nss,
			'tSangre' => $tsangre,
			'estadoCivil' => $estadoCivil,
			'email' => $email,
			'celular1' => $celular1,
			'celular2' => $celular2,
			'direccion' => $direccion,
			'colonia' => $colonia,
			'codigoPostal' => $codigopostal,
			'entreCalles' => $entrecalles,
			'referencia' => $referencia,
			'municipio' => $municipio,
			'localidad' => $localidad,
			'estado' => $estado,
			'pais' => $pais,
			'nombreE' => $nombreE,
			'parentescoE' => $parentescoE,
			'telefonoE' => $telefonoE,
			'celularE' => $celularE,
			'status' => "1"
		);

		if ($this->Empleados_model->update($idEmpleados,$data)) {
			redirect(base_url()."Empleados/edit/".$idEmpleados);
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."empleados/edit/".$$idEmpleados);
		}
	}

	public function view($id){
		$data  = array('empleados' => $this->Empleados_model->getEmpleado($id),);
		$this->load->view("layout/header");
		$this->load->view("layout/aside");
		$this->load->view("Empleados/view",$data);
		$this->load->view("layout/footer");
	}

	public function delete($id){
		$data  = array(
			'estado' => "0",
		);
		$this->Empleados_model->update($id,$data);
		echo "empleados";
	}
}