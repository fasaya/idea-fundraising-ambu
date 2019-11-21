<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Halaman</span></li>
                <li><span>Home</span></li>
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

                    <h2 class="card-title">Keterangan Header</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_4a') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/halamanhome/4a" method="post">

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Title 1</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Title 1" class="form-control form-control-lg py-3 text-3" name="title1a" id="name" value="<?= $this->Helper->isi_web('home_4_title1a'); ?>">
                                <?= form_error('title1a', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Sub Title 1</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Sub Title 1" class="form-control form-control-lg py-3 text-3" name="title1b" id="name" value="<?= $this->Helper->isi_web('home_4_title1b'); ?>">
                                <?= form_error('title1b', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan 1</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Keterangan 1" class="form-control form-control-lg py-3 text-3" name="title1c" id="name" value="<?= $this->Helper->isi_web('home_4_title1c'); ?>">
                                <?= form_error('title1c', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Title 2 (Max. 20 karakter)</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Title 2" class="form-control form-control-lg py-3 text-3" name="title2a" id="name" value="<?= $this->Helper->isi_web('home_4_title2a'); ?>">
                                <?= form_error('title2a', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Sub Title 2</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Sub Title 2" class="form-control form-control-lg py-3 text-3" name="title2b" id="name" value="<?= $this->Helper->isi_web('home_4_title2b'); ?>">
                                <?= form_error('title2b', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan 2</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Keterangan 2" class="form-control form-control-lg py-3 text-3" name="title2c" id="name" value="<?= $this->Helper->isi_web('home_4_title2c'); ?>">
                                <?= form_error('title2c', '<p class="text-danger mb-0">', '</p>'); ?>
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

                    <h2 class="card-title">Gambar Header</h2>
                    <p class="mb-0">Ukuran gambar yang disarankan 1920x725px</p>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_4b'); ?>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/4b1" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar Header 1</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_4_img1'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 1</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/4b2" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar Header 2</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_4_img2'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 2</button>
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

                    <h2 class="card-title">Keterangan 1</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_1') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/halamanhome/1" enctype="multipart/form-data" method="post">

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
                            <div class="col-sm-4">
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
                                <p class="mb-0">Ukuran gambar yang disarankan 400x248px</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_1_img'); ?></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Judul</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Judul tebal" class="form-control form-control-lg py-3 text-3" name="judul1" id="name" value="<?= $this->Helper->isi_web('home_1_judul1'); ?>">
                                <?= form_error('judul1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" placeholder="lanjutan judul" class="form-control form-control-lg py-3 text-3" name="judul2" id="name" value="<?= $this->Helper->isi_web('home_1_judul2'); ?>">
                                <?= form_error('judul2', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea maxlength="5000" placeholder="Keterangan" rows="5" class="form-control form-control-lg py-3 text-3" name="keterangan1" id="message"><?= $this->Helper->isi_web('home_1_isi1'); ?></textarea>
                                <?= form_error('keterangan1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Sub Keterangan</label>
                            <div class="col-sm-9">
                                <textarea maxlength="5000" placeholder="Sub Keterangan" rows="5" class="form-control form-control-lg py-3 text-3" name="keterangan2" id="message"><?= $this->Helper->isi_web('home_1_isi2'); ?></textarea>
                                <?= form_error('keterangan2', '<p class="text-danger mb-0">', '</p>'); ?>
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

                    <h2 class="card-title">Keterangan 2</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_2') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/halamanhome/2" enctype="multipart/form-data" method="post">

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
                            <div class="col-sm-4">
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
                                <p class="mb-0">Ukuran gambar yang disarankan 400x248px</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_2_img'); ?></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Judul</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Judul tebal" class="form-control form-control-lg py-3 text-3" name="judul1" id="name" value="<?= $this->Helper->isi_web('home_2_judul1'); ?>">
                                <?= form_error('judul1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" placeholder="lanjutan judul" class="form-control form-control-lg py-3 text-3" name="judul2" id="name" value="<?= $this->Helper->isi_web('home_2_judul2'); ?>">
                                <?= form_error('judul2', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea maxlength="5000" placeholder="Keterangan" rows="5" class="form-control form-control-lg py-3 text-3" name="keterangan1" id="message"><?= $this->Helper->isi_web('home_2_isi1'); ?></textarea>
                                <?= form_error('keterangan1', '<p class="text-danger mb-0">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Sub Keterangan</label>
                            <div class="col-sm-9">
                                <textarea maxlength="5000" placeholder="Sub Keterangan" rows="5" class="form-control form-control-lg py-3 text-3" name="keterangan2" id="message"><?= $this->Helper->isi_web('home_2_isi2'); ?></textarea>
                                <?= form_error('keterangan2', '<p class="text-danger mb-0">', '</p>'); ?>
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

                    <h2 class="card-title">Gambar Kegiatan</h2>
                    <p class="mb-0">Ukuran gambar yang disarankan 1000x1000px</p>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_3'); ?>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/3a" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar 1</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_3_gbr3a'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 1</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/3b" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar 2</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_3_gbr3b'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 2</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/3c" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar 3</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_3_gbr3c'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 3</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/3d" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar 4</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_3_gbr3d'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 4</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <form class="" action="<?= base_url() ?>adminpanel/halamanhome/3e" enctype="multipart/form-data" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-sm-right pt-2">Gambar 5</label>
                                <div class="col-sm-5">
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
                                    <p class="mb-0 text-danger"><?= $this->Helper->isi_web('home_3_gbr3e'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="mb-1 mt-1 mr-1 btn btn-primary">Submit Gambar 5</button>
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