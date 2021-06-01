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
                            <li><a href="data">Pengajuan cuti</a></li>
                            <li class="active">Add Data</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Pengajuan Cuti</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="data">
                                        <div class="form-group">
                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Jenis Cuti
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Cuti alasan penting</a></li>
                                                <li><a href="#">Cuti mengurus warisan</a></li>
                                                <li><a href="#">Cuti tahunan</a></li>
                                              </ul>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label>Saldo Cuti</label>
                                            <div class="input-group">
                                                <input type="number" name="saldo-cuti" class="form-control" aria-describedby="basic-addon2" value="">
                                                <span class="input-group-addon" id="basic-addon2">hari</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lama Cuti</label>
                                            <div class="input-group">
                                                <input type="number" name="saldo-cuti" class="form-control" aria-describedby="basic-addon2" value="">
                                                <span class="input-group-addon" id="basic-addon2">hari</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>Mulai Cuti</label>
                                                        <div class="input-group">
                                                            <input type="date" name="saldo-cuti" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>Akhir Cuti</label>
                                                        <div class="input-group">
                                                            <input type="date" name="saldo-cuti" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                                <textarea rows="5" name="saldo-cuti" class="form-control" value="" placeholder="Text input" style="min-width: 100%"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                                <textarea rows="5" name="saldo-cuti" class="form-control" value="" placeholder="Text input" style="min-width: 100%"></textarea>
                                        </div>                              
                                        <button type="submit" name="add" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
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
