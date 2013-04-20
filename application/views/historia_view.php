
<?php
$this->load->view("header");
?>
<script src="<?= base_url() ?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<link rel="stylesheet" href="<?= base_url() ?>media/css/historias.css">

<script src="<?= base_url() ?>media/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/media/js/jquery.js"></script>
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
                                <p>Lee atentamente el caso y elige la respuesta que te parezca más adecuada.<p>
                                <p><?= $historia["ihist"] ?></p>
                            </div>
                        </div>

                        <div class="row">

                            <form id="formpersona">
                                <h4>Cada integrante del equipo dice lo siguiente</h4>
                                <h5>¿Quien tiene la razon?</h5>
                                <?php
                                $limite = count($personajes);
                                $i = 1;
                                $clase = "";
                                while ($i <= $limite) {
                                    if ($i == $limite)
                                        $clase = "end";
                                    ?>

                                    <div class="six columns persona <?= $clase ?>" id="persona<?= $i ?>">
                                        <div class="row">
                                            <div class="four columns">
                                                <img  src="http://placehold.it/200/">
                                            </div>

                                            <div class="eight columns">
                                                <label><p>
                                                        <input type="radio" name="opcion" value="<?= $personajes[$i]['Valor'] ?>">
                                                        <?= $personajes[$i]['P_Vista'] ?>
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>

                                <input id="respuestabtn" class="button right" type="submit" value="Enviar">
                            </form>
                        </div>


                        <div id="soluciones" class="row hide">
                            <h3>¿Cual es la mejor solucion?</h3>
                            <?php
                            $num = Array();
                            reset($num);
                            for ($i = 1; $i <= 4; $i++) {
                                $num[$i] = rand(1, 4);
                                if ($i > 1) {
                                    for ($x = 1; $x < $i; $x++) {
                                        if ($num[$i] == $num[$x]) {
                                            $i--;
                                            break;
                                        }
                                    }
                                }
                            }
                            foreach ($num as $valor) {
                                ?>
                                <div class="six columns solucion">
                                    <label><p>
                                            <input type="radio" name="solucion" value="<?= $personajes[$valor]['Valor'] ?>">
                                            <?= $personajes[$valor]['Solucion'] ?>
                                        </p></label>
                                </div>
                            <?php }
                            ?> 
                            <a id="solucionbtn" class="button right" href="#">Enviar</a>
                        </div>

                        <div>
                            <input type="hidden" id="inputpersona" name="inputpersona">
                            <input type="hidden" id="inputsolucion" name="inputsolucion">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#respuestabtn").click(function(){
                $("#inputpersona").val($('input[@name="opcion"]:checked').val())
                console.log($('input[@name="opcion"]:checked').val())
                $("#formpersona").addClass("hide")
                $("#soluciones").removeClass("hide")
                $("#soluciones").addClass("show")
                //$("#respuestabtn").attr('disabled','disabled');
                return false;
            })
            
            $("#solucionbtn").click(function(){
                $("#inputsolucion").val($('input[@name="solucion"]:checked').val())
                console.log($('input[@name="solucion"]:checked').val())
                
                console.log($("#inputpersona").val() + "," + $("#inputsolucion").val() )
                return false;
            })  
            
        })
    </script>

</body>
</html>
