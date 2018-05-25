<?php $this->load->view('layouts/base_start') ?>


<div class="container">
<legend>Daftar Mahasiswa </legend>
<a class="btn btn-primary" href="<?php echo base_url('mahasiswa/create') ?>">
            Tambah
</a>
<br>
<br>
			<form action="<?php echo base_url('mahasiswa/cari')?>" action="GET">
				<div class="form-group">
					<label for="cari">Seacrh Data Mahasiswa</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>
	
<br>
<br>
<br>
  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Tanggal Lahir</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>No. Telp</th>
      <th>Jurusan</th>
    </thead>
    <tbody>
    <?php  $number = 1; foreach ($results as $data) { ?>
    <tr>
        <td> <?php echo $number++; ?>    
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->nim ?></td>
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->nama ?></td>
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->tanggal ?></td>
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->email ?></td>
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->alamat ?></td>
        <td><a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>"> <?php echo $data->notelp ?></td>
        <td>
        <a href="<?php echo base_url('mahasiswa/show/'.$data->nim) ?>">
            <?php 
            foreach($namaJurusan as $NJ) 
            {
              if ($NJ->idjurusan == $data->jurusan)
              {
                
                echo $NJ->jurusan;
              }
            }?>
        </td>
        <td>
        <?php echo form_open('mahasiswa/delete/'.$data->nim)  ?>
            <a class="btn btn-info" href="<?php echo base_url('mahasiswa/edit/'.$data->nim) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
        </td>    
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