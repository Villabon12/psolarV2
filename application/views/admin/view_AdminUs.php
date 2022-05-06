<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LOYOLA</title>

    <link rel="shortcut icon" href="<?=base_url()?>assets/img/Log.jpg">

    <script src="https://kit.fontawesome.com/b3198e60f8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!--external css-->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/to-do.css">


    <!--external css-->
    <!-- <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lineicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/st.css">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>


    <link rel="stylesheet" href="<?=base_url()?>assets/css/tabla/dataTables.bootstrap4.min.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">




        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="col-lg-9 main-chart">


                    <div class="row mt ">
                        <div class="col-md-12">
                            <div class="content-panel position-abs">

                                <table id="tablax" class="table table-striped table-bordered" style="width:100%">
                                    <h5 class="float-ld marginbox"><i class="fa fa-tasks"></i> Administracion de Usuarios</h5>
                                    <thead class="theadaos">
                                        <tr>
                                            <th><i class="fa fa-bullhorn"></i> Usuarios</th>
                                            <th><i class="fa fa-edit"></i> Cargo</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($usuario as $u){ ?>
                                        <tr>
                                            <td><?=$u->nombre?> <?=$u->apellido?></td>
                                            <td><?=$u->rol?></td>
                                            <td>
                                                <button data-target="#update<?=$u->id?>" data-toggle="modal" class="btn btn-primary btn-xs fa fa-pencil"></button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>


                                <!-- JQUERY -->
                                <script src="<?=base_url()?>assets/js/jquery.js"></script>

                                <!-- DATATABLES -->
                                <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js">
                                </script>
                                <!-- BOOTSTRAP -->
                                <script src="<?=base_url()?>assets/js/dataTables.bootstrap4.min.js">
                                </script>
                                <script>
                                    $(document).ready(function() {
                                        $('#tablax').DataTable({
                                            language: {
                                                processing: "Tratamiento en curso...",
                                                search: "Buscar&nbsp;:",
                                                lengthMenu: "Agrupar de _MENU_ items",
                                                info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                                                infoEmpty: "No existen datos.",
                                                infoFiltered: "(filtrado de _MAX_ elementos en total)",
                                                infoPostFix: "",
                                                loadingRecords: "Cargando...",
                                                zeroRecords: "No se encontraron datos con tu busqueda",
                                                emptyTable: "No hay datos disponibles en la tabla.",
                                                paginate: {
                                                    first: "Primero",
                                                    previous: "Anterior",
                                                    next: "Siguiente",
                                                    last: "Ultimo"
                                                },
                                                aria: {
                                                    sortAscending: ": active para ordenar la columna en orden ascendente",
                                                    sortDescending: ": active para ordenar la columna en orden descendente"
                                                }
                                            },
                                            scrollY: 400,
                                            lengthMenu: [
                                                [10, 25, -1],
                                                [10, 25, "All"]
                                            ],
                                        });
                                    });
                                </script>
                            </div><!-- /content-panel -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->











                    <br /><br />







                    <?php foreach($usuario as $u){ ?>
                    <!-- MODALS ADMIN USUARIOS -->
                    <div class="modal fade" id="update<?=$u->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Administracion de usuario</h4>
                                </div>
                                <div class="modal-body">
                                    ¿Que quieres hacer con el usuario <?=$u->nombre?> <?=$u->apellido?>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-target="#etapa<?=$u->id?>" data-toggle="modal" class="btn btn-primary">Cambiar de cargo</button>
                                    <button type="button" data-target="#modalDes<?=$u->id?>" data-toggle="modal" class="btn btn-danger">Desvincular</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ENDS MODALS ADMIN USUARIOS -->
                    <?php } ?>


                    <?php foreach($usuario as $u){ ?>
                    <!-- MODALS ADMIN USUARIOS -->
                    <div class="modal fade" id="etapa<?=$u->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Administracion de usuario</h4>
                                </div>
                                <div class="modal-body">
                                    ¿A que rango deseas actualizar al usuario <?=$u->nombre?> <?=$u->apellido?>?
                                </div>
                                <form action="<?=base_url()?>index.php/Admin/upd_rol" method="post">
                                <div class="form-group has-success">
                                    <div class="col-lg-10">
                                        <input type="hidden" name="id" value="<?=$u->id?>">
                                        <select class="form-control" name="roles_id">
                                            <option value="1">Admin</option>
                                            <option value="2">Lider</option>
                                            <option value="3">Vendedor</option>
                                        </select>
                                    </div>
                                </div>

                                </br></br></br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Cambiar de cargo</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ENDS MODALS ADMIN USUARIOS -->
                    <?php } ?>


                    <?php foreach($usuario as $u){ ?>
                    <!--Modal: modalDesvinculacion-->
                    <div class="modal fade" id="modalDes<?=$u->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-notify modal-info" role="document">
                            <!--Content-->
                            <div class="modal-content text-center">
                                <!--Header-->
                                <div class="modal-header d-flex justify-content-center headercolor">
                                    <p class="heading">Desvinculacion de la empresa</p>
                                </div>

                                <!--Body-->
                                <div class="modal-body">

                                    <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>
                                    </br></br>

                                    <p>¿Estas Segur@ que quieres desvincular al usuario <?=$u->nombre?> <?=$u->apellido?>?</p>

                                </div>

                                <!--Footer-->
                                <form action="<?=base_url()?>index.php/Admin/upd_activo" method="post">
                                    <input type="hidden" name="id" value="<?=$u->id?>">
                                    <input type="hidden" name="activo" value="0">
                                <div class="modal-footer flex-center">

                                    <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">no</a>
                                    <button type="submit" class="btn btn-danger">si</button>
                                </div>
                                </form>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>

                    <!-- ENDS MODALS DESVINCULACION -->
                    <?php } ?>





                </div><!-- /col-lg-9 END SECTION MIDDLE -->


                <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->






                <div class="col-lg-3 ds">


                    <!-- CALENDAR-->
                    <div id="calendar" class="mb">
                        <div class="panel green-panel no-margin">
                            <div class="panel-body">
                                <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title" style="disadding: none;"></h3>
                                    <div id="date-popover-content" class="popover-content"></div>
                                </div>
                                <div id="my-calendar"></div>
                            </div>
                        </div>
                    </div><!-- / calendar -->

                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h3>Notificaciones</h3>

                    <!-- First Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p>
                                <muted>Hace "" minutos</muted><br />
                                <a href="#">James Brown</a> Se suscribio al plan de trabajo<br />
                            </p>
                        </div>
                    </div>
                    <!-- Second Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p>
                                <muted>Hace "" horas</muted><br />
                                <a href="#">Diana Kennedy</a> Cumplio el contrato<br />
                            </p>
                        </div>
                    </div>
                    <!-- Third Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p>
                                <muted>Hace "" horas</muted><br />
                                <a href="#">Brandon Page</a> Se suscribio al plan de trabajo<br />
                            </p>
                        </div>
                    </div>





                    <!-- USERS ONLINE SECTION -->
                    <h3>Equipo de trabajo</h3>
                    <!-- First Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="<?=base_url()?>assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DIVYA MANIAN</a><br />
                            </p>
                        </div>
                    </div>
                    <!-- Second Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="<?=base_url()?>assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DJ SHERMAN</a><br />
                            </p>
                        </div>
                    </div>
                    <!-- Third Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="<?=base_url()?>assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">DAN ROGERS</a><br />
                            </p>
                        </div>
                    </div>
                    <!-- Fourth Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="<?=base_url()?>assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Zac Sniders</a><br />
                            </p>
                        </div>
                    </div>
                    <!-- Fifth Member -->
                    <div class="desc">
                        <div class="thumb">
                            <img class="img-circle" src="<?=base_url()?>assets/img/ui-sam.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                            <p><a href="#">Marcel Newman</a><br />
                            </p>
                        </div>
                    </div>



                </div><!-- /col-lg-3 -->
                </div>
                <! --/row -->
            </section>
        </section>

        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2022 LOYOLA
                <a href="index.php#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>





    <!-- js placed at the end of the document so the pages load faster -->



    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/jquery.sparkline.js"></script>
    <script src="<?=base_url()?>assets/js/dattable.js"></script>




    <!--common script for all pages-->
    <script src="<?=base_url()?>assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?=base_url()?>assets/js/sparkline-chart.js"></script>
    <script src="<?=base_url()?>assets/js/zabuto_calendar.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Bienvenido a LOYOLA!',
                // (string | mandatory) the text inside the notification
                text: 'Es un gusto tenerte aqui de nuevo, aqui encontraras tus notificaciones',
                // (string | optional) the image to display on the left
                image: '<?=base_url()?>assets/img/log.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: true,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
        });
    </script>

    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                        type: "text",
                        label: "Eventos",
                        badge: "00"
                    },

                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


</body>

</html>