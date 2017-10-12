<?php snippet('header') ?>

  <main class="main" role="main">
  	<div class="container">
	    <header>
			<h1><?= $page->pagetitle()->html() ?></h1>   								
	    </header>	
			<div class="row">
				<div class="col-md-6">
					<div class="contactform">				
							<form action="<?php echo $page->url() ?>#form" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Naam</label>
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
									<label>Bericht</label>
									<textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>
								</div>

								<?php echo csrf_field() ?>
								<?php echo honeypot_field() ?>

								<input type="submit" value="Verzend">
							</form>
							<?php if ($form->success()): ?>
								We hebben je bericht goed ontvangen en komen zo snel mogelijk bij je terug!
								<a name="form"></a>
							<?php else: ?>
								<?php snippet('uniform/errors', ['form' => $form]) ?>					
							<?php endif; ?>								
					</div>
				</div>
				<div class="col-md-3">
					<h2>Cobrapack</h2>
					Rue du Mont des Carliers 2/Z<br />7522 Tournai
				</div>
				<div class="col-md-3">
					<h2>Cobrapack</h2>
					Rue du Mont des Carliers 2/Z<br />7522 Tournai
				</div>
			</div>
	</div>
  </main>

<?php snippet('footer') ?>