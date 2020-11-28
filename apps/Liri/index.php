<!DOCTYPE HTML>
<html>
<head>
	<?php include("include/include.php"); ?>
    
	<title>Liri Carroserie</title>
     <style>
		body{
			background: url('images/slider.jpg') no-repeat top center;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<div class="content">
		<?php include("include/header.php"); ?>
		
		<!-- Slider -->
		<div class="bloc slider">
			<!-- <img style="width: 100%; height:500px;" src="slider.jpg" /> -->
		</div>
		
		<!-- Info -->
		<div class="bloc">
			<div class="info">
				<center><h1>Carrosserie Liri Preverenges</h1></center><br/><br/>
				<div class="left">
					Vivus sunt cum retinere feminae cum peremptae exustus est carnifex vivus obnoxiae originis sexu feminae nam mortem erat 
					altae quidem permissa inmane erat secreto sunt originis sunt conplures similium vel exustus calamitatum mortem quarum 
					carnifex indumento quoque fuere mortem quoque vivus cum stuprorum peremptae quidem quas vel flagitiis calamitatum 
					indumento calamitatum nefas duceretur velemen vestita sufficiens exustus carnifex calamitatum participes sunt 
					quoque ex permissa cum minus fuere ad similium feminae indumento	.<br/><br/>
					
					<b>Horaires d’ouverture</b><br/><br/>
					<table class="table">
						<tbody>
							<tr>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center"><strong>Lundi – Jeudi</strong></td>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" rowspan="2" align="center" valign="middle">7.30 – 12.00</td>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center">13.00 – 18.00</td>
							</tr>
							<tr>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center"><strong>Vendredi</strong></td>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center">13.00 – 17.30</td>
							</tr>
							<tr>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center"><strong>Samedi</strong></td>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center">8.00 – 12.00<br> sur rendez-vous</td>
								<td style="border: 1px solid #eeeeee; vertical-align: middle;" align="center"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="right">
					<div style="width: 100%; height: 300px;" id="map-canvas"></div><br/><br/>
					<b>Numéro de téléphone : </b><br/>
					+41 302 38 38<br/><br/>
					<b>Addresse : </b><br/>
					Ch. du Aodifje 12<br/>
					Préverenges<br/><br/>
				</div>
			</div>
		</div>
		
		<?php include("include/pub.php"); ?>
	</div>
	<script>
		var map;
		function initialize() {
		  var mapOptions = {
			zoom: 15,
			center: new google.maps.LatLng(46.538496, 6.544182)
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</body>
</html>