<?php $this->load->view('layouts/base_start') ?>
<div class="container">
  <legend>Tambah Data Mahasiswa</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('mahasiswa/store'); ?>
  <div class="form-group">
      <label for="nim">NIM</label>
      <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
    </div>
    <div class="form-group">
      <label for="Nama">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
    </div>

    <div class="form-group">
      <label for="Tanggal">Tanggal Lahir </label>
      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Lahir">
    </div>

    <div class="form-group">
      <label for="Email">E-mail </label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan E-mail">
    </div>

     <div class="form-group">
      <label for="Alamat">Alamat </label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
    </div>

      <div class="form-group">
      <label for="kontak">NO Telp </label>
      <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukkan NO Telp">
    </div>

     <div class="form-group">
    <label>Jurusan </label>
                  <select class="form-control" name="jurusan" id="jurusan">
                  <option selected> -- Pilih Jurusan -- </option>
                  <?php foreach($data as $jurusan){ ?>
                  <option value="<?php echo $jurusan->idjurusan; ?>"><?php echo $jurusan->jurusan; ?>   </option>
                  <?php } ?>
                  </select>
    </div>
    

    <a class="btn btn-info" href="<?php echo base_url('mahasiswa/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>