<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if($site->language()->code() == 'nl'): ?>
          <a class="navbar-brand" href="<?= $site->url($site->language()->code()) ?>"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-nl.png' ?>" alt="Cobrapack"></a>
        <?php else: ?>
          <a class="navbar-brand" href="<?= $site->url($site->language()->code()) ?>/fr"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-fr.png' ?>" alt="Cobrapack"></a>
        <?php endif ?>
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php

        // nested menu
        $items = $pages->visible();

        // only show the menu if items are available
        if($items->count()):

        ?>

          <ul class="nav navbar-nav">
            

          <?php $items = $pages->visible(); if($items->count()): ?>
            <?php foreach($items as $item): ?>
              <li <?php e($item->isOpen(), ' class="active" ') ?> >   
                <?php if($item->hasChildren()): ?>
                  <a href="<?= $item->url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?= $item->title()->html() ?>
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach($item->children()->visible() as $item): ?>
                      <li>
                        <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
                      </li>
                    <?php endforeach ?>
                  </ul>
                <?php else: ?>
                  <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                <?php endif ?>
              </li>
            <?php endforeach ?>
        <?php endif ?>



            <li class="nav-right">
                <ul>          
                  <?php foreach($site->languages() as $language): ?>
                  <li<?php e($site->language() == $language, ' class="active"') ?>>
                  <a href="<?php echo $page->url($language->code()) ?>">
                  <?php echo html($language->name()) ?>
                  </a>
                  </li>
                  <?php endforeach ?>
                </ul>      
            </li>
          </ul>
        <?php endif ?>
      </div><!-- /.navbar-collapse -->
  </div>
</nav>






