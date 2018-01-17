		<div id="carousel-example-generic" class="carousel slide pageslider" data-interval="4000" data-ride="carousel">
			<!-- Indicators 
				<ol class="carousel-indicators">
				<?php $slides = $page->slides()->yaml(); $n=0; foreach($slides as $slide): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $n; $n++; ?>" class="<?php if($n==1) echo ' active' ?>">
					<?php echo $n; ?>
				</li>

				<?php endforeach ?>
			-->				
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			<?php $slides = $page->slides()->yaml(); $n=0; foreach($slides as $slide): $n++; ?>
			<div class="item<?php if($n==1) echo ' active' ?>">
				<img src="<?php if($image = $page->image($slide['slide'])) echo $image->url() ?>" alt="<?php if($image = $page->image($slide['slide'])) echo $image->title() ?>" class="img-responsive" />
			</div>
			<?php endforeach ?>
			</div>		
			<!-- Controls 
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="icon-next"></span>
			</a> -->
		</div>