        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Riwayat Jabatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li class="active">Riwayat Jabatan</li>
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
                            <a href="jabatan-add" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Add</a>
                            <p class="text-muted">Pada halaman ini anda dapat mengelola data riwayat jabatan.</p><br>
							
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Jenis Instansi</th>
                                            <th>Eselon</th>
                                            <th>Nama Jabatan</th>
                                            <th>Nama Unit</th>
                                            <th>Status Jabatan</th>
                                            <th>TMT Golongan</th>
                                            <th>Nomor SK Pengangkatan</th>
                                            <th>Tanggal SK Pengangkatan</th>
                                            <th>TMT Pengangkatan</th>
                                            <th>Aktif Jabatan</th>
                                            <th>Nomor SK Pemberhentian</th>
											<th>Tanggal SK Pemberhentian</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jenis Instansi</td>
                                            <td>Eselon</td>
                                            <td>Nama Jabatan</td>
                                            <td>Nama Unit</td>
                                            <td>Status Jabatan</td>
                                            <td>TMT Golongan</td>
                                            <td>Nomor SK Pengangkatan</td>
                                            <td>Tanggal SK Pengangkatan</td>
                                            <td>TMT Pengangkatan</td>
                                            <td>Aktif</td>
                                            <td>Nomor SK Pemberhentian</td>
											<td>Tanggal SK Pemberhentian</td>
                                            <td>
                                                <a href="jabatan-edit" class="btn btn-warning waves-effect waves-light"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a>
                                                <a href="jabatan" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>  
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

