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
                            <li class="active">Data</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php 
                            define(LIB_DIR, './lib/');
                            require_once(LIB_DIR . 'config.php');

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
                            <a href="data-add" class="btn btn-success pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i> Add Data</a>
                            <p class="text-muted">Pada halaman ini anda dapat mengelola data.</p><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Kehadiran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="data-edit/" class="btn btn-warning waves-effect waves-light"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i> Edit</a>
                                                <a href="data/" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash fa-fw" aria-hidden="true"></i> Delete</a>  
                                            </td>
                                        </tr>
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

