<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-lg-6 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $count_ducument;?></h3>

							<p>Dokumen Progress</p>
						</div>
						<div class="icon">
							<i class="fa fa-file"></i>
						</div>
						<a href="<?php echo base_url('DokumenDiproses/read');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
                <div class="col-lg-6 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $count_ducument2;?></h3>

							<p>Dokumen Selesai</p>
						</div>
						<div class="icon">
							<i class="fa fa-file"></i>
						</div>
						<a href="<?php echo base_url('DokumenSelesai/read');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
