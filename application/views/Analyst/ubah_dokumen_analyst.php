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
						<li class="breadcrumb-item"></li>
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
					<?php foreach ($history2 as $row){?>
					<div class="card card-orange">
						<div class="card-header">
							<h3 class="card-title"><?php echo $row->nama_pengguna;?></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
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
									<label>Tanggal Terakhir Diubah</label>
									<input type="text" value="<?php echo $row->date_update;?>" disabled
										class="form-control">
								</div>


								<div class="form-group">
									<label>Catatan</label>
									<textarea name="remaks" id="remaks" class="form-control" cols="30" rows="10"
										disabled> <?php echo $row->remaks;?> </textarea>
								</div>

							</div>
						</form>
					</div>
					<?php };?>

					<!-- general form elements -->
					<div class="card card-orange">
						<div class="card-header">
							<h3 class="card-title"> <?php echo $history->nama_penerus;?></h3>
						</div>

						<form action="<?php echo base_url('BerandaAnalyst/ubah_dokumen');?>" method="post">

							<div class="card-body">
								<div class="form-group">
									<label>Nama Debitur</label>
									<input type="text" name="nama_debitur" class="form-control">

								</div>
								<div class="form-group">
									<label>Nama Group</label>
									<input type="text" name="nama_group" class="form-control">

								</div>
								<div class="form-group">
									<label>Fasilitas 1</label>
									<input type="text" name="fasilitas1" class="form-control">

								</div>
								<div class="form-group">
									<label>maximum 1</label>
									<input type="text" name="maximum1" class="form-control">

								</div>
								<div class="form-group">
									<label>Fasilitas 2</label>
									<input type="text" name="fasilitas2" class="form-control">

								</div>
								<div class="form-group">
									<label>maximum 2</label>
									<input type="text" name="maximum2" class="form-control">

								</div>
								<div class="form-group">
									<label>Fasilitas 3</label>
									<input type="text" name="fasilitas3" class="form-control">

								</div>
								<div class="form-group">
									<label>maximum 3</label>
									<input type="text" name="maximum3" class="form-control">

								</div>
								<div class="form-group">
									<label>Fasilitas 4</label>
									<input type="text" name="fasilitas4" class="form-control">

								</div>
								<div class="form-group">
									<label>maximum 4</label>
									<input type="text" name="maximum4" class="form-control">

								</div>
								<div class="form-group">
									<label>Fasilitas 5</label>
									<input type="text" name="fasilitas5" class="form-control">

								</div>
								<div class="form-group">
									<label>maximum 5</label>
									<input type="text" name="maximum5" class="form-control">

								</div>
								<div class="form-check">
									<label>Kelengkapan</label>
									<br>
									<input class="form-check-input" type="checkbox" value="1" name="nk3_check"
										id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										NK3
									</label>
									<br>
									<input class="form-check-input" type="checkbox" value="1" name="data_debitur_check"
										id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										data debitur
									</label>
									<br>
									<input class="form-check-input" type="checkbox" value="1" name="pak_check"
										id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										PAK
									</label>
									<br>
									<input class="form-check-input" type="checkbox" value="1" name="fia_check"
										id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										FIA
									</label> <br>
									<input class="form-check-input" type="checkbox" value="1" name="ipk_check"
										id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										IPK/MRK
									</label>
								</div>
								<div class="form-group">
									<label>Catatan</label>
									<textarea name="remaks" id="remaks" class="form-control" cols="30"
										rows="10"></textarea>
									<input type="hidden" name="id_history" value="<?php echo $history->id_history;?>">
									<input type="hidden" name="id_document" value="<?php echo $history->id_document;?>">
								</div>
							</div>
							<div class="card-body">
								<div class="form-group">
									<?php echo validation_errors(); ?>
									<label>Pilih Pengelola</label>
									<select class="form-control select2" name="id_penerus" style="width: 100%;">
										<option value="">------Pilih Pengelola------</option>
										<?php foreach($pengguna as $row){;?>
										<option value="<?php echo $row->npp;?>"><?php echo $row->nama;?></option>
										<?php };?>

									</select>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" name="submit" value="submit"
									class="btn btn-primary">Submit</button>
								<!-- <button type="submit" name="submit" value="tolak" class="btn btn-danger">Tolak</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
