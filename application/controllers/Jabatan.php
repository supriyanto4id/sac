<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Jabatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $jabatan = $this->Jabatan_model->get_all();

        $data = array(
            'jabatan_data' => $jabatan
        );

        $this->template->load('template','jabatan_list', $data);
    }

    public function read($id)
    {
        $row = $this->Jabatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_jabatan' => $row->id_jabatan,
		'nama_jabatan' => $row->nama_jabatan,
		'gaji_pokok' => $row->gaji_pokok,
		't_jabatan' => $row->t_jabatan,
		't_bbm' => $row->t_bbm,
		't_pulsa' => $row->t_pulsa,
		't_perumahan' => $row->t_perumahan,
		'uang_makan' => $row->uang_makan,
		'insentif' => $row->insentif,
	//	'job_disk' => $row->job_disk,
		// 'id_karyawan' => $row->id_karyawan,
	    );
            $this->template->load('jabatan_template','jabatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan/create_action'),
	    'id_jabatan' => set_value('id_jabatan'),
	    'nama_jabatan' => set_value('nama_jabatan'),
	    'gaji_pokok' => set_value('gaji_pokok'),
	    't_jabatan' => set_value('t_jabatan'),
	    't_bbm' => set_value('t_bbm'),
	    't_pulsa' => set_value('t_pulsa'),
	    't_perumahan' => set_value('t_perumahan'),
	    'uang_makan' => set_value('uang_makan'),
	    'insentif' => set_value('insentif'),
	    ///'job_disk' => set_value('job_disk'),
	    // 'id_karyawan' => set_value('id_karyawan'),
	);
        $this->template->load('jabatan_template','jabatan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
		'gaji_pokok' => $this->input->post('gaji_pokok',TRUE),
		't_jabatan' => $this->input->post('t_jabatan',TRUE),
		't_bbm' => $this->input->post('t_bbm',TRUE),
		't_pulsa' => $this->input->post('t_pulsa',TRUE),
		't_perumahan' => $this->input->post('t_perumahan',TRUE),
		'uang_makan' => $this->input->post('uang_makan',TRUE),
		'insentif' => $this->input->post('insentif',TRUE),
	//'job_disk' => $this->input->post('job_disk',TRUE),
		// 'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Jabatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan'));
        }
    }

    public function update($id)
    {
        $row = $this->Jabatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan/update_action'),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
		'nama_jabatan' => set_value('nama_jabatan', $row->nama_jabatan),
		'gaji_pokok' => set_value('gaji_pokok', $row->gaji_pokok),
		't_jabatan' => set_value('t_jabatan', $row->t_jabatan),
		't_bbm' => set_value('t_bbm', $row->t_bbm),
		't_pulsa' => set_value('t_pulsa', $row->t_pulsa),
		't_perumahan' => set_value('t_perumahan', $row->t_perumahan),
		'uang_makan' => set_value('uang_makan', $row->uang_makan),
		'insentif' => set_value('insentif', $row->insentif),
		//'job_disk' => set_value('job_disk', $row->job_disk),
		// 'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
	    );
            $this->template->load('jabatan_template','jabatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }

    public function update_action()
    {
        // echo $this->input->post('insentif');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jabatan', TRUE));
        } else {
            $data = array(
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
		'gaji_pokok' => $this->input->post('gaji_pokok',TRUE),
		't_jabatan' => $this->input->post('t_jabatan',TRUE),
		't_bbm' => $this->input->post('t_bbm',TRUE),
		't_pulsa' => $this->input->post('t_pulsa',TRUE),
		't_perumahan' => $this->input->post('t_perumahan',TRUE),
		'uang_makan' => $this->input->post('uang_makan',TRUE),
		'insentif' => $this->input->post('insentif',TRUE),
		//'job_disk' => $this->input->post('job_disk',TRUE),
		// 'id_karyawan' => $this->input->post('id_karyawan',TRUE),
	    );

            $this->Jabatan_model->update($this->input->post('id_jabatan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Jabatan_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
	$this->form_validation->set_rules('gaji_pokok', 'gaji pokok', 'trim|required');
	$this->form_validation->set_rules('t_jabatan', 't jabatan', 'trim|required');
	$this->form_validation->set_rules('t_bbm', 't bbm', 'trim|required');
	$this->form_validation->set_rules('t_pulsa', 't pulsa', 'trim|required');
	$this->form_validation->set_rules('t_perumahan', 't perumahan', 'trim|required');
	$this->form_validation->set_rules('uang_makan', 'uang makan', 'trim|required');
	$this->form_validation->set_rules('insentif', 'insentif', 'trim|required');
//	$this->form_validation->set_rules('job_disk', 'job disk', 'trim|required');
	// $this->form_validation->set_rules('id_karyawan', 'id karyawan', 'trim|required');

	$this->form_validation->set_rules('id_jabatan', 'id_jabatan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "jabatan.xls";
        $judul = "jabatan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Jabatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Gaji Pokok");
	xlsWriteLabel($tablehead, $kolomhead++, "T Jabatan");
	xlsWriteLabel($tablehead, $kolomhead++, "T Bbm");
	xlsWriteLabel($tablehead, $kolomhead++, "T Pulsa");
	xlsWriteLabel($tablehead, $kolomhead++, "T Perumahan");
	xlsWriteLabel($tablehead, $kolomhead++, "Uang Makan");
	xlsWriteLabel($tablehead, $kolomhead++, "Insentif");
	xlsWriteLabel($tablehead, $kolomhead++, "Job Disk");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Karyawan");

	foreach ($this->Jabatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jabatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->gaji_pokok);
	    xlsWriteNumber($tablebody, $kolombody++, $data->t_jabatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->t_bbm);
	    xlsWriteNumber($tablebody, $kolombody++, $data->t_pulsa);
	    xlsWriteNumber($tablebody, $kolombody++, $data->t_perumahan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->uang_makan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->insentif);
	    xlsWriteNumber($tablebody, $kolombody++, $data->job_disk);
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
        header("Content-Disposition: attachment;Filename=jabatan.doc");

        $data = array(
            'jabatan_data' => $this->Jabatan_model->get_all(),
            'start' => 0
        );

        $this->load->view('jabatan_doc',$data);
    }

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:51:37 */
/* http://harviacode.com */
