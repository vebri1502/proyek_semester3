<head>
<title>UNISI Kost</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css">
</head>
<body id="top">

<?php
include('include/header.php')
?>


<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/kos.jpg');">
  <div id="pageintro1" class="hoc clear"> 
    <form action="<?php echo base_url('login/login_process'); ?>" method="post">
    <article>
      <p>Silahkan masukan username dan password anda ! </p>
      
      <input type="text" class="btn" name="username" placeholder="Username"> 
      <input type="password" class="btn" name="password" placeholder="Password">
      </br>
      <footer>
      <button type = "submit" class="btn" name="submit">Login</button></footer>
      </form>
    </article>
    
  </div>
</div>

<?php
include('include/footer.php')
?>
