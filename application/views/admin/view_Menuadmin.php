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
              
              	  <p class="centered"><img src="<?= base_url() ?>assets/img/logobl.png" class="img-circle" width="60"></a></p>
              	  
  
                    <h5 class="centered"><?php echo $perfil->nombre?> <br> <?php echo $perfil->apellido?> </h5>

                  <li class="mt">
                      <a class="" href="<?=base_url()?>index.php/Admin">
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
                          <li><a  href="<?=base_url()?>index.php/Admin/cliente">Potencial Cliente</a></li>
                          <li><a  href="<?=base_url()?>index.php/Admin/usuario">Administracion de usuario</a></li>
                          <li><a  href="<?=base_url()?>index.php/Admin/email">Correos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                        <i class="fa-solid fa-gears"></i>
                          <span>Configuracion</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url()?>index.php/Admin/anuncios">Anuncios</a></li>
                          <li><a  href="<?=base_url()?>index.php/Admin/cambio">Cambio de contraseña</a></li>
                      </ul>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

	
	


</body>
</html>