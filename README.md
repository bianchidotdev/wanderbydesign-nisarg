This repository contains the code used for the shared travel blog, http://www.wanderbydesign.co/. The site is integrated with WordPress.org and uses the Nisarg Theme - [see readme.txt](/readme.txt) for details.

Custom pages (built by us on top of the Nisarg Theme) include the Home and About Us pages (http://www.wanderbydesign.co/about-us/). However, these styles are contained in the admin section of our WordPress instance, and cannot be viewed here.

The **code for the home page map,** written in Javascript, can be **[viewed here](/js/mapBuilder.js).**
The map uses the [AJAX Cross Origin JQuery Plugin](http://www.ajax-cross-origin.com/) to pull data added to [Google My Maps](https://drive.google.com/open?id=13Nxq5wGeXsgzBEztcfwETwhDixM&usp=sharing). That data is separated into separate layers that include travel paths and markers. The dynamic links to these layers are contained [here](/data/myMapsURLs.txt).
