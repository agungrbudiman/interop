        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        	<?php 
			                    require_once(__DIR__.'/lib/config.php');
                                $id = $_SESSION['id'];
			                    $sql = "SELECT * FROM user JOIN access_control USING(ac_id) WHERE us_id='$id'";
			                    $query = $conn->query($sql);
			                    $data = $query->fetch(PDO::FETCH_OBJ);
			                ?>
                            <h3>Hello, <?php echo $data->us_username;?>! &nbsp;Selamat datang di Gaji Pegawai Pusat.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="white-box"> 
                            <h3>DATA PEGAWAI</h3>
                            <p>Perubahan Data : 3</p>
                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-user"></i></button> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="white-box"> 
                            <h3>RIWAYAT KEPANGKATAN</h3>
                            <p>Perubahan Data : 0</p>
                            <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-institution"></i></button> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="white-box"> 
                            <h3>RIWAYAT JABATAN</h3>
                            <p>Perubahan Data : 0</p>
                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-suitcase"></i></button> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="white-box"> 
                            <h3>RIWAYAT PENDIDIKAN</h3>
                            <p>Perubahan Data : 1</p>
                            <button type="button" class="btn btn-info btn-circle"><i class="fa fa-graduation-cap"></i></button> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="white-box"> 
                            <h3>DATA KELUARGA</h3>
                            <p>Perubahan Data : 2</p>
                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-users"></i></button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->