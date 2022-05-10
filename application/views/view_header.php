<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/main.4d6bf660.css" rel="stylesheet">
  <meta name="language" content="En" data-react-helmet="true">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <link href="<?=base_url()?>css/das.css" rel="stylesheet">
</head>
<body >
<section class="ant-layout">
      <header class="ant-layout-header gYEk4qQw">
        <div class="di08yh36">
          <div class="sRO_90R7">
            <div role="button" tabindex="0">
              <div class="oa2kg82w">
                <a href="<?=base_url()?>"><img src="<?=base_url()?>Img/loimg.png"></a>
              </div>
            </div><a class="m1NFK7ma " href="<?=base_url()?>#porque">Por Qué IRSE Solar</a>
            <div class="est"><a data-toggle="modal" data-target="#registro" id="btn-abrir-popup">Estimados gratis</a></div>
            <a class="m1NFK7ma " href="<?=base_url()?>#referidor">Referidor</a>
            <a class="m1NFK7ma " href="<?=base_url()?>#quiero">Quiero saber mas</a>
            <div class="RznqkN5Y"><a href="tel:8339576527">Tel: (833) 9576527</a></div>
          </div>
          <div class="eICEZf60"><a type="button" class="ant-btn ant-btn-primary LgWjiDsv" href="<?=base_url()?>index.php/Login"
              ><span>Iniciar
                Sesion</span></a></div>
        </div>
        <div class="di08yh36 mobile">
          <div class="sRO_90R7">
            <div role="button" tabindex="0">
              <i class='bx bx-menu icon hamburguer'></i>
              <div class="oa2kg82w">
                <a href="index.php #ini"><img src="<?=base_url()?>/Img/loimg.png"></a>
              </div>
            </div><a class="m1NFK7ma " href="<?=base_url()?>#porque">Por Qué IRSE Solar</a>
            <div class="est"><a id="btn-abrir-popup-mov">Estimados gratis</a></div>
            <a class="m1NFK7ma " href="<?=base_url()?>#referidor">Referidor</a>
            <a class="m1NFK7ma " href="<?=base_url()?>#quiero">Quiero saber mas</a>
            <div class="RznqkN5Y"><a href="tel:8339576527">Tel: (833) 9576527</a></div>
          </div>
          <div class="eICEZf60"><a type="button" class="ant-btn ant-btn-primary LgWjiDsv"
              href="<?=base_url()?>index.php/Login"><span>Iniciar
                Sesion</span></a></div>
        </div>
      </header>
    </section>






    <div class="ant-modal-root">
          <div class="ttran" id="ttran"></div>
          <div tabindex="-1" class="att" id="att" role="dialog" aria-labelledby="rcDialogTitle0" >
            <div role="document" class="ant-modal pIijSD97" style="width: 520px; transform-origin: 365px 415px;">
              <div tabindex="0" aria-hidden="true" style="width: 0px; height: 0px; overflow: hidden; outline: none;">
              </div>
              <div class="ant-modal-content">
                <a href="<?=base_url()?>" id="btn-cerrar-popup" type="button" aria-label="Close"
                  class="ant-modal-close"><span class="ant-modal-close-x"><span role="img" aria-label="close"
                      class="anticon anticon-close" style="color: white;"><svg viewBox="64 64 896 896" focusable="false"
                        data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                        <path
                          d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
                        </path>
                      </svg></span></span></a>
                <div class="ant-modal-header">
                  <div class="ant-modal-title" id="rcDialogTitle0">
                    <div class="QO4GMxWk"><span class="k2z825MI">
                        <p>LOYOLA</p>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="ant-modal-body">
                  <form id="form-estimado" class="ant-form ant-form-horizontal Czk1txKg" role="form" method="POST" action="<?=base_url()?>index.php/Inicio/insertar_estimado">
                    <span class="ULaXP8pY">Escribir Codigo PAIS</span>
                    <div class="ant-row ant-form-item">
                      <div class="ant-col ant-form-item-control">
                        <div class="ant-form-item-control-input">
                          <div class="ant-form-item-control-input-content">
                          <select class="form-select form-select-lg " name="pais">
                            <?php foreach($pais as $p){ ?>
                            <option value="<?php echo $p->id ?>"><?php echo $p->pais ?></option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>


                  <div class="botonera">

                    <a href="index.php" id="atras" class="boton boton-atras">Atrás</a>
                    <input type="button" value="siguiente" id="i_confb" class="boton">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
          
          
          
          <div class="ant-modal-root">
            <div class="ttran" id="asd"></div>
            <div tabindex="-1" class="att" id="ass" role="dialog" aria-labelledby="rcDialogTitle0">
              <div role="document" class="ant-modal pIijSD97" style="width: 520px; transform-origin: 365px 415px;">
                <div tabindex="0" aria-hidden="true" style="width: 0px; height: 0px; overflow: hidden; outline: none;">
                </div>
                <div class="ant-modal-content">
                  <a id="btn-cerrarr" href="<?=base_url()?>" type="button" aria-label="Close"
                  class="ant-modal-close"><span class="ant-modal-close-x"><span role="img" aria-label="close"
                  class="anticon anticon-close" style="color: white;"><svg viewBox="64 64 896 896" focusable="false"
                  data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                  <path
                  d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 00203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
                </path>
              </svg></span></span></a>
              <div class="ant-modal-header">
                <div class="ant-modal-title" id="rcDialogTitle0">
                  <div class="QO4GMxWk"><span class="k2z825MI">
                    <p>LOYOLA</p>
                  </span>
                </div>
              </div>
            </div>
            <div class="ant-modal-body">
                <div class="ant-modal-body">
                  <div class="d1EZtXp9">
                    <div class="WsMtvfgp"><span class="_rQ8jXtd">1</span></div>
                    <div class="ant-row pzH0oHdB"><span class="rWZYvJke">Subir archivos</span></div>
                      <div class="quantity">
                        <input type="file" name="v_luz">
                      </div></br>
                      <div class="rWZYvJke">por mes</div>
                      
                    </div>
                    <div class="d1EZtXp9">
                      <div class="WsMtvfgp"><span class="_rQ8jXtd">2</span></div>
                      <div class="ant-row pzH0oHdB"><span class="rWZYvJke">Informacion Requerida</span></div>
                    </div>
                    
                  </div>
                  
                  
                  <div class="ant-row pIyYlQHX">
                    <div class="ant-col ant-col-12 pa-r-16">
                      <div class="BWIitdyC">
                        <div class="V4b729iQ">Nombre</div>
                        <div class="ant-row ant-form-item">
                          <div class="ant-col ant-form-item-control">
                            <div class="ant-form-item-control-input">
                              <div class="ant-form-item-control-input-content"><input
                              class="ant-input ant-input-lg X6bvyjWl" name="nombre" id="quote_firstName"
                              type="text" value=""></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ant-col ant-col-12">
                      <div class="BWIitdyC">
                        <div class="V4b729iQ">Apellido</div>
                        <div class="ant-row ant-form-item">
                          <div class="ant-col ant-form-item-control">
                            <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><input
                                class="ant-input ant-input-lg X6bvyjWl" name="apellido" id="quote_lastName"
                                type="text" value=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ant-row pIyYlQHX">
                      <div class="ant-col ant-col-18">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Direccion</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><input
                                class="ant-input ant-input-lg X6bvyjWl" name="direccion" id="quote_street" type="text"
                                value=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="ant-row pIyYlQHX">
                      <div class="ant-col ant-col-12 pa-r-16">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Ciudad</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><input
                                class="ant-input ant-input-lg X6bvyjWl" name="ciudad" id="quote_city" type="text"
                                    value=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ant-col ant-col-6 pa-r-16">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Estado</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><input
                                class="ant-input ant-input-lg X6bvyjWl" name="" id="quote_state" type="text"
                                value=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ant-col ant-col-6">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Código Postal</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><input
                                class="ant-input ant-input-lg X6bvyjWl" name="estado_id" id="quote_zip" type="text"
                                value=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ant-row pIyYlQHX">
                      <div class="ant-col ant-col-12 pa-r-16">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Teléfono</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><span
                                class="ant-input-group-wrapper ant-input-group-wrapper-lg"><span
                                class="ant-input-wrapper ant-input-group"><span class="ant-input-group-addon">
                                  <div class="DsIaX8S2"><svg width="18" height="18" viewBox="0 0 18 18"
                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                              d="M15.8837 13.1467L14.2226 11.0149C13.8963 10.58 13.4687 10.3196 12.9884 10.2594C12.5114 10.1995 12.0295 10.3458 11.5953 10.6805L10.4824 11.5421C10.4362 11.5105 10.3913 11.4806 10.3494 11.4528C10.2401 11.3809 10.1356 11.3097 10.0475 11.2373C9.12347 10.477 8.31355 9.53076 7.56906 8.34728C7.24258 7.81053 7.02599 7.36671 6.882 6.93845C7.16182 6.73616 7.42788 6.5273 7.67997 6.32637C7.78608 6.24279 7.89736 6.15663 8.00506 6.07324C8.45022 5.72858 8.71688 5.29532 8.77632 4.82153C8.83616 4.34456 8.68479 3.85885 8.33816 3.41809L7.51309 2.36016C7.41956 2.24022 7.33041 2.12407 7.23887 2.00115L7.23468 1.99578C7.05538 1.7585 6.86173 1.5065 6.66568 1.27358C6.33521 0.859071 5.90961 0.608655 5.43414 0.549005C4.96187 0.489756 4.48261 0.628268 4.04862 0.948486L2.71136 1.98385C2.17166 2.39739 1.82782 2.94209 1.6882 3.60284C1.52465 4.38979 1.56453 5.24748 1.81362 6.29775C2.18655 7.89811 2.85944 9.41981 3.93062 11.0868C5.22935 13.0972 6.89327 14.7674 8.8731 16.051L8.87449 16.0528C9.64154 16.5398 10.6762 17.1283 11.8743 17.3577L11.8886 17.3595C11.9584 17.3715 12.0298 17.3837 12.1064 17.3933C12.9728 17.502 13.7091 17.2908 14.3559 16.7469C14.3669 16.737 14.3812 16.7259 14.3962 16.71C14.5795 16.5408 14.7837 16.3856 15.0017 16.224L15.0518 16.1866C15.2554 16.0361 15.417 15.9111 15.5612 15.7951C15.9922 15.4471 16.2508 15.0128 16.3089 14.5372C16.3687 14.0603 16.2215 13.5799 15.8837 13.1467V13.1467ZM2.99055 3.87928C3.06774 3.52237 3.23946 3.25161 3.52845 3.02786L4.85136 2.00362C4.99615 1.89582 5.14015 1.84606 5.2662 1.86187C5.41937 1.88109 5.54182 2.00303 5.61701 2.10129L5.62539 2.11203C5.78334 2.2998 5.93372 2.49631 6.09247 2.70356L6.16487 2.79823C6.21213 2.86068 6.26099 2.92333 6.30966 2.98758C6.35712 3.04844 6.40439 3.11089 6.45166 3.17334L7.27952 4.23486C7.36608 4.34584 7.4654 4.51011 7.44665 4.65956C7.4279 4.80901 7.29108 4.94365 7.17979 5.02981C7.12415 5.0729 7.0685 5.11598 7.01266 5.16065C6.95861 5.20393 6.90296 5.24702 6.84732 5.2901L6.77193 5.34847C6.47177 5.58373 6.18617 5.80629 5.88281 6.01532L5.8523 6.03895C5.3874 6.39889 5.47594 6.8428 5.50466 6.98852C5.50646 7.00005 5.50865 7.0084 5.51064 7.01834L5.51503 7.03504C5.69612 7.68435 5.97812 8.30433 6.42984 9.04412L6.43124 9.04591C7.24773 10.3531 8.14979 11.4045 9.19106 12.2635C9.30534 12.3602 9.4234 12.4396 9.53868 12.5154C9.55962 12.5294 9.58216 12.5435 9.6029 12.559L9.60429 12.5608C9.71359 12.6327 9.81809 12.7039 9.90625 12.7763L9.93297 12.7958C9.94195 12.8018 9.95072 12.8094 9.9597 12.8153C10.0911 12.9045 10.2317 12.9593 10.3769 12.9775C10.6226 13.0083 10.8584 12.9378 11.0776 12.7666L12.4094 11.7354C12.5136 11.6548 12.6675 11.5643 12.8207 11.5836C12.9771 11.6032 13.0975 11.741 13.1569 11.8228L13.1597 11.8263L14.8326 13.9677C15.0727 14.2756 15.0376 14.5166 14.7185 14.7737L14.7149 14.7765C14.563 14.9028 14.4038 15.0217 14.2536 15.1337L14.2107 15.1655C13.971 15.3453 13.7241 15.5307 13.4876 15.7498C13.133 16.0444 12.7586 16.1476 12.2736 16.0868C12.2289 16.0812 12.1782 16.0716 12.1276 16.062C11.1447 15.8741 10.2602 15.3675 9.59848 14.9453C7.7788 13.7675 6.24871 12.2319 5.05328 10.3798C4.06786 8.84308 3.45141 7.4528 3.10979 6.00334C2.90757 5.14789 2.86769 4.47108 2.99055 3.87928V3.87928Z"
                                              fill="#C7D9E0"></path>
                                            </svg></div>
                                          </span><input class="ant-input ant-input-lg" name="telefono" id="quote_phone"
                                          type="text" value=""></span></span></div>
                                        </div>
                                      </div>
                          </div>
                        </div>
                      </div>
                      <div class="ant-col ant-col-12">
                        <div class="BWIitdyC">
                          <div class="V4b729iQ">Email</div>
                          <div class="ant-row ant-form-item">
                            <div class="ant-col ant-form-item-control">
                              <div class="ant-form-item-control-input">
                                <div class="ant-form-item-control-input-content"><span
                                class="ant-input-group-wrapper ant-input-group-wrapper-lg"><span
                                class="ant-input-wrapper ant-input-group"><span class="ant-input-group-addon">
                                  <div class="DsIaX8S2"><span role="img" aria-label="mail"
                                  class="anticon anticon-mail ZyNQULHW"
                                  style="color: rgb(199, 217, 224); font-size: 17px;"><svg
                                  viewBox="64 64 896 896" focusable="false" data-icon="mail" width="1em"
                                              height="1em" fill="currentColor" aria-hidden="true">
                                              <path
                                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0068.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z">
                                              </path>
                                            </svg></span></div>
                                          </span><input class="ant-input ant-input-lg" name="email" id="quote_email"
                                          type="text" value=""></span></span></div>
                                        </div>
                                      </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="E82d6aoE"><button type="submit"
                    class="ant-btn ant-btn-default Lj9QbRop"><span>Enviar</span>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
  <script>
    $("#form-estimado").submit(function(event){
      event.preventDefault();
      var formData = new formData($('#form-estimado')[0]);
      $.ajax({
        url:$("form").attr("action"),
        type:$("form").attr("method"),
        data:formData,
        cache:false,
        contentType:false,
        processData:false,

        success:function(respuesta){
          alert(respuesta);
          
        }
      })
    });
  </script>
        
  <script src="<?=base_url()?>js/jquery-3.6.0.min.js"></script>
  <script src="<?=base_url()?>js/ar.js"></script>


</body>
</html>
