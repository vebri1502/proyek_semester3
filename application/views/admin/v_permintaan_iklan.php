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
        
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           Data <small>Permintaan Iklan</small>
                        </h1>
						<ol class="breadcrumb">
					
					</ol> 
									
		</div>
            <div id="page-inner"> 
				 
				
			 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Permintaan Iklan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik</th>
                                            <th>Nama Kos</th>
                                            <th>Jenis</th>
                                  
                                            <th>Alamat</th>
                                    
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Fasilitas</th>
                                    
                                            <th>Kamar Kosong</th>
                                            <th>Keterangan</th>
                                            <th>Pilihan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($permintaan_iklan) {
                                        foreach($permintaan_iklan as $iklan) {
                                            ?><tr>
                                            <td><?php echo $iklan->id_permintaan; ?></td>
                                            <td><?php echo $iklan->nama_pemilik; ?></td>
                                            <td><?php echo $iklan->nama_kos; ?></td>
                                            <td><?php echo $iklan->jenis; ?></td>
                                            <td><?php echo $iklan->alamat; ?></td>
                                            <td><?php echo $iklan->foto; ?></td>
                                            <td><?php echo $iklan->harga; ?></td>
                                            <td><?php echo $iklan->fasilitas; ?></td>
                                            <td><?php echo $iklan->kamar_kosong; ?></td>
                                            <td><?php echo $iklan->keterangan; ?></td>
                                            <td><a href="<?php echo base_url('admin/permintaan_iklan/setujui/'.$iklan->id_permintaan); ?>" class="btn btn-primary btn-sm">Setujui</a>
                                            <a href="<?php echo base_url('admin/permintaan_iklan/tolak/'.$iklan->id_permintaan); ?>"  class="btn btn-danger btn-sm">Tolak</a></td></tr> <?php

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
                     <!-- End Modals-->
                
                <!-- /. ROW  -->
				<footer><p>All right reserved. Unisikos.com</a></p>
                
        
                </footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 
</body>
</html>
