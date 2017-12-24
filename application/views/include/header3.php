
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1 ><a href="index.html">UNISI Kost</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="drop"><a href='#'><?php echo $_SESSION['nama']; ?></a>
        <ul>
        <li><a href="admin/dashboard">Dashboard</a></li>
        <li><a href='<?php echo base_url();?>login/logout'>Logout</a></li>
        
        </ul>

        </li>

                 
      </ul>
    </nav>
   
  </header>
</div>

