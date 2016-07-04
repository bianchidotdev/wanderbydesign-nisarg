<?php
/*
Template Name: mfdb-test
*/
?>
<?php get_header(); ?>

<!-- Custom styles for title page-->
<!-- <link href="<?php bloginfo('template_directory');?>/front-page.css" rel="stylesheet"> -->


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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
