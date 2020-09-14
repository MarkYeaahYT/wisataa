<?php $this->load->view('tampilan/headfoot/header') ?>


<section class="packages py-5">
	<div class="container py-lg-4 py-sm-3">
		<h3 class="heading text-capitalize text-center"> Discover our tour packages</h3>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			<?php 
			// error_reporting(0);
			// $back = $_GET['page'] - 1;
			// $next = $_GET['page'] + 1;
			// if(empty($web))
			// {
			// 	echo "<h3>Data Tidak Ada</h3>";
			// }else{
			// 	foreach ($web as $row) {?>
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="image-tour position-relative">
								<img src="http://localhost/CI-WISATA/assets/upload/<?php //echo $row->foto ?>" alt="" class="img-fluid" />
							</div>
							<div class="package-info">
								<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>KABUPATEN</h6>
								<h5 class="my-2"><?php //echo $row->nama_des; ?></h5>
								<p class="">ALAMAT</p>
							</div>
						</div>
					<?php //}
				//}
				?>
			</div>
		</div>
		<div class="view-package text-center mt-4">
			<a href="Welcome/packages">View All Packages</a>
		</div>
	</div>

</section>


<?php $this->load->view('tampilan/headfoot/footer') ?>