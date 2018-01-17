<? snippet('header') ?>
<main class="default">	
	<div class="container">
	    <h1><?= $page->titel()->html() ?></h1>
	    
	    <div class="mycarousel" data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>

		    <?php foreach($page->images() as $pic): ?>
		    <div class="carousel-cell">
		     <img src="<?php echo $pic->url() ?>" alt="<?php echo $pic->title() ?>" /> 
		    </div>
		    <?php endforeach ?>

		</div>
		<script>
			// external js: flickity.pkgd.js

var $mycarousel = $('.mycarousel').flickity({
imagesLoaded: true,
percentPosition: false,
});

var $imgs = $mycarousel.find('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
'transform' : 'WebkitTransform';
// get Flickity instance
var flkty = $mycarousel.data('flickity');

$mycarousel.on( 'scroll.flickity', function() {
flkty.slides.forEach( function( slide, i ) {
var img = $imgs[i];
var x = ( slide.target + flkty.x ) * -1/3;
img.style[ transformProp ] = 'translateX(' + x  + 'px)';
});
});

		</script>
        <?= js('assets/js/vendor/flickity.pkgd.js') ?>
		<h2><?= $page->producttitle() ?></h2>
		<?= $page->text()->kirbytext() ?>

	    </div>
    </div>
</main>

<? snippet('footer') ?>
