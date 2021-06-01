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
                            <li class="active">Add Data</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Add Data</h3><br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="data">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="nip" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat dan Golongan Ruang</label>
                                            <select class="form-control" name="pangkat">
                                               <option value='III A'>III A Penata Muda</option>
                                               <option value='III B'>III B Penata Muda Tingkat I</option>
                                               <option value='III C'>III C Penata</option>
                                               <option value='III D'>III D Penata Tingkat I</option>
                                               <option value='IV A'>IV A Pembina</option>
                                               <option value='IV B'>IV B Pembina Tingkat I</option>
                                               <option value='IV C'>IV C Pembina Utama Muda</option>
                                               <option value='IV D'>IV D Pembina Utama Madya</option>
                                               <option value='IV E'>IV E Pembina Utama</option>
                                            </select>
                                        </div>     
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat-lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" name="tanggal-lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="radio-inline"><input type="radio" name="jenis-kelamin" value="Laki-laki">Laki-laki</label>
                                            <label class="radio-inline"><input type="radio" name="jenis-kelamin" value="Perempuan">Perempuan</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                               <option value='Islam'>Islam</option>
                                               <option value='Kristen'>Kristen</option>
                                               <option value='Katolik'>Katolik</option>
                                               <option value='Hindu'>Hindu</option>
                                               <option value='Buddha'>Buddha</option>
                                               <option value='Konghuchu'>Konghuchu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select class="form-control" name="status">
                                               <option value='Belum Kawin'>Belum Kawin</option>
                                               <option value='Kawin'>Kawin</option>
                                               <option value='Cerai'>Cerai</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>No.HP</label>
                                            <input type="text" name="no-hp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>No BPJS</label>
                                            <input type="text" name="no-bpjs" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div>                           
                                        <div class="form-group">
                                            <label>Hobi</label>
                                            <input type="text" name="hobi" class="form-control">
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

