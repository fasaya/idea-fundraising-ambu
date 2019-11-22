<footer id="footer" class="border-0" style="background-color: #fff;">
    <div class="container py-4">
        <div class="row justify-content-md-center py-5 mt-3">
            <div class="col-md-12 col-lg-3 text-center text-lg-left mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-default mb-4">Hubungi Kami</h5>
                <ul class="list list-unstyled">
                    <li class="mb-1"><a href="https://api.whatsapp.com/send?phone=<?= $this->Helper->setting('NOWA'); ?>" class="link-hover-style-1"><i class="fab fa-whatsapp text-color-primary"></i><span class="text-color-default opacity-7 pl-2">+<?= $this->Helper->setting('NOWA'); ?></span></a></li>
                    <li class="mb-1"><a href="tel:<?= $this->Helper->setting('NOHP'); ?>" class="link-hover-style-1"><i class="fas fa-phone text-color-primary"></i><span class="text-color-default opacity-7 pl-2">+<?= $this->Helper->setting('NOHP'); ?></span></a></li>
                    <li class="mb-1"><a href="mailto: <?= $this->Helper->setting('EMAIL'); ?>" class="link-hover-style-1"><i class="fas fa-envelope text-color-primary"></i><span class="text-color-default opacity-7 pl-2"><?= $this->Helper->setting('EMAIL'); ?></span></a></li>
                    <li class="mb-1"><a class="link-hover-style-1"><i class="fas fa-map-marker-alt text-color-primary"></i><span class="text-color-default opacity-7 pl-2"><?= $this->Helper->setting('ALAMAT'); ?></span></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-default mb-4">Halaman</h5>
                <ul class="list list-unstyled">
                    <li class="mb-1"><a href="<?= site_url() ?>home/tentang" class="link-hover-style-1 text-color-default"> Tentang Yayasan</a></li>
                    <li class="mb-1"><a href="<?= site_url() ?>home/visidanmisi" class="link-hover-style-1 text-color-default"> Visi dan Misi</a></li>
                    <li class="mb-1"><a href="<?= site_url() ?>home/adrt" class="link-hover-style-1 text-color-default"> AD/RT</a></li>
                    <li class="mb-1"><a href="<?= site_url() ?>home/strukturorganisasi" class="link-hover-style-1 text-color-default"> Struktur Organisasi</a></li>
                    <li class="mb-1"><a href="<?= site_url() ?>blog" class="link-hover-style-1 text-color-default"> Kegiatan</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-default mb-4">Kegiatan</h5>
                <ul class="list list-unstyled">
                    <?php foreach ($blog as $r) { ?>
                        <li class="mb-1"><a href="<?= site_url() ?>blog/read/<?= $r->slug; ?>" class="link-hover-style-1 text-color-default"> <?= $r->judul; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4 text-center text-lg-left">
                <!-- <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5> -->
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-default mb-4">Donasi</h5>
                <div class="row">
                    <?php foreach ($bank as $r) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                            <img src="<?= base_url() ?>template/images/bank/<?= $r->img; ?>" alt="<?= $r->bank; ?>" style="width:90px;">
                            <p class="text-color-default opacity-7"><?= $r->bank; ?>: <?= $r->no_rekening; ?><br><?= $r->atas_nama; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center mb-0 mb-lg-0">
                    <img height="70" src="<?= base_url() ?>template/images/logo-4.png">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center mt-0 mb-4 mb-lg-0">
                    <p>© Copyright 2019. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="<?= base_url() ?>template/home/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/popper/umd/popper.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/common/common.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url() ?>template/home/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url() ?>template/home/js/views/view.contact.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url() ?>template/home/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() ?>template/home/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url() ?>template/home/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url() ?>template/home/js/theme.init.js"></script>




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


</body>

</html>