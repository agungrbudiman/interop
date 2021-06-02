        <?php
            $sql = "SELECT * FROM jenis_cuti ORDER BY id ASC";
            $result = $conn->query($sql);
        ?>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li><a href="cuti">Cuti</a></li>
                            <li class="active">Data Cuti</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Cuti</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>Jenis</th>
                                                    <th>Saldo</th>
                                                    <th>Durasi</th>
                                                    <th>Mulai</th>
                                                    <th>Berakhir</th>
                                                    <th>Alamat</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <a href="cuti-add"><button type="button" class="btn btn-primary">Pengajuan Cuti</button></a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
