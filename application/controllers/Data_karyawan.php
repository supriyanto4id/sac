<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_karyawan extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('email') != "hrd@sac.com"){
                redirect(base_url("auth"));
              }
          $id_user = $this->session->userdata('id');
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

        $this->template->load('template','data_karyawan_list', $data);

    }

    public function dashboard()
  	{

  		$data['data_jabatan'] = $this->Data_karyawan_model->get_jabatan_all();
  		$this->template->load('template','v_dashboard', $data);
  	}
    public function hrd_cek()
    {
            $data_cek = (string)$this->input->post('decision');
            $data = $data_cek;
            list($direktur_cek, $id_karyawan) = explode("#", $data);
            $sql = "UPDATE data_karyawan SET hrd_cek=".$this->db->escape($direktur_cek)." WHERE id_karyawan = ".$this->db->escape($id_karyawan).";";
            $this->db->query($sql);
    }


    public function id_karyawan($id)
    {
      $data = array('id' => $id );
     $this->session->set_userdata($data);

      return $id;
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
         $this->template->load('template','data_karyawan_read_index', $data);

    }


    public function create()
    {
        $data = array(
        'button' => 'Create',
        'action' => site_url('data_karyawan/create_action'),
  	    'id_karyawan' => set_value('id_karyawan'),
  	    'nama_karyawan' => set_value('nama_karyawan'),
  	    'tempat_lahir' => set_value('tempat_lahir'),
  	    'tgl_lahir' => set_value('tgl_lahir'),
  	    'jenis_kelamin' => set_value('jenis_kelamin'),
  	    'alamat' => set_value('alamat'),
  	    'agama' => set_value('agama'),
  	    'tgl_masuk' => set_value('tgl_masuk'),
  	    'tgl_keluar' => set_value('tgl_keluar'),
  	    'no_npwp' => set_value('no_npwp'),
  	    'no_bpjs' => set_value('no_bpjs'),
  	    'status' => set_value('status'),
        'job_disk' => set_value('job_disk'),
        'id_user' => set_value('id_user', $this->session->userdata('id')),
	     );
        $this->template->load('template','data_karyawan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
          		'nama_karyawan' => $this->input->post('nama_karyawan',TRUE),
          		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
          		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
          		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
          		'alamat' => $this->input->post('alamat',TRUE),
          		'agama' => $this->input->post('agama',TRUE),
          		'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
          		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
          		'no_npwp' => $this->input->post('no_npwp',TRUE),
          		'no_bpjs' => $this->input->post('no_bpjs',TRUE),
          		'status' => $this->input->post('status',TRUE),
              'id_jabatan' => $this->input->post('id_jabatan',TRUE),
              'job_disk' => $this->input->post('job_disk',TRUE),
              'direktur_cek' => 12,
              'hrd_cek' => 12,
              'id_user' => $this->input->post('id_user',TRUE),
          	    );

            $this->Data_karyawan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_karyawan'));


        }
    }

    public function create_inventaris_karyawan($id)
    {
      $row = $this->inventaris_karyawan_model->get_by_id($id);


          $data = array(
              'button' => 'Add',
              'action' => site_url('data_karyawan/create_inventaris_karyawan_action'),
              'id_inventaris_karyawan' => set_value('id_inventaris_karyawan'),
              'id_barang' => set_value('id_barang'),
              'id_karyawan' => set_value('id_karyawan', $id),
             );
             $this->template->load('template','inventaris_karyawan_form', $data);

    }

    public function create_inventaris_karyawan_action()
    {
      $jumlah = count($this->input->post('group[]'));
      if ($jumlah > 0) {
        for ($i=0; $i <$jumlah ; $i++) {
          if (trim($this->input->post('group[]')[$i] != '')) {
           //  $data = array(
           //  'id_barang' => $this->input->post('group[]',TRUE)[$i],
           //  'id_karyawan' => $this->input->post('id_karyawan',TRUE),
           // );
            $id_barang = $this->input->post('group[]')[$i];
            $id_karyawan = $this->input->post('id_karyawan');

            // $this->Inventaris_karyawan_model->update($this->input->post('id_inventaris_karyawan', TRUE), $data);
            $sql = "insert into inventaris_karyawan  ( id_barang, id_karyawan) values (".$this->db->escape($id_barang).",$id_karyawan)";
            $this->db->query($sql);
          }
        }
           redirect(site_url('data_karyawan/read_all_index/'.$id_karyawan));
      } else {
          echo "data harus di sis";
      }

    }

    public function create_data_bpjs($id)
    {
      $this->id_karyawan($id);
          $data = array(
          'id_karyawan' => set_value('id_karyawan', $id),
          );
        $this->template->load('template','data_bpjs_form', $data);
    }

    public function create_data_bpjs_action()
    {


      $id_karyawan = $this->session->userdata('id');
        $jumlah = count($this->input->post('no_bpjs[]'));
        if ($jumlah > 0) {
          for ($i=0; $i <$jumlah ; $i++) {
            if (trim($this->input->post('no_bpjs[]')[$i] != '')) {
              $no_bpjs = $this->input->post('no_bpjs[]')[$i];
              $status = $this->input->post('status[]')[$i];
              $kelas = $this->input->post('kelas[]')[$i];
              $id_karyawan = $this->session->userdata('id');
              // echo "$id_karyawan";
              $sql = "insert into data_bpjs  (no_bpjs, status, kelas, id_karyawan) values (".$this->db->escape($no_bpjs).",".$this->db->escape($status).",".$this->db->escape($kelas).",".$this->db->escape($id_karyawan).")";
              $this->db->query($sql);

            }
          }

        } else {

           redirect(site_url('data_karyawan/read_all_index/'.$id_karyawan));
        }

    }

    public function update($id)
    {

        $row = $this->Data_karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_karyawan/update_action'),
            		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
            		'nama_karyawan' => set_value('nama_karyawan', $row->nama_karyawan),
            		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
            		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
            		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
            		'alamat' => set_value('alamat', $row->alamat),
            		'agama' => set_value('agama', $row->agama),
            		'tgl_masuk' => set_value('tgl_masuk', $row->tgl_masuk),
            		'tgl_keluar' => set_value('tgl_keluar', $row->tgl_keluar),
            		'no_npwp' => set_value('no_npwp', $row->no_npwp),
            		'no_bpjs' => set_value('no_bpjs', $row->no_bpjs),
            		'status' => set_value('status', $row->status),
                'job_disk' => set_value('job_disk', $row->job_disk),
                'id_user' => set_value('id_user', $row->id_user),
	    );
            $this->template->load('template','data_karyawan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_karyawan'));
        }
    }

    public function update_action()
    {
      $id_jabatan = $this->session->userdata('id_jabatan');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_karyawan', TRUE));
        } else {
          $data = array(
      		'nama_karyawan' => $this->input->post('nama_karyawan',TRUE),
      		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
      		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
      		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
      		'alamat' => $this->input->post('alamat',TRUE),
      		'agama' => $this->input->post('agama',TRUE),
      		'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
      		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
      		'no_npwp' => $this->input->post('no_npwp',TRUE),
      		'no_bpjs' => $this->input->post('no_bpjs',TRUE),
      		'status' => $this->input->post('status',TRUE),
          'job_disk' => $this->input->post('job_disk',TRUE),
          'id_jabatan' => $this->input->post('id_jabatan',TRUE),
      	 );

            $this->Data_karyawan_model->update($this->input->post('id_karyawan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            // redirect(site_url('data_karyawan'));
             $id_karyawan= $this->input->post('id_karyawan');
             redirect(site_url('data_karyawan/read_all_index/'.$id_karyawan));
        }
    }

    public function delete($id)
    {
        $row = $this->Data_karyawan_model->get_by_id($id);

        if ($row) {
            $this->Data_karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_karyawan'));
        }
    }

    public function delete_bpjs($id)
    {
        $row = $this->Data_bpjs_model->get_by_id($id);

        if ($row) {
            $this->Data_bpjs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_karyawan'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_karyawan', 'nama karyawan', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('tgl_masuk', 'tgl masuk', 'trim|required');
//	$this->form_validation->set_rules('tgl_keluar', 'tgl keluar', 'trim|required');
	$this->form_validation->set_rules('no_npwp', 'no npwp', 'trim|required');
	$this->form_validation->set_rules('no_bpjs', 'no bpjs', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_karyawan', 'id_karyawan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_karyawan.xls";
        $judul = "data_karyawan";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Karyawan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Keluar");
	xlsWriteLabel($tablehead, $kolomhead++, "No Npwp");
	xlsWriteLabel($tablehead, $kolomhead++, "No Bpjs");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Data_karyawan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_karyawan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->agama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_keluar);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_npwp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_bpjs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=data_karyawan.doc");

        $data = array(
            'data_karyawan_data' => $this->Data_karyawan_model->get_all(),
            'start' => 0
        );

        $this->load->view('data_karyawan_doc',$data);
    }

}

/* End of file Data_karyawan.php */
/* Location: ./application/controllers/Data_karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-22 14:48:32 */
/* http://harviacode.com */
