<section role="main" class="content-body">
    <header class="page-header">
        <h2>Donasi (Di konfirmasi)</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Donasi</span></li>
                <li><span>Di konfirmasi</span></li>
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

                    <h2 class="card-title">Add Donasi</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message_add_donatur') ?>
                    <form class="" action="<?= base_url() ?>adminpanel/tambahonasibaru" enctype="multipart/form-data" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Nama Lengkap</label>
                            <div class="col-sm-7">
                                <input type="text" placeholder="Nama Lengkap" class="form-control form-control-lg py-3 text-3" name="name" id="name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">No. Handphone</label>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            +62
                                        </span>
                                    </span>
                                    <input type="text" name="phone" class="form-control" placeholder="No. Handphone Donatur" value="<?= set_value('amount'); ?>" />
                                </div>
                                <?= form_error('phone', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">E-mail</label>
                            <div class="col-sm-5">
                                <input type="text" placeholder="E-mail" class="form-control form-control-lg py-3 text-3" name="email" id="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Provinsi</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="provinsi">
                                    <option value="" selected>--- Pilih Provinsi ---</option>
                                    <?php foreach ($provinsi as $r) { ?>
                                        <option value="<?= $r->id; ?>"><?= $r->name; ?></option>
                                    <?php
                                    } ?>
                                </select>
                                <?= form_error('provinsi', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Jumlah Donasi</label>
                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            Rp
                                        </span>
                                    </span>
                                    <input type="number" name="amount" min="20000" class="form-control form-control-lg" placeholder="100000" value="<?= set_value('amount'); ?>" />
                                </div>
                                <?= form_error('amount', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Bank</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="bank">
                                    <option value="" selected>--- Pilih Bank ---</option>
                                    <?php foreach ($bank as $r) { ?>
                                        <option value="<?= $r->id_bank; ?>"><?= $r->bank; ?></option>
                                    <?php
                                    } ?>
                                </select>
                                <?= form_error('bank', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Keterangan</label>
                            <div class="col-sm-5">
                                <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="3" class="form-control form-control-lg py-3 text-3" name="message" id="message"><?= set_value('message'); ?></textarea>
                                <?= form_error('message', '<p class="text-danger">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Gambar</label>
                            <div class="col-sm-9">
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
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2"></label>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="anonim">
                                        Anonim
                                    </label>
                                </div>
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

                    <h2 class="card-title">Donasi (Di konfirmasi)</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <!-- datatable-tabletools -->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>E-mail</th>
                                <th>Provinsi</th>
                                <th>Jumlah Donasi</th>
                                <th>Tanggal</th>
                                <th>Bank</th>
                                <th>Keterangan</th>
                                <th>Anonim</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($donasi as $r) { ?>
                                <tr>
                                    <td><?= $no; ?>.</td>
                                    <td><?= $r->nama; ?></td>
                                    <td>+62 <?= $r->no_hp; ?></td>
                                    <td><?= $r->email; ?></td>
                                    <td><?= $this->Helper->nama_provinsi($r->provinsi); ?></td>
                                    <td>Rp <?= rupiah($r->jumlah_donasi); ?></td>
                                    <td><?= $r->date; ?></td>
                                    <td><?= $this->Helper->nama_bank($r->bank); ?></td>
                                    <td><?= $r->keterangan; ?></td>
                                    <td class="text-center"><?= $this->Helper->anonim($r->anonim); ?></td>
                                    <td class="text-center"><a href="<?= site_url() ?>adminpanel/editdonasi/<?= $r->id_donasi ?>"><i class="fas fa-edit fa-lg text-dark"></i></a></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>