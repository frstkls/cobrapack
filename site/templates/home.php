<? snippet('header') ?>
    <div id="wrap">
        <main class="home">
            <div class="container">
            	<div class="homeintro"><?= $page->intro() ?></div>	
                <div class="row homeproducts">
                    <?php
                    $products = page('products')->children();
                    foreach($products as $product): ?>
                        <div class="col-md-4 homeproduct">
                            <div class="homeproductinner">
                                <?php $image = $product->productmainimage()->toFile(); ?>                                
                                <a href="<?php echo $product->url() ?>">
                                    <img src="<?php echo $image->url() ?>">
                                    <h3><?php echo $product->producttitle() ?></h3>
                                </a>
                            </div>            
                        </div>
                    <?php endforeach ?>
                </div>
                
                <!--
                <hr>
                <h3>Nieuws</h3>
                -->
                <div class="row homenieuws">
                    <?php
                    $nieuws = $page->nieuws()->yaml();
                    foreach($nieuws as $nieuwsbericht): ?>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-4 nieuwsbeeld">
                                    <?php if($image = $page->image($nieuwsbericht['nieuwsafbeelding'])) echo thumb($image, array('width' => 150, 'height' => 100)); ?> 
                                </div>  
                                <div class="col-md-8 nieuwsbericht">
                                    <h4><?php echo $nieuwsbericht['nieuwstitel'] ?></h4>
                                    <?php echo $nieuwsbericht['nieuwstekst'] ?>
                                </div>
                            </div>                                        
                        </div>
                    <?php endforeach ?>
                </div>
                <hr>


                <?= $page->text()->kirbytext() ?>
            </div>       
            <div class="calltoaction">
                <h3>Paletten te koop?</h3>
                <p>Contacteer ons! Bel ons op 069/84.34.82 of e-mail ons via <a href="mailto:info@cobrapack.be">info@cobrapack.be</a></p>
                <div class="btnmargin"><button type="button" class="btn btn-secondary btn-lg"><a href="tekoop">Contacteer ons</a></button></div>
            </div>
        </main>
    </div> <!-- wrap -->
<? snippet('footer') ?>
