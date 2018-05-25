<?php $this->load->view('layouts/base_start') ?>


<div class="container">
<legend>Daftar Jurusan yang Tersedia</legend>
<a class="btn btn-primary" href="<?php echo base_url('jurusan/create') ?>">
            Tambah
          </a>

<br>
<br>
			<form action="<?php echo base_url('jurusan/cari')?>" action="GET">
				<div class="form-group">
					<label for="cari">Seacrh Data Jurusan</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>

<br>

  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
      <th>No.</th>
      <th>ID Jurusan</th>
      <th>Nama Jurusan</th>
    </thead>
    <tbody>
    <?php  $number = 1; foreach ($results as $data) { ?>
    <tr>
    <td>
        <a href="<?php echo base_url('jurusan/show/'.$data->idjurusan) ?>">
        <?php echo $number++; ?>
        </a>
   </td>
  <td>
      <a href="<?php echo base_url('jurusan/show/'.$data->idjurusan) ?>">
       <?php echo $data->idjurusan ?>
      </a>
  </td>
  <td>
  <a href="<?php echo base_url('jurusan/show/'.$data->idjurusan) ?>">
  <?php echo $data->jurusan ?>
  </a></td>
      <td><?php echo form_open('jurusan/destroy/'.$data->idjurusan)  ?>
            <a class="btn btn-info" href="<?php echo base_url('jurusan/edit/'.$data->idjurusan) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <?php echo $links ?>
  <?php } else { ?>
  <div>Tidak ada data</div>
  <?php } ?>
</div>

<?php $this->load->view('layouts/base_end') ?>