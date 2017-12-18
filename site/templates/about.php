<? snippet('header') ?>
    <div id="wrap">
        <main>
            <div class="container">
                <div class="row">
                    <?php
                    $werknemers = $page->werknemers()->yaml();
                    foreach($werknemers as $werknemer): ?>
                    <div class="col-md-4 col-lg-4 col-sm-4 werknemer">
                    <?php if($image = $page->image($werknemer['werknemerafbeelding'])) echo $image->html() ?>
                    <h4><?php echo $werknemer['werknemernaam'] ?></h4>                                   
                    <p><?php echo $werknemer['werknemertekst'] ?></p>                                   
                    </div>
                    <?php endforeach ?>
                </div>
                <?= $page->text()->kirbytext() ?>
            </div>       
        </main>
    </div> <!-- wrap -->
<? snippet('footer') ?>
