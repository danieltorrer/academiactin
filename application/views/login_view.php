<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">
            <header id="top" role="banner">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <h1 class="block-title">Book Title</h1>
                            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                        </div>
                    </div>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <h2 class="block-title">Dashboard</h2>
                    <ul>
                        <li class="is-active">
                            <a href="#">Seccion 1</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 2</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 3</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 4</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 5</a>
                        </li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </div>
            </nav>

            <div id="main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="six centered columns">
                            <?php echo form_open('academia'); ?>  

                            <fieldset>  
                                <legend>Inicia Sesión</legend>
                                <label for="error">Correo electrónico:</label>
                                <input type="text" placeholder="correo@host.com" name="email">
                                <small id="errorc" style="color:red"><?php echo form_error('email'); ?></small>
                                <label for="error">Contraseña:</label>
                                <input type="password" name="pass">
                                <small id="errorp" style="color:red"><?php echo form_error('pass'); ?></small>
                                <input type="submit" class="button secondary radius" value="Iniciar Sesión">
                            </fieldset>  

                            <? echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!--Footer -->


        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>

</body>
</html>