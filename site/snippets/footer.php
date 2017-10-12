            
        </div> <!-- .container -->
        <footer>
        	<div class="container">
                <div class="row">
                    <div class="col-md-4"><a href="#"><img class="logo" src="<?php echo kirby()->urls()->assets() . '/img/cobra-logo.png' ?>" alt="Cobrapack"></a></div>
                    <div class="col-md-4"><?= $site->adrescobra() ?></div>
                    <div class="col-md-4"><?= $site->adresmaro() ?></div>                   
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
    </body>
</html>
