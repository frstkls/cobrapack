<? snippet('header') ?>

<main class="home">
	<div class="home-intro"><?= $page->intro() ?></div>
    <div class="row homeproducts">
        <?php 
        $producten = $page->producten()->yaml();
        foreach($producten as $product): ?>
        <div class="col-md-4 homeproduct">
            <?php if($image = $page->image($product['afbeelding'])) echo $image->html() ?>
            <h3><?php echo $product['naam'] ?></h3>
        </div>
        <?php endforeach ?>
    </div>    
    <div class="row hometroeven">
    	<?php 
        $troeven = $page->troeven()->yaml();
        foreach($troeven as $troef): ?>
    	<div class="col-md-6">
            <div class="row">
                <div class="col-md-5">   
                    <i class="fa fa-<?php echo $troef['icoon'] ?> fa-4x iconround" ></i>
                </div> 
                <div class="col-md-7">   
                    <h2><?php echo $troef['troeftitel'] ?></h2>
            		<?php echo $troef['troefomschrijving'] ?>
                </div>
            </div>
    	</div>
    	<?php endforeach ?>
    </div>

    <?= $page->text()->kirbytext() ?>
    
</main>

<? snippet('footer') ?>
