<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inventaris_karyawan extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
                redirect(base_url("auth"));
              }
        $this->load->model('Inventaris_karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $inventaris_karyawan = $this->Inventaris_karyawan_model->get_all();

        $data = array(
            'inventaris_karyawan_data' => $inventaris_karyawan
        );

        $this->template->load('template','inventaris_karyawan_list', $data);
    }

    public function read($id)
    {
        $row = $this->Inventaris_karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_inventaris_karyawan' => $row->id_inventaris_karyawan,
		'id_barang' => $row->id_barang,
		'id_karyawan' => $row->id_karyawan,
	    );
            $this->template->load('template','inventaris_karyawan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inventaris_karyawan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('inventaris_karyawan/create_action'),
	    'id_inventaris_karyawan' => set_value('id_inventaris_karyawan'),
	    'id_barang' => set_value('id_barang'),
	    'id_karyawan' => set_value('id_karyawan'),
	);
        $this->template->load('template','inventaris_karyawan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_barang' => $this->input->post('id_barang',TRUE),
		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Inventaris_karyawan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('inventaris_karyawan'));
        }
    }

    public function update($id)
    {
        $row = $this->Inventaris_karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('inventaris_karyawan/update_action'),
            		'id_inventaris_karyawan' => set_value('id_inventaris_karyawan', $row->id_inventaris_karyawan),
            		'id_barang' => set_value('id_barang', $row->id_barang),
            		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
	             );
               $this->template->load('template','inventaris_karyawan_form', $data);
             } else {
              $this->session->set_flashdata('message', 'Record Not Found');
              redirect(site_url('inventaris_karyawan'));
            }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_inventaris_karyawan', TRUE));
        } else {
            $data = array(
        		'id_barang' => $this->input->post('id_barang',TRUE),
        		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Inventaris_karyawan_model->update($this->input->post('id_inventaris_karyawan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('inventaris_karyawan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Inventaris_karyawan_model->get_by_id($id);

        if ($row) {
            $this->Inventaris_karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_karyawan'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('id_barang', 'id barang', 'trim|required');
	$this->form_validation->set_rules('id_karyawan', 'id karyawan', 'trim|required');

	$this->form_validation->set_rules('id_inventaris_karyawan', 'id_inventaris_karyawan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "inventaris_karyawan.xls";
        $judul = "inventaris_karyawan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Karyawan");

	foreach ($this->Inventaris_karyawan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_barang);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_karyawan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=inventaris_karyawan.doc");

        $data = array(
            'inventaris_karyawan_data' => $this->Inventaris_karyawan_model->get_all(),
            'start' => 0
        );

        $this->load->view('inventaris_karyawan_doc',$data);
    }

}

/* End of file Inventaris_karyawan.php */
/* Location: ./application/controllers/Inventaris_karyawan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-28 09:04:05 */
/* http://harviacode.com */
