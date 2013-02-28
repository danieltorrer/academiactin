<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/cartas.css">

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">

            <header id="top" role="banner">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <h1 class="block-title">Eneagrama</h1>
                            <a class="nav-btn" id="nav-open-btn" href="#nav">Navegacion</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <ul>
                        <li>
                            <h6><a href="<?= base_url() ?>academia">Dashboard</a></h6>
                        </li><!--
                        -->
                        <li>
                            <a href="<?= base_url() ?>">Introduccion</a>
                        </li>
                        <li class="is-active">
                            <a href="<?= base_url() ?>academia/cartas">Eneagrama</a>
                        </li><!--
                        -->
                        <li>
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

            <div id="main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="two columns"></div>
                        <div class="nine columns">
                            <?php
                            $sec = 1;
                            $cont = 0;
                            while ($sec < 19) {
                                echo "
                                           <div class='baraja bar' id='b{$sec}'>
                                                <ul id='baraja-el{$sec}' class='baraja-cont'>
                                                    <li value='{$tarjetas[++$cont]['tipo']}' data-id='{$tarjetas[$cont]['id']}' data-nombre='{$tarjetas[$cont]['palabra']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['tipo']}' data-id='{$tarjetas[$cont]['id']}' data-nombre='{$tarjetas[$cont]['palabra']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['tipo']}' data-id='{$tarjetas[$cont]['id']}' data-nombre='{$tarjetas[$cont]['palabra']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['tipo']}' data-id='{$tarjetas[$cont]['id']}' data-nombre='{$tarjetas[$cont]['palabra']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['tipo']}' data-id='{$tarjetas[$cont]['id']}' data-nombre='{$tarjetas[$cont]['palabra']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                </ul>
                                            </div>
                                        ";
                                $sec++;
                            }
                            ?>
                        </div>
                        <div class="one columns">
                            <a class="button" id="siguiente">Mas cartas</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="twelve columns">
                                <div id="drop">
                                    <img id="paloma" src="<?= base_url() ?>media/img/paloma.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $atributos = array('id' => 'eneagramaform');
                    ?>
                    <?php echo form_open('academia/eneagrama', $atributos); ?>
                    <input type="hidden" name="enearesult" id="eneresult">
                    <input type="hidden" name="enenombres" id="enenombres">
                    <input type="hidden" name="eneid" id="eneid">
                    <?php echo form_close() ?>
                </div>
            </div>

            <!--Footer -->
            <footer role="contentinfo">
                <!--<div class="block container">
                    <div class="row">
                        <div class="twelve columns">
                            <p class="small">Copyright © <a href="http://dbushell.com/">David Bushell</a></p>
                        </div>
                    </div>
                </div>-->
            </footer>

        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>
    <script src="<?= base_url() ?>media/js/jquery.baraja.js"></script>
    <script src="<?= base_url() ?>media/js/newdrag.js"></script>

</body>
</html>
