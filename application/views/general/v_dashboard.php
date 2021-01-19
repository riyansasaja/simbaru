<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pegawai Aktif</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $this->hitung->countall('tb_data_inti'); ?> Orang</div>
                            <div class="text-muted text-xs"> Pria <?= $this->hitung->countItem('tb_data_inti', 'jenis_kelamin', 'M'); ?> Orang</div>
                            <div class="text-muted text-xs"> Wanita <?= $this->hitung->countItem('tb_data_inti', 'jenis_kelamin', 'F'); ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah PNS JFT</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->hitung->countItem('tb_jabakhir', 'id_jenis_jab', '2'); ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-fw fa-envira fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah PNS JFU</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->hitung->countItem('tb_jabakhir', 'id_jenis_jab', "4"); ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dove fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah PNS Pejabat Struktural</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->hitung->countmore('tb_jabakhir', 'id_eselon', '21,22,31,32,41,42'); ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-earlybirds fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->

        <div class="col-xl-8 col-lg-4" >
            <div class="card shadow mb-4" style="height: 460px;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pegawai per Golongan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="text-muted text-xs">Golongan I</div>
                                        <span class="h5 font-weight-bold text-primary"><?= $this->hitung->countmore('tb_golakhir', 'id_golongan', '11,12,13,14'); ?> Orang</span>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="text-muted text-xs">Golongan II</div>
                                        <span class="h5 font-weight-bold text-primary"><?= $this->hitung->countmore('tb_golakhir', 'id_golongan', '21,22,23,24'); ?> Orang</span>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="text-muted text-xs">Golongan III</div>
                                        <span class="h5 font-weight-bold text-primary"><?= $this->hitung->countmore('tb_golakhir', 'id_golongan', '31,32,33,34'); ?> Orang</span>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="text-muted text-xs">Golongan IV</div>
                                        <span class="h5 font-weight-bold text-primary"><?= $this->hitung->countmore('tb_golakhir', 'id_golongan', '41,42,43,44,45'); ?> Orang</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-4">
            <div class="card flex-fill  shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rekap Pegawai Berdasar Eselon</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Eselon</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">IIa</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "21"); ?> Orang</td>
                            </tr>
                            <tr>
                                <th scope="row">IIb</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "22"); ?> Orang</td>
                            </tr>
                            <tr>
                                <th scope="row">IIIa</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "31"); ?> Orang</td>
                            </tr>
                            <tr>
                                <th scope="row">IIIb</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "32"); ?> Orang</td>
                            </tr>
                            <tr>
                                <th scope="row">IVa</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "41"); ?> Orang</td>
                            </tr>
                            <tr>
                                <th scope="row">IVb</th>
                                <td><?= $this->hitung->countItem('tb_jabakhir', 'id_eselon', "42"); ?> Orang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <!-- <div class="col-lg-6 mb-4"> -->

            <!-- Project Card Example -->

            <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pegawai Berdasarkan Pendidikan</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div> -->

            <!-- Color System -->


        <!-- </div> -->

        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pegawai Berdasarkan Agama</h6>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Agama</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-primary">Islam</td>
                                <td><?= $this->hitung->countItem('tb_data_inti', 'agama_id', "1"); ?> </td>
                            </tr>
                            <tr>
                                <td class="text-primary">Kristen</td>
                                <td><?= $this->hitung->countItem('tb_data_inti', 'agama_id', "2"); ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Katholik</td>
                                <td><?= $this->hitung->countItem('tb_data_inti', 'agama_id', "3"); ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Hindu</td>
                                <td><?= $this->hitung->countItem('tb_data_inti', 'agama_id', "4"); ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Budha</td>
                                <td><?= $this->hitung->countItem('tb_data_inti', 'agama_id', "5"); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->