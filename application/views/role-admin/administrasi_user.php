
<!-- modal add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				<h4 class="modal-title">Tambah</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('administrasi/add_user')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">

					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">NPP</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="npp" name="npp">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nama</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
					</div>


					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Posisi</label>
						<div class="col-lg-12">
							<select name="posisi" class="form-control" id="posisi">
								<?php foreach($level as $row){;?>
									<option value="<?php echo $row->posisi;?>"><?php echo $row->nama_posisi;?></option>
								<?php };?>
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">password</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="password" name="password">
						</div>
					</div>
				
				</div>
				<div class="modal-footer">

					<input type="submit" name="submit" class="btn btn-info" value="Tambah">
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- modal edit -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				<h4 class="modal-title">Edit</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('administrasi/edit_user')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">NPP</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="npp" name="npp">
              <input type="hidden" id="id" name="id">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nama</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="nama" name="nama">
						</div>
					</div>


					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Posisi</label>
						<div class="col-lg-12">
							<select name="posisi" class="form-control" id="posisi">
								<?php foreach($level as $row){;?>
									<option value="<?php echo $row->posisi;?>"><?php echo $row->nama_posisi;?></option>
								<?php };?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">password</label>
						<div class="col-lg-12">
							<input type="date" class="form-control" id="password" name="password">
						</div>
					</div>
					
				</div>
				<div class="modal-footer">

					<input type="submit" name="submit" class="btn btn-info" value="Simpan">
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Hapus -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				<h4 class="modal-title">Anda Yakin Hapus Ini?</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('administrasi/delete_user')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-4 col-sm-4 control-label">Nama</label>
						<div class="col-lg-8">
							<input type="hidden" id="id" name="id">
							<input type="text" name="nama" id="nama" class="form-control" readonly>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit" class="btn btn-danger" value="Hapus">
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Administrasi</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo site_url('#')?>">Dokumen Selesai</a></li>
						<li class="breadcrumb-item active">Administrasi</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>


	<!-- Main content -->
	<section class="content">
    
		<div class="container-fluid">
      <a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle="modal" data-target="#add-tb">
        <i class="fa fa-plus"></i>
      </a>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Daftar Pengguna</h3>
							<div class="card-tools">
							</div>
						</div>
            
						<div class="card-body">
							<table class="table table-striped" id="example1" width="100%" data-page-length='5'
								data-length-change='false'>
								<thead>
									<tr class="bg-table">
										<th scope="col">No</th>
										<th scope="col">NPP</th>
										<th scope="col">Nama</th>
										<th scope="col">Posisi</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no =1; foreach($table as $row){;?>
									<tr>
										<th scope="row"><?php echo $no++;?></th>
										<td><?php echo $row->npp;?></td>
										<td><?php echo $row->nama;?></td>
										<td>
										<?php echo $row->nama_posisi;?>
										</td>
										<td>
											<a href="javascript:;" data-id="<?php echo $row->id ?>" data-npp="<?php echo $row->npp ?>"
												data-nama="<?php echo $row->nama ?>" data-posisi="<?php echo $row->posisi ?>"
												data-tgl_lahir="<?php echo $row->tgl_lahir ?>" data-toggle="modal" data-target="#edit-data"
												class="show-modal btn btn-info btn-sm">
												<i class="fa fa-edit"></i>
											</a>

											<a href="javascript:;" data-id="<?php echo $row->id ?>" data-nama="<?php echo $row->nama ?>"
												data-toggle="modal" data-target="#delete-data" class="show-modal btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
									<?php };?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$(document).ready(function () {
		// Untuk sunting
		$('#edit-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget)
			var modal = $(this)
			modal.find('#id').attr("value", div.data('id'));
			modal.find('#npp').attr("value", div.data('npp'));
			modal.find('#nama').attr("value", div.data('nama'));
			modal.find('#posisi').attr("value", div.data('posisi'));
			modal.find('#tgl_lahir').attr("value", div.data('tgl_lahir'));

		});

		// modal delete data
		$('#delete-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget)
			var modal = $(this)
			modal.find('#id').attr("value", div.data('id'));
			modal.find('#nama').attr("value", div.data('nama'));


		});
	});

</script>
