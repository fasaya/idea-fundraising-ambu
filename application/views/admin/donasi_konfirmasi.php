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

                    <h2 class="card-title">Basic with Table Tools</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
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
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
