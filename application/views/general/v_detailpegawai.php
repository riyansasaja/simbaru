

<div class="container">

    

    <div class="row mx-4">

        <div class="col-4">
            <!-- di sini mo taruh foto -->
            <div class="card">
                <div>
                    <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_LOw4AL.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-uppercase font-weight-bold bg-danger text-light"><?= $detail[0]['gelar_depan'] . " " . $detail[0]['nama'] . " " . $detail[0]['gelar_blk'] ?></li>
                    <li class="list-group-item font-weight-bold bg-info text-light">NIP. <?= $detail[0]['nip']; ?></li>
                </ul>
            </div>
        </div>

        <div class="col-8">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                DATA UMUM
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-sm ">

                                            <tbody>
                                                <?php foreach ($detail as $d) : ?>
                                                    <tr>
                                                        <td class="text-primary">NIP Lama</td>
                                                        <td><?= $d['nip_lama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-primary">NIK</td>
                                                        <td><?= $d['nik'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-primary">Jabatan</td>
                                                        <td><?= $d['nama_jabatan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-primary">Unit Kerja</td>
                                                        <td><?= $d['unor'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-primary">Eselon</td>
                                                        <td><?= $d['id_eselon'] ?></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-sm">

                                            <tbody>
                                                <tr>
                                                    <td class="text-primary">Pangkat/Golongan</td>
                                                    <td><?= $d['pangkat'] ?> , <?= $d['golongan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Masa Kerja</td>
                                                    <td><?= $d['mkg_tahun'] ?> Tahun, <?= $d['mkg_bulan'] ?> Bulan</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Status</td>
                                                    <td><?= $d['kedudukan_hukum_nama'] . " | " . $d['status_cpns_pns'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">TTL</td>
                                                    <td><?= $d['tempat_lahir_nama'] ?>, <?= $d['tgl_lahir'] ?> </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">npwp</td>
                                                    <td><?= $d['npwp_nomor'] ?></td>
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
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                BERKAS SCAN
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <?php
                            $nip = $detail[0]['nip'];
                            $folder = scandir('../docs/'.$nip);
                            ?>

                            <div class="list-group">
                                <?php foreach ($folder as $file) : ?>
                                    <?php if ($file !== "." && $file != ".." && $file != "Thumbs.db") : ?>
                                        <a href="//localhost/docs/<?= $nip."/".$file; ?>" type="button" class="list-group-item list-group-item-action" target="_blank"><?= $file ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                RIWAYAT PANGKAT
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>

                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Gol</th>
                                            <th scope="col">pangkat</th>
                                            <th scope="col">TMT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pangkat as $p) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $p['jenis_kp'] ?></td>
                                                <td><?= $p['golongan'] ?></td>
                                                <td><?= $p['pangkat'] ?></td>
                                                <td><?= $p['tmt_golongan'] ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                            </div>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                RIWAYAT JABATAN
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
    
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Jabatan</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">No. SK</th>
                                                <th scope="col">TMT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($jabatan as $j) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $j['nama_jabatan'] ?></td>
                                                    <td><?= $j['unor'] ?></td>
                                                    <td><?= $j['nomor_sk'] ?></td>
                                                    <td><?= $j['tmt_jabatan'] ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                RIWAYAT PENDIDIKAN
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
    
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tingkat</th>
                                            <th scope="col">Nama Sekolah</th>
                                            <th scope="col">Tahun Lulus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pendidikan as $pend) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $pend['nama_pend'] ?></td>
                                                <td><?= $pend['nama_sekolah'] ?></td>
                                                <td><?= $pend['tahun_lulus'] ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

</div>