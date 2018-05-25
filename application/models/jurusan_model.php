<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jurusan_model extends CI_Model {
    public function list($limit, $start)
    {
         $query = $this->db->get('jurusan', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function listJurusan()
    {
        $query = $this->db->get('jurusan');
         return $query->result();
    }

    public function getTotal()
    {
        return $this->db->count_all('jurusan');
    }

    public function insert($data = [])
    {
         $result = $this->db->insert('jurusan', $data);
        return $result;
    }

    public function show($idjurusan)
    {
        $this->db->where('idjurusan', $idjurusan);
        $query = $this->db->get('jurusan');
        return $query->row();
    }

    public function update($idjurusan, $data = [])
    { 
       $update = array(
           'jurusan' => $data['jurusan']
       );

       $this->db->where('idjurusan', $idjurusan);
       $this->db->update('jurusan', $update);
    }

    public function delete($idjurusan)
    {
        $this->db->where('idjurusan', $idjurusan);
        $this->db->delete('jurusan');
    }
    public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from jurusan where jurusan like '%$cari%' ");
		return $data->result();
	}

}
    



/* End of file jurusan_model.php */
