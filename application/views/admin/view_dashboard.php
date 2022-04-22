<?php
require_once('agenda\bdd.php');


$sql = "SELECT id, title, start, end, color_id FROM calendario ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOYOLA</title>
    <link rel="shortcut icon" href="<?=base_url()?>Img/Log.jpg">
    <link href="<?=base_url()?>css/dashbo.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <link href="<?=base_url()?>css/fullcalendar.css" rel='stylesheet' />

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;

        }

        #calendar {
            max-width: 800px;
        }

        .col-centered {
            float: none;
            margin: 0 auto;
        }
    </style>



</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a><img src="<?=base_url()?>Img/logobl.png"></a>
                </span>

                <div class="text logo-text">
                    <span class="name">LOYOLA</span>
                    <span class="profession">Su mejor opcion</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">


                    <li class="nav-link">
                        <a id="m_agenda">
                            <i class='bx bx-calendar-check icon'></i>
                            <span class="text nav-text">Agendar</span>
                        </a>
                    </li>



                    <li class="nav-link">
                        <a id="m_est">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Estadisticas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a id="m_noti">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notificacion</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a id="m_prod">
                            <i class='bx bx-store-alt icon'></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a id="m_client">
                            <i class='bx bxs-user-account icon'></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a id="m_usua">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Usuarios</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a id="m_config">
                            <i class='bx bx-brightness icon'></i>
                            <span class="text nav-text">Configuracion</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a id="btn_salir">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>





    <section id="agenda" class="agenda active">
        <div class="text">En construccion agenda</div>
        <div class="agenda-contenido">
            <!-- Page Content -->
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 text-center">
                        </br>
                        <div id="calendar" class="col-centered">
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <!-- Modal aquiiiiiiiiiiiiiiiiiiiiii -->
                <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="<?=base_url()?>index.php/Admin/add_event">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Titulo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                                        </div>
                                    </div>
                                    <!-- ID DEL USUARIO QUIEN AÑADE -->
                                    <input type="hidden" name="usuario_id" value="1">

                                    <!-- ID DEL USUARIO A QUIEN CITA -->

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Citar</label>
                                        <div class="col-sm-10">
                                            <select name="hijo_id" class="form-control" id="cita">
                                                <option value="">usuario</option>
                                                    <?php foreach($usuario as $usu){ ?>
                                                    <option value="<?php echo $usu->id ?>"><?php echo $usu->nombre ?> <?php echo $usu->apellido ?></option>
                                                    <?php } ?>
                                                </select>
                                        </div>
                                    </div>


                                    <!-- ID DEL color -->
                                    <div class="form-group">
                                        <label for="color" class="col-sm-2 control-label">Color</label>
                                        <div class="col-sm-10">
                                            <select name="color_id" class="form-control" id="color_id">
                                                <option value="">Seleccionar</option>
                                                <?php foreach($color as $col){ ?>
                                                    <option style="color:#<?php echo $col->css ?>;"
                                                     value="<?php echo $col->id ?>"> <?php echo $col->nombre ?>
                                                     <?php } ?>
                                                    </option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" name="start" class="form-control" id="start" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="end" class="col-sm-2 control-label">Fecha Final</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" name="end" class="form-control" id="end" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- Modal  aquiiiiiiiiiiiiiiiiiiiiiiiiiii-->
                <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="./agenda/editEventTitle.php">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        
                                        <label for="title" class="col-sm-2 control-label">Titulo</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                                        </div>
                                    </div>

                                    




                                    <div class="form-group">
                                        <label for="color" class="col-sm-2 control-label">Color</label>
                                        <div class="col-sm-10">
                                            <select name="color" class="form-control" id="color">
                                                <option value="">Seleccionar</option>
                                                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                                                <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                                                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                                                <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                                                <option style="color:#000;" value="#000">&#9724; Negro</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label class="text-danger"><input type="checkbox" name="delete"> Eliminar Evento</label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" class="form-control" id="id">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->

            <!-- jQuery Version 1.11.1 -->
            <script src="<?=base_url()?>js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?=base_url()?>js/bootstrap.min.js"></script>

            <!-- FullCalendar -->
            <script src='<?=base_url()?>js/moment.min.js'></script>
            <script src='<?=base_url()?>js/fullcalendar/fullcalendar.min.js'></script>
            <script src='<?=base_url()?>js/fullcalendar/fullcalendar.js'></script>
            <script src='<?=base_url()?>js/fullcalendar/locale/es.js'></script>


            <script>
                $(document).ready(function() {

                    var date = new Date();
                    var yyyy = date.getFullYear().toString();
                    var mm = (date.getMonth() + 1).toString().length == 1 ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1).toString();
                    var dd = (date.getDate()).toString().length == 1 ? "0" + (date.getDate()).toString() : (date.getDate()).toString();


                    $('#calendar').fullCalendar({
                        header: {
                            language: 'es',
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay',

                        },
                        defaultDate: yyyy + "-" + mm + "-" + dd,
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        selectable: true,
                        selectHelper: true,
                        select: function(start, end) {

                            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                            $('#ModalAdd').modal('show');
                        },
                        eventRender: function(event, element) {
                            element.bind('dblclick', function() {
                                $('#ModalEdit #id').val(event.id);
                                $('#ModalEdit #title').val(event.title);
                                $('#ModalEdit #color').val(event.color);
                                $('#ModalEdit').modal('show');
                            });
                        },
                        eventDrop: function(event, delta, revertFunc) { // si changement de position

                            edit(event);

                        },
                        eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur

                            edit(event);

                        },
                        events: [
                            <?php foreach ($events as $event) :

                                $start = explode(" ", $event['start']);
                                $end = explode(" ", $event['end']);
                                if ($start[1] == '00:00:00') {
                                    $start = $start[0];
                                } else {
                                    $start = $event['start'];
                                }
                                if ($end[1] == '00:00:00') {
                                    $end = $end[0];
                                } else {
                                    $end = $event['end'];
                                }
                            ?> {
                                    id: '<?php echo $event['id']; ?>',
                                    title: '<?php echo $event['title']; ?>',
                                    start: '<?php echo $start; ?>',
                                    end: '<?php echo $end; ?>',
                                    color: '<?php echo $event['color']; ?>',
                                },
                            <?php endforeach; ?>
                        ]
                    });

                    function edit(event) {
                        start = event.start.format('YYYY-MM-DD HH:mm:ss');
                        if (event.end) {
                            end = event.end.format('YYYY-MM-DD HH:mm:ss');
                        } else {
                            end = start;
                        }

                        id = event.id;

                        Event = [];
                        Event[0] = id;
                        Event[1] = start;
                        Event[2] = end;

                        $.ajax({
                            url: './agenda/editEventDate.php',
                            type: "POST",
                            data: {
                                Event: Event
                            },
                            success: function(rep) {
                                if (rep == 'OK') {
                                    alert('Evento se ha guardado correctamente');
                                } else {
                                    alert('No se pudo guardar. Inténtalo de nuevo.');
                                }
                            }
                        });
                    }

                });
            </script>
        </div>

    </section>



    <section id="estadisticas" class="estadisticas">
        <div class="text">En construccion Estadisticas</div>





    </section>


    <section id="notificaciones" class="notificaciones">
        <div class="text">En construccion Notificaciones</div>




    </section>


    <section id="productos" class="productos">
        <div class="text">En construccion Productos</div>




    </section>



    <section id="usuarios" class="usuarios">
        <div class="text">En construccion Usuarios</div>




    </section>


    <section id="clientes" class="clientes">
        <div class="text">En construccion Clientes</div>




    </section>




    <section id="config" class="config">
        <div class="text">En construccion configuracion</div>




    </section>

    <script src="<?=base_url()?>js/das.js"></script>


</body>

</html>