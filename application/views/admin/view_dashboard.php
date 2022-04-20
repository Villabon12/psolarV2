<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOYOLA</title>
    <link rel="shortcut icon" href="index_files/Img/Log.jpg">
    <link href="<?=base_url()?>css/dashbo.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>






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
                    <a id="btn_salir" href="Login/cerrarSession">
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




    </section>



    <section id="estadisticas" class="estadisticas">
        <div class="text">En construccion Estadisticas</div>


    <div></div>

        <div class="datagrid">
            <table>
                <thead>
                    <tr>
                        <th>header</th>
                        <th>header</th>
                        <th>header</th>
                        <th>header</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div id="paging">
                                <ul>
                                    <li><a href="#"><span>Previous</span></a></li>
                                    <li><a href="#" class="active"><span>1</span></a></li>
                                    <li><a href="#"><span>2</span></a></li>
                                    <li><a href="#"><span>3</span></a></li>
                                    <li><a href="#"><span>4</span></a></li>
                                    <li><a href="#"><span>5</span></a></li>
                                    <li><a href="#"><span>Next</span></a></li>
                                </ul>
                            </div>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                    </tr>
                    <tr class="alt">
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                    </tr>
                    <tr class="alt">
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                        <td>data</td>
                    </tr>
                </tbody>
            </table>
        </div>





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