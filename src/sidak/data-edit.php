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
                            <li><a href="data">Data</a></li>
                            <li class="active">Edit Data</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Edit Data</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php 
                                        require_once(__DIR__.'/lib/config.php');
                                        if (isset($_GET['id'])) {
                                            $id = $_GET['id'];
                                            $sql = "SELECT * FROM data WHERE dt_id='$id'";
                                            $query = $conn->query($sql);
                                            $edit = $query->fetch(PDO::FETCH_OBJ);
                                        }
                                    ?>
                                    <form method="post" action="data">
                                        <input type="hidden" name="dt_id" value="<?php echo $edit->dt_id;?>">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $edit->dt_name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>IPK (3.00-4.00)</label>
                                            <input type="number" name="ipk" step="0.01" min="3.00" max="4.00" class="form-control" value="<?php echo $edit->dt_ipk; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nilai Karya Tulis Ilmiah (0-100)</label>
                                            <input type="number" name="kti" step="1" min="0" max="100" class="form-control" value="<?php echo $edit->dt_kti; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Skor TOEFL (420-677)</label>
                                            <input type="number" name="toefl" step="1" min="420" max="677" class="form-control" value="<?php echo $edit->dt_toefl; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Total Prestasi (0-130)</label>
                                            <input type="number" name="prestasi" step="1" min="0" max="130" class="form-control" value="<?php echo $edit->dt_prestasi; ?>">
                                        </div>
                                        <button type="submit" name="edit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <a href="data" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                    </form>
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