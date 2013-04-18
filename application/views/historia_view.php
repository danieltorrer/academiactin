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
                        <p>Lee atentamente el caso y elige la respuesta que te parezca más adecuada.<p>
                            <p><?=$historia["ihist"]?></p>
                        </div>

                        <h4>Cada integrante del equipo dice lo siguiente</h4>			

                        <div class="row personas">
                            <?php 
                            $limite=count($personajes);
                            $i=1;
                            while ($i<=$limite){
                                if($i==$limite):?>
                                <div class="three columns persona end" id="persona<?=$i?>">
                                    <?php
                                    else:?>
                                    <div class="three columns persona" id="persona<?=$i?>">
                                        <?php
                                        endif;?>
                                        <img class="imgnormal" src="http://placehold.it/200/000">
                                        <img class="hover" src="http://placehold.it/200/">
                                    </div>
                                    <?php
                                    $i++;
                                }?>			
                            </div>

                            <div class="row">
                                <?php 
                                $limite=count($personajes);
                                $i=1;
                                while ($i<=$limite):?>
                                <div id="respuestapersona<?=$i?>" class="ten offset-by-one end columns respuesta">
                                   <p><?=$personajes[$i]['P_Vista']?></p>
                                   <a class="button">Estoy de acuerdo con este punto de vista.</a>
                               </div>
                               <?php
                               $i++;
                               endwhile;
                               ?>

                           </div>
                           <div class="row">
                            <div id="soluciones" class="ten offset-by-one end">
                                <?php

                                $num = Array();
                                reset($num);
                                for($i=1;$i<=4;$i++) 
                                {
                                    $num[$i]=rand(1,4);
                                 if($i>1) 
                                 {
                                     for($x=1; $x<$i; $x++)
                                     {
                                       if($num[$i]==$num[$x]) 
                                       { 
                                         $i--; 
                                         break; 
                                     }
                                 }
                             }
                         }
                         foreach($num as $valor) 
                         {?>
                            <p><input type="radio" name="solucion" value="<?=$personajes[$valor]['Valor']?>"><?=$personajes[$valor]['Solucion']?></p>
                         <?php }
                         ?> 
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
    $(".persona").click(function(){
       $(".respuesta").removeClass("show")
       var id = "respuesta" + $(this).attr("id")
       id = "#"+ id + ""
       $(id).addClass('show')
   })
})
 </script>

</body>
</html>

</body>
</html>
