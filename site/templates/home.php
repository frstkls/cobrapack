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
                <div class="row hometroeven">
                    <?php
                    $troeven = $page->troeven()->yaml();
                    foreach($troeven as $troef): ?>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                        <span class="fa-stack fa-lg fa-5x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-<?php echo $troef['icoon'] ?> fa-stack-1x fa-inverse"></i>
                                        </span>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <h3><?php echo $troef['troeftitel'] ?></h3>
                                    <?php echo $troef['troefomschrijving'] ?>
                                        
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <?= $page->text()->kirbytext() ?>
            </div>       
            <div class="calltoaction">
                <h3>Interesse in onze producten?</h3>
                <p>Aenean id laoreet magna. Ut ut pulvinar purus. Nunc vel nisl at nibh cursus blandit.</p>
                <div class="btnmargin"><button type="button" class="btn btn-secondary btn-lg">Contacteer ons</button></div>
            </div>
        </main>
    </div> <!-- wrap -->
<? snippet('footer') ?>
