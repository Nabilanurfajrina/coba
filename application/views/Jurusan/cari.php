<?php $this->load->view('layouts/base_start') ?>
<html>
	<body>
 
	<div class="container">
	<h3>Hasil Pencarian</h3>
	<table class="table table-striped">
        <thead>
            <th>ID Jurusan</th>
            <th>Nama Jurusan</th>
        </thead>
 
		<?php
 
		if(count($cari)>0)
		{
			foreach ($cari as $data) { ?>
			<tr>
                <td><?php echo $data->idjurusan; ?></td>
                <td><?php echo $data->jurusan; ?></td>
      
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
  <a class="btn btn-info" href="<?php echo base_url('jurusan/') ?>">Kembali</a>
 
	</div>
	</body>
</html>

<?php $this->load->view('layouts/base_end') ?>