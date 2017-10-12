<? snippet('header') ?>

<main class="default">
	<div class="container">
	    <h1><?= $page->title()->html() ?></h1>
	    <?= $page->text()->kirbytext() ?>
	<div class="container">
</main>

<? snippet('footer') ?>
