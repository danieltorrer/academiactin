<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<style type="text/css">
    #eneatipos{
        margin-top: 50px;
    }

    .enea{
        height: 100px;
    }
</style>
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
                <div class="container" id="eneatipos">
                        <div class="row" >
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/1">Eneatipo 1</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/2">Eneatipo 2</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/3">Eneatipo 3</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/4">Eneatipo 4</a>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/5">Eneatipo 5</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/6">Eneatipo 6</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/7">Eneatipo 7</a>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/8">Eneatipo 8</a>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="three columns">
                                <div class="enea">
                                    <a href="<?= base_url() ?>biblioteca/eneatipo/9">Eneatipo 9</a>
                                </div>
                            </div>
                            <div class="nine columns"></div>
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
