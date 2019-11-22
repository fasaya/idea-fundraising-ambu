				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs mr-3">
								<li><i class="fas fa-home"></i></li>
								<!-- <li><span>Tables</span></li> -->
								<!-- <li><span>Advanced</span></li> -->
							</ol>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<!-- <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a> -->
									</div>

									<h2 class="card-title">Jumlah Donatur dan Donasi</h2>
								</header>
								<div class="card-body">
									<?= $this->session->flashdata('message_donasi_donatur') ?>
									<form class="contact-form" action="<?= base_url() ?>adminpanel/updatedonasidonatur" method="POST">

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Jumlah Donatur</label>
											<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-users"></i>
														</span>
													</span>
													<input type="number" name="donatur" value="<?= $this->Helper->setting('DONATUR'); ?>" placeholder="<?= $this->Helper->setting('DONATUR'); ?>" class="form-control form-control-lg" placeholder="Jumlah donatur" min="0" />
													<?= form_error('donatur', '<p class="text-danger">', '</p>'); ?>
												</div>
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
													<input type="number" name="donasi" value="<?= $this->Helper->setting('DONASI'); ?>" placeholder="<?= $this->Helper->setting('DONASI'); ?>" class="form-control form-control-lg" placeholder="Jumlah donasi" min="0" />
													<?= form_error('donasi', '<p class="text-danger">', '</p>'); ?>
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