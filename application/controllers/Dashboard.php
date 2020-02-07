<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	parent::__construct();
	$data_cabang = substr($this->session->userdata('email'),0,6);

	if( $data_cabang != "cabang" ){
					redirect(base_url("auth/login"));
				}

		$this->load->model('Resign_history_model');
		$this->load->model('Sp_history_model');
		$this->load->model('Jabatan_model');
		$this->load->model('Inventaris_model');
		$this->load->model('Data_bpjs_model');
		$this->load->model('Data_karyawan_model');
		$this->load->model('Inventaris_karyawan_model');
		$this->load->library('form_validation');

}

	public function index()
	{
		echo "$id";
		// 	$id = $this->session->userdata('id');
		//   $row = $this->Data_karyawan_model->get_by_id($id);
		// $this->template->load('template','v_dashboard');
	}
}
