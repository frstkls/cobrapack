<? snippet('header') ?>
<main class="home">
    <div class="container">
        <div class="row">
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
        <?= $page->text()->kirbytext() ?>
    </div>
</main>

<? snippet('footer') ?>
