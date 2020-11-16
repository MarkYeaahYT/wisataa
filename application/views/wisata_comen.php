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
					<p><a href="<?php echo site_url('Wisata/comentar') ;?>" class="btn btn-success">Tambah</a></p>
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">

							<tr>
								<th scope="col">#</th>
								<th scope="col">ID</th>
								<th scope="col">Comentar</th>
								<th scope="col">Nama</th>
								<th scope="col">Date</th>
								<th scope="col">Tempat Wisata</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							$no = 1;
							foreach ($comentar as $row) {?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $row->id_comentar; ?></td>
								    <td><?php echo substr($row->comentar, 0, 30) ?> ....</td>
									<td><?php echo $row->nama; ?></td>
							        <td><?php echo $row->date; ?></td>
							        <td><?php echo $row->nama_dest; ?></td>
									<td><a href="<?php echo site_url('Wisata/delete/'.$row->id_destination); ?>" class="btn btn-danger" onclick=" return confirm('Apakah anda yakin akan menghapus?')"> <i class="fa fa-trash"></i> </a>
										
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