<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_bpjs extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_bpjs_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data_bpjs = $this->Data_bpjs_model->get_all();

        $data = array(
            'data_bpjs_data' => $data_bpjs
        );

        $this->template->load('template','data_bpjs_list', $data);
    }

    public function read($id)
    {
        $row = $this->Data_bpjs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_databpjs' => $row->id_databpjs,
		'no_bpjs' => $row->no_bpjs,
		'status' => $row->status,
		'kelas' => $row->kelas,
		'id_karyawan' => $row->id_karyawan,
	    );
            $this->template->load('template','data_bpjs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bpjs'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_bpjs/create_action'),
	    'id_databpjs' => set_value('id_databpjs'),
	    'no_bpjs' => set_value('no_bpjs'),
	    'status' => set_value('status'),
	    'kelas' => set_value('kelas'),
	    'id_karyawan' => set_value('id_karyawan'),
	);
        $this->template->load('template','data_bpjs_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		            'no_bpjs' => $this->input->post('no_bpjs',TRUE),
		              'status' => $this->input->post('status',TRUE),
		                'kelas' => $this->input->post('kelas',TRUE),
		                  'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Data_bpjs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_bpjs'));
        }
    }

    public function update($id)
    {
        $row = $this->Data_bpjs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_bpjs/update_action'),
		'id_databpjs' => set_value('id_databpjs', $row->id_databpjs),
		'no_bpjs' => set_value('no_bpjs', $row->no_bpjs),
		'status' => set_value('status', $row->status),
		'kelas' => set_value('kelas', $row->kelas),
		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
	    );
            $this->template->load('template','data_bpjs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_bpjs'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_databpjs', TRUE));
        } else {
            $data = array(
		'no_bpjs' => $this->input->post('no_bpjs',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Data_bpjs_model->update($this->input->post('id_databpjs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_bpjs'));
        }
    }

    public function delete($id)
    {
        $row = $this->Data_bpjs_model->get_by_id($id);

        if ($row) {
            $this->Data_bpjs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('cabang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('cabang'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('no_bpjs', 'no bpjs', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('id_karyawan', 'id karyawan', 'trim|required');

	$this->form_validation->set_rules('id_databpjs', 'id_databpjs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "data_bpjs.xls";
        $judul = "data_bpjs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "No Bpjs");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Karyawan");

	foreach ($this->Data_bpjs_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_bpjs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
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
        header("Content-Disposition: attachment;Filename=data_bpjs.doc");

        $data = array(
            'data_bpjs_data' => $this->Data_bpjs_model->get_all(),
            'start' => 0
        );

        $this->load->view('data_bpjs_doc',$data);
    }

}

/* End of file Data_bpjs.php */
/* Location: ./application/controllers/Data_bpjs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:41:15 */
/* http://harviacode.com */
