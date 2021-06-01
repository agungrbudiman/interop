        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pegawai</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li class="active">Data Pegawai</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php 
                            require_once(__DIR__.'/lib/config.php');
                            if (isset($_POST['add'])) {
                                
                            }
                            elseif (isset($_GET['id'])) {
                                
                            }
                            elseif (isset($_POST['edit'])) {
                                
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <a href="data-add" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Add Data</a>
                            <p class="text-muted">Pada halaman ini anda dapat mengelola data pegawai.</p><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Detail</th>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>TTL</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-basic dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars fa-fw" aria-hidden="true"></i><span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="kepangkatan/">Riwayat Kepangkatan</a></li>
                                                        <li><a href="pendidikan/">Riwayat Pendidikan</a></li>
                                                        <li><a href="jabatan/">Riwayat Jabatan</a></li>
                                                        <li><a href="keluarga/">Data Keluarga</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="data-edit/" class="btn btn-warning waves-effect waves-light"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a>
                                                <a href="data/" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->

