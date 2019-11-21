<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Halaman</span></li>
                <li><span>Tentang</span></li>
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

                    <h2 class="card-title">Keterangan</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_1') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/halamantentang" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Title</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Title" class="form-control form-control-lg py-3 text-3" name="title1" id="name" value="<?= $this->Helper->isi_web('tentang_1_title1'); ?>">
                                <?= form_error('title1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Sub Title</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Sub Title" class="form-control form-control-lg py-3 text-3" name="title2" id="name" value="<?= $this->Helper->isi_web('tentang_1_title2'); ?>">
                                <?= form_error('title2', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Judul</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Font biasa" class="form-control form-control-lg py-3 text-3" name="judul1" id="name" value="<?= $this->Helper->isi_web('tentang_1_judul1'); ?>">
                                <?= form_error('judul1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" placeholder="Font tebal" class="form-control form-control-lg py-3 text-3" name="judul2" id="name" value="<?= $this->Helper->isi_web('tentang_1_judul2'); ?>">
                                <?= form_error('judul2', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea maxlength="5000" placeholder="Keterangan" rows="5" class="form-control form-control-lg py-3 text-3" name="keterangan1" id="message"><?= $this->Helper->isi_web('tentang_1_isi1'); ?></textarea>
                                <?= form_error('keterangan1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Sub Keterangan</label>
                            <div class="col-lg-9">
                                <textarea name="keterangan2" id="summernote" class="summernote" data-plugin-summernote data-plugin-options='{ "height": 300, "codemirror": { "theme": "ambiance" } }'>
                                <?= $this->Helper->isi_web('tentang_1_isi2'); ?>
                                </textarea>
                                <?= form_error('keterangan2', '<p class="text-danger">', '</p>'); ?>
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