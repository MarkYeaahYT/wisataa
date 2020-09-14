<?php $this->load->view('headfoot/header') ?>
<div class="container-fluid">
	<div class="card mb-4">
		<div class="card-header"><h3 class="m-0 font-weight-bold text-primary">Edit Data</h3></div>
		<div class="card-body">
			<?php 
			foreach ($Wisata as $row) {?>
				<form method="post" action="<?php echo site_url('Wisata/edit') ?>" enctype="multipart/form-data">
					<input type="hidden" name="id_destinasi" value="<?php echo $row->id_destination; ?>">


					<div class="form-group">
						<label >Destinasi:</label>
						<input type="text" name="destinasi" class="form-control" value="<?php echo $row->nama_dest ?>">
					</div>

					<div class="form-group">
						<label >URL:</label>
						<input type="text" name="url" class="form-control" value="<?php echo $row->urlgmaps ?>">
					</div>
					
					<div class="form-group">
						<label >Foto:</label>
						<input type="file" class="form-control" name="foto">
					</div>
					<div class="form-group">
						<img src="<?php echo base_url('/assets/upload/'.$row->image); ?> " style="width: 80px">
					</div>
					<input type="hidden" name="nm_foto" value="<?php echo $row->image; ?>">

					<div class="form-group">
						<label >Artikel:</label>
						<textarea name="artikel" class="form-control"><?php echo $row->artikel ?></textarea>
					</div>

					
					<button class="btn btn-success" type="submit">Simpan</button>
				</form>
			<?php } ?>
		</div>
	</div>
</div>
<?php $this->load->view('headfoot/footer') ?>	