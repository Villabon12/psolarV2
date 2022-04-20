<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style rc-util-key="@ant-design-icons">
        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon::before {
            display: none;
        }

        .anticon .anticon-icon {
            display: block;
        }

        .anticon[tabindex] {
            cursor: pointer;
        }

        .anticon-spin::before,
        .anticon-spin {
            display: inline-block;
            -webkit-animation: loadingCircle 1s infinite linear;
            animation: loadingCircle 1s infinite linear;
        }

        @-webkit-keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <title>LOYOLA</title>
    <link rel="shortcut icon" href="<?=base_url()?>Img/Log.jpg">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">
    <link href="<?=base_url()?>css/login.css" rel="stylesheet">
    <link href="<?=base_url()?>css/main.4d6bf660.css" rel="stylesheet">
    <meta name="robots" content="index, follow" data-react-helmet="true">
    <meta name="language" content="En" data-react-helmet="true">
</head>

<body>
<?php include "view_header.php";?>


        </br></br></br></br></br></br>



            <main class="CY3HTBva">


                    <div class="jppbIL7K">
                        <div class="hp_PkY4l">
                            <h1 class="_wEb5czB " data-test-selector="authentication-page-heading">¡Estamos
                                encantados de volver a tenerte por aquí!</h1></br><small class="agn1TDuY">Puedes iniciar
                                sesión en LOYOLA con tu cuenta.</small>
                            <hr class="HZWdSA4b">
                        </div>
                        <div class="eD_OsU6s">
                            <div class="cE_FlH9b l_b56lTp">
                                  
                                    <div class="IVJo6l6G" data-test-selector="sign-in-form">
                                        <h2 class="IApy4UwJ" data-test-selector="sign-in-form-heading">Iniciar sesión
                                        </h2>
                                        <form action="<?=base_url()?>index.php/Login/validar_user" method="post" class="JnFhyYaS">
                                            <div class="LhhBDMVI username huPvc6Z1 undefined"
                                                >
                                                <div class="JiAW8Yth"><label for="signInUsername" class="IwzEnFTT"><span
                                                            class="">Correo electronico</span></label>
                                                </div>
                                                <div class="username huPvc6Z1 DH8HJ03B ea6yTGLG"><input name="email"
                                                        tabindex="1" type="text" id="email" class="JmGWmo2D"
                                                         required autofocus></div>

                                            </div>
                                            <div class="LhhBDMVI password huPvc6Z1" >
                                                <div class="JiAW8Yth"><label for="signInPassword" class="IwzEnFTT"><span
                                                            class="">Contraseña</span>
                                                </div>
                                                <div class="password huPvc6Z1 DH8HJ03B"><input name="pass"
                                                        type="password" tabindex="2" id="pass"
                                                        class="JmGWmo2D" required ></div>
                                            </div><button
                                                class="signin-submit iY0q_PcK XRaktsFq HErVMAXP meZetxGE"
                                                 type="submit">
                                                <div class="VXooVQb5"><span class="skmTuuLm">Iniciar sesión</span></div>
                                            </button>
                                            <div>
                                            </br></br>
                                            </label><span class="XeVx_Xsr"><a
                                                target="_blank" rel="noopener noreferrer"
                                                href="">Olvide mi contraseña</a></span>                                                
                                                <div class="M_ciPgaF">¿Eres nuevo a LOYOLA? <a
                                                        data-test-selector="sign-in-link-to-sign-up"
                                                        href="index.php #quiero">Conocenos</a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

</body>

</html>