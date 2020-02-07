<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_karyawan_model extends CI_Model
{

    public $table = 'data_karyawan';
    public $id = 'id_karyawan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get data by id user untuk cabang
    function get_by_id_user($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get($this->table)->result();
    }

    function get_by_id_index($id)
    {
        $query = $this->db->query("SELECT * FROM data_karyawan where id_karyawan=$id");
        return $query->result();
    }

    function get_by_id_index_array($id)
    {
        $query = $this->db->query("SELECT * FROM data_karyawan where id_karyawan=$id");
        // return $query->result();
        return $query->result_array();
    }

    function get_jabatan($id)
    {
        $query = $this->db->query("SELECT nama_jabatan, COUNT(data_karyawan.id_jabatan) AS jumlah
                                  FROM data_karyawan
                                  LEFT JOIN jabatan ON data_karyawan.id_jabatan =jabatan.id_jabatan
                                  where data_karyawan.id_user ='$id'
                                  GROUP BY nama_jabatan");
        return $query->result();
    }

    function get_jabatan_all()
    {
        $query = $this->db->query("SELECT nama_jabatan, COUNT(data_karyawan.id_jabatan) AS jumlah
                                    FROM data_karyawan
                                    LEFT JOIN jabatan ON data_karyawan.id_jabatan =jabatan.id_jabatan
                                    GROUP BY nama_jabatan
                                    ");
        return $query->result();
    }


    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_karyawan', $q);
	$this->db->or_like('nama_karyawan', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('tgl_masuk', $q);
	$this->db->or_like('tgl_keluar', $q);
	$this->db->or_like('no_npwp', $q);
	$this->db->or_like('no_bpjs', $q);
	$this->db->or_like('status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_karyawan', $q);
	$this->db->or_like('nama_karyawan', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('tgl_masuk', $q);
	$this->db->or_like('tgl_keluar', $q);
	$this->db->or_like('no_npwp', $q);
	$this->db->or_like('no_bpjs', $q);
	$this->db->or_like('status', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_all_data($id){


  $this->db->select("data_karyawan.id_karyawan,data_karyawan.nama_karyawan,data_karyawan.tempat_lahir,data_karyawan.tgl_lahir,data_karyawan.jenis_kelamin,data_karyawan.alamat,data_karyawan.agama,data_karyawan.tgl_masuk,data_karyawan.tgl_keluar,data_karyawan.no_npwp,data_karyawan.no_bpjs,data_karyawan.status,
                      data_bpjs.id_databpjs,data_bpjs.no_bpjs,data_bpjs.status,data_bpjs.kelas,data_bpjs.id_karyawan,
                     jabatan.id_jabatan,jabatan.nama_jabatan,jabatan.gaji_pokok, jabatan.t_jabatan, jabatan.t_bbm, jabatan.t_pulsa, jabatan.t_perumahan ,jabatan.uang_makan, jabatan.insentif,jabatan.job_disk, jabatan.id_karyawan,
                     inventaris.id_barang,inventaris.nama_barang,inventaris.jumlah, inventaris.id_karyawan,
                     resign_history.id_resign,resign_history.tanggal_resign,resign_history.id_karyawan,
                     sp_history.id_sp,sp_history.tanggal_sp,sp_history.id_karyawan
                     ");

  $this->db->from('data_karyawan');
    $this->db->join('data_bpjs','data_bpjs.id_karyawan=data_karyawan.id_karyawan', 'inner');
    $this->db->join('jabatan','jabatan.id_karyawan=data_karyawan.id_karyawan', 'inner');
    $this->db->join('inventaris','inventaris.id_karyawan=data_karyawan.id_karyawan', 'inner');
    $this->db->join('resign_history','resign_history.id_karyawan=data_karyawan.id_karyawan', 'inner');
      $this->db->join('sp_history','sp_history.id_karyawan=data_karyawan.id_karyawan', 'inner');
    $this->db->where('data_karyawan.id_karyawan',$id);
    $query=$this->db->get();
    return $query->row();

      // return $this->db->get($this->table)->row();
      // return $this->db->get('karyawan')->result();
}

}

/* End of file Data_karyawan_model.php */
/* Location: ./application/models/Data_karyawan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-22 14:48:32 */
/* http://harviacode.com */
