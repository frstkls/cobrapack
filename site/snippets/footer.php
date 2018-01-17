            
        </div> <!-- .container -->
        
        <footer>
        	<div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-4">
                    <?php if($site->language()->code() == 'nl'): ?>
                    <? snippet('signupnlx') ?>
                    <?php else: ?>
                    <? snippet('signupfrx') ?>
                    <?php endif ?>                        
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-4"><?= $site->adrescobra() ?></div>
                    <div class="col-md-4 col-lg-4 col-xs-4"><?= $site->adresmaro() ?></div>                   
                </div>
            </div>
            <div class="footerbottom">
                <div class="container">
                    <div class="row">                       
                        <div class="col-md-4 col-lg-4 col-xs-4">
                            <?= $site->footer()->kirbytext() ?>
                        </div>
                        <div class="footerlogo col-md-8 col-lg-8 col-xs-8">
                            <img src="<?php echo kirby()->urls()->assets() . '/img/ismp15.png' ?>">
                            <img src="<?php echo kirby()->urls()->assets() . '/img/valipac.png' ?>">
                        </div>
                    </div>
                </div> 
            </div>
        </footer>
        <?= js('assets/js/vendor/jquery.eeyellow.Timeline.js') ?> 
        <script type="text/javascript">
        $(document).ready(function(){
            $('.VivaTimeline').vivaTimeline({
                carousel: false,
                carouselTime: 3000
            });
        });
        </script>
    </body>
</html>
