        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kepangkatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li class="active">Kepangkatan</li>
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
                            <h3 class="box-title m-b-0">Data Pegawai</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
									<div>
										<label>Nama</label>
										<input type="text" name="nama" class="form-control" value="NAMA" readonly="true">
									</div>
									<div class="form-group">
										<label>NIP</label>
										<input type="text" name="nip" class="form-control" value="193874630148720721" readonly="true">
									</div>
									<div class="form-group">
										<label>Status Kepegawaian</label>
										<input type="text" name="status_kepegawaian" class="form-control" value="Aktif" readonly="true">
									</div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <a href="kepangkatan-add" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Add</a>
                            <p class="text-muted">Pada halaman ini anda dapat mengelola data kepangkatan.</p><br>
							
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Jenis Kepangkatan</th>
                                            <th>Nomor SK</th>
                                            <th>Oleh</th>
                                            <th>Tanggal SK</th>
                                            <th>Pendidikan</th>
                                            <th>Golongan</th>
                                            <th>TMT Golongan</th>
                                            <th>Tahun Masa Kerja</th>
                                            <th>Bulan Masa Kerja</th>
                                            <th>Nomor BKN</th>
                                            <th>Tanggal BKN</th>
                                            <th>Gaji</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jenis Kepangkatan</td>
                                            <td>Nomor SK</td>
                                            <td>Oleh</td>
                                            <td>Tanggal SK</td>
                                            <td>Pendidikan</td>
                                            <td>Golongan</td>
                                            <td>TMT Golongan</td>
                                            <td>Tahun Masa Kerja</td>
                                            <td>Bulan Masa Kerja</td>
                                            <td>Nomor BKN</td>
                                            <td>Tanggal BKN</td>
                                            <td>Gaji</td>
                                            <td>
                                                <a href="kepangkatan-edit" class="btn btn-warning waves-effect waves-light"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a>
                                                <a href="kepangkatan" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>  
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

