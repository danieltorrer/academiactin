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
            <div class="contenedor">
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

                        <?php
                        //
                        //var_dump($resultado);
                        for ($i = 0; $i < count($resultado); $i++) {

                            if ($i % 4 == 0) {
                                echo '<div class="row">';
                            }

                            echo '<div class="three columns" data-nombre="' . $resultado[$i]["id"] . '" data-id="' . $resultado[$i]["nombre"] . '" data-numero="' . $resultado[$i]["numero"] . '">';
                            echo "<h6>" . $resultado[$i]["id"] . "</h6>";
                            echo "</div>";


                            if ($i % 4 == 3) {
                                echo ' </div>';
                            }
                        }
                        ?>
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
