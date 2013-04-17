<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		$this->load->view("header");
		?>
		<script src="<?= base_url() ?>media/js/modernizr.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
		<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>media/css/historias.css">

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
                    <div class="container">
                        <div class="row">
							<div class="twelve columns historia">
								<p>Lee atentamente los casos y elige la bla bla<p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							</div>

							<h4>Cada integrante del equipo dice lo siguiente</h4>						

							<div class="row">
								<div class="four columns persona">
									<img class="imgnormal" src="http://placehold.it/300x300/000">
									<img class="hover" src="http://placehold.it/300/fff">
								</div>
								<div class="four columns persona">
									<img class="imgnormal" src="http://placehold.it/300x300/000">
									<img class="hover" src="http://placehold.it/300/fff">
								</div>
								<div class="four columns persona">
									<img class="imgnormal" src="http://placehold.it/300x300/000">
									<img class="hover" src="http://placehold.it/300/fff">
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

</body>
</html>
