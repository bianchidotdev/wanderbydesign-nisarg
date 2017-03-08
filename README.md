# Summary

This repository contains the code used for the shared travel blog, http://www.wanderbydesign.co/. The site is integrated with WordPress.org and uses the Nisarg Theme (see [readme.txt](../master/readme.txt) for details).

Custom pages (built on top of the Nisarg Theme) include the [Home](http://www.wanderbydesign.co/) and [About Us](http://www.wanderbydesign.co/about-us/) pages. However, these styles are contained in the admin section of our WordPress account, and cannot be viewed here.

# Map

The code for the home page map, written in Javascript by [Brady Lambert](https://github.com/lambertbrady), can be viewed at [/js/mapBuilder.js](/js/mapBuilder.js). The Google Map uses the following two data layers:


### 1. **dataLayerPaths**

This layer contains KML data defined in [Google My Maps](https://drive.google.com/open?id=13Nxq5wGeXsgzBEztcfwETwhDixM&usp=sharing). The My Maps data is separated into KML layers that include paths and markers describing our travels. Each layer has a corresponding network link, all of which are listed [in a text file](/data/myMapsURLs.txt). A function in *mapBuilder.js* accesses this file over AJAX (JavaScript only) and creates an array of each URL. A second AJAX call is then made, this time using the [AJAX Cross Origin JQuery Plugin](http://www.ajax-cross-origin.com/), to retrieve the KML data from each network link. The plugin is necessary to bypass the Same-origin Policy, so data can be added dynamically from Google My Maps. Once the KML data is retrieved, it is converted to GeoJSON using [togeojson.js](https://mapbox.github.io/togeojson/) ([License](/js/togeojson/LICENSE)), and finally added to the Google Map data layer.

NOTE: Server settings were updated to allow the Cross Origin plugin to work. The following User-Defined MIME Type was added: *MIME Type = "application/javascript"* and *Extension = "jsonp"*.

Each feature then has Styles and Event Listeners added based on its geometry ("LineString" or "Point") and properties ("minor" or "major" descriptions for points).


### 2. **dataLayerCountries**

This layer contains [GeoJSON country border data](/data/countriesSouthAmerica.geo.json) for all the mainland countries of South America (Argentina, Bolivia, Brazil, Chile, Colombia, Ecuador, French Guiana, Guyana, Paraguay, Peru, Suriname, Uruguay, Venezuela). The raw data was taken from https://github.com/mledoze/countries (Open Database License), and edited to fit the needs of this project.

Styles and Event Listeners are added to the borders of each country based on properties defined in the edited geojson file.

It should be noted that one Event Listener - the *clickCountry* click event - has particularly unique functionality. When a country is clicked, a function is called to test whether certain URLs are valid. The URLs checked are based on the name of the clicked feature, along with the value of an array called *extArray* initialized at the beginning of *mapBuilder.js*. The order of elements in the array are important, for they correspond to the order in which each URL is tested.

For example, if *extArray* is set equal to *["test111", "test222"]*, and the country clicked is *Chile* (e.g., the feature clicked has a "*name*" property equal to *"Chile"*), then the following steps will occur:
   1. An internal AJAX request will be made to HEAD of href*/test111/chile*. If a 200 response is received, the user will be redirected to this first location.
   2. If a 200 response is not received, another internal AJAX request will be made to HEAD of href*/test222/chile*. If a 200 response is received, the user will be redirected to this second location.
   3. If a 200 response is not received, no more steps take place, since only two elements were included in *extArray*. The user will stay on the home page.

NOTE: URLs must correspond to WP structure in order to avoid unexpected behavior. For example, if *extArray* is set equal to *["category"]*, and a category called *"Chile"* is defined in WP, the URL href*/category/chile* will return a successful 200. However, if no posts have been added within that category, nothing interesting will be displayed on the resulting page. In such a situation, delete any WP categories where there are no posts, so a 404 response is given when the URL is tested.
