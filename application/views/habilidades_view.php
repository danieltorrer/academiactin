<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/mosaic.css">

<script src="<?= base_url() ?>media/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/media/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>media/js/mosaic.1.0.1.min.js"></script>

<style>
	ul li{
		list-style: none;
	}
</style>

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
                            <li class="is-active">
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
                                <a href="<?= base_url() ?>gestalt/">Prueba gestalt</a>
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
					<div class="row">
						<div class="twelve columns">
							<h3>Hisotiras</h3>
							<h5>Contesta los siguientes bla bla bla</h5>
						</div>

						<div class="four columns">
							<ul>
								<li><a href="habilidades/caso/1">Historia</a></li>
								<li><a href="habilidades/caso/2">Historia</a></li>
								<li><a href="habilidades/caso/3">Historia</a></li>
							</ul>
						</div>

						<div class="four columns">
							<ul>
								<li><a href="habilidades/caso/4">Historia</a></li>
								<li><a href="habilidades/caso/5">Historia</a></li>
								<li><a href="habilidades/caso/6">Historia</a></li>
							</ul>
						</div>

						<div class="four columns">
							<ul>
								<li><a href="habilidades/caso/7">Historia</a></li>
								<li><a href="habilidades/caso/8">Historia</a></li>
								<li><a href="habilidades/caso/9">Historia</a></li>
							</ul>
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
