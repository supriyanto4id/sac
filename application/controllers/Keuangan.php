<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	function __construct()
	{

			parent::__construct();
			if( $this->session->userdata('email') != "keuangan@sac.com"){
							redirect(base_url("auth/login"));
						}
				$this->load->model('Resign_history_model');
				$this->load->model('Sp_history_model');
				$this->load->model('Jabatan_model');
				$this->load->model('Inventaris_model');
				$this->load->model('Data_bpjs_model');
				$this->load->model('Data_karyawan_model');
				$this->load->model('inventaris_karyawan_model');
				$this->load->library('form_validation');

	}

	public function index()
	{
		$data_karyawan = $this->Data_karyawan_model->get_all();

		$data = array(
				'data_karyawan_data' => $data_karyawan,
				'email' => $this->session->userdata("email")
		);

		$this->template->load('v_keuangan/template','v_keuangan/data_karyawan_list', $data);
	}

	public function dashboard()
	{

		$data['data_jabatan'] = $this->Data_karyawan_model->get_jabatan_all();
		$this->template->load('v_keuangan/template','v_dashboard', $data);
	}

	public function read_all_index($id)
	{

		$data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index($id);
		$row = $this->Data_karyawan_model->get_by_id($id);
		$id_jab =$row->id_jabatan;
		$data['jabatan'] = $this->Jabatan_model->get_by_id_index($id_jab);


			 $data['list_inventaris']= $this->inventaris_karyawan_model->list_inventaris($id);
			 $data['data_bpjs_data'] =$this->Data_bpjs_model->get_by_id_index($id);
			 $data['inventaris']= $this->Inventaris_model->get_by_id_index($id);
			 $data['resign_history'] = $this->Resign_history_model->get_by_id_index($id);
			 $data['sp_history'] = $this->Sp_history_model->get_by_id_index($id);
			 $this->template->load('v_keuangan/template','v_direktur/data_karyawan_read_index', $data);

	}

}
