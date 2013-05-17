<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/foundation.min.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/cartas.css">

</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">
            <div class="contenedor">
                <header id="top" role="banner">
                    <div class="block">
                        <div class="container">
                            <div class="row">
                                <h1 class="block-title">Eneagrama</h1>
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
                                <a href="<?= base_url() ?>gestalt">Prueba gestalt</a>
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
                    <div class="container borrar">
                        <h5>Para confirmar, selecciona la carta que MENOS se relacione contigo de las siguientes:</h5>
                        <?php
                        //
                        //var_dump($resultado);
                        for ($i = 0; $i < count($resultado); $i++) {

                            if ($i % 4 == 0) {
                                echo '<div class="row">';
                            }
                            echo "<div class='three columns'>";
                            echo '<div class="carta-eliminar" data-nombre="' . $resultado[$i]["nombre"] . '" data-id="' . $resultado[$i]["id"] . '" data-numero="' . $resultado[$i]["numero"] . '">';
                            echo "<h4>" . $resultado[$i]["nombre"] . "</h4>";
                            echo '<a class="secondary button del">Eliminar</a>';
                            echo "</div>";
                            echo "</div>";


                            if ($i % 4 == 3) {
                                echo ' </div>';
                            }
                        }
                        ?>
                        <div>
                            <a id="aceptar-btn" class="button">Aceptar</a>
                        </div>
                        <img id="paloma" src="<?= base_url() ?>media/img/paloma.jpg" style="display:none">
                    </div>
                </div>
                <?php
                $atributos = array('id' => 'borrarform');
                ?>
                <?php echo form_open('academia/?', $atributos); ?>
                <input type="hidden" name="ids" id="ids">
                <input type="hidden" name="nombres" id="nombres">
                <?php echo form_close() ?>
            </div>
        </div>

    </div>
    <!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->

<script src="<?= base_url() ?>media/js/main.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var nombres="", ids="";
        $(".del").click(function(){
            $(this).parent().remove();
            $(".del").remove();
            $("#paloma").show();
        });

        $("#paloma").click(function(){
            $.each($(".cartita"),function(){
                //alert($(this).attr("data-nombre"));
                nombres = nombres + $(this).attr("data-nombre")+",";
                ids = ids + $(this).attr("data-id")+",";
            });
            alert(nombres);
            alert(ids);
            
        });
    });
</script>

</body>
</html>
