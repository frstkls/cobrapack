<?php snippet('header') ?>

  <main class="main" role="main">
  	<div class="container">
		<h1><?= $page->title()->html() ?></h1>   								
		<?= $page->text()->kirbytext() ?>
		<div class="contactform">				
				<form enctype="multipart/form-data" action="<?php echo $page->url() ?>#form" method="POST">
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
					<div class="form-group">
						<label>Upload een foto</label>
						<input type="file" name="filefield" required/>
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
  </main>

<?php snippet('footer') ?>