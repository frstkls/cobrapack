<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/cobra-logo.png' ?>" alt="Cobrapack"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="navbar-wrap">
          <ul class="nav navbar-nav">
           <? foreach($pages->visible() as $p): ?>
                        <li <? e($p->isOpen(), ' class="active"') ?>>
                            <a href="<?= $p->url() ?>">
                                <?= $p->title()->html() ?>
                            </a>
                        </li>
           <? endforeach ?>
          </ul>
        </div>
      </div><!-- /.navbar-collapse -->
  </div>
</nav>






