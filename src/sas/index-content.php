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
                            <h3>Hello, <?php echo $data->us_username;?>! &nbsp;Selamat datang di Sistem Aplikasi Satker.</h3>
                            <div class="comment-center p-t-10">
                                <div class="comment-body b-none">
                                    <div class="mail-contnet">
                                        <h5>Perbaruan Data Kehadiran</h5>
                                        <span class="time">13 Juni 2021 / 10:20 AM</span> 
                                        <span class="label label-rouded label-warning">PENDING</span>
                                        <br/>
                                        <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> 
                                        <a href="" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a>
                                        <a href="" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->