<? snippet('header') ?>

<main class="default">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
</main>

<? snippet('footer') ?>
