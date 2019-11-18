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
                    <div class="process-step-circle" style="background-color: #30C57A;">
                        <strong class="process-step-circle-content" style="color: #fff;">1</strong>
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
            <h4 class="mb-4">Informasi Donatur</h4>

            <form class="" action="<?= site_url() ?>donasi/infodonatur" method="post">
                <?= $this->session->flashdata('message') ?>
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Lengkap anda" class="form-control form-control-lg py-3 text-3" name="name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">No. Handphone</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    +62
                                </span>
                            </span>
                            <input type="number" name="phone" min="20000" class="form-control" placeholder="Nomor handphone aktif" value="<?= set_value('phone'); ?>" />
                        </div>
                        <p class="card-text text-default mb-0">Pastikan nomor Anda aktif untuk menerima telfon</p>
                        <?= form_error('phone', '<p class="text-danger">', '</p>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">E-mail</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="E-mail anda" class="form-control form-control-lg py-3 text-3" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">Provinsi</label>
                    <div class="col-sm-9">
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
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp
                                </span>
                            </span>
                            <input type="number" name="amount" min="20000" class="form-control form-control-lg" placeholder="100000" value="<?= set_value('amount'); ?>" />
                        </div>
                        <p class="card-text text-default mb-0">Minimal donasi Rp. 20.000</p>
                        <?= form_error('amount', '<p class="text-danger">', '</p>'); ?>
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" name="">
                                Donasi sebagai anonim
                            </label>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control form-control-lg py-3 text-3" name="message" id="message" required></textarea>
                        </div>
                    </div> -->
                <div class="form-row float-right">
                    <div class="form-group col">
                        <button type="submit" class="btn btn-outline btn-dark text-2 font-weight-semibold text-uppercase px-5 btn-py-3">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>