<section role="main" class="content-body">
	<header class="page-header">
		<h2>Dashboard</h2>

		<div class="right-wrapper text-right">
			<ol class="breadcrumbs mr-3">
				<li><i class="fas fa-home"></i></li>
				<li><span>Donasi</span></li>
				<li><span>Edit</span></li>
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

					<h2 class="card-title">Edit Data Donasi</h2>
				</header>
				<div class="card-body">
					<?= $this->session->flashdata('message') ?>
					<form class="" action="<?= base_url() ?>adminpanel/editdonasi/<?= $id_donasi; ?>" method="post">
						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Nama Lengkap</label>
							<div class="col-sm-7">
								<input type="text" placeholder="Nama Lengkap" class="form-control form-control-lg py-3 text-3" name="name" id="name" value="<?= $donasi['nama']; ?>">
								<?= form_error('name', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">No. Handphone</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text">
											+62
										</span>
									</span>
									<input type="text" name="phone" class="form-control" placeholder="No. Handphone Donatur" value="<?= $donasi['no_hp']; ?>" />
								</div>
								<?= form_error('phone', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">E-mail</label>
							<div class="col-sm-5">
								<input type="text" placeholder="E-mail" class="form-control form-control-lg py-3 text-3" name="email" id="email" value="<?= $donasi['email']; ?>">
								<?= form_error('email', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Provinsi</label>
							<div class="col-sm-5">
								<select class="form-control" name="provinsi">
									<option value="">--- Pilih Provinsi ---</option>
									<?php foreach ($provinsi as $r) { ?>
										<?php
											if ($donasi['provinsi'] == $r->id) {
												$slctd = "selected";
											} else {
												$slctd = "";
											}
											?>
										<option value="<?= $r->id; ?>" <?= $slctd; ?>><?= $r->name; ?></option>
									<?php
									} ?>
								</select>
								<?= form_error('provinsi', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Jumlah Donasi</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text">
											Rp
										</span>
									</span>
									<input type="number" name="amount" min="20000" class="form-control form-control-lg" placeholder="100000" value="<?= $donasi['jumlah_donasi']; ?>" />
								</div>
								<?= form_error('amount', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Bank</label>
							<div class="col-sm-5">
								<select class="form-control" name="bank">
									<option value="">--- Pilih Bank ---</option>
									<?php foreach ($bank as $r) { ?>
										<?php
											if ($donasi['bank'] == $r->id_bank) {
												$slctd = "selected";
											} else {
												$slctd = "";
											}
											?>
										<option value="<?= $r->id_bank; ?>" <?= $slctd; ?>><?= $r->bank; ?></option>
									<?php
									} ?>
								</select>
								<?= form_error('bank', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
							<div class="col-sm-5">
								<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="3" class="form-control form-control-lg py-3 text-3" name="message" id="message"><?= $donasi['keterangan']; ?></textarea>
								<?= form_error('message', '<p class="text-danger">', '</p>'); ?>
							</div>
						</div>

						<?php
						$query = $this->db->query(' SELECT img
													FROM tb_donasi
													WHERE id_donasi = "' . $id_donasi . '"');
						if ($query->num_rows() > 0) {
							$result = $query->row_array();

							$foto = $result['img'];
						} else {
							$foto = "";
						}
						?>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2">Gambar (disarankan ukuran 100x100px)</label>
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
								<p class="mb-0 text primary"><?= $foto; ?></p>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 control-label text-sm-right pt-2"></label>
							<div class="col-sm-9">
								<?php
								if ($donasi['anonim'] == "1") {
									$checked = "checked";
								} else {
									$checked = "";
								}
								?>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="1" name="anonim" <?= $checked; ?>>
										Anonim
									</label>
								</div>
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