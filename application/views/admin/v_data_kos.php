<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="<?php echo base_url();?>assets/css/custom-styles.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<body>
    <div id="wrapper">
        <?php
        include 'menuatas.php';
        include 'menusamping.php';


        ?>
    
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Data<small>Kos</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Tables</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Kos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kos</th>
                                            <th>Pemilik</th>
                                            <th>Jenis</th>
                                  
                                            <th>Harga</th>
                                    
                                            <th>Kamar Kosong</th>
                                   
                                    
                                            <th>Option</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($kos) {
                                        foreach ($kos as $koss) {
                                            ?><tr><td>
                                                <?php echo $koss->id_kos ?>
                                            </td><td>
                                                <?php echo $koss->nama_kos ?>
                                            </td><td>
                                                <?php echo $koss->id_pemilik ?>
                                            </td>
                                            <td>
                                                <?php echo $koss->jenis ?>
                                            </td>
                                            <td>
                                                <?php echo $koss->harga ?>
                                            </td>
                                            <td>
                                                <?php echo $koss->kamar_kosong ?>
                                            </td>
                                            <td><a href="<?php echo base_url('admin/data_kos/edit/'.$koss->id_kos); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?php echo base_url('admin/data_kos/hapus/'.$koss->id_kos); ?>"  class="btn btn-danger btn-sm">Hapus</a></td></tr>
                                            <?php
                                        }
                                    }


                                    ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Fasilitas Kos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kos</th>
                                            <th>Fasilitas</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                    if($kos) {
                                        foreach ($kos as $koss) {
                                            ?><tr><td>
                                                <?php echo $koss->id_kos ?>
                                            </td><td>
                                                <?php echo $koss->nama_kos ?>
                                            </td><td>
                                            <?php echo $koss->fasilitas ?>
                                            </td></tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Alamat Kos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kos</th>
                                            <th>RT/RW</th>
                                            <th>Desa</th>
                                            <th>Jalan/Gang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <!-- /. ROW  -->
        </div>
               <footer><p>All right reserved. Unisi Kos </p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
