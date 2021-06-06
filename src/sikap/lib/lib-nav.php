        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <?php 

					          require_once(__DIR__.'/config.php');

                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM user JOIN access_control USING(ac_id) WHERE us_id='$id'";
                    $query = $conn->query($sql);
                    $data = $query->fetch(PDO::FETCH_OBJ);
                ?>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;"><a href="index"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a></li>
                    <li><a href="kehadiran"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i> Kehadiran</a></li>
                    <li><a href="izin"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i> Perizinan</a></li>
                    <li><a href="cuti"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i> Cuti</a></li>
                    <li><a href="laporan"><i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i> Laporan</a></li>
                </ul>
            </div>
        </div>