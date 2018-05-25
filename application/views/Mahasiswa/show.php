<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Lihat Data Mahasiswa </legend>
  <br>
  <div class="content">
  <div class="form-group">
      <label for="mahasiswa">NIM</label>
      <p><?php echo $data->nim?></p>
    </div>
    <div class="form-group">
      <label for="Nama">Nama Mahasiswa</label>
      <p><?php echo $data->nama ?></p>
    </div>
    <div class="form-group">
      <label for="Tanggal">tanggal Lahir Mahasiswa</label>
      <p><?php echo $data->tanggal ?></p>
    </div>
    <div class="form-group">
      <label for="Email">Email Mahasiswa</label>
      <p><?php echo $data->email ?></p>
    </div>
    <div class="form-group">
      <label for="Alamat">Alamat Mahasiswa</label>
      <p><?php echo $data->alamat ?></p>
    </div>
    <div class="form-group">
      <label for="Notelp">No. Telp  Mahasiswa</label>
      <p><?php echo $data->notelp ?></p>
    </div>
    <div class="form-group">
      <label for="jurusan"> Jurusan Mahasiswa </label>
      <p>
      <?php 
            foreach($namaJurusan as $NJ) 
            {
              if ($NJ->idjurusan == $data->jurusan)
              {
                
                echo $NJ->jurusan;
              }
            }?>
      </p>
    </div>
    <a class="btn btn-info" href="<?php echo base_url('mahasiswa/') ?>">Kembali</a>
  </div>
</div>

<?php //$this->load->view('layouts/base_end') ?>