<?php snippet('header') ?>
  	<main class="main" role="main">
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
  		<div class="container">
		    <header>
				<h1><?= $page->pagetitle()->html() ?></h1>   								
		    </header>	
		    <h3>Contacteer ons</h3>	
			<div class="row">
				<div class="col-md-8 contactcolumn">
					<div class="contactform">				
							<form action="<?php echo $page->url() ?>#form" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label><?php echo l::get('naam') ?></label>
											<input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>E-mail</label>
										<input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label><?php echo l::get('bericht') ?></label>
									<textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>
								</div>

								<?php echo csrf_field() ?>
								<?php echo honeypot_field() ?>

								<input type="submit" value="<?php echo l::get('verzend') ?>">
							</form>
							<?php if ($form->success()): ?>
								<div class="succes">We hebben je bericht goed ontvangen en komen zo snel mogelijk bij je terug!</div>
								<a name="form"></a>
							<?php else: ?>
								<?php snippet('uniform/errors', ['form' => $form]) ?>					
							<?php endif; ?>								
					</div>
				</div>
				<div class="col-md-4 contactadres">
					<h2>Cobra Packaging & Recycling</h2>
					Rue du Mont des Carliers 2/Z<br />7522 Tournai<br /><br />+32 (0) 69 84 34 82<br /><br /><br /><br />
	
					<h2>Maro Recycling</h2>
					Sint-Eloois-winkelstraat 127<br />8880 Ledegem<br /><br />+32 (0) 56 50 06 72
				</div>
			</div>
			<?php snippet('maps') ?>
		</div>	

  	</main>
<?php snippet('footer') ?>