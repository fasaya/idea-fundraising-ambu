<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Setting</span></li>
                <li><span>Motto</span></li>
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

                    <h2 class="card-title">Motto</h2>
                    <p class="mb-0">Motto tampil pada halaman Home dan Donasi</p>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_1') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/motto" method="post">
                        <div class="form-group">
                            <label class="control-label text-sm-left pt-2">Motto</label>
                            <input type="text" placeholder="Font Biasa" class="form-control form-control-lg py-3 text-3" name="isi1" value="<?= $this->Helper->isi_web('motto_1_a'); ?>">
                            <?= form_error('isi1', '<p class="text-danger mb-0">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Font Bold" class="form-control form-control-lg py-3 text-3" name="isi2" value="<?= $this->Helper->isi_web('motto_1_b'); ?>">
                            <?= form_error('isi2', '<p class="text-danger mb-0">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Font Biasa" class="form-control form-control-lg py-3 text-3" name="isi3" value="<?= $this->Helper->isi_web('motto_1_c'); ?>">
                            <?= form_error('isi3', '<p class="text-danger mb-0">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Font Bold" class="form-control form-control-lg py-3 text-3" name="isi4" value="<?= $this->Helper->isi_web('motto_1_d'); ?>">
                            <?= form_error('isi4', '<p class="text-danger mb-0">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Font Biasa" class="form-control form-control-lg py-3 text-3" name="isi5" value="<?= $this->Helper->isi_web('motto_1_e'); ?>">
                            <?= form_error('isi5', '<p class="text-danger mb-0">', '</p>'); ?>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 control-label text-sm-left pt-2">Sub</label>
                            <div class="col-sm-12">
                                <textarea maxlength="5000" placeholder="Sub Keterangan" rows="3" class="form-control form-control-lg py-3 text-3" name="sub"><?= $this->Helper->isi_web('motto_1_sub'); ?></textarea>
                                <?= form_error('sub', '<p class="text-danger mb-0">', '</p>'); ?>
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