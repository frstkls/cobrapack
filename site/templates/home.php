<? snippet('header') ?>
<div id="wrap">
    <main class="home">
    	<?= $page->intro() ?>	
        <h1><?= $page->title()->html() ?></h1>
        <div class="row">
        	<?php 
            $products = $page->products()->yaml();
            foreach($page->products() as $product): ?>
        	<div class="col-md-4 homeproduct">
        		<h3><?= $product->titel() ?></h3>
        	</div>
        	<?php endforeach ?>
        </div>
        <?= $page->text()->kirbytext() ?>       
    </main>
</div>
<? snippet('footer') ?>
