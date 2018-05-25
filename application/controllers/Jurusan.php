<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('jurusan_model');
    }

    public function index()
    {
        $jurusan = $this->jurusan_model->listJurusan();
        $data = ['title' => 'Pemrograman Web Framework :: Data Jurusan Pegawai','jurusan' => $jurusan];
        $total = $this->jurusan_model->getTotal();

        if ($total > 0) {
            $limit = 2;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'jurusan/index',
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 3,

                // Bootstrap 3 Pagination
                'first_link' => '&laquo;',
                'last_link' => '&raquo;',
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
                'results' => $this->jurusan_model->list($limit, $start),
                'links' => $this->pagination->create_links(),
            ];
        }
             $this->load->view('jurusan/index', $data);
       
    }


    public function create()
    {
        $this->load->view('jurusan/create');
    }

    public function store()
    {
            $data = ['jurusan' => $this->input->post('jurusan')];
            $rules = [
            [
                'field' => 'jurusan',
                 'label' => 'Jurusan',
                 'rules' => 'trim|required'
            ]
            ];
           
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                $result = $this->jurusan_model->insert($data);
                if ($result) {
                redirect('jurusan');
                }
            } else {
                redirect('jurusan/create');
            }
                
    }
    public function cari() 
	{
        $data = [
            'cari' => $this->jurusan_model->cariOrang()
        ];
		$this->load->view('jurusan/cari', $data);
	}

    public function show($idjurusan)
    {
        $jurusan = $this->jurusan_model->show($idjurusan);
        $data = [
          'data' => $jurusan
        ];
        $this->load->view('jurusan/show', $data);
    }

    public function edit($idjurusan)
    {
        $jurusan = $this->jurusan_model->show($idjurusan);
         $data = ['data' => $jurusan];
        $this->load->view('jurusan/edit', $data);
        
    }

    public function update($idjurusan)
    {
       $idjurusan = $this->input->post('idjurusan');
       $data = array( 'jurusan' => $this->input->post('jurusan'));

       $this->jurusan_model->update($idjurusan, $data);
       redirect('jurusan');
    }

    public function destroy($idjurusan)
    {
      $this->jurusan_model->delete($idjurusan);
      redirect('jurusan');
    }


}



/* End of file Jabatan.php */



/* End of file Controllername.php */
