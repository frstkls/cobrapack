<? snippet('header') ?>

<main class="default">
	<div class="container">
	    <h1><?= $page->title()->html() ?></h1>
	    <?= $page->text()->kirbytext() ?>

		<div class="VivaTimeline">
		<?php
		$events = $page->events()->yaml();
        foreach($events as $event): ?>	
		  <dl>                                  
		    <dd class="pos-<?php echo $event['positie'] ?> clearfix">
		      <div class="circ"></div>
		      <div class="time">
		      <?php $somedate = $event['event_datum']; 
echo date('M Y', $somedate);
		      ?>	
		      </div>
		      <div class="events">
		          <div class="events-header"><?php echo $event['event_titel'] ?></div>                                
		          <div class="events-body">                                                                                            
		              <div class="row">
		                <div class="col-md-6 pull-left ?>">
		                <?php if($image = $page->image($event['event_beeld'])) echo thumb($image, array('width' => 360, 'height' => 500, 'crop' => true)); ?>
		                                                                 
		                  </div>
		                  <div class="events-desc">
		                    <?php echo $event['event_tekst'] ?>
		                  </div>
		              </div>      	             
		          </div>                                 
		      </div>
		    </dd>		   
		  </dl>
		<?php endforeach ?>
		</div>
	    
	</div>
</main>

<? snippet('footer') ?>
