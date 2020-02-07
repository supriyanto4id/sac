<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resign_history extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Resign_history_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $resign_history = $this->Resign_history_model->get_all();

        $data = array(
            'resign_history_data' => $resign_history
        );

        $this->template->load('template','resign_history_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Resign_history_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_resign' => $row->id_resign,
		'tanggal_resign' => $row->tanggal_resign,
		'id_karyawan' => $row->id_karyawan,
	    );
            $this->template->load('template','resign_history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('resign_history'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('resign_history/create_action'),
	    'id_resign' => set_value('id_resign'),
	    'tanggal_resign' => set_value('tanggal_resign'),
	    'id_karyawan' => set_value('id_karyawan'),
	);
        $this->template->load('template','resign_history_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal_resign' => $this->input->post('tanggal_resign',TRUE),
		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Resign_history_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('resign_history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Resign_history_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('resign_history/update_action'),
		'id_resign' => set_value('id_resign', $row->id_resign),
		'tanggal_resign' => set_value('tanggal_resign', $row->tanggal_resign),
		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
	    );
            $this->template->load('template','resign_history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('resign_history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_resign', TRUE));
        } else {
            $data = array(
		'tanggal_resign' => $this->input->post('tanggal_resign',TRUE),
		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Resign_history_model->update($this->input->post('id_resign', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('resign_history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Resign_history_model->get_by_id($id);

        if ($row) {
            $this->Resign_history_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('resign_history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('resign_history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal_resign', 'tanggal resign', 'trim|required');
	$this->form_validation->set_rules('id_karyawan', 'id karyawan', 'trim|required');

	$this->form_validation->set_rules('id_resign', 'id_resign', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "resign_history.xls";
        $judul = "resign_history";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Resign");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Karyawan");

	foreach ($this->Resign_history_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_resign);
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
        header("Content-Disposition: attachment;Filename=resign_history.doc");

        $data = array(
            'resign_history_data' => $this->Resign_history_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('resign_history_doc',$data);
    }

}

/* End of file Resign_history.php */
/* Location: ./application/controllers/Resign_history.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:51:52 */
/* http://harviacode.com */