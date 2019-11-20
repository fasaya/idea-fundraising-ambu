<div role="main" class="main">
    <section class="parallax section section-text-light section-parallax section-center mt-0 mb-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?= base_url() ?>template/images/isi/<?= $this->Helper->isi_web('lain_header'); ?>" style="min-height: 560px;">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 mt-5">
                    <h1 class="mt-5 pt-5 font-weight-semibold"><?= $this->Helper->isi_web('tentang_1_title1'); ?></h1>
                    <p class="mb-0 text-4 opacity-7"><?= $this->Helper->isi_web('tentang_1_title2'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-7 pr-lg-5">
                <h2 class="font-weight-normal line-height-1"><?= $this->Helper->isi_web('tentang_1_judul1'); ?><strong class="font-weight-extra-bold"> <?= $this->Helper->isi_web('tentang_1_judul2'); ?></strong></h2>
                <p class="lead"><?= $this->Helper->isi_web('tentang_1_isi1'); ?></p>
                <p><?= $this->Helper->isi_web('tentang_1_isi2'); ?></p>

                <!-- <div class="row pt-4 my-5">
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 mb-4">
                            <div class="feature-box-icon">
                                <i class="icons icon-support text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">Customer Support</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 mb-4">
                            <div class="feature-box-icon">
                                <i class="icons icon-doc text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">HTML5 / CSS3 / JS</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 mb-4 mb-lg-0">
                            <div class="feature-box-icon">
                                <i class="icons icon-social-google text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">500+ Google Fonts</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-style-2 mb-4">
                            <div class="feature-box-icon">
                                <i class="icons icon-layers text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">Sliders</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 mb-4">
                            <div class="feature-box-icon">
                                <i class="icons icon-user text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">Icons</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-menu text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">Buttons</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="col-lg-5">
                <h4 class="font-weight-normal line-height-1">Hubungi <strong class="font-weight-extra-bold">Kami</strong></h4>

                <ul class="list list-icons list-icons-style-3 mt-4">
                    <li><i class="fas fa-phone"></i> <strong>No. HP:</strong> +<?= $this->Helper->setting('NOHP'); ?></li>
                    <li><i class="fab fa-whatsapp"></i> <strong>No. Whatsapp:</strong> +<?= $this->Helper->setting('NOWA'); ?></li>
                    <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?= $this->Helper->setting('EMAIL'); ?>"><?= $this->Helper->setting('EMAIL'); ?></a></li>
                    <li><i class="fas fa-map-marker-alt"></i> <strong>Alamat:</strong> <?= $this->Helper->setting('ALAMAT'); ?></li>
                </ul>

                <hr class="my-5">

                <!-- <h4 class="font-weight-normal">Business <strong class="font-weight-extra-bold">Hours</strong></h4>
                <ul class="list list-icons list-dark mt-4">
                    <li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
                    <li><i class="far fa-clock"></i> Sunday - Closed</li>
                </ul> -->
            </div>
        </div>

    </div>

    <!-- <section class="section section-default border-0">
        <div class="container py-4">
            <div class="row counters">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-user text-color-dark"></i>
                        <strong class="text-color-dark font-weight-extra-bold" data-to="30000" data-append="+">0</strong>
                        <label class="text-4 mt-1">Happy Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-badge text-color-dark"></i>
                        <strong class="text-color-dark font-weight-extra-bold" data-to="15">0</strong>
                        <label class="text-4 mt-1">Years In Business</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <i class="icons icon-graph text-color-dark"></i>
                        <strong class="text-color-dark font-weight-extra-bold" data-to="178">0</strong>
                        <label class="text-4 mt-1">High Score</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <i class="icons icon-cup text-color-dark"></i>
                        <strong class="text-color-dark font-weight-extra-bold" data-to="352">0</strong>
                        <label class="text-4 mt-1">Cups of Coffee</label>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="m-5 pb-3">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-0 mt-3 font-weight-extra-bold text-6">Leadership</h2>
                    <p class="text-4 mb-3">Pellentesque pellentesque eget tempor tellus. </p>
                    <div class="divider divider-primary divider-small divider-small-center mb-3">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8">
                    <div class="row mt-4">
                        <div class="col-lg-3 col-12 text-center mb-4">
                            <h4 class="mt-3 mb-0">David Doe</h4>
                            <p class="mb-0">CEO</p>
                            <span class="thumb-info-social-icons mt-2 pb-0">
                                <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </div>
                        <div class="col-lg-3 col-12 text-center mb-4">
                            <h4 class="mt-3 mb-0">Jeff Doe</h4>
                            <p class="mb-0">CMO</p>
                            <span class="thumb-info-social-icons mt-2 pb-0">
                                <a href="mailto:mail@example.com"><i class="far fa-envelope"></i><span>Email</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </div>
                        <div class="col-lg-3 col-12 text-center mb-4">
                            <h4 class="mt-3 mb-0">Craig Doe</h4>
                            <p class="mb-0">COO</p>
                            <span class="thumb-info-social-icons mt-2 pb-0">
                                <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </div>
                        <div class="col-lg-3 col-12 text-center mb-4">
                            <h4 class="mt-3 mb-0">Richard Doe</h4>
                            <p class="mb-0">President</p>
                            <span class="thumb-info-social-icons mt-2 pb-0">
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="section section-default section-footer border-0">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-0 mt-3 font-weight-extra-bold text-6">Clients</h2>
                    <p class="text-4 mb-3">Pellentesque pellentesque eget tempor tellus. </p>
                    <div class="divider divider-primary divider-small divider-small-center mb-3">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="content-grid col mt-5 mb-4">
                    <div class="row content-grid-row">
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-1.png" style="max-width: 180px" alt="">
                        </div>
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-2.png" style="max-width: 180px" alt="">
                        </div>
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-3.png" style="max-width: 180px" alt="">
                        </div>
                    </div>
                    <div class="row content-grid-row">
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-4.png" style="max-width: 180px" alt="">
                        </div>
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-5.png" style="max-width: 180px" alt="">
                        </div>
                        <div class="content-grid-item col-lg-4 text-center py-4">
                            <img class="img-fluid" src="<?= base_url() ?>template/home/img/logos/logo-6.png" style="max-width: 180px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</div>