            <div role="main" class="main">
                <section style="min-height: 100px; background: #f7f7f7;">
            		<div class="container">
            			
            		</div>
            	</section>

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8">Kegiatan</h1>
						        <!-- <span class="sub-title text-dark">Check out our Latest News!</span> -->
							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts single-post">
							
								<article class="post post-large blog-single-post border-0 m-0 p-0">

							
									<div class="post-date ml-0">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>
							
									<div class="post-content ml-0">
							
										<h2 class="font-weight-bold"><a href="#"><?= $blog['judul'] ?></a></h2>
							
										<div class="post-meta">
											<span><i class="far fa-user"></i> Admin</span>
										</div>
										<img src="<?= base_url() ?>template/image/blog/<?= $blog['img'] ?>" class="img-fluid float-left mr-4 mt-2" alt="" />
										<p><?= $blog['isi'] ?></p>
							
									</div>
								</article>
							
							</div>
						</div>
					</div>

				</div>

			</div>