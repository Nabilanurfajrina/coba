<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {

        $data = [];
        $total = $this->mahasiswa_model->getTotal();

        if ($total > 0) {
            $limit = 1;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'mahasiswa/index',
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 3,

                // Bootstrap 3 Pagination
                'first_link' => 'First',
                'last_link' => 'Last',
                'next_link' => 'Next',
                'prev_link' => 'Prev',
                'full_tag_open' => '<ul class="pagination">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><span>',
                'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
            ];
            $this->pagination->initialize($config);
                     

            $data = [
               'results' => $this->mahasiswa_model->list($limit, $start),
               'namaJurusan'=> $this->mahasiswa_model->nama_jurusan(),
                'links' => $this->pagination->create_links()
            ];
        }
        $this->load->view('mahasiswa/index', $data);
    }

    public function cari() 
	{
        $data = [
            'namaJurusan' => $this->mahasiswa_model->nama_jurusan(),
            'cari' => $this->mahasiswa_model->cariOrang()
        ];
		$this->load->view('mahasiswa/cari', $data);
	}
 
    

    public function create()
    {
        $jurusan = $this->mahasiswa_model->get_jurusan();
        $data = ['data' => $jurusan];
        $this->load->view('mahasiswa/create', $data);
    }

    public function store()
    {
        $data = array(
            'nim'=>$this->input->post('nim'),
            'nama'=>$this->input->post('nama'),
            'tanggal'=>$this->input->post('tanggal'),
            'email'=> $this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            'notelp'=> $this->input->post('notelp'),
            'jurusan'=> $this->input->post('jurusan')
        );
         
        $perintah = $this->mahasiswa_model->insert($data);

        if($perintah)
        {
            redirect('mahasiswa');
        }
        else
        {
            redirect('mahasiswa/create');
        }
    }

    public function show($nim)
    {
        $mahasiswa = $this->mahasiswa_model->show($nim);
        $jurusan = $this->mahasiswa_model->nama_jurusan();
        $data = [
          'data' => $mahasiswa,
          'namaJurusan' => $jurusan,
          'error' => ''
        ];
        $this->load->view('mahasiswa/show', $data);
    }


    public function edit($nim)
    {
        $mahasiswa = $this->mahasiswa_model->show($nim);
        $jurusan = $this->mahasiswa_model->nama_jurusan();
        $data = [
            'data' => $mahasiswa, 
            'namaJurusan' => $jurusan,
            'error' => ''
        ];
        $this->load->view('mahasiswa/edit', $data);
    }

    public function update($nim)
    {
        $nim = $this->input->post('nim');

            $data = array(
                'nama'=>$this->input->post('nama'),
                'tanggal'=>$this->input->post('tanggal'),
                'email'=> $this->input->post('email'),
                'alamat'=>$this->input->post('alamat'),
                'notelp'=> $this->input->post('notelp'),
                'jurusan'=> $this->input->post('jurusan')

        );
         
        $perintah = $this->mahasiswa_model->update($nim, $data);

        if($perintah)
        {
            redirect('mahasiswa');
        }
        else
        {
            redirect('mahasiswa/edit');
        }
    }

    public function delete($nim)
    {
        $mahasiswa = $this->mahasiswa_model->delete($nim);
        redirect('mahasiswa');
    }
    


}




/* End of file Controllername.php */
