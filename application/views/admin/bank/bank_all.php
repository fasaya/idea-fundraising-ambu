<section role="main" class="content-body">
    <header class="page-header">
        <h2>Setting</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Setting</span></li>
                <li><span>Bank</span></li>
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

                    <h2 class="card-title">Bank</h2>
                </header>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bank</th>
                                <th>Atas Nama</th>
                                <th>No. Rekening</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($bank as $r) { ?>
                                <tr>
                                    <td><?= $no; ?>.</td>
                                    <td><?= $r->bank; ?></td>
                                    <td><?= $r->atas_nama; ?></td>
                                    <td><?= $r->no_rekening; ?></td>
                                    <td class="text-center"><a href="<?= site_url() ?>adminpanel/editbank/<?= $r->id_bank ?>"><i class="fas fa-edit fa-lg text-dark"></i></a></td>
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
