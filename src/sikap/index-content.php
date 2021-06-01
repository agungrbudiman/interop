        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Home</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                        </ol>
                    </div>
                </div>
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
                            <h3>Hello, <?php echo $data->us_username;?>! &nbsp;Selamat datang di Sistem Informasi Kehadiran Pegawai.</h3>
                            <p>Melalui sistem ini anda dapat mengelola data kehadiran pegawai.</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->