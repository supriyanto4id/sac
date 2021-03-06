<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resign_history_model extends CI_Model
{

    public $table = 'resign_history';
    public $id = 'id_resign';
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

    function get_by_id_index($id)
    {
        $query = $this->db->query("SELECT * FROM resign_history where id_karyawan=$id");
        return $query->result();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_resign', $q);
	$this->db->or_like('tanggal_resign', $q);
	$this->db->or_like('id_karyawan', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_resign', $q);
	$this->db->or_like('tanggal_resign', $q);
	$this->db->or_like('id_karyawan', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // insert data
    function insert_history($data_update)
    {
        $this->db->insert($this->table, $data_update);
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

}

/* End of file Resign_history_model.php */
/* Location: ./application/models/Resign_history_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-23 08:51:52 */
/* http://harviacode.com */
