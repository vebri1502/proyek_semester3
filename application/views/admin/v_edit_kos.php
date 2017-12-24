<html>
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
                             Data <small>Pengguna</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">

                
            
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url('admin/data_kos/update') ?>" method="post" role="form">
                                        <input type="hidden" name="id_kos" value="<?php echo $kos->id_kos ?>">
                                    
                                        <div class="form-group">
                                            <label>Nama Kos</label>
                                            <input class="form-control" name="nama_kos" value="<?php echo $kos->nama_kos; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <input class="form-control" name="jenis" value="<?php echo $kos->jenis; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $kos->alamat; ?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" name="harga" value="<?php echo $kos->harga; ?>">
                                        </div>

                                        
                                        
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                       
                                       <div class="form-group">
                                            <label>Fasilitas</label>
                                            <input type="text" class="form-control" name="fasilitas" value="<?php echo $kos->fasilitas; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kamar Kosong</label>
                                            <input type="text" class="form-control" name="kamar_kosong" value="<?php echo $kos->kamar_kosong; ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan" value="<?php echo $kos->keterangan; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="submit">Simpan</button>
                                        <button type="reset" class="btn btn-default" name="reset">Batal</button>
                                       
                                        
                                        
                                    </form>
                                   
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<footer><p>All right reserved. Unisi Kos </p></footer>
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
