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

<script type="text/javascript">  
			
    jQuery(function($){				
        $('.circle').mosaic({
            opacity :	0.8			//Opacity for overlay (0-1)
        });
				
        $('.fade').mosaic();
				
        $('.bar').mosaic({
            animation	:	'slide'		//fade or slide
        });
				
        $('.bar2').mosaic({
            animation	:	'slide'		//fade or slide
        });
				
        $('.bar3').mosaic({
            animation	:	'slide',	//fade or slide
            anchor_y	:	'top'		//Vertical anchor position
        });
				
        $('.cover').mosaic({
            animation	:	'slide',	//fade or slide
            hover_x		:	'400px'		//Horizontal position on hover
        });
				
        $('.cover2').mosaic({
            animation	:	'slide',	//fade or slide
            anchor_y	:	'top',		//Vertical anchor position
            hover_y		:	'80px'		//Vertical position on hover
        });
				
        $('.cover3').mosaic({
            animation	:	'slide',	//fade or slide
            hover_x		:	'400px',	//Horizontal position on hover
            hover_y		:	'300px'		//Vertical position on hover
        });
		    
    });
		    
</script>
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

                            <div class="twelve columns">
                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="<?= base_url() ?>media/img/ctin.png"/></div>
                                    <a href="http://www.desktopped.com/featured/2010/12/mounted-imac-and-desk-mod-with-computer-components-built-in/" target="_self" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Introducción</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="<?= base_url() ?>media/img/enea.png"/></div>
                                    <a href="<?= base_url() ?>academia/cartas" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Eneagrama</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="<?= base_url() ?>media/img/gestalt.png"/></div>
                                    <a href="<?=base_url()?>academia/gestalt" target="_self" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Prueba Gestalt</h4>
                                        </div>
                                    </a>
                                </div>	

                                <!--Bar 2-->
                            </div>
                            <div class="twelve columns">

                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="http://buildinternet.s3.amazonaws.com/projects/mosaic/imac.jpg"/></div>
                                    <a href="http://www.desktopped.com/featured/2010/12/mounted-imac-and-desk-mod-with-computer-components-built-in/" target="_self" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Anticurriculum</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="http://buildinternet.s3.amazonaws.com/projects/mosaic/imac.jpg"/></div>
                                    <a href="http://www.desktopped.com/featured/2010/12/mounted-imac-and-desk-mod-with-computer-components-built-in/" target="_self" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Examen disciplinar</h4>
                                        </div>
                                    </a>
                                </div>

                                <div class="mosaic-block cover four columns">
                                    <div class="mosaic-overlay"><img src="<?= base_url() ?>media/img/conocimientos.png"/></div>
                                    <a href="<?= base_url() ?>biblioteca/index" target="_self" class="mosaic-backdrop">
                                        <div class="details">
                                            <h4>Base de Conocimientos</h4>
                                        </div>
                                    </a>
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
