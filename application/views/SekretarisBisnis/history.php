<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Beranda Sekretaris Bisnis</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo site_url('#')?>">Beranda Sekretaris Bisnis</a></li>
						<li class="breadcrumb-item active">Beranda Sekretaris Bisnis</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>


	<!-- Main content -->
	<section class="content">
    
		<div class="container-fluid">
      
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Beranda Sekretaris Bisnis</h3>
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
										<th scope="col" style="width:150px">Remaks</th>
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
                                            <?php echo $row->remaks;?>	
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

