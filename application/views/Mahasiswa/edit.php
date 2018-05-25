<!-- mahasiswa/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Update Data Mahasiswa</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('mahasiswa/update/'.$data->nim); ?>
    <?php echo form_hidden('nim', $data->nim) ?>

    <div class="form-group">
      <label for="Nama">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" 
      value="<?php echo $data->nama ?>">
    </div>

      <div class="form-group">
      <label for="Tanggal">Tanggal Lahir</label>
      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" 
      value="<?php echo $data->tanggal ?>">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" 
      value="<?php echo $data->email ?>">
    </div>

     <div class="form-group">
      <label for="Alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" 
      value="<?php echo $data->alamat ?>">
    </div>

    <div class="form-group">
      <label for="notelp">No Telp</label>
      <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No Telp" 
      value="<?php echo $data->notelp ?>">
    </div>

    

    
    <div class="form-group">
    <label>Jurusan </label>
                  <select class="form-control" name="jurusan" id="jurusan">
                  <option selected> 
                  <?php 
                    foreach($namaJurusan as $NJ) 
                    {
                      if ($NJ->idjurusan == $data->jurusan)
                      {
                        echo $NJ->jurusan;
                      }
                    }?>                  
                  </option>
                  <?php foreach($namaJurusan as $j){ ?>
                  <option value="<?php echo $j->idjurusan; ?>"><?php echo $j->jurusan; ?>   </option>
                  <?php } ?>
                  </select>
    </div>

    <?php echo $error ?>

    <a class="btn btn-info" href="<?php echo base_url('jurusan/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>