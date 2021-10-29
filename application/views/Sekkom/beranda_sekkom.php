
<!-- modal add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				<h4 class="modal-title">Tambah</h4>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('BerandaSekkom/add_document')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">

					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nomor Dokumen</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="no_document" name="no_document">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nama Debitur</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="debitur" name="debitur">
						</div>
					</div>

          <div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">File NK3</label>
						<div class="col-lg-12">
							<input type="file" class="form-control" id="file_nk3" name="file_nk3">
						</div>
					</div>

          <div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Diterukan</label>
						<div class="col-lg-12">
              <select name="id_penerus" id="id_penerus" class="form-control">
                <?php foreach($pengguna as $row){;?>
                  <option value="<?php echo $row->npp;?>"><?php echo $row->nama;?></option>
                <?php };?>
              </select>
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
			<form class="form-horizontal" action="<?php echo base_url('BerandaSekkom/edit_document')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">
          			<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nomor Dokumen</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="no_document" name="no_document">
							<input type="hidden" name="id_document" id="id_document">
							<input type="hidden" name="id_history" id="id_history">
							<input type="hidden" name="file_exisisting" id="file_exisisting">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nama Debitur</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="debitur" name="debitur">
						</div>
					</div>

          			<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">File NK3</label>
						<div class="col-lg-12">
							<input type="file" class="form-control" id="file_nk3" name="file_nk3">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Diterukan</label>
						<div class="col-lg-12">
							<select name="id_penerus" id="id_penerus" class="form-control">
								<?php foreach($pengguna as $row){;?>
								<option value="<?php echo $row->npp;?>"><?php echo $row->nama;?></option>
								<?php };?>
							</select>
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
			<form class="form-horizontal" action="<?php echo base_url('BerandaSekkom/delete_document')?>" method="post"
				enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-12 col-sm-12 control-label">Nomor Document</label>
						<div class="col-lg-12">
							<input type="hidden" name="id_document" id="id_document">
							<input type="hidden" name="id_history" id="id_history">
							<input type="hidden" name="id_history" id="id_history">
							<input type="text" name="file_exisisting" id="file_exisisting" class="form-control" readonly>

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
					<h1>Beranda Sekkom</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo site_url('#')?>">Beranda Sekkom</a></li>
						<li class="breadcrumb-item active">Beranda Sekkom</li>
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
							<h3 class="card-title">Beranda Sekkom</h3>
							<div class="card-tools">
							</div>
						</div>
            
						<div class="card-body">
							<table class="table table-striped" id="example1" width="100%" data-page-length='5'
								data-length-change='false'>
								<thead>
									<tr class="bg-table">
										<th scope="col">No</th>
										<th scope="col">Nomor Document</th>
										<th scope="col">Debitur</th>
										<th scope="col">Diterukan oleh</th>
										<th scope="col">Tanggal Dibuat</th>
										<th scope="col">Terakhir Diubah</th>
										<th scope="col">File</th>
										<th scope="col" style="width:200px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no =1; foreach($table as $row){;?>
									<tr>
										<th scope="row"><?php echo $no++;?></th>
										<td><?php echo $row->no_document;?></td>
										<td><?php echo $row->debitur;?></td>
										<td><?php echo $row->nama_penerus;?></td>
										<td><?php echo $row->date_created;?></td>
										<td><?php echo $row->date_update;?></td>
										<td> <a href="<?php echo base_url('assets/document/'.$row->file_nk3);?>" target="_blank">Download File</a> </td>
									
										<td>
											<a href="<?=site_url('DokumenDiproses/detail/'.$row->id_document)?>" class="btn btn-success">
												<i class="far fa-file nav-icon"></i>  Lihat Detail
											</a>
											<a 
												href="javascript:;" 
												data-id_document="<?php echo $row->id_document ?>" 
												data-id_history="<?php echo $row->id_history ?>" 
												data-no_document="<?php echo $row->no_document ?>"
												data-debitur="<?php echo $row->debitur ?>" 
												data-file_nk3="<?php echo $row->file_nk3 ?>"
												data-file_exisisting="<?php echo $row->file_nk3 ?>"
												data-toggle="modal" 
												data-target="#edit-data"
												class="show-modal btn btn-info btn-sm">
												<i class="fa fa-edit"></i>
											</a>

											<a href="javascript:;" 
												data-id_document="<?php echo $row->id_document ?>" 
												data-id_history="<?php echo $row->id_history ?>" 
												data-no_document="<?php echo $row->no_document ?>"
												data-file_exisisting="<?php echo $row->file_nk3 ?>"
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
			modal.find('#id_document').attr("value", div.data('id_document'));
			modal.find('#id_history').attr("value", div.data('id_history'));
			modal.find('#no_document').attr("value", div.data('no_document'));
			modal.find('#debitur').attr("value", div.data('debitur'));
			modal.find('#file_exisisting').attr("value", div.data('file_exisisting'));

		});

		// modal delete data
		$('#delete-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget)
			var modal = $(this)
			modal.find('#id_document').attr("value", div.data('id_document'));
			modal.find('#id_history').attr("value", div.data('id_history'));
			modal.find('#no_document').attr("value", div.data('no_document'));
			modal.find('#file_exisisting').attr("value", div.data('file_exisisting'));


		});
	});

</script>
