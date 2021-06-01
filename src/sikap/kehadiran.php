        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================test================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kehadiran</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li class="active">Kehadiran</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php 
							
							require_once(__DIR__.'/lib/config.php');
							
							$us_id = $_SESSION['id'];
							
							$sql = "SELECT * FROM kehadiran WHERE us_id='$us_id' ORDER BY id_kehadiran DESC";
							$query = $conn->query($sql);
							$check = $query->rowCount();
							if ($check >= 1) 
							{
								$data = $query->fetch(PDO::FETCH_OBJ);
							} 
							else 
							{
							}


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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Masuk</th>
                                            <th>Keluar</th>
                                            <th>Ishoma</th>
                                            <th>Kekurangan</th>
											<th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php while($check>0) { ?>
										<tr>
											<td><?php echo $data->tanggal; ?></td>
											<td><?php echo $data->jam_masuk; ?></td>
											<td><?php echo $data->jam_keluar; ?></td>
											<td><?php echo $data->ishoma; ?></td>
											<td><?php echo $data->kekurangan; ?></td>
											<td><?php echo $data->keterangan; ?></td>
										</tr>
									<?php 
										$check--;
										} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->

