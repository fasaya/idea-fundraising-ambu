<section role="main" class="content-body">
    <header class="page-header">
        <h2>Donasi (Baru)</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><i class="fas fa-home"></i></li>
                <li><span>Donasi</span></li>
                <li><span>Baru</span></li>
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
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>E-mail</th>
                                <th>Provinsi</th>
                                <th>Jumlah Donasi</th>
                                <th>Tanggal</th>
                                <th>Bank</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($donasi_baru as $r) { ?>
                                <tr>
                                    <td><?= $r->kode; ?></td>
                                    <td><?= $r->nama; ?></td>
                                    <td>+62 <?= $r->no_hp; ?></td>
                                    <td><?= $r->email; ?></td>
                                    <td><?= $this->Helper->nama_provinsi($r->provinsi); ?></td>
                                    <td>Rp <?= rupiah($r->jumlah_donasi); ?></td>
                                    <td><?= $r->date; ?></td>
                                    <td><?= $this->Helper->nama_bank($r->bank); ?></td>
                                    <td class="text-center"><?= $this->Helper->status_donasi_baru($r->status); ?></td>
                                    <td class="text-center"><a onclick="showDataToModal('<?= $r->kode; ?>')" class="modal-basic" href="#modal"><i class="fas fa-edit fa-lg text-dark"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>

<!-- JS -->
<script>
    function showDataToModal(kode) {

        if (kode != '') {
            $.ajax({
                url: "<?= base_url(); ?>adminpanel/fetch_donasi_baru",
                method: "POST",
                data: {
                    kode: kode
                },
                success: function(data) {
                    $('#isiCard').html(data);
                }
            });
        }
    }
</script>