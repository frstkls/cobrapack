<? snippet('header') ?>
    <div id="wrap">
        <main>
            <div class="container">
                <h1><?= $page->title()->html() ?></h1>
                <div class="row">
                    <?php
                    $werknemers = $page->werknemers()->yaml();
                    foreach($werknemers as $werknemer): ?>
                    <div class="col-md-3 col-lg-3 col-sm-6 werknemer">
                    <?php if($image = $page->image($werknemer['werknemerafbeelding'])) echo thumb($image, array('width' => 360, 'height' => 500, 'crop' => true)); ?>
                    <h4><?php echo $werknemer['werknemernaam'] ?></h4>                                   
                    <p><?php echo $werknemer['werknemertekst'] ?></p>                                   
                    <p><a href="mailto:<?php echo $werknemer['werknemeremail'] ?>"><?php echo $werknemer['werknemeremail'] ?></a></p>                                   
                    </div>
                    <?php endforeach ?>
                </div>
                <?= $page->text()->kirbytext() ?>
            </div>       
        </main>
    </div> <!-- wrap -->
<? snippet('footer') ?>
