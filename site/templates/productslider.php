<? snippet('header') ?>
<main class="default">	
	<div class="container">
	    <h1><?= $page->titel()->html() ?></h1>
	    <div class="productslider">

				<div id="carousel-example-generic" class="carousel slide">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				<?php $slides = $page->slides()->yaml(); $n=0; foreach($slides as $slide): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $n; $n++; ?>" class="<?php if($n==1) echo ' active' ?>">
				<!-- Show a Number for the Indicator -->
					<?php echo $n; ?>
				</li>
				<?php endforeach ?>				
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				<?php $slides = $page->slides()->yaml(); $n=0; foreach($slides as $slide): $n++; ?>
				<div class="item<?php if($n==1) echo ' active' ?>">
					<img src="<?php if($image = $page->image($slide['slide'])) echo $image->url() ?>" alt="<?php if($image = $page->image($slide['slide'])) echo $image->title() ?>" class="img-responsive" />
					<div class="carousel-caption">
						<?php echo $slide['caption'] ?>
					</div>
				</div>
				<?php endforeach ?>
				</div>		
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="icon-next"></span>
				</a>
				</div>
		</div>

		<h2><?= $page->producttitle() ?></h2>
		<?= $page->text()->kirbytext() ?>

	    </div>
    </div>
</main>

<? snippet('footer') ?>
