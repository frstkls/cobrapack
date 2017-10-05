<? snippet('header') ?>

<main class="contact">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
    <hr />
    <? snippet('contactform') ?>
</main>

<? snippet('footer') ?>
