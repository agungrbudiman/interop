<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="tambahkategori">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div id="alert-tambahkategori" class="alert alert-success hidden" role="alert">
                <strong>Berhasil!</strong>
            </div>
            <label>Kategori Cuti</label>
            <input id="inputkategori" type="text" name="kategori" class="form-control" value="" placeholder="Cuti tahunan">
        </div>
        <div class="modal-footer">
            <a href="cuti-add"><button id="btn-return" type="button" class="btn btn-secondary hidden">Return</button></a>
            <button id="btn-close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="btn-tambahkategori" type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="statuspengajuan">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Berhasil!</h2>
        </div>
      <div class="modal-body">
        Pengajuan cuti anda berhasil disimpan
      </div>
      <div class="modal-footer">
        <a href="cuti"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </div>
  </div>
</div>
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
                                <div class="form-group">
                                    <label>Kategori Cuti</label>
                                    <div class="input-group">
                                        <select id="jenis_cuti" name="jenis_cuti" class="form-control">
                                            <?php
                                            $sql = "SELECT * FROM jenis_cuti ORDER BY id DESC";
                                            $result = $conn->query($sql);
                                            while ($row = $result->fetch()) {
                                                echo "<option value=" . $row['id'] . ">" . $row['value'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <button type="button" class="btn btn-link" aria-label="Left Align" style="padding-left: 0;" data-toggle="modal" data-target="#tambahkategori">tambah kategori</button>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label>Durasi Cuti</label>
                                    <div class="input-group">
                                        <input id="durasi" type="number" name="durasi" class="form-control" value="" placeholder="1">
                                        <span class="input-group-addon" id="basic-addon2">hari</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mulai Cuti</label>
                                    <div class="input-group">
                                        <input id="cuti_start" type="date" name="cuti_start" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Akhir Cuti</label>
                                    <div class="input-group">
                                        <input id="cuti_end" type="date" name="cuti_end" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                        <textarea id="alamat" rows="5" name="alamat" class="form-control" value="" placeholder="Jl.Garuda No 17" style="min-width: 100%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                        <textarea id="keterangan" rows="5" name="keterangan" class="form-control" value="" placeholder="Keterangan tambahan jika ada" style="min-width: 100%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File Pendukung</label>
                                    <input type="file" id="exampleInputFile">
                                </div>                              
                                <button id="btn-pengajuan" type="button" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="cuti" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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
    $kategori = $_POST['kategori'];

    if (empty($kategori)) {
        $sql = "INSERT INTO cuti VALUES('0','$us_id','$jenis_cuti','0','$durasi','$cuti_start','$cuti_end','$alamat','$keterangan')";
    }
    else {
        $sql = "INSERT INTO jenis_cuti VALUES('0','$kategori')";
    }
    $query = $conn->query($sql);
    if ($query == FALSE) {

    }
}
?>
<script>
$( document ).ready(function() {
    $("#btn-tambahkategori").click(function(){
        $.post("cuti-add",
          {
            kategori: $("#inputkategori").val()
          },
        function(data, status){
            $("#alert-tambahkategori").removeClass("hidden");
            $("#btn-tambahkategori").prop("disabled", true);
            $("#btn-close").addClass("hidden");
            $("#btn-return").removeClass("hidden");
        });
    });
    $("#btn-pengajuan").click(function(){
        $.post("cuti-add",
          {
            jenis_cuti: $("#jenis_cuti").val(),
            durasi: $("#durasi").val(),
            cuti_start: $("#cuti_start").val(),
            cuti_end: $("#cuti_end").val(),
            alamat: $("#alamat").val(),
            keterangan: $("#keterangan").val()
          },
        function(data, status){
            $("#statuspengajuan").modal('show');
        });
    });
});
</script>