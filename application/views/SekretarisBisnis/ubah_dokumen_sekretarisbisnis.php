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
					<?php foreach ($dr_analys as $row){?>
					<div class="card-body">
						<div class="form-group">
							<label>Nama Debitur</label>
							<input type="text" name="nama_debitur" value="<?php echo $row->nama_debitur;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Nama Group</label>
							<input type="text" name="nama_group" value="<?php echo $row->nama_group;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Fasilitas 1</label>
							<input type="text" name="fasilitas1" value="<?php echo $row->fasilitas1;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>maximum 1</label>
							<input type="text" name="maximum1" value="<?php echo $row->maximum1;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Fasilitas 2</label>
							<input type="text" name="fasilitas2" value="<?php echo $row->fasilitas2;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>maximum 2</label>
							<input type="text" name="maximum2" value="<?php echo $row->maximum2;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Fasilitas 3</label>
							<input type="text" name="fasilitas3" value="<?php echo $row->fasilitas3;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>maximum 3</label>
							<input type="text" name="maximum3" value="<?php echo $row->maximum3;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Fasilitas 4</label>
							<input type="text" name="fasilitas4" value="<?php echo $row->fasilitas4;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>maximum 4</label>
							<input type="text" name="maximum4" value="<?php echo $row->maximum4;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>Fasilitas 5</label>
							<input type="text" name="fasilitas5" value="<?php echo $row->fasilitas5;?>" disabled
								class="form-control">

						</div>
						<div class="form-group">
							<label>maximum 5</label>
							<input type="text" name="maximum5" value="<?php echo $row->maximum5;?>" disabled
								class="form-control">

						</div>
						<div class="form-check">
							<label>Kelengkapan</label>
							<br>
							<input class="form-check-input" type="checkbox" disabled
								<?php if($row->nk3_check ==1){echo 'checked';};?> name="nk3_check" id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
								NK3
							</label>
							<br>
							<input class="form-check-input" type="checkbox" disabled
								<?php if($row->data_debitur_check ==1){echo 'checked';};?> name="data_debitur_check"
								id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
								data debitur
							</label>
							<br>
							<input class="form-check-input" type="checkbox" disabled
								<?php if($row->pak_check ==1){echo 'checked';};?> name="pak_check" id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
								PAK
							</label>
							<br>
							<input class="form-check-input" type="checkbox" disabled
								<?php if($row->fia_check ==1){echo 'checked';};?> name="fia_check" id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
								FIA
							</label> <br>
							<input class="form-check-input" type="checkbox" disabled
								<?php if($row->ipk_check ==1){echo 'checked';};?> name="ipk_check" id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
								IPK/MRK
							</label>
						</div>
						<div class="form-group">


						</div>
					</div>
					<?php };?>

					<!-- general form elements -->
					<div class="card card-orange">
						<div class="card-header">
							<h3 class="card-title"> <?php echo $history->nama_penerus;?></h3>
						</div>

						<form action="<?php echo base_url('BerandaSekretarisBisnis/ubah_dokumen');?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_history" value="<?php echo $history->id_history;?>">
							<input type="hidden" name="id_document" value="<?php echo $history->id_document;?>">
							<div class="form-group">
								<label class="col-lg-12 col-sm-12 control-label">File</label>
								<div class="col-lg-12">
									<input type="file" class="form-control" id="file_2" name="file_2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-12 col-sm-12 control-label">SKK</label>
								<div class="col-lg-12">
									<input type="text" class="form-control" id="no_skk" name="no_skk">
								</div>
							</div>
							<div class="form-group">
								<label>Catatan</label>
								<textarea name="remaks" id="remaks" class="form-control" cols="30" rows="10"
									>  </textarea>
							</div>

							<div class="card-body">
								<div class="form-group">
									<?php echo validation_errors(); ?>
									<label>Seketaris</label>
									<select class="form-control select2" name="id_penerus" style="width: 100%;">
										<option value="">------Seketaris------</option>
										<?php foreach($pengguna as $row){;?>
										<option value="<?php echo $row->npp;?>"><?php echo $row->nama;?></option>
										<?php };?>

									</select>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" name="submit" value="submit"
									class="btn btn-primary">Submit</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
