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
            <label>Kategori Izin</label>
            <input id="inputkategori" type="text" name="kategori" class="form-control" value="" placeholder="">
        </div>
        <div class="modal-footer">
            <a href="izin-add"><button id="btn-return" type="button" class="btn btn-secondary hidden">Kembali</button></a>
            <button id="btn-close" type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button id="btn-tambahkategori" type="button" class="btn btn-primary">Simpan</button>
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
        Pengajuan izin anda berhasil disimpan
      </div>
      <div class="modal-footer">
        <a href="izin"><button type="button" class="btn btn-primary">Kembali</button></a>
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
                    <li><a href="izin">Perizinan</a></li>
                    <li class="active">Pengajuan Izin</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Pengajuan Izin</h3><br>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Kategori Izin</label>
                                        <div class="input-group" style="width:100%">
                                            <select id="jenis_izin" name="jenis_izin" class="form-control">
                                                <?php
                                                $sql = "SELECT * FROM jenis_izin ORDER BY id DESC";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch()) {
                                                    echo "<option value=" . $row['id'] . ">" . $row['value'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <button type="button" class="btn btn-link" aria-label="Left Align" style="padding-left: 0;" data-toggle="modal" data-target="#tambahkategori">tambah kategori</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Mulai Izin</label>
                                        <div class="input-group" style="width: 100%;">
                                            <input id="izin_start" type="date" name="izin_start" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Durasi Izin</label>
                                        <div class="input-group">
                                            <input id="durasi" type="number" name="durasi" class="form-control" value="0" placeholder="0">
                                            <span class="input-group-addon">hari</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Akhir Izin</label>
                                        <div class="input-group" style="width: 100%;">
                                            <input id="izin_end" type="date" name="izin_end" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                        <textarea id="keterangan" rows="5" name="keterangan" class="form-control" value="" placeholder="Keterangan tambahan jika ada" style="min-width: 100%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File Pendukung</label>
                                    <input type="file" id="exampleInputFile">
                                </div>                              
                                <button id="btn-pengajuan" type="button" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                                <a href="izin" class="btn btn-inverse waves-effect waves-light">Batal</a>
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
    $jenis_izin = $_POST['jenis_izin'];
    $jenis_izin_val = $_POST['jenis_izin_val'];
    $durasi = $_POST['durasi'];
    $izin_start = $_POST['izin_start'];
    $izin_end = $_POST['izin_end'];
    $keterangan = $_POST['keterangan'];
    $kategori = $_POST['kategori'];

    if (empty($kategori)) {
        $sql = "INSERT INTO izin VALUES('0','$us_id','$jenis_izin','$jenis_izin_val','$durasi','$izin_start','$izin_end','$keterangan')";
    }
    else {
        $sql = "INSERT INTO jenis_izin VALUES('0','$kategori')";
    }
    $query = $conn->query($sql);
    if ($query == FALSE) {

    }
}
?>
<script>
$( document ).ready(function() {
    $("#btn-tambahkategori").click(function(){
        $.post("izin-add",
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
        $.post("izin-add",
          {
            jenis_izin: $("#jenis_izin").val(),
            jenis_izin_val: $("#jenis_izin option:selected").text(),
            durasi: $("#durasi").val(),
            izin_start: $("#izin_start").val(),
            izin_end: $("#izin_end").val(),
            keterangan: $("#keterangan").val()
          },
        function(data, status){
            $("#statuspengajuan").modal('show');
        });
    });
    $("#izin_start,#durasi").change(function(){
        var end_date = addDays($("#izin_start").val(),parseInt($("#durasi").val()));
        result_date = end_date.getFullYear() + '-'
             + ('0' + (end_date.getMonth()+1)).slice(-2) + '-'
             + ('0' + end_date.getDate()).slice(-2);
        $("#izin_end").val(result_date);
        // console.log(end_date.getDate()+'/'+(end_date.getMonth()+1)+'/'+end_date.getFullYear());
    });
    function addDays(date, days) {
      var result = new Date(date);
      result.setDate(result.getDate() + days);
      return result;
    }
});
</script>