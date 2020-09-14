<?php $this->load->view('headfoot/header') ?>
<div class="container-fluid">
	<!-- Row -->
	<div class="card mb-4">
		<div class="card-header"><h3 class="m-0 font-weight-bold text-primary">Tambah Data</h3></div>
		<div class="card-body">
			<p><a class="btn btn-info" href="<?php echo site_url('Wisata'); ?>">Data Wisata</a></p>
			<form method="post" action="<?php echo site_url('Wisata/insert'); ?>" enctype="multipart/form-data">

				<div class="form-group">
					<label>Destinasi:</label>
					<input type="text" name="destinasi" class="form-control">
				</div>

				<div class="form-group">
					<label>URl:</label>
					<input type="text" name="url" class="form-control">
				</div>

				<div class="form-group">
					<label>Foto:</label>
					<input type="file" class="form-control" name="foto">
				</div>

				<div class="form-group">
					<label>Artikel:</label>
					<textarea name="artikel" class="form-control"></textarea>
				</div>

				<button class="btn btn-success" type="submit">Simpan</button>
			</form>
		</div>	
	</div>
</div>
<?php $this->load->view('headfoot/footer') ?>