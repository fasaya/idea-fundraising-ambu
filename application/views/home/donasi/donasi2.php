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
                    <div class="process-step-circle" style="background-color: #30C57A;">
                        <strong class="process-step-circle-content" style="color: #fff;">2</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-4 font-weight-bold">Summary</h4>
                    </div>
                </div>
                <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">3</strong>
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
            <h4 class="mb-4">Informasi Pembayaran</h4>
            <?= $this->session->flashdata('message') ?>
            <div class="card border-0 bg-color-grey">
                <div class="card-body">
                    <div class="mb-4">
                        <i class="icon-user-following icons text-color-primary text-8"></i>
                        <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">Informasi Donatur</h4>
                        <p class="card-text m-0">Nama Donatur: <strong><?= $data_donasi['nama']; ?></strong></p>
                        <p class="card-text m-0">No. Handphone: <strong><?= $data_donasi['no_hp']; ?></strong></p>
                        <p class="card-text m-0">Email: <strong><?= $data_donasi['email']; ?></strong></p>
                        <p class="card-text m-0">Provinsi: <strong><?= $this->Helper->nama_provinsi($data_donasi['provinsi']); ?></strong></p>
                    </div>
                    <div class="mb-4">
                        <i class="icon-heart icons text-color-primary text-8"></i>
                        <h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">Informasi Pembayaran</h4>
                        <p class="card-text">Jumlah Donasi:</p>
                        <h3 class="mt-0">Rp <?= rupiah($data_donasi['jumlah_donasi']); ?></h3>
                    </div>
                    <div class="mb-4">
                        <i class="icon-credit-card icons text-color-primary text-8"></i>
                        <h4 class="card-title mt-2 mb-2 text-4 font-weight-bold">Transfer Bank</h4>
                        <form action="<?= base_url() ?>donasi/summary/<?= $kode; ?>" method="post">
                            <?php foreach ($bank as $r) { ?>
                                <div class="radio mb-3">
                                    <label class="row">
                                        <div class="col-sm-1"><input type="radio" name="bank" value="<?= $r->id_bank; ?>"></div>
                                        <div class="col-sm-4"><img src="<?= base_url() ?>template/images/bank/<?= $r->img; ?>" alt="<?= $r->bank; ?>" style="width:120px;"></div>
                                        <div class="col-sm-7">
                                            <h5 class="text-color-default opacity-7"><?= $r->bank; ?>: <?= $r->no_rekening; ?><br><?= $r->atas_nama; ?></h5>
                                        </div>
                                    </label>
                                </div>
                            <?php } ?>

                            <?= form_error('bank', '<p class="text-danger">', '</p>'); ?>

                            <div class="form-row float-right">
                                <div class="form-group col">
                                    <button type="submit" class="btn btn-outline btn-dark text-2 font-weight-semibold text-uppercase">Selanjutnya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>