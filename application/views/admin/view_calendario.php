
<!DOCTYPE html>
<html>
<head>
    <title>LOYOLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/js/moment.min.js"></script>

</head>
    <body>
    <script>
    $(document).ready(function(){
        // let myModal = new bootstrap.Modal(document.getElementById('myModal'));
        
        var calendar = $('#calendar').fullCalendar({
            
            timeZone: 'local',
            initialView: 'dayGridMonth',
            locale: 'es',
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url()?>index.php/Admin/load",
            selectable:true,
            selectHelper:true,
             dayClick:function(date,jsEvent,view){
                myModal.show();
             },
             select:function(start, end, allDay)
             {
                
                 var title = prompt("Ingrese recordatorio: ");

                 if(title)
                 {
                     var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    
                     $.ajax({
                         url:"<?php echo base_url() ?>index.php/Admin/insert",
                         type:"POST",
                         data:{title:title, start:start, end:end},
                         success:function()
                         {
                             calendar.fullCalendar('refetchEvents');
                             alert("Added Successfully");
                         }
                     })
                 }
             },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url() ?>index.php/Admin/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/Admin/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url() ?>index.php/Admin/delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }
        });
    });
             
    </script>


    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12 main-chart abl">
                <div class="row mt ">
                    <div class="col-md-15 ">
                        <div class="content-panel position-abs">
                          <div class="container">
                              <div id="calendar"></div>
                          </div>

                          <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title" id="titulo">Registro de Eventos</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form id="formulario" autocomplete="off">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input type="hidden" id="id" name="id">
                                                                <input id="title" type="text" class="form-control" name="title">
                                                                <label for="title">Evento</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input type="hidden" id="Proc" name="id">
                                                                <select class="form-control">
                                                                    <option>Personal</option>
                                                                    <option>Lideres</option>
                                                                    <option>Vendedor</option>
                                                                    <option>Todos</option>
                                                                </select>
                                                                <label for="title">Agendar para:</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" id="start" type="date" name="start">
                                                                <label for="" class="form-label">Fecha</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" id="color" type="color" name="color">
                                                                <label for="color" class="form-label">Color</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                                                    <button type="submit" class="btn btn-primary" id="btnAccion">Guardar</button>
                                                </div>
                                            </form>

                                        </div>
                        </div>
                    </div>
                </div>
                  
                </div>
              </section>
            </section>

    <link rel="stylesheet" href="<?=base_url()?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/twitter.css" />
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.min.js"></script>
  
    <script src="<?= base_url() ?>Assets/js/sweetalert2.all.min.js"></script>

            <!--common script for all pages-->
            <script src="<?=base_url()?>assets/js/common-scripts.js"></script>

            <script type="text/javascript" src="<?=base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
            <script type="text/javascript" src="<?=base_url()?>assets/js/gritter-conf.js"></script>

            <!--script for this page-->
            <script src="<?=base_url()?>assets/js/sparkline-chart.js"></script>


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="<?=base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
            <script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>
            <script src="<?=base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="<?=base_url()?>assets/js/jquery.sparkline.js"></script>
            <script src="<?=base_url()?>assets/js/dattable.js"></script>
    </body>
</html>