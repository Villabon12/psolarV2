<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LOYOLA</title>

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/Log.jpg">

    <script src="https://kit.fontawesome.com/b3198e60f8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url() ?>assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    

    <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu de navegacion"></div>
        </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>LOYOLA</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
              <!-- settings start -->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                      <i class="fa fa-tasks"></i>
                      <span class="badge bg-theme">4</span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                      <div class="notify-arrow notify-arrow-green"></div>
                      <li>
                          <p class="green">Tienes "" tareas pendientes</p>
                      </li>
                      <li>
                          <a href="index.php#">
                              <div class="task-info">
                                  <div class="desc">Plan de trabajo</div>
                                  <div class="percent">40%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="index.php#">
                              <div class="task-info">
                                  <div class="desc">Permiso ambiental</div>
                                  <div class="percent">60%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (warning)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="index.php#">
                              <div class="task-info">
                                  <div class="desc">Instalacion</div>
                                  <div class="percent">80%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                      <span class="sr-only">80% Complete</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="index.php#">
                              <div class="task-info">
                                  <div class="desc">Correos enviados</div>
                                  <div class="percent">70%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                      <span class="sr-only">70% Complete (Important)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="external">
                          <a href="#">Mirar todas las tareas pendientes</a>
                      </li>
                  </ul>
              </li>
            </ul>
          <!--  notification end -->
      </div>
      <div class="top-menu">
          <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?=base_url()?>index.php/Login/cerrarSession">Salir</a></li>
          </ul>
      </div>
  </header>
<!--header end-->





	




</body>
</html>