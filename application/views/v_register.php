<head>
<title>UNISI Kost</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css">
</head>
<body id="top">
<?php
include('include/header.php')

?>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/kos.jpg');">
  <div id="pageintro1" class="hoc clear"> 
   
    <article>
      <p>Daftarkan Akun anda untuk mulai mencari kos kosan pilihan anda </p>
      <form method="POST" action="<?php echo base_url('register/submit') ?>" >
      <input type="hidden" name="level" value="3">
      <input id="form" type="text" class="field" name="nama" placeholder="Full Name" required>
      <input type="text" class="field" name="username" placeholder="Username" required> 
      <input type="password" class="field" name="password" placeholder="Password" required>
      <input type="password" class="field" name="password2" placeholder="Retype Password" required>
      <input type="email" class="field" name="email" placeholder="E-mail" required>
      </br>
      <footer>
      <button type = "submit" class="btn" name="submit">Register</button></footer>
      </form>
    </article>
    
  </div>
</div>
 