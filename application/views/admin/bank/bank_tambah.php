<section role="main" class="content-body">
	<header class="page-header">
		<h2>Setting</h2>

		<div class="right-wrapper text-right">
			<ol class="breadcrumbs mr-3">
				<li><i class="fas fa-home"></i></li>
				<li><span>Setting</span></li>
				<li><span>Tambah Bank</span></li>
			</ol>
		</div>
	</header>


	<!-- start: page -->

	<div class="row">
		<div class="col">
			<section class="card">
				<header class="card-header">
					<div class="card-actions">
						<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
						<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
					</div>

					<h2 class="card-title">Tambah Bank</h2>
				</header>
				<div class="card-body">
					<?= $this->session->flashdata('message') ?>
					<form class="" action="<?= base_url() ?>adminpanel/tambahbank" enctype="multipart/form-data" method="post">
						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Bank</label>
							<div class="col-sm-9">
								<input type="text" placeholder="Bank" class="form-control form-control-lg py-3 text-3" name="bank" id="name" value="<?= set_value('bank'); ?>">
								<?= form_error('bank', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Atas Nama</label>
							<div class="col-sm-9">
								<input type="text" placeholder="Atas Nama" class="form-control form-control-lg py-3 text-3" name="atas_nama" id="name" value="<?= set_value('atas_nama'); ?>">
								<?= form_error('atas_nama', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">No. Rekening</label>
							<div class="col-sm-9">
								<input type="text" placeholder="No. Rekening" class="form-control form-control-lg py-3 text-3" name="no_rekening" id="name" value="<?= set_value('no_rekening'); ?>">
								<?= form_error('no_rekening', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
							<div class="col-sm-9">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="input-append">
										<div class="uneditable-input">
											<i class="fas fa-file fileupload-exists"></i>
											<span class="fileupload-preview"></span>
										</div>
										<span class="btn btn-default btn-file">
											<span class="fileupload-exists">Change</span>
											<span class="fileupload-new">Select file</span>
											<input type="file" name="gambar" />
										</span>
										<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2"></label>
							<div class="col-sm-9">
								<button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>

	<!-- end: page -->
</section>