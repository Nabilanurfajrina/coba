<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Lihat Jurusan </legend>
  <div class="content">
  <div class="form-group">
      <label for="Jurusan">ID Jurusan</label>
      <p><?php echo $data->idjurusan ?></p>
    </div>
    <div class="form-group">
      <label for="Jurusan">Nama Jurusan</label>
      <p><?php echo $data->jurusan ?></p>
    </div>

    <a class="btn btn-info" href="<?php echo base_url('jurusan/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>