<?php
$this->load->view("header");
?>

<script src="<?= base_url() ?>media/js/modernizr.js"></script>

<title>Gestalt</title>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/mosaic.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/dashboard.css">

<link rel="stylesheet" href="<?= base_url() ?>media/css/tgpstyle.css">
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
                            <section id="contenidoPrincipal">
                                <section class="texto">
                                    <div class="row catego">
                                        <div class="three columns">
                                            <div class="cuaddesb"></div>
                                            Desbloqueado<br>
                                        </div>
                                        <div class="two columns">
                                            <div class="cuadfunc"></div>
                                            Funcional<br>
                                        </div>
                                        <div class="two columns">
                                            <div class="cuadambi"></div>
                                            Ambivalente<br>
                                        </div>
                                        <div class="two columns">
                                            <div class="cuaddisf"></div>
                                            Disfuncional<br>
                                        </div>
                                        <div class="two columns">
                                            <div class="cuadbloq"></div>
                                            Bloqueado<br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row catego">
                                        <?=
                                        var_dump($rtest);
                                        var_dump($dsest);
                                        var_dump($prest);
                                        var_dump($inest);
                                        var_dump($rfest);
                                        var_dump($dfest);
                                        var_dump($cfest);
                                        var_dump($fiest);
                                        ?>
                                        <div class="three columns">
                                            <p class="nom">Retención:</p>
                                            <p class="nom">Desensibilización:</p>
                                            <p class="nom">Proyección:</p>
                                            <p class="nom">Introyección:</p>
                                            <p class="nom">Retroflexión:</p>
                                            <p class="nom">Deflexión:</p>
                                            <p class="nom">Cofluencia:</p>
                                            <p class="nom">Fijación:</p>
                                        </div>

                                        <div class="nine columns">
                                            <p class="<?= $rtest ?>"><?= $rt ?></p>
                                            <p class="<?= $dsest ?>"><?= $ds ?></p>
                                            <p class="<?= $prest ?>"><?= $pr ?></p>
                                            <p class="<?= $inest ?>"><?= $in ?></p>
                                            <p class="<?= $rfest ?>"><?= $rf ?></p>
                                            <p class="<?= $dfest ?>"><?= $df ?></p>
                                            <p class="<?= $cfest ?>"><?= $cf ?></p>
                                            <p class="<?= $fiest ?>"><?= $fi ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="twelve columns">
                                            <hr>
                                            <a href="<?= base_url() ?>gestalt">Volver</a>
                                        </div>
                                    </div>
                                </section>
                            </section>
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