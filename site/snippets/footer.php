            
        </div> <!-- .container -->
        
        <footer>
        	<div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-4">
                    <?php if($site->language()->code() == 'nl'): ?>
                    <a href="<?php echo $site->url() ?>"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-nl.png' ?>" alt="Cobrapack"></a>
                    <?php else: ?>
                    <a href="<?php echo $site->url() ?>/fr"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/logo-fr.png' ?>" alt="Cobrapack"></a>
                    <?php endif ?>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4"><?= $site->adrescobra() ?></div>
                    <div class="col-md-4 col-lg-4 col-xs-4"><?= $site->adresmaro() ?></div>                   
                </div>
            </div>
            <div class="footerbottom">
                <div class="container">
                    <?= $site->footer()->kirbytext() ?>
                </div> 
            </div>
        </footer>
        <?= js('assets/js/vendor/jquery.min.js') ?>
        <?= js('assets/js/vendor/plugins.min.js') ?>    
        <?= js('assets/js/onload.js') ?>   
        <script type='text/javascript'>
/* <![CDATA[ */
var ssb_ui_data = {"z_index":"1"};
/* ]]> */
</script>    
        <?= js('assets/js/vendor/ssb-ui-js.js') ?> 
    </body>
</html>
