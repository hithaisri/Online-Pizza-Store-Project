<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Contact Us</title>
<link rel="stylesheet" href="/OnlinePizzaSystem/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/OnlinePizzaSystem/css/slide.css" type="text/css" media="screen" />
	
    <!-- jQuery - the core -->
	<script src="/OnlinePizzaSystem/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="/OnlinePizzaSystem/js/slide.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/OnlinePizzaSystem/js/reorder.js" type="text/javascript"></script>
</head>
<body>
<?php 
session_start();
include 'LoginSlider.php';
?>
<div id="fade"></div>
        <div id="modal">
            <img id="loader" src="/OnlinePizzaSystem/images/loading.gif" />
        </div>
<h2 align="center">
UT DALLAS PIZZA STORE
</h2>

<br />
<br />
<div>
<a style="text-decoration: underline;color: blue" href="index.php"><h2>Home</h2></a>
<br />
<h4>We are Located at : </h4>
<p>800 West Campbell Road, #21</p>
<p>Richardson</p>
<p>TX 75080</p>
<br />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:400px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(32.9843468,-96.74593049999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.9843468, -96.74593049999999)});infowindow = new google.maps.InfoWindow({content:"<b>The University of Texas at Dallas</b><br/>UT Dallas, 800 West Campbell Road<br/>75080 Richardson" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>


</body>
</html>