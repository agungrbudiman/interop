        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Riwayat Jabatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li><a href="jabatan">Riwayat Jabatan</a></li>
                            <li class="active">Add Riwayat Jabatan</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Add Riwayat Jabatan</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="data">
                                        <div class="form-group">
                                            <label>Jenis Instansi</label>
                                            <select class="form-control" name="jenis_instansi">
                                               <option value='Kemenko Maritim'>Kemenko Maritim</option>
                                               <option value='Eksternal Kemenko Maritim'>Eksternal Kemenko Maritim</option>
											 </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Eselon</label>
                                            <select class="form-control" name="eselon">
											   <option value='I.a'>I.a</option>
											   <option value='I.b'>I.b</option>
											   <option value='II.a'>II.a</option>
											   <option value='II.b'>II.b</option>
											   <option value='III.a'>III.a</option>
											   <option value='III.b'>III.b</option>
											   <option value='IV.a'>IV.a</option>
											   <option value='IV.b'>IV.b</option>
											   <option value='V.a'>V.a</option>
											 </select>
                                        </div>    
                                        <div class="form-group">
                                            <label>Nama Jabatan</label>
                                            <input type="text" name="nama_jabatan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Unit</label>
                                            <input type="text" name="nama_unit" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Jabatan</label><br>
                                            <label class="radio-inline"><input type="radio" name="status_jabatan" value="Definitif">Definitif</label>
                                            <label class="radio-inline"><input type="radio" name="status_jabatan" value="Pelaksana Tugas">Pelaksana Tugas</label>
                                        </div>   
                                        <div class="form-group">
                                            <label class="control-label" for="tmt_golongan">TMT Golongan</label>
                                            <input class="form-control" id="tmt_golongan" name="tmt_golongan" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor SK Pengangkatan</label>
                                            <input type="text" name="no_sk_pengangkatan" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label class="control-label" for="tgl_sk_pengangkatan">Tanggal SK Pengangkatan</label>
                                            <input class="form-control" id="tgl_sk_pengangkatan" name="tgl_sk_pengangkatan" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
										<div class="form-group">
                                            <label class="control-label" for="tmt_pengangkatan">TMT Pengangkatan</label>
                                            <input class="form-control" id="tmt_pengangkatan" name="tmt_pengangkatan" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Aktif Jabatan</label>
                                            <label class="radio-inline"><input type="radio" name="aktif_jabatan" value="Aktif">Aktif</label>
                                            <label class="radio-inline"><input type="radio" name="aktif_jabatan" value="Non Aktif">Non Aktif</label>
                                        </div>										
										<div class="form-group">
                                            <label class="control-label" for="tgl_sk_pemberhentian">Tanggal SK Pemberhentian</label>
                                            <input class="form-control" id="tgl_sk_pemberhentian" name="tgl_sk_pemberhentian" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
										<div class="form-group">
                                            <label class="control-label" for="tmt_pemberhentian">TMT Pemberhentian</label>
                                            <input class="form-control" id="tmt_pemberhentian" name="tmt_pemberhentian" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
                                        <button type="submit" name="jabatan-add" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <a href="jabatan" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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

        <script>
            $(document).ready(function(){
                var date_input=$('input[name="tanggal-lahir"]');
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'dd/mm/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>

