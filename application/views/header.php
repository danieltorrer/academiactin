<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width" />

        <?php
        $base = base_url();
        require 'media/php/lessc.inc.php';
        $carpeta_in = "media/less/";
        $carpeta_out = "media/css/";
        $est = 'lessestilos';
        lessc::ccompile($carpeta_in . $est . '.less', $carpeta_out . $est . '.css');
        ?>
        <link rel="stylesheet" href="<?= $base; ?>/media/css/foundation.min.css">
        <link rel="stylesheet" href="<?= $base; ?>/media/css/estiloPlantilla.css">
        <link rel="stylesheet" href="<?= $base; ?>/media/css/lessestilos.css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,300italic' rel='stylesheet' type='text/css'>
        <script src="<?= $base; ?>/media/js/foundation/modernizr.foundation.js"></script>