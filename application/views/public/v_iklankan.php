<head>
<title>UNISI Kost</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css">
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo base_url();?>assets/css/custom-styles.css" rel="stylesheet" />

</head>
<body id="top">
<?php
if(empty($_SESSION['level'])){
	include('include/header.php');
} else if($_SESSION['level'] == 1) {
	include('include/header3.php');
} else if($_SESSION['level'] == 3) {
	include('include/header4.php');
} else if($_SESSION['level'] == 2) {
	include('include/header2.php');
}

?>



<div class="hoc clear">
<div id="page-inner"> 
              <div class="row">

        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Iklankan Kos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="<?php echo base_url('public/iklankan/submit') ?>" enctype="multipart/form-data">
                                  
                                        <div class="form-group">
                                            <label>Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kos</label>
                                            <input type="text" class="form-control" name="nama_kos" >
                                        </div>
                                        <div class="form-group">
                                  
                                            <label>Jenis</label>
                                            <select name="jenis">
                                            <option value="Putra">Putra</option>
                                            <option value="Putri">Putri</option>
                                            </select>
                                           </div>
                                
                                        <div class="form-group">
                                            <label>Alamat Kos</label>
                                            <textarea name="alamat"></textarea> 
                                        </div>      
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" name="harga" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Kamar Kosong</label>
                                            <input type="text" class="form-control" name="kamar_kosong" placeholder="Enter text">
                                        </div>
                                         <div class="form-group">
                                            <label>Fasilitas Kos</label>
                                            <textarea name="fasilitas"></textarea> 
                                        </div>


                                        <div class="form-group">
                                            <label>Tambahkan Foto</label>
                                            <input type="file" id="file" name="file">
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                                        <a href ="./data_user.php" class="btn btn-default" >Batal</a>
                                        </div>
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
             <!-- /. PAGE INNER  -->
            </div>

</div>

</body>

