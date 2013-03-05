<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
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
                            <h1 class="block-title">Biblioteca</h1>
                            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <h2 class="block-title">Dashboard</h2>
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
                        <li>
                            <a href="<?= base_url() ?>academia/gestalt">Prueba gestalt</a>
                        </li>


                        <li>
                            <a href="<?= base_url() ?>biblioteca">Anticurriculum</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>biblioteca">Disciplinas</a>
                        </li>
                        <li class="is-active">
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
                <div class="container" id="eneatipos">
                    <div class="row" >
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="three columns end">
                            <div class="enea">
                                <a href="<?= base_url() ?>biblioteca/eneatipo/1">
                                    <img src="http://placehold.it/300x300">
                                </a>
                                <p> <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a></p>
                            </div>
                        </div>
                    </div>
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
</body>
</html>
