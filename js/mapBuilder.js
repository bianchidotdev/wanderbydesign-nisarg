function styleLineString(feature) {
   var zIndexVal = 1000;
   var clickBool = false;
   var sColor = '#009688';//'#f44336';
   var sOpacity = 1;
   var sWeight = 3;
   if (notUndefined(feature.getProperty('description')) && feature.getProperty('description').includes('flight')) {
      sOpacity = .7;
   }
   return {
      zIndex: zIndexVal,
      clickable: clickBool,
      strokeColor: sColor,
      strokeOpacity: sOpacity,
      strokeWeight: sWeight,
   };
}
function notUndefined(val) {
   if (typeof(val) == "undefined") {
      return false;
   } else {
      return true;
   }
}
function stylePoint(feature) {
   if ((feature.getProperty('description') == 'major') || (feature.getProperty('description') == 'minor')) {
      addMarkers(feature);
   }
   return {
      visible: false,
      clickable: false,
   };
}
function addMarkers(feature) {
   var iconObject;
   var zIndexVal;
   var majorCenter = new google.maps.Point(12, 12);
   var minorCenter = new google.maps.Point(24, 24);
   var majorUrl = 'https://mt.google.com/vt/icon/name=icons/onion/SHARED-mymaps-container_4x.png,icons/onion/1498-shape_default_4x.png&highlight=f57c00,ff000000&scale=1.0';
   var minorUrl = 'https://mt.google.com/vt/icon/name=icons/onion/SHARED-mymaps-measle-container_4x.png,icons/onion/1739-blank-measle_4x.png&highlight=ffd600,ff000000&scale=2.0';
   if (feature.getProperty('description') == 'major') {
      iconObject = {anchor: majorCenter, url: majorUrl};
      zIndexVal = 10000;
   } else if (feature.getProperty('description') == 'minor') {
      iconObject = {anchor: minorCenter, url: minorUrl};
      zIndexVal = 11000;
   }
   var marker = new google.maps.Marker({
      position: feature.getGeometry().get(),
      map: map,
      title: feature.getProperty('name'),
      icon: iconObject,
      zIndex: zIndexVal
   });
}
function mouseInPath(event) {
   this.revertStyle();
   var geoType = getGeoType(event.feature);
   if (geoType == "LineString") {
      this.overrideStyle(event.feature , {
         //strokeWeight: 6
      });
   }
}
function mouseOutPath(event) {
   this.revertStyle();
}
function clickPath(event) {
   var geoType = getGeoType(event.feature);
   if (geoType == "LineString") {
     console.log("clicked LineString");
   }
