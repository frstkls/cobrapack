<?php snippet('header') ?>

  <main class="main" role="main">
  	<div class="container">
	    <header>
			<h1><?= $page->pagetitle()->html() ?></h1>   								
	    </header>	
			<div class="row">
				<div class="col-md-6 contactcolumn">
					<div class="contactform">				
							<form action="<?php echo $page->url() ?>#form" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Naam</label>
											<input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>E-mail</label>
										<input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Bericht</label>
									<textarea<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>
								</div>

								<?php echo csrf_field() ?>
								<?php echo honeypot_field() ?>

								<input type="submit" value="Verzend">
							</form>
							<?php if ($form->success()): ?>
								We hebben je bericht goed ontvangen en komen zo snel mogelijk bij je terug!
								<a name="form"></a>
							<?php else: ?>
								<?php snippet('uniform/errors', ['form' => $form]) ?>					
							<?php endif; ?>								
					</div>
				</div>
				<div class="col-md-6 contactadres">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h2>Cobrapack</h2>
							Rue du Mont des Carliers 2/Z<br />7522 Tournai<br /><br />+32 (0) 69 84 34 82
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h2>Maro Recycling</h2>
							Sint-Eloois-winkelstraat 127<br />8880 Ledegem<br /><br />+32 (0) 56 50 06 72
						</div>
					</div>
				</div>
			</div>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>     
    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(50.623221, 3.319934), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                   styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(50.623221, 3.319934),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
        <div id="map"></div>
    </div>
  </main>

<?php snippet('footer') ?>