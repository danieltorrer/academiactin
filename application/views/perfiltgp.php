<html class="no-js" lang="en">
    <head>

        <?php
        $base = base_url();
        require 'media/php/lessc.inc.php';
        $carpeta_in = "media/less/";
        $carpeta_out = "media/css/";
        $est = 'tgpstyle';
        lessc::ccompile($carpeta_in . $est . '.less', $carpeta_out . $est . '.css');
        ?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>TGP</title>
        <link rel="stylesheet" href="<?= base_url() ?>media/css/<?= $est ?>.css">
        <link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
        <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
        <script src="<?= base_url() ?>media/js/foundation/modernizr.foundation.js"></script>
    </head>
    <body>
        <div id="contenedorGral">
            <header>
                <div class="row" id="encabezado">
                    <div class="twelve">
                        <div id="logo">
                            <a href="#"><img src="<?= base_url() ?>media/img/CTIN.png"></a>
                            <a href="#" class="isocial"><img src="<?= base_url() ?>media/img/twitter_32.png"></a>
                            <a href="#" class="isocial"><img src="<?= base_url() ?>media/img/facebook_32.png"></a>
                        </div>
                    </div>
                </div>	
            </header>
            <section id="titulo">
                <div class="row">
                    <div class="twelve columns" >
                        <h1><small>Academia CTIN</small></h1><span><h2><small>TGP</small></h2></span>
                    </div>
                </div>
            </section>
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
    </body>
</html>