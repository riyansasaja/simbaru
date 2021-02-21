<?php

if ($searchresult) :

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Hasil Pencarian Daftar Pegawai</h5>
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">NIP</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">UNIT</th>
                                        <th scope="col">JABATAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($searchresult as $s) : ?>
                                        <tr class="clickable-row" data-href="<?= base_url('general/detail/') . $s['nip'] ?>">

                                            <td scope="row"><?= $s['nip'] ?></td>
                                            <td><?= $s['nama'] ?></td>
                                            <td><?= $s['unor'] ?></td>
                                            <td><?= $s['nama_jabatan'] ?></td>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endif;
?>