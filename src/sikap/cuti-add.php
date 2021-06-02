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
                    <li><a href="cuti">Cuti</a></li>
                    <li class="active">Pengajuan Cuti</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Pengajuan Cuti</h3><br>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="cuti-add">
                                <div class="form-group">
                                    <label>Jenis Cuti</label>
                                    <div class="input-group">
                                        <select name="jenis_cuti" class="form-control">
                                            <?php
                                            $sql = "SELECT * FROM jenis_cuti ORDER BY id DESC";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch()) {
                                                echo "<option value=" . $row['id'] . ">" . $row['value'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <span class="input-group-btn"> <button type="button" class="glyphicon glyphicon-plus btn btn-default" aria-label="Left Align"></button></span>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label>Durasi Cuti</label>
                                    <div class="input-group">
                                        <input type="number" name="durasi" class="form-control" aria-describedby="basic-addon2" value="" placeholder="1">
                                        <span class="input-group-addon" id="basic-addon2">hari</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mulai Cuti</label>
                                    <div class="input-group">
                                        <input type="date" name="cuti_start" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Akhir Cuti</label>
                                    <div class="input-group">
                                        <input type="date" name="cuti_end" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                        <textarea rows="5" name="alamat" class="form-control" value="" placeholder="Alamat lengkap" style="min-width: 100%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                        <textarea rows="5" name="keterangan" class="form-control" value="" placeholder="Keterangan tambahan jika ada" style="min-width: 100%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File Pendukung</label>
                                    <input type="file" id="exampleInputFile">
                                </div>                              
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="cuti" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $us_id = $_SESSION['id'];
    $jenis_cuti = $_POST['jenis_cuti'];
    $durasi = $_POST['durasi'];
    $cuti_start = $_POST['cuti_start'];
    $cuti_end = $_POST['cuti_end'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO cuti VALUES('0','$us_id','$jenis_cuti','0','$durasi','$cuti_start','$cuti_end','$alamat','$keterangan')";
    $query = $conn->query($sql);
    if($query === TRUE) {

    }
    else {

    }
}
?>