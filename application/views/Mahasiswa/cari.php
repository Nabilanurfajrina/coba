<?php $this->load->view('layouts/base_start') ?>
<html>
	<body>
 
	<div class="container">
	<h3>Hasil Pencarian</h3>
	<table class="table table-striped">
  <thead>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Tanggal Lahir</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>No. Telp</th>
      <th>Jurusan</th>
    </thead>
 
		<?php
 
		if(count($cari)>0)
		{
			foreach ($cari as $data) { ?>
			<tr>
      <td><?php echo $data->nim; ?></td>
      <td><?php echo $data->nama; ?></td>
      <td><?php echo $data->tanggal; ?></td>
      <td><?php echo $data->email; ?></td>
      <td><?php echo $data->alamat; ?></td>
      <td><?php echo $data->notelp; ?></td>
      <td>
      <?php 
            foreach($namaJurusan as $NJ) 
            {
              if ($NJ->idjurusan == $data->jurusan)
              {
                
                echo $NJ->jurusan;
              }
            }?>
      </td>
      </tr>
			<?php } 
		}
 
		else
		{
			echo "Data tidak ditemukan";
		}
 
		?>
  </table>
  <br>
  <a class="btn btn-info" href="<?php echo base_url('mahasiswa/') ?>">Kembali</a>
 
	</div>
	</body>
</html>

<?php $this->load->view('layouts/base_end') ?>