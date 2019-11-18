<div class="row justify-content-center mt-4">
    <div class="col-lg-10 text-center">

        <div class="divider divider-primary divider-small divider-small-center mb-3">
            <hr>
        </div>

        <h2 class="mb-0 mt-4 font-weight-semibold">Donasi</h2>
        <!-- <p class="text-4 mb-0 opacity-7">Pellentesque pellentesque eget tempor tellus. </p> -->

        <div class="d-none d-lg-block">
            <div class="row process process-connecting-line my-5">
                <div class="connecting-line appear-animation" data-appear-animation="fadeIn"></div>
                <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">1</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-4 font-weight-bold">Donasi</h4>
                    </div>
                </div>
                <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">2</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-4 font-weight-bold">Summary</h4>
                    </div>
                </div>
                <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                    <div class="process-step-circle" style="background-color: #30C57A;">
                        <strong class="process-step-circle-content" style="color: #fff;">3</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-4 font-weight-bold">Selesai</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
            <i class="fas fa-chevron-down"></i>
        </div>

    </div>
</div>
</div>
</section>

<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-lg-7 py-4">
            <?= $this->session->flashdata('message') ?>
            <div class="card border-0 bg-color-grey">
                <div class="card-body">
                    <h3>Terima kasih telah melakukan donasi untuk program ini.</h3>
                    <h4>Donasi anda sebesar</h4>
                    <h2><strong>Rp <?= rupiah($data_donasi['jumlah_donasi']); ?></strong></h2>
                </div>
            </div>
        </div>