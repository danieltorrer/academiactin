<?php
$this->load->view("header");
?>

<script src="<?= base_url() ?>media/js/modernizr.js"></script>

<title>Gestalt</title>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/mosaic.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/dashboard.css">

<script src="<?= base_url() ?>media/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/media/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>media/js/mosaic.1.0.1.min.js"></script>

</head>

<body>
    <div id="outer-wrap">
        <div id="inner-wrap">
            <div class="contenedor">
                <header id="top" role="banner">
                    <div class="block">
                        <div class="container">
                            <div class="row">
                                <h1 class="block-title">Dashboard</h1>
                                <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav id="nav" role="navigation">
                    <div class="block">
                        <!--<h2 class="block-title">Dashboard</h2>-->
                        <ul>
                            <li>
                                <h6><a href="<?= base_url() ?>academia">Dashboard</a></h6>
                            </li><!--
                            -->
                            <li>
                                <a href="<?= base_url() ?>">Introduccion</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>academia/cartas">Eneagrama</a>
                            </li><!--
                            -->
                            <li class="is-active">
                                <a href="<?= base_url() ?>academia/gestalt">Prueba gestalt</a>
                            </li>


                            <li>
                                <a href="<?= base_url() ?>biblioteca">Anticurriculum</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>biblioteca">Disciplinas</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>biblioteca">Base de conocimientos</a>
                            </li>

                            <br><br><br>
                            <li>
                                <a href="<?= base_url() ?>academia/salir">Cerrar sesión</a>
                            </li>
                        </ul>
                        <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                    </div>
                </nav>

                <div id="main" role="main" class="margen">
                    <div class="container">
                        <div class="row">
                            <h3>Responde las siguientes preguntas.</h3>
                            <form action="<?= base_url() ?>gestalt/revisar" method="post">
                                <div class="row p">
                                    <div class="eight columns">
                                        1.- Yo Soy Insensible
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q21" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q21" VALUE="0">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        2.- Soy Feliz Como Soy
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q41" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q41" VALUE="2">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        3.- Cuando Algo Me Disgusta, Lo Digo
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q61" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q61" VALUE="2">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        4.- Me Molesta Que Me Vean Llorar
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q51" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q51" VALUE="0">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        5.- Soy Emocional Pero Me Aguanto
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd1" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd1" VALUE="2">No
                                    </div>
                                </div>


                                <div class="row p">
                                    <div class="eight columns">
                                        6.- Me Desagrada Siempre Hacer Lo Mismo Que Los Demás
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q71" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q71" VALUE="2">No
                                    </div>
                                </div>


                                <div class="row p">
                                    <div class="eight columns">
                                        7.-Me Es Imposible Dejar De Ser Como Soy
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q81" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q81" VALUE="0">No
                                    </div>
                                </div>


                                <div class="row p">
                                    <div class="eight columns">
                                        8.- Evito Culpar A Los Demás Si Me Siento Mal
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q31" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q31" VALUE="2">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        9.- Siempre Termino Lo Que Empiezo
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q11" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q11" VALUE="2">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        10.- Me Siento Culpable Si Culpo A Los Demás
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd2">No
                                    </div>
                                </div>
                                <hr>

                                <div class="row p">
                                    <div class="eight columns">
                                        11.- Debo Evitar Mostrar Mi Enojo
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q42" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q42" VALUE="0">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        12.- Me Abstengo De Discutir
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q62" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q62" VALUE="0">No
                                    </div>
                                </div>							

                                <div class="row p">
                                    <div class="eight columns">
                                        13.- Hago Lo Que Los Demás Quieren Aunque Me Disguste
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q72" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q72" VALUE="0">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        14.- Me Disgusta Pensar, Sentir O Hacer Lo Mismo Durante Mucho Tiempo
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q82" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q82" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        15.- Me Gusta Aprender Cosas Nuevas
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd3" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd3" VALUE="0">No
                                    </div>
                                </div>

                                <div class="row p">
                                    <div class="eight columns">
                                        16.- Dejo Las Cosas Para Después
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q12" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q12" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        17.- Expreso Lo Que Me Molesta
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q52" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q52" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        18.- Evito Sentir
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q22" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q22" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        19.- Sería Feliz Si No Fuera Por Los Demás
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q52" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q52" VALUE="0">No
                                    </div>
                                </div>		

                                <div class="row p">
                                    <div class="eight columns">
                                        20.- Soy Constante En Mi Inconstancia
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd4" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd4" VALUE="2">No
                                    </div>
                                </div>	
                                <hr>

                                <div class="row p">
                                    <div class="eight columns">
                                        21.- Hago Lo Que Quiero A Pesar De Que Me Dicen Lo Contrario
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q43" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd43" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        22.- Siempre Estoy De Acuerdo Con Los Demás
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q73" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q73" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        23.- Soy Capaz De Dejar De Tener Una Idea Fija
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q83" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q83" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        24.- Evito Enfrentar
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q63" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q63" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        25.- Me Disgusta Evitar Lo Inevitable
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd5" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd5" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        26.- Me Gusta Sentir
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q23" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q23" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        27.- Evito Manifestar Lo Que Me Molesta
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q53" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q53" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        28.- Evito Dejar Para Mañana Lo Que Puedo Hacer Hoy
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q13" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q13" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        29.- Me Abstengo De Culpar A Los Demás Si Fracaso
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q33" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q33" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        30.- A Veces Dejo Las Cosas Para Después
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd6" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd6" VALUE="2">No
                                    </div>
                                </div>	<hr>

                                <div class="row p">
                                    <div class="eight columns">
                                        31.- Me Disgusta Que Me Digan Lo Que Tengo Que Hacer
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q74" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q74" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        32.- Me Es Imposible Dejar De Pensar En Lo Que Ya Pasó
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q84" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q84" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        33.- Soy Como Me Enseñaron Que Debo Ser
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q44" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q44" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        34.- Defiendo Mis Opiniones
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q64" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q64" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        35.- Debo Hacer Lo Que Los Demás Quieren
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd7" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd7" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        36.- Soy Sensible
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q24" VALUE="0">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q24" VALUE="2">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        37.- Me Desagrada Terminar Lo Que Empiezo
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q14" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q14" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        38.- Expreso Lo Que Me Disgusta
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q54" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q54" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        39.- Estaría Bien Si No Fuera Por Los Demás
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q34" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="q34" VALUE="0">No
                                    </div>
                                </div>	

                                <div class="row p">
                                    <div class="eight columns">
                                        40.- Me Siento Mal Cuando Me Presionan
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd8" VALUE="2">Si
                                    </div>
                                    <div class="two columns">
                                        <INPUT TYPE="radio" NAME="qd8" VALUE="0">No
                                    </div>
                                </div>	

                                <hr>
                                <div class="row">
                                    <div class="eight columns">
                                        <input type="submit" Value="Revisar" class="button"/><br>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="twelve columns"><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>

</body>
</html>
