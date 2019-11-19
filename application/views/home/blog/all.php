            <div role="main" class="main">

            	<section class="parallax section section-text-light section-parallax section-center mt-0 mb-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?= base_url() ?>template/img/demos/digital-agency/slides/slide-digital-agency-1.jpg" style="min-height: 560px;">
            		<div class="container">
            			<div class="row justify-content-center mt-5">
            				<div class="col-lg-8 mt-5">
            					<h1 class="mt-5 pt-5 font-weight-semibold">Kegiatan</h1>
            					<p class="mb-0 text-4 opacity-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
            				</div>
            			</div>
            		</div>
            	</section>

            	<div class="container py-4">

            		<div class="row">
            			<div class="col">
            				<div class="blog-posts">

            					<div class="row">

								<?php foreach ($blog as $r){ ?>
							
            						<div class="col-md-4">
            							<article class="post post-medium border-0 pb-0 mb-5">
            								<div class="post-image">
            									<a href="<?= site_url() ?>blog/read/<?= $r->slug; ?>">
            										<img src="<?= base_url() ?>template/images/blog/<?= $r->img; ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
            									</a>
            								</div>

            								<div class="post-content">

            									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?= site_url() ?>blog/read/<?= $r->slug; ?>"><?= $r->judul; ?></a></h2>
            									<p><?= substr($r->isi, 0, 135); ?></p>

            									<div class="post-meta">
            										<span><i class="far fa-folder"></i> <?= $r->date; ?></span>
            										<span class="d-block mt-2"><a href="<?= site_url() ?>blog/read/<?= $r->slug; ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
            									</div>

            								</div>
            							</article>
									</div>
								
									<?php } ?>

            					</div>

            					<div class="row">
            						<div class="col">
            							<ul class="pagination float-right">
            								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
            								<li class="page-item active"><a class="page-link" href="#">1</a></li>
            								<li class="page-item"><a class="page-link" href="#">2</a></li>
            								<li class="page-item"><a class="page-link" href="#">3</a></li>
            								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            							</ul>
            						</div>
            					</div>

            				</div>
            			</div>

            		</div>

            	</div>

            </div>