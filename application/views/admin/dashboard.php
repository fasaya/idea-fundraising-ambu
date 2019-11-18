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
									<form class="contact-form" action="" method="POST">

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Jumlah Donatur</label>
											<div class="col-sm-5">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-users"></i>
														</span>
													</span>
													<input type="number" name="donatur" class="form-control form-control-lg" placeholder="Jumlah donatur" />
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
													<input type="number" name="donasi" class="form-control form-control-lg" placeholder="Jumlah donasi" />
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

					<div class="row">
						<div class="col">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Add donatur</h2>
								</header>
								<div class="card-body">
									<form class="contact-form" action="" method="POST">
										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Nama Lengkap</label>
											<div class="col-sm-7">
												<input type="text" placeholder="Nama Lengkap" class="form-control form-control-lg py-3 text-3" name="name" id="name">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">No. Handphone</label>
											<div class="col-sm-5">
												<input type="text" placeholder="Nomor handphone" class="form-control form-control-lg py-3 text-3" name="phone" id="phone">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">E-mail</label>
											<div class="col-sm-5">
												<input type="email" placeholder="E-mail" class="form-control form-control-lg py-3 text-3" name="email" id="email">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Provinsi</label>
											<div class="col-sm-5">
												<input type="text" placeholder="Provinsi" class="form-control form-control-lg py-3 text-3" name="provinsi">
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
													<input type="number" name="amount" min="20000" class="form-control form-control-lg" placeholder="100000" />
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
											<div class="col-sm-5">
												<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="3" class="form-control form-control-lg py-3 text-3" name="message" id="message" required></textarea>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2"></label>
											<div class="col-sm-9">
												<div class="checkbox">
													<label>
														<input type="checkbox" value="" name="">
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