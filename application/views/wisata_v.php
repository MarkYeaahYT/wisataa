<?php $this->load->view('headfoot/header') ?>
<div class="container-fluid" id="container-wrapper">

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h3 class="m-0 font-weight-bold text-primary">Home</h3>
				</div>
				<div class="table-responsive p-3">
					<!-- <p><a href="<?php echo site_url('PDF_arc(p, x, y, r, alpha, beta)resensi/form') ;?>" class="btn btn-success">Tambah</a></p>  -->
					<p><a href="<?php echo site_url('Wisata/form') ;?>" class="btn btn-success">Tambah</a></p>
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">

							<tr>
								<th scope="col">#</th>
								<th scope="col">ID</th>
								<th scope="col">Destinasi</th>
								<th scope="col">URL</th>
								<th scope="col">Foto</th>
								<th scope="col">Arikel</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							$no = 1;
							foreach ($index as $row) {?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $row->id_destination; ?></td>
									<td><?php echo $row->nama_dest; ?></td>
									<td><?php echo substr($row->urlgmaps, 0, 15) ?> ....</td>
									<td>
										<img src="<?php echo base_url('/assets/upload/'.$row->image);?>" style="width: 80px">
									</td>
									<td><?php echo substr($row->artikel, 0, 15) ?> ....</td>
									<td><a href="<?php echo site_url('Wisata/delete/'.$row->id_destination); ?>" class="btn btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus?')"> <i class="fa fa-trash"></i> </a>
										<a href="<?php echo site_url('Wisata/select_by/'.$row->id_destination); ?>" class="btn btn-info"> <i class="fa fa-cog"></i> </a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
			<?php $this->load->view('headfoot/footer') ?>
