<?php

class Generador {

    public function Genera_Random() {
        $max_col = 12;
        $rest = $max_col;
        ?>
        <div id="container">
            <?php
            for ($i = 0; $i < 10; $i++):
                $cols = rand(2, $rest);
                while ($cols > 6):
                    $cols = rand(2, $rest);
                endwhile;
                ?>
                <div class="item well span<?= $cols ?>"> 
                    <?php
                    $rest = $rest - $cols;
                    ?>
                    <img src="<?= base_url() ?>img/galeria/288496073_2c22d5ddcd_b.jpg" style="width:80%;"/></div><?php
            if ($rest <= 1)
                $rest = 12;
        endfor;
                ?></div><?php
    }

    public function Genera_Galeria() {
        $max_col = 12;
        $rest = $max_col;
                ?>
        <div id="container">
            <?php
            for ($i = 0; $i < 10; $i++):
                $cols = rand(1, 3);
                if ($cols == 1) {
                    $tam = "span3";
                } elseif($cols==2) {
                    $tam = "span4";
                }
                else{
                    $tam = "span5";                    
                }
                ?>
                <div class="item <?=$tam?>" style="padding-top:5px;"> 
                    <img src="<?= base_url() ?>img/galeria/288496073_2c22d5ddcd_b.jpg" class="imagen-galeria-m"/>
                </div><?php
            if ($rest <= 1)
                $rest = 12;
        endfor;
            ?></div><?php
    }

}
    ?>
