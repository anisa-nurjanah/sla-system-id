<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?php echo $history->no_document;?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Sekretaris</li>
						<li class="breadcrumb-item active"><?php echo $history->no_document;?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-orange">
						<div class="card-header">
							<a data-toggle="collapse" href="#collapseExample<?php echo $history->id_history;?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $history->id_history;?>">
								<h3 class="card-title"><?php echo $history->nama_pengguna;?></h3>
							</a>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<div class="collapse" id="collapseExample<?php echo $history->id_history;?>" >
							<form>
								<div class="card-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Nomor Dokumen</label>
										<input type="text" class="form-control" name="no_document" disabled
											value="<?php echo $history->no_document;?>" id="exampleInputEmail1"
											placeholder="Nomor PAK">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Nama Debitur</label>
										<input type="text" class="form-control" name="debitur" disabled
											value="<?php echo $history->debitur;?>" id="exampleInputPassword1"
											placeholder="Nama PAK">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Download Document</label>
										<a href="<?php echo base_url('assets/document/'.$history->file_nk3);?>"
											target="_blank">Download File</a>
									</div>
								</div>
							</form>
						</div>
					</div>

					<!-- general form elements -->
					<div class="card card-orange">
						<div class="card-header">
							<h3 class="card-title">Sekretaris <?php echo $history->nama_penerus;?></h3>
						</div>

						<form action="<?php echo base_url('BerandaSekretaris/ubah_dokumen');?>" method="post">
							<div class="card-body">
								<div class="form-group">
									<label>Tanggal Masuk Dokumen</label>
									<input type="date" name="date_document" value="<?php echo $history->date_created;?>" 
										class="form-control">
									<input type="hidden" name="id_history" value="<?php echo $history->id_history;?>">
									<input type="hidden" name="id_document" value="<?php echo $history->id_document;?>">
								</div>
							</div>
							
							<div class="card-body">
								<div class="form-group">
									<label>Catatan</label>
									<textarea name="remaks" id="remaks" class="form-control" cols="30"
										rows="10"></textarea>
									
								</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Pilih DGM / GM </label>
									<select class="form-control select2" name="id_penerus" style="width: 100%;">
										<option>------DGM / GM------</option>
										<?php foreach($pengguna as $row){;?>
										<option value="<?php echo $row->npp;?>"><?php echo $row->nama;?></option>
										<?php };?>

									</select>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
