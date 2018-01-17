<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->title()->html() ?> -
            <? if ($page->titlesuffix() != ''): ?>
                <?= $page->titlesuffix()->html() ?>
                <? else: ?>
                   <?= $site->titlesuffix()->html() ?>
            <? endif ?>
            &#124;&nbsp;<?= $site->title()->html() ?>
        </title>
        <meta name="author" content="<?= $site->author()->html() ?>">
        <? if ($page->description() != ''): ?>
            <meta name="description" content="<?= $page->description()->html() ?>">
            <? else: ?>
                <meta name="description" content="<?= $site->description()->html() ?>">
        <? endif ?>
        <meta name="robots" content="index, follow">
        <link rel="author" href="humans.txt">
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <?= css('assets/css/main.min.css') ?>
        <?= css('assets/css/animate.css') ?>
        <?= css('assets/font-awesome/css/font-awesome.min.css') ?>
        <?= css('assets/css/jquery.eeyellow.Timeline.css') ?>
        
  <link rel='stylesheet prefetch' href='https://npmcdn.com/flickity@2/dist/flickity.css'>
        <?= js('assets/js/vendor/jquery.min.js') ?>
        <?= js('assets/js/vendor/plugins.min.js') ?>    
        <?= js('assets/js/onload.js') ?>   

        <!--
        <script type='text/javascript'>
        /* <![CDATA[ */
        var ssb_ui_data = {"z_index":"1"};
        /* ]]> */
        </script>    
        <?= js('assets/js/vendor/ssb-ui-js.js') ?> 
        -->
        
        <?= js('assets/js/vendor/formscript.js') ?> 
        <?= js('assets/js/vendor/isotope.pkgd.min.js') ?>
        <?= js('assets/js/vendor/packery-mode.pkgd.min.js') ?>
        <?= js('assets/js/vendor/masonry.pkgd.min.js') ?>

        <?= js('assets/js/vendor/imagesloaded.pkgd.min.js') ?>
        <?= js('assets/js/vendor/jquery-imagefill.js') ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <? snippet('favicons') ?>
    </head>
    <body class="<?php echo $page->template() ?>">
            <? snippet('ssb') ?>
            <? snippet('navbar') ?>
    