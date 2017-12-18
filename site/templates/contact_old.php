<? snippet('header') ?>

<main class="contact">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
    <hr />
    test
    <? snippet('contactform') ?>
</main>

<? snippet('footer') ?>
