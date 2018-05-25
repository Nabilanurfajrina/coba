<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model 
{
    public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from mahasiswa where nama like '%$cari%' ");
		return $data->result();
	}

    public function list($limit, $start)
    {
        $query = $this->db->get('mahasiswa', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('mahasiswa');
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('mahasiswa', $data);
        return $result;       
    }

    public function get_Jurusan()
	{
    	$query = $this->db->get('jurusan');
        return $query->result();
    }
    
    public function show($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }   

    public function nama_jurusan()
    {
        $query = $this->db->get('jurusan');
        return $query->result();
    }

    public function update($nim, $data=[])
    {
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa', $data);
        return result;
    }

    public function delete($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->delete('mahasiswa');
        return $query;
    }

    

}
