<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Print_pdf extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->library('Pdf');
			$this->load->model('Data_karyawan_model');
			$this->load->model('Jabatan_model');
			$this->load->model('Sp_history_model');
			$this->load->model('Resign_history_model');
		}

		public function index()
		{

			echo $this->session->userdata('company');

		}

	public function kontrak_kerja($id)
		{
			// echo "$id";
			$data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index_array($id);
			$row = $this->Data_karyawan_model->get_by_id($id);
			$id_jab =$row->id_jabatan;
			$data['jabatan'] = $this->Jabatan_model->get_by_id_index($id_jab);

			$this->load->view('print/kontrak_kerja',$data);
		}

		public function sp_satu($id)
		{
			$data = array(
					'button' => 'Print',
					'action' => site_url('print_pdf/sp_satu_action/'.$id.''),
	 );
				$this->template->load('template','print/v_sp',$data);

		}

		public function sp_dua($id)
		{
			$data = array(
					'button' => 'Print',
					'action' => site_url('print_pdf/sp_dua_action/'.$id.''),
	 );
				$this->template->load('template','print/v_sp',$data);

		}

		public function sp_tiga($id)
		{
			$data = array(
					'button' => 'Print',
					'action' => site_url('print_pdf/sp_tiga_action/'.$id.''),
	 );
				$this->template->load('template','print/v_sp',$data);

		}

		public function sp_satu_action($id)
			{
				// $data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index($id);
				$row = $this->Data_karyawan_model->get_by_id($id);
				$id_jab =$row->id_jabatan;
				$row1 = $this->Jabatan_model->get_by_id_print($id_jab);
				// if ($row) {
				$data = array(
						'perihal' => 'Surat Peringatan I',
            'nama_karyawan' =>  $row->nama_karyawan,
						'nama_jabatan' =>  $row1->nama_jabatan,
						'cabang' =>  $this->session->userdata('company'),
						'singkatan_sp' =>'SPI',
						'no_surat' => $this->input->post('no_surat',TRUE),

	   		);

				$data_update = array(
					//'.$no_surat.'/Smd-SAC/SPI/'.date('Y').'
				'no_surat' => ''.$this->input->post('no_surat',TRUE).'/Smd-SAC/SPI/'.date('Y').'',
				'keterangan' => 'Surat Peringatan I',
				'tanggal_sp' => date('d F Y'),
				 'id_karyawan' => $id,
			 );
			 $this->Sp_history_model->insert_sp($data_update);
				//$this->Sp_history_model->update_sp($id, $data_update);
				$this->load->view('print/sp', $data);
				// }
			}
			public function sp_dua_action($id)
				{
					// $data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index($id);
					$row = $this->Data_karyawan_model->get_by_id($id);
					$id_jab =$row->id_jabatan;
					$row1 = $this->Jabatan_model->get_by_id_print($id_jab);
					// if ($row) {
					$data = array(
							'perihal' => 'Surat Peringatan II',
	            'nama_karyawan' =>  $row->nama_karyawan,
							'nama_jabatan' =>  $row1->nama_jabatan,
							'cabang' =>  $this->session->userdata('company'),
							'singkatan_sp' =>'SPII',
							'no_surat' => $this->input->post('no_surat',TRUE),
		   		);

					$data_update = array(
					'no_surat' => ''.$this->input->post('no_surat',TRUE).'/Smd-SAC/SPII/'.date('Y').'',
					'keterangan' => 'Surat Peringatan II',
					'tanggal_sp' => date('d F Y'),
					 'id_karyawan' => $id,
				 );
				 $this->Sp_history_model->insert_sp($data_update);
					$this->load->view('print/sp', $data);
					// }
				}
				public function sp_tiga_action($id)
					{
						// $data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index($id);
						$row = $this->Data_karyawan_model->get_by_id($id);
						$id_jab =$row->id_jabatan;
						$row1 = $this->Jabatan_model->get_by_id_print($id_jab);
						// if ($row) {
						$data = array(
								'perihal' => 'Surat Peringatan III',
		            'nama_karyawan' =>  $row->nama_karyawan,
								'nama_jabatan' =>  $row1->nama_jabatan,
								'cabang' =>  $this->session->userdata('company'),
								'singkatan_sp' =>'SPIII',
								'no_surat' => $this->input->post('no_surat',TRUE),
			   		);

						$data_update = array(
						'no_surat' => ''.$this->input->post('no_surat',TRUE).'/Smd-SAC/SPIII/'.date('Y').'',
						'keterangan' => 'Surat Peringatan III',
						'tanggal_sp' => date('d F Y'),
						 'id_karyawan' => $id,
					 );
					 $this->Sp_history_model->insert_sp($data_update);
						$this->load->view('print/sp', $data);
						// }
					}

					public function pengalaman_kerja($id)
					{
						$data = array(
								'button' => 'Print',
								'action' => site_url('print_pdf/pengalaman_kerja_action/'.$id.''),

				 );
						  $this->template->load('template','print/v_pengalaman_kerja',$data);
					}

			public function pengalaman_kerja_action($id)
			{
					// echo $this->input->post('no_surat',TRUE);
					// echo $this->input->post('alasan_keluar',TRUE);
				$data['data_karyawan'] =$this->Data_karyawan_model->get_by_id_index($id);
				$row = $this->Data_karyawan_model->get_by_id($id);
				$id_jab =$row->id_jabatan;
				$row1 = $this->Jabatan_model->get_by_id_print($id_jab);
				// if ($row) {
				$data = array(

						'no_surat' => $this->input->post('no_surat',TRUE),
						'nama_karyawan' =>  $row->nama_karyawan,
						'nama_jabatan' =>  $row1->nama_jabatan,
						'tanggal_masuk' =>  $row->tgl_masuk,
						'cabang' =>  $this->session->userdata('company'),
						'tanggal_keluar' =>  $row->tgl_keluar,
						'alasan_keluar' =>  $this->input->post('alasan_keluar',TRUE),
				);

				$data_update = array(
				'no_surat' => ''.$this->input->post('no_surat',TRUE).'/Person-Smd/PK/'.date('Y').'',
				'alasan_keluar' => $this->input->post('alasan_keluar',TRUE),
				'tanggal_resign' => $row->tgl_keluar,
				 'id_karyawan' => $id,
			 );
			 $this->Resign_history_model->insert_history($data_update);

				$this->load->view('print/pengalaman_kerja',$data);

			}
}
