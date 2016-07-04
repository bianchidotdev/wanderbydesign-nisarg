<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wander By Design</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    
    <!-- <link href="style.css" rel="stylesheet"> -->
    
      <link href="assets/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- PREVIOUS HEADER MARKUP
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">About Us</a>
          <a class="blog-nav-item" href="#">Blog</a>
          <a class="blog-nav-item" href="#">Gallery</a>
        </nav>
      </div>
    </div>
 -->
    
    <div class="masthead">
        <div class="logo">
            <div>
                <!--<a href="/Home"> LOGO PLACEHOLDER (WANDER BY DESIGN)</a>-->
            </div>
        </div>
        <div class="nav-flex">
          <a class="active" href="#">Home</a>
          <a href="#">About Us</a>
          <a href="#">Blog</a>
          <a href="#">Gallery</a>
        </div>
    </div>

    <div class="container">
       <div class="blog-header">
	       <h1 class="blog-title"><a href="#"></a>Wander by design</h1>
      </div>
      </div>

<!-- Custom styles for title page-->
<!-- <link href="assets/css/front-page.css" rel="stylesheet"> -->


<!-- /.title stuff -->

<div id="google-map"></div>

<div class="container">
    <h1 class="front-page-header">Header 1</h1>

    <p>Hey! This is a sample title page. Dope stuff yo.</p>
</div><!-- /.container -->

<div class="front-page-sidebar">
    <h3>Sidebar header</h3>
    <p>This is content for the sidebar</p>
    <p>We need to figure out how to best dynamically populate this</p>
    <br>
    <p>My current thought is that we'll need javascript or something to change which content is visible</p>
    <p>It kinda depends on whether we want content to display on hovering over a country or on a click</p>
</div>


    <footer class="blog-footer">
      <p>This is the personal travel blog of two wanderers.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
      
      
      <!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB1InpKO3BR4G4B8ddipM4tHMwNy68rkUU"></script>
 
<script type="text/javascript">
 
// The latitude and longitude of your negocio / lugar
var position = [27.1959739, 78.02423269999997];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom nivel - the max valor is 21
        streetViewControl: false, // hide the yellow Calle Vista pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('google-map'),
        mapOptions);
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>

    </footer>

  </body>
</html>
