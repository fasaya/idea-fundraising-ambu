<section role="main" class="content-body">
    <header class="page-header">
        <h2>Setting</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Setting</span></li>
                <li><span>Lainnya</span></li>
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

                    <h2 class="card-title">Gambar Header</h2>
                    <p class="mb-0">Ukuran gambar yang disarankan 1920x725px. Gambar Header tampil pada halaman Tentang, Visi dan Misi, AD/RT, Kegiatan, dan Struktur Organisasi</p>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_1'); ?>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/lainnya/a" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
                                <div class="col-sm-6">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fas fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Change</span>
                                                <span class="fileupload-new">Select file</span>
                                                <input type="file" name="gambar" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('lain_header'); ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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

                    <h2 class="card-title">Keterangan Donasi</h2>
                    <p class="mb-0">Tampil pada halaman Donasi. Ukuran gambar yang disarankan 1200x500px.</p>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_2'); ?>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/lainnya/b" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Judul</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Judul" class="form-control form-control-lg py-3 text-3" name="judul" value="<?= $this->Helper->isi_web('lain_donasi1') ?>">
                                    <?= form_error('judul', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Keterangan" class="form-control form-control-lg py-3 text-3" name="keterangan" value="<?= $this->Helper->isi_web('lain_donasi2') ?>">
                                    <?= form_error('keterangan', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
                                <div class="col-sm-6">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="fas fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileupload-exists">Change</span>
                                                <span class="fileupload-new">Select file</span>
                                                <input type="file" name="gambar" />
                                            </span>
                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('lain_donasi_img') ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
</section>