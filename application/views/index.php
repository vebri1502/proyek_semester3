<head>
<title>UNISI Kost</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css">

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

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/kos.jpg');">
  <div id="pageintro" class="hoc clear"> 
   
    <article>
      <p>Temukan Tempat Istirahatmu </p>
      <h2 class="heading">Mudah, Cepat, dan Efektif</h2>
      <footer>
      <input id="cari" type="text" class="btn" placeholder="Enter what you need...">
       <a class="btn" href="#cari">Cari Sekarang</a> </footer>
    </article>
    
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading"><a name="cari">Kost Terbaru</a></h6>
      <p>Daftar kos kosan yang terupdate</p>
    </div>
    <div class="nospace group services">
    <center>
    <?php
    if($kos){
        $hitung =0;
        foreach($kos as $kost){
        $hitung = $hitung +1;
          if($hitung < 2 || $hitung%4==0) {
            $id = $kost->id_kos;
            ?><div class='one_third first'>
          <div class='item'>
              <div class='s_item'>
                <a href="<?php echo base_url('public/detail_kos/index/'.$kost->id_kos); ?>">
                <img src="<?php echo $kost->foto ?>" alt=''>
                
              </div>
              <div class='s_item_info'>
              <a href="<?php echo base_url('public/detail_kos/index/'.$kost->id_kos); ?>">
               
                  <h3 id='nama_produk'><?php echo $kost->nama_kos; ?></h3>
              </div>
              <div class='harga'>
                <p><?php echo 'Rp.'.$kost->harga?></p>
              </div>
              </div>
              </div> 
          <?php
          } else {
          ?>

          <div class='one_third'>
          <div class='item'>
              <div class='s_item'>
                <a href="<?php echo base_url('public/detail_kos/index/'.$kost->id_kos); ?>">
                <img src="<?php echo $kost->foto ?>" alt=''>
                
              </div>
              <div class='s_item_info'>
              <a href="<?php echo base_url('public/detail_kos/index/'.$kost->id_kos); ?>">
               
                  <h3 id='nama_produk'><?php echo $kost->nama_kos; ?></h3>
              </div>
              <div class='harga'>
                <p><?php echo 'Rp.'.$kost->harga?></p>
              </div>
              </div>
              </div>
          <?php
          }
         
        } 
      }

    ?>

    </center>
		
	</div>
    <div class="clear"></div>
  </main>
</div>









<?php

include('include/fitur.php');
include('include/testimoni.php');
include('include/about.php');
include('include/footer.php');

?>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.backtotop.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mobilemenu.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.flexslider-min.js"></script>
</body>
</html>