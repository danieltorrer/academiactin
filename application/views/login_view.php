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
                            <h1 class="block-title">Academia CTIN</h1>
                        </div>
                    </div>
                </div>
            </header>

            <div id="main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="six centered columns">
                            <?php echo form_open('academia/login'); ?>  
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