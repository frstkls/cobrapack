<? snippet('header') ?>
<main class="default">	
	<div class="container">
	    <h1><?= $page->titel()->html() ?></h1>
	    
	    <div class="flickity-carousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false, "freeScroll": true, "wrapAround": true }'>
		    <?php foreach($page->images() as $pic): ?>
				<img src="<?php echo $pic->url() ?>" alt="<?php echo $pic->title() ?>" /> 
		    <?php endforeach ?>
		</div>
		<?= js('assets/js/vendor/flickity.pkgd.js') ?>

		<div class="product__description">
			<h2><?= $page->producttitle() ?></h2>
			<?= $page->text()->kirbytext() ?>
		</div>
	    </div>
    </div>
</main>

<? snippet('footer') ?>
