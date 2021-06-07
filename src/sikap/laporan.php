<?php
  $stmt = $conn->prepare("SELECT pe_nama, kehadiran.* FROM kehadiran JOIN pegawai on kehadiran.pe_id=pegawai.pe_id ORDER BY kehadiran.id");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
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
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                          <th class="align-middle" rowspan="2">Nama</th>
                                          <th class="align-middle" rowspan="2">Jumlah Hadir</th>
                                          <th class="text-center" colspan="5">Jumlah Tidak Hadir</th>
                                          <th class="text-center" colspan="4">Jam Kerja</th>
                                          <th class="align-middle" rowspan="2">Kinerja</th>
                                        </tr>
                                        <tr>
                                          <td>Cuti</td>
                                          <td>Izin</td>
                                          <td>Sakit</td>
                                          <td>Tugas</td>
                                          <td>Absen</td>
                                          <td>Total</td>
                                          <td>Selisih</td>
                                          <td>Lembur</td>
                                          <td>Persentasi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row) { ?>
                                          <tr>
                                            <td><?php echo $row['pe_nama']; ?></td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>  
                                            <td>6</td>  
                                            <td>7</td>  
                                            <td>8</td>  
                                            <td>9</td>  
                                            <td>10</td>  
                                            <td>11</td>  
                                          </tr>
                                        <?php } ?>
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

