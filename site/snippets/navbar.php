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
          <a class="navbar-brand" href="<?php echo $site->url() ?>"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-nl.png' ?>" alt="Cobrapack"></a>
        <?php else: ?>
          <a class="navbar-brand" href="<?php echo $site->url() ?>/fr"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-fr.png' ?>" alt="Cobrapack"></a>
        <?php endif ?>
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <? foreach($pages->visible() as $p): ?>
                        <li <? e($p->isOpen(), ' class="active"') ?>>
                            <a href="<?= $p->url() ?>">
                                <?= $p->title()->html() ?>
                            </a>
                        </li>
            <? endforeach ?>
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
      </div><!-- /.navbar-collapse -->
  </div>
</nav>






