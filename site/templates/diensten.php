<? snippet('header') ?>
    <div id="wrap">
        <main class="home">
            <div class="container">
                <div class="row">
                    <?php
                    $diensten = $page->diensten()->yaml();
                    foreach($diensten as $dienst): ?>
                        <div class="col-md-6 dienst">
                            <div>
                                <?php if($image = $page->image($dienst['dienst_beeld'])) echo thumb($image, array('width' => 800, 'height' => 500, 'crop' => true)); ?>
                                <h3><?php echo $dienst['dienst_titel'] ?></h3>
                                <?php echo $dienst['dienst_tekst'] ?>
                            </div>            
                        </div>
                    <?php endforeach ?>
                    
                </div>
                
                <!--
                <hr>
                <h3>Nieuws</h3>
                -->
                <div class="homemain"><?= $page->text()->kirbytext() ?></div>
            </div>       

        </main>
    </div> <!-- wrap -->
<? snippet('footer') ?>
