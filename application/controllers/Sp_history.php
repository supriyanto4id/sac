<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sp_history extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Sp_history_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $sp_history = $this->Sp_history_model->get_all();

        $data = array(
            'sp_history_data' => $sp_history
        );

        $this->template->load('template','sp_history_list', $data);
    }

    public function read($id)
    {
        $row = $this->Sp_history_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sp' => $row->id_sp,
		'tanggal_sp' => $row->tanggal_sp,
		'id_karyawan' => $row->id_karyawan,
	    );
            $this->template->load('template','sp_history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sp_history'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('sp_history/create_action'),
	    'id_sp' => set_value('id_sp'),
	    'tanggal_sp' => set_value('tanggal_sp'),
	    'id_karyawan' => set_value('id_karyawan'),
	);
        $this->template->load('template','sp_history_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal_sp' => $this->input->post('tanggal_sp',TRUE),
		'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Sp_history_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('sp_history'));
        }
    }

    public function update($id)
    {
        $row = $this->Sp_history_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('sp_history/update_action'),
		'id_sp' => set_value('id_sp', $row->id_sp),
		'tanggal_sp' => set_value('tanggal_sp', $row->tanggal_sp),
		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
	    );
            $this->template->load('template','sp_history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sp_history'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sp', TRUE));
        } else {
            $data = array(
		        'tanggal_sp' => $this->input->post('tanggal_sp',TRUE),
		         'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Sp_history_model->update($this->input->post('id_sp', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sp_history'));
        }
    }

    public function delete($id)
    {
        $row = $this->Sp_history_model->get_by_id($id);

        if ($row) {
            $this->Sp_history_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sp_history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sp_history'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('tanggal_sp', 'tanggal sp', 'trim|required');
	$this->form_validation->set_rules('id_karyawan', 'id karyawan', 'trim|required');

	$this->form_validation->set_rules('id_sp', 'id_sp', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "sp_history.xls";
        $judul = "sp_history";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Sp");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Karyawan");

	foreach ($this->Sp_history_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_sp);
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
        header("Content-Disposition: attachment;Filename=sp_history.doc");

        $data = array(
            'sp_history_data' => $this->Sp_history_model->get_all(),
            'start' => 0
        );

        $this->load->view('sp_history_doc',$data);
    }

}

/* End of file Sp_history.php */
/* Location: ./application/controllers/Sp_history.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:51:58 */
/* http://harviacode.com */
