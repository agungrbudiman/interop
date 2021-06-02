        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kepangkatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li><a href="kepangkatan">Kepangkatan</a></li>
                            <li class="active">Edit Kepangkatan</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Edit Kepangkatan</h3><br>
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
                                            <label>Jenis Kepangkatan</label>
                                            <input type="text" name="jenis_kepangkatan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor SK</label>
                                            <input type="text" name="nomor_sk" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Oleh</label>
                                            <input type="text" name="oleh" class="form-control">
                                        </div>     
                                        <div class="form-group">
                                            <label class="control-label" for="tanggal_sk">Tanggal SK</label>
                                            <input class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select class="form-control" name="pendidikan">
                                               <option value='SD'>SD</option>
                                               <option value='SMP'>SMP</option>
                                               <option value='SMA'>SMA</option>
                                               <option value='D I'>D I</option>
                                               <option value='D II'>D II</option>
                                               <option value='D III'>D III</option>
                                               <option value='D IV'>D IV</option>
                                               <option value='S1'>S1</option>
											   <option value='S2'>S2</option>
											   <option value='S3'>S3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan</label>
                                            <select class="form-control" name="golongan">
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
                                            <label>TMT Golongan</label>
                                            <input type="text" name="tmt_golongan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Masa Kerja</label>
                                            <input type="text" name="tahun_masa_kerja" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Bulan Masa Kerja</label>
                                            <input type="text" name="bulan_masa_kerja" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor BKN</label>
                                            <input type="text" name="nomor_bkn" class="form-control">
                                        </div>    
                                        <div class="form-group">
                                            <label class="control-label" for="tanggal_bkn">Tanggal BKN</label>
                                            <input class="form-control" id="tanggal_bkn" name="tanggal_bkn" placeholder="MM/DD/YYY" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Gaji</label>
                                            <input type="text" name="gaji" class="form-control">
                                        </div>      
										
                                        <button type="submit" name="kepangkatan-edit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <a href="kepangkatan" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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