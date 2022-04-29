<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/Log.jpg">
</head>
<body>
    
 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="<?= base_url() ?>assets/img/logobl.png" class="img-circle" width="60"></a></p>
              	  
                    <?php
                    foreach($perfil as $perf){
                        ?>
                    <h5 class="centered"><?php echo $perf->nombre?> <br> <?php echo $perf->apellido?> </h5>
              	  	<?php } ?>
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                      <i class="fa-solid fa-users-gear"></i>
                          <span>Clientes</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                        <i class="fa-solid fa-user-check"></i>
                          <span>Usuario</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Calendar</a></li>
                          <li><a  href="">Gallery</a></li>
                          <li><a  href="">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                        <i class="fa-solid fa-gears"></i>
                          <span>Configuracion</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Blank Page</a></li>
                          <li><a  href="">Login</a></li>
                          <li><a  href="">Lock Screen</a></li>
                      </ul>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

	
	


</body>
</html>