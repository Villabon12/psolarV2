<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/Log.jpg">
    <link href="<?=base_url()?>assets/css/oscuro.css" rel="stylesheet">


</head>

<body  >

    <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="index.php"><img src="<?=base_url()?>assets/img/logobl.png" class="img-circle" width="60"></a></p>
                <h5 id="h5" class="centered"><?php echo $perfil->nombre?> <br> <?php echo $perfil->apellido?> </h5>





                <li class="mt">
                    <a href="<?=base_url()?>index.php/Admin">
                        <i class="fa-solid fa-users-gear"></i>
                        <span id="cl1">Clientes</span>
                    </a>
                </li>


                <li class="sub-menu">
                    <a href="<?=base_url()?>index.php/Admin/calendario">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span id="ca1">Calendario</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa-solid fa-user-check"></i>
                        <span id="us1">Usuario</span>
                    </a>
                    <ul class="sub">
                        <li id="li1"><a id="po1" href="<?=base_url()?>index.php/Admin/cliente">Potencial Cliente</a></li>
                        <li id="li2"><a id="ad1" href="<?=base_url()?>index.php/Admin/usuario">Administracion de usuario</a></li>
                        <li id="li3"><a id="co1" href="<?=base_url()?>index.php/Admin/email">Correos</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa-solid fa-gears"></i>
                        <span id="cf1">Configuracion</span>
                    </a>
                    <ul class="sub ">
                        <li id="li4"><a id="an1" href="<?=base_url()?>index.php/Admin/anuncios">Anuncios</a></li>
                        <li id="li5"><a id="cc1" href="<?=base_url()?>index.php/Admin/cambio">Cambio de contraseña</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <button class="sw" id="sw">
                        <span><i class="fa-solid fa-sun"></i></span>
                        <span><i class="fa-solid fa-moon"></i></span>
                    </button>

                </li>

            </ul>
            <!-- sidebar menu end-->








        </div>
    </aside>
    <!--sidebar end-->


    <script src="<?=base_url()?>assets/js/oscuro.js"></script>


</body>

</html>