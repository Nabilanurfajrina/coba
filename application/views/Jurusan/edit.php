<!-- pegawai/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Update Data Jurusan</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('jurusan/update/'.$data->idjurusan); ?>
    <?php echo form_hidden('idjurusan', $data->idjurusan) ?>
    <div class="form-group">
      <label for="Jurusan">Nama Jurusan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan" value="<?php echo $data->jurusan ?>">
    </div>

    <a class="btn btn-info" href="<?php echo base_url('jurusan/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>