<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hrd extends CI_Controller {
  var $data = array();
  public function __construct() {
							parent::__construct();

            		if ($this->session->userdata("status") != 'login') {
                  redirect(base_url("auth"));
                  	// redirect(base_url("login"));
                }
						//	$this->load->model('update_fimware_model');
							$this->load->helper('url_helper');
							$this->load->helper(array('form', 'url'));
              $this->load->library('session');
              $this->load->library('form_validation');
                $this->load->model('Data_karyawan_model');


	}

	public function index()
	{

    // echo $this->session->userdata("id");
    // echo $this->session->userdata("name");
    // echo $this->session->userdata("email");
    // echo $this->session->userdata("username");

      $this->load->view('coba');
	}
  public function coba()
  {
    echo 'done';
     echo "Update";
     // echo $this->input->post('name');
     // echo $this->input->post('hidden_gender');
     echo $this->input->post('decision');
    echo $this->input->post('id');
    // echo $this->input->post('insert[]');

    // $jumlah = count($this->input->post('no_bpjs[]'));
    // if ($jumlah > 0) {
    //   for ($i=0; $i <$jumlah ; $i++) {
    //     if (trim($this->input->post('no_bpjs[]')[$i] != '')) {
    //       $no_bpjs = $this->input->post('no_bpjs[]')[$i];
    //       $status = $this->input->post('status[]')[$i];
    //       $kelas = $this->input->post('kelas[]')[$i];
         // $sql = "insert into data_bpjs  (no_bpjs, status, kelas) values (".$this->db->escape($no_bpjs).",".$this->db->escape($status).",".$this->db->escape($kelas).")";
    //       $this->db->query($sql);
    //
    //     }
    //   }
    //   redirect(site_url('data_bpjs'));
    // } else {
    //   echo "data tidak ada";
    // }
   //  $data = array(
   //  'direktur_cek' => $this->input->post('decision'),
   // );
   //  $this->Data_karyawan_model->update($this->input->post('id'), $data);
          // $data_cek = $this->input->post('decision');
          // $sql = "UPDATE data_karyawan SET direktur_cek=".$this->db->escape($data_cek)." WHERE id_karyawan = 1;";
          // $this->db->query($sql);
          // UPDATE Customers SET ContactName='Alfred Schmidt', City='Frankfurt' WHERE CustomerID=2;


  }


}
