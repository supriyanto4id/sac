<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inventaris extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventaris_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $inventaris = $this->Inventaris_model->get_all();

        $data = array(
            'inventaris_data' => $inventaris
        );

        $this->template->load('template','inventaris_list', $data);
    }

    public function read($id)
    {
        $row = $this->Inventaris_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_barang' => $row->id_barang,
		'nama_barang' => $row->nama_barang,
		'keterangan' => $row->keterangan,
	    );
            $this->template->load('template','inventaris_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inventaris'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('inventaris/create_action'),
	    'id_barang' => set_value('id_barang'),
	    'nama_barang' => set_value('nama_barang'),
	    'keterangan' => set_value('keterangan'),

	   );
        $this->template->load('template','inventaris_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),

	    );

            $this->Inventaris_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('inventaris'));
        }
    }

    public function create_inventaris_karyawan()
    {
      $data = array(
          'button' => 'Create',
          'action' => site_url('inventaris/create_inventaris_karyawan_action'),
    'id_inventaris_karyawan' => set_value('id_inventaris_karyawan'),
    'id_barang' => set_value('id_barang'),
    'id_karyawan' => set_value('id_karyawan'),

   );
      $this->template->load('template','inventaris_karyawan_form', $data);
    }

    public function create_inventaris_karyawan_action()
    {
      // code...
    }

    public function update($id)
    {
        $row = $this->Inventaris_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('inventaris/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'keterangan' => set_value('keterangan', $row->keterangan),

	    );
            $this->template->load('template','inventaris_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inventaris'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),

	    );

            $this->Inventaris_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('inventaris'));
        }
    }

    public function delete($id)
    {
        $row = $this->Inventaris_model->get_by_id($id);

        if ($row) {
            $this->Inventaris_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('inventaris'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inventaris'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');


	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "inventaris.xls";
        $judul = "inventaris";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "keterangan");


	foreach ($this->Inventaris_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_barang);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keterangan);


	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=inventaris.doc");

        $data = array(
            'inventaris_data' => $this->Inventaris_model->get_all(),
            'start' => 0
        );

        $this->load->view('inventaris_doc',$data);
    }

}

/* End of file Inventaris.php */
/* Location: ./application/controllers/Inventaris.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:51:25 */
/* http://harviacode.com */
